$(function () {

    $(".spark_bar").sparkline('html',{ //'#18C5A9', '#d1d5d8',
        type: 'bar',
        barColor: '#18C5A9',
        negBarColor: '#bdc3c7'
    });
    $(".spark_pie").sparkline('html',{
        type: 'pie',
        sliceColors: ['#18C5A9', '#bdc3c7', '#baeee5'],
    });
    $("#spark_tristate").sparkline('html', {
        type: 'tristate',
        posBarColor: '#18C5A9',
        negBarColor: '#bdc3c7'
    });
    $(".spark_line").sparkline('html', {
        type: 'line',
        lineColor: '#18C5A9',
        fillColor: '#ffffff',
    });
    $('#spark_compositeline').sparkline('html', { fillColor: false, lineColor: '#18C5A9', changeRangeMin: 0, chartRangeMax: 10 });
    $('#spark_compositeline').sparkline([4,1,5,7,9,9,8,7,6,6,4,7,8,4,3,2,2,5,6,7], 
        { composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10 });

    $('#spark_compositebar').sparkline('html', { type: 'bar', barColor: '#18C5A9' });
    $('#spark_compositebar').sparkline([4,1,5,7,9,9,8,7,6,6,4,7,8,4,3,2,2,5,6,7], 
        { composite: true, fillColor: false, lineColor: 'red' });


    (function drawMouseSpeedDemo() {
        var mrefreshinterval = 500; // update display every 500ms
        var lastmousex=-1; 
        var lastmousey=-1;
        var lastmousetime;
        var mousetravel = 0;
        var mpoints = [];
        var mpoints_max = 30;
        $('html').mousemove(function(e) {
            var mousex = e.pageX;
            var mousey = e.pageY;
            if (lastmousex > -1) {
                mousetravel += Math.max( Math.abs(mousex-lastmousex), Math.abs(mousey-lastmousey) );
            }
            lastmousex = mousex;
            lastmousey = mousey;
        });
        var mdraw = function() {
            var md = new Date();
            var timenow = md.getTime();
            if (lastmousetime && lastmousetime!=timenow) {
                var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                mpoints.push(pps);
                if (mpoints.length > mpoints_max)
                    mpoints.splice(0,1);
                mousetravel = 0;
                $('#spark_mousespeed').sparkline(mpoints, { width: mpoints.length*2, lineColor: '#18C5A9', tooltipSuffix: ' pixels per second' });
            }
            lastmousetime = timenow;
            setTimeout(mdraw, mrefreshinterval);
        }
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval); 
    })();

});