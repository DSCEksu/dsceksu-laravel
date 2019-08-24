$(document).ready(function(){

    // Select 2
    $(".select2_demo_1").select2();
    $(".select2_demo_2").select2({
        placeholder: "Select a state",
        allowClear: true
    });

    // Bootstrap datepicker
    $('#date_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
    $('#date_2 .input-group.date').datepicker({
        startView: 1,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true,
        format: "dd/mm/yyyy"
    });
    $('#date_3 .input-group.date').datepicker({
        startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });
    $('#date_4 .input-group.date').datepicker({
        minViewMode: 1,
        keyboardNavigation: false,
        forceParse: false,
        forceParse: false,
        autoclose: true,
        todayHighlight: true
    });
    $('#date_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });
    $('#date_6').datepicker({});

    // DateTime Picker

    $(".form_datetime").datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss'
    });

    // Daterangepicker
    $('#daterange_1').daterangepicker();
    $('#daterange_2').daterangepicker({
        timePicker: true,
        timePickerIncrement: 10,
    });
    $('#daterange_3').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });
    $(function() {
        var start = moment().subtract(29, 'days');
        var end = moment();
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
    });

    // Clockpicker
    $('.clockpicker').clockpicker();

    // Jquery minicolors
    $('.minicolors').each(function(){
        $(this).minicolors({
            theme:"bootstrap",
            control:$(this).attr("data-control")||"hue",
            format: $(this).attr('data-format') || 'hex',
            opacity:$(this).attr("data-opacity"),
            swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : [],
            position: $(this).attr('data-position') || 'bottom left',
        });
    });
    
    // jQuery Knob
    $(".dial").knob();

    // ionRangeSlider
    $("#ionrange_1").ionRangeSlider({
        min: 0,
        max: 7000,
        type: 'double',
        prefix: "$",
        maxPostfix: "+",
        prettify: false,
        hasGrid: true
    });
    $("#ionrange_2").ionRangeSlider({
        min: 0,
        max: 10,
        type: 'single',
        step: 0.1,
        postfix: " point",
        prettify: false,
        hasGrid: true
    });
    $("#ionrange_3").ionRangeSlider({
        min: -40,
        max: 40,
        from: 0,
        postfix: "°",
        prettify: false,
        hasGrid: true
    });
    $("#ionrange_4").ionRangeSlider({
        values: [
            "January", "February", "March",
            "April", "May", "June",
            "July", "August", "September",
            "October", "November", "December"
        ],
        type: 'single',
        hasGrid: true
    });
    $("#ionrange_5").ionRangeSlider({
        min: 1000,
        max: 10000,
        step: 100,
        postfix: " km",
        from: 55000,
        hideMinMax: true,
        hideFromTo: false
    });

    // Tags Input
    $('.tagsinput').tagsinput({
        tagClass: 'label label-success'
    });

    // Maxlength Control
    $('[maxlength]').maxlength();
    
    // Touchspin1
    $(".touchspin1").TouchSpin({
        buttondown_class: 'btn btn-secondary',
        buttonup_class: 'btn btn-secondary'
    });
    $(".touchspin2").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%',
    });
    $(".touchspin3").TouchSpin({
        verticalbuttons: true,
        buttondown_class: 'btn btn-secondary',
        verticalupclass: 'ti-angle-up',
        verticaldownclass: 'ti-angle-down',
        buttonup_class: 'btn btn-secondary'
    });

    $('#multi_select').multiSelect()

});
