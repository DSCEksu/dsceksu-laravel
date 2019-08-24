$(function() {
    //'use strict';
    var actions = $('#inbox-actions .btn'),
        rows = $('#table-inbox tr')

    $("input[data-select='all']").change(function(){
        $(this).prop('checked') 
            ? (rows.find('.mail-check').prop('checked',true), actions.removeClass('disabled'))
            : (rows.find('.mail-check').prop('checked',false), actions.addClass('disabled'))        
        checkSelectedCount();
    });
    $("li[data-select='read']").click(function(){
        rows.find('.mail-check').prop('checked',false);
        var r = rows.not('.unread').find('.mail-check');
        r.prop('checked',true);
        if(r.length) actions.removeClass('disabled');
        checkSelectedCount();
    });
    $("li[data-select='unread']").click(function(){
        rows.find('.mail-check').prop('checked',false);
        var r = rows.filter('.unread').find('.mail-check');
        r.prop('checked',true);
        if(r.length) actions.removeClass('disabled');
        checkSelectedCount();
    });
    $("li[data-select='clear']").click(function(){
        rows.find('.mail-check').prop('checked',false);
        actions.addClass('disabled');
        checkSelectedCount();
    });
    $('.mail-check').change(function(){
        if($(this).prop('checked')) actions.removeClass('disabled');
        else if(!rows.find('.mail-check:checked').length) actions.addClass('disabled');
        checkSelectedCount();
    });
    
    // Actions
    $(".btn[data-action='mark_as_read']").click(function(){
        var rows = $('.mail-check:checked').parents('tr.unread');
        rows.removeClass('unread');
    });
    $(".btn[data-action='delete']").click(function(){
        var rows = $('.mail-check:checked').parents('tr');
        rows.remove();
        checkSelectedCount();
    });

    function checkSelectedCount() {
        var count = 0;
        $('#table-inbox tr').find('.mail-check').each(function(){
            if ($(this).is(":checked")) count++;
        });
        if(count) {
            $('#counter-selected').show().find('#counter-count').html(count);
        }
        else $('#counter-selected').hide();
    }

});
