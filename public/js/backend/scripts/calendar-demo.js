!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$calendar = $('#calendar'),
        this.$event = ('#external-events div.ex-event'),
        this.$categoryForm = $('#add-new-event form'),
        this.$extEvents = $('#calendar-events'),
        this.$modal = $('#new-event-modal'),
        this.$eventModal = $('#event-modal'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$calendarObj = null
    };

    // handler for clicking on an empty calendar field
    CalendarApp.prototype.onSelect = function (start, end, allDay) {
        var $this = this;
        $this.$modal.modal();
        //// fill in the values
        this.$modal.find('#new-event-start').val($.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss"));
        this.$modal.find('#new-event-end').val($.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss"));
        
        $this.$calendarObj.fullCalendar('unselect');
    },
    
    // Update event
    CalendarApp.prototype.updateEvent =  function (calEvent, revertFunc) {
        // The same can be done for eventDrop and eventResize
        var $this = this;
            $this.$eventModal.modal();
            // fill in the values
            $this.$eventModal.find('#event-title').val(calEvent.title);
            $this.$eventModal.find('#event-start').val($.fullCalendar.formatDate(calEvent.start, "YYYY-MM-DD HH:mm:ss"));
            $this.$eventModal.find('#event-end').val(calEvent.end ? $.fullCalendar.formatDate(calEvent.end, "YYYY-MM-DD HH:mm:ss") : '');
            if(calEvent.className.length) $this.$eventModal.find('input[name="category"][value="'+calEvent.className+'"]').prop("checked", true);
            else $this.$eventModal.find('#event-color :first-child').prop("selected", true);
            $this.$eventModal.find('#event-allDay').prop("checked", calEvent.allDay);
            
            // set the handler to delete the event
            $this.$eventModal.find('#deleteEventButton').unbind('click').click(function(){
                
                // execute the query to remove the event from the database
                // for example
                
                /*$.post('remove-event.php',{id: calEvent.id}).then(function(data){
                  // delete event
                }).fail(function(){
                  alert('error');
                });*/
                
                // Remove Event
                $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                    return (ev._id == calEvent._id);
                });

                toastr.success('event successfully deleted');
                $this.$eventModal.modal('hide');
            });

            // set the handler to update the event
            $this.$eventModal.find('form').unbind('submit').on('submit', function () {
                if($('#eventForm').valid()) {
                    var event = {};
                    calEvent.title = event.title = $(this).find("#event-title").val();
                    calEvent.start = event.start = $(this).find("#event-start").val();
                    if($(this).find("#event-end").val()) calEvent.end = event.end = $(this).find("#event-end").val();
                    
                    calEvent.className = [$(this).find('input[name="category"]:checked').val()];
                    calEvent.allDay = event.allDay = $(this).find("#event-allDay").prop('checked');
                    // execute the query to update the event in the database
                    // for example
                    
                    /*$.post('update-event.php', {event: event}).then(function(){
                        // update event
                    }).fail(function(){ 
                        if(revertFunc) revertFunc();
                    });*/

                    // update event
                    $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                    toastr.success('event successfully updated');

                    $this.$eventModal.modal('hide');
                }
            });
    }

    // Called when a valid jQuery UI draggable has been dropped onto the calendar.
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
        // retrieve the dropped element's stored Event Object
        var originalEventObject = eventObj.data('eventObject');
        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject);
           //var $categoryClass = eventObj.attr('data-class');
        // assign it the date that was reported
        copiedEventObject.start = $.fullCalendar.formatDate(date, "YYYY-MM-DD HH:mm:ss");
        // execute the query to save the event in the database and get its id
        // For example
        
        /*$.post(APP.ASSETS_PATH+'demo/server/add-event.php', {event: copiedEventObject}).then(function(id){
            copiedEventObject.id = id;
            $this.$calendarObj.fullCalendar('renderEvent', copiedEventObject, true); // stick? = true
        }).fail(function(){
          alert('error');
        });*/
        
        // Create event
        copiedEventObject.id = Math.random();;
        $this.$calendarObj.fullCalendar('renderEvent', copiedEventObject, true); // stick? = true
        
        toastr.success('event successfully created');

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            eventObj.remove();
        }
    },
    
    // initialize the external events
    CalendarApp.prototype.enableDrag = function() {
        $(this.$event).each(function () {
            // store data so the calendar knows to render an event upon drop
            $(this).data('eventObject', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true, // maintain when user navigates (see docs on the renderEvent method)
                className: $(this).attr('data-class')
            });
            
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }

    /* Initializing */
    CalendarApp.prototype.init = function() {
        this.enableDrag();
        var $this = this;
        $this.$calendarObj = $this.$calendar.fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            events: APP.ASSETS_PATH+'demo/server/events.php',
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            navLinks: true, // can click day/week names to navigate views
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            drop: function(date) { $this.onDrop($(this), date); },
            select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
            eventClick: function(calEvent, jsEvent, view) { $this.updateEvent(calEvent); },
            // The same can be done for these events
            eventResize: function(event, delta, revertFunc) { $this.updateEvent(event, revertFunc); },
            eventDrop: function(event, delta, revertFunc) { $this.updateEvent(event, revertFunc); },

            eventRender: function(event, element, view) {
                event.allDay = event.allDay == true ? true : false;
            },
        });
    }
    
    
    // initializing CalendarApp

    $.CalendarApp = new CalendarApp;
    $.CalendarApp.init();
    
    // initialize datetimepicker
    $('.datepicker').datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss',
        useCurrent: false
    });
    
    // Validate Forms
    $('#newEventForm').validate({
        errorClass:"help-block",
        rules: {
            title: {required:true},
            start: {required:true},
        },
        highlight:function(e){$(e).closest(".form-group").addClass("has-error")},
        unhighlight:function(e){$(e).closest(".form-group").removeClass("has-error")},
    });

    $('#eventForm').validate({
        errorClass:"help-block",
        rules: {
            title: {required:true},
            start: {required:true},
        },
        highlight:function(e){$(e).closest(".form-group").addClass("has-error")},
        unhighlight:function(e){$(e).closest(".form-group").removeClass("has-error")},
    });

    
    // Handler to add new event 
    $('#newEventForm').submit(function(){
      if($(this).valid()) {
        var CalendarApp = $.CalendarApp;
        var newEvent = {
            id: Math.random(),
            title: $('#new-event-title').val(),
            start: CalendarApp.$modal.find('#new-event-start').val(),
            end: CalendarApp.$modal.find('#new-event-end').val(),
            allDay: CalendarApp.$modal.find('#new-event-allDay').prop('checked'),
            className: CalendarApp.$modal.find('input[name="category"]:checked').val(),
        }
        
        // execute the query to save the event in the database and get its id
        // for example

        /*$.post('add-event.php', {event: newEvent}).then(function(id){
            newEvent.id = id;
            CalendarApp.$calendarObj.fullCalendar('renderEvent', newEvent, true);
        }).fail(function(){
          alert('error');
        });*/
        
        // Create Event
        CalendarApp.$calendarObj.fullCalendar('renderEvent', newEvent, true); // stick? = true
        
        toastr.success('event successfully created');
        CalendarApp.$modal.modal('hide');
      }
    });

}(window.jQuery);
