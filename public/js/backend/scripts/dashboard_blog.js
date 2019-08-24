$(function(){
    $('.easypie').each(function(){
        $(this).easyPieChart({
          trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
          scaleColor: false,
        });
    }); 
    
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


    var ctx = document.getElementById("chart_2").getContext("2d");
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday", "Monday", "Tuesday"],
            datasets: [
                {
                    label: "Profit",
                    borderColor: 'rgba(92,107,192,0.7)',
                    pointBackgroundColor: 'rgba(92,107,192,1)',
                    pointBorderColor: 'rgba(92,107,192,1)',
                    pointHoverBorderWidth: 5,
                    data: [320, 220, 400, 190, 860, 270, 900, 450, 600, 380],
                    borderWidth: 2,
                    fill: false,
                    lineTension: 0.1
                }
            ]
        },
        options: {
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
        }
    });


});