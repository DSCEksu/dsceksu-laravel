$(function(){

    $('.easypie').each(function(){
        $(this).easyPieChart({
          trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
          scaleColor: false,
        });
    }); 
    
    // Chart a

    var ctx = document.getElementById("chart_1").getContext("2d");
    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "#00dcaf");
    gradientFill.addColorStop(1, "#7536e6");
    var chartData = {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday"],
        datasets: [
            {
                label: "Subscribed",
                backgroundColor: gradientFill,
                hoverBackgroundColor: gradientFill,
                //data: [30, 25, 50, 30, 50, 35, 60],
                data: [64, 20, 50, 30, 85, 42, 68, 33, 56, 38],
                pointBorderWidth: 1,
                pointRadius: 0,
                pointHitRadius: 30,
                pointHoverBackgroundColor: gradientFill,
                pointHoverBorderColor: '#ffe8f0',
                pointHoverBorderWidth: 5,
                pointHoverRadius: 6
            }
        ],
    };
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        showScale: false,
        scales: {
            xAxes: [{
                display: false,
                gridLines: false,
            }],
            yAxes: [{
                display: false,
                gridLines: false,
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        layout: {
            padding: {
                left: 0,
                right: 0,
                top: 10,
                bottom: 0
            }
        },
        legend: {display: false}
    };
    new Chart(ctx, {type: 'line', data: chartData, options: chartOptions});

    // chart b

    var chartdata = {
        labels: ["J", "F", "M", "A", "M", "J", "J", 'A', 'S', 'O', 'N', 'D'],
        datasets: [
            {
                label: "Data 1",
                borderColor: 'rgba(24,197,169,1)',
                backgroundColor: 'rgba(24,197,169,.7)', 
                data: [5,6,5,8,3,2,6,7,5,4,9,6]
            }
        ]
    };
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,

        showScale: false,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                    drawTicks:false,
                },
                ticks: {
                    display: false,
                    padding: 0,
                },
            }]
        },
        legend: {display: false}
    };

    var ctx = document.getElementById("chart_b").getContext("2d");
    new Chart(ctx, {type: 'bar', data: chartdata, options: chartOptions});

});