$(function(){

    var lineData = {
        labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7", "W8", "W9", "W10"],
        datasets: [
            {
                // Purple
                label: "Data 1",
                //data: [35, 32, 70, 40, 56, 55, 40, 37, 48, 30],
                data: [20, 18, 40, 50, 35, 24, 40, 30, 25, 37],
                //data: [10, 25, 33, 42, 33, 25, 35, 37, 48, 30],
                borderColor: 'rgba(117,54,230,0.9)',
                backgroundColor: 'rgba(117,54,230,0.9)',
                pointBackgroundColor: 'rgba(117,54,230,0.9)',
                pointBorderColor: 'rgba(117,54,230,0.9)',
                borderWidth: 1,
                pointBorderWidth: 1,
                pointRadius: 0,
                pointHitRadius: 30,
            },{
                // Pink
                label: "Data 2",
                //data: [28, 48, 40, 19, 86, 27, 32, 67, 32, 22],
                data: [28, 48, 40, 35, 70, 27, 32, 44, 47, 52],
                backgroundColor: 'rgba(255,64,129, 0.7)',
                borderColor: 'rgba(255,64,129, 0.7)',
                pointBackgroundColor: 'rgba(255,64,129, 0.7)',
                pointBorderColor: 'rgba(255,64,129, 0.7)',
                borderWidth: 1,
                pointBorderWidth: 1,
                pointRadius: 0,
                pointHitRadius: 30,
            },{
                // Green
                label: "Data 3",
                //data: [24, 75, 63, 50, 42, 85, 33, 45, 56, 37],
                data: [64, 54, 60, 65, 52, 85, 48, 56, 56, 40],
                borderColor: 'rgba(104,218,221,1)',
                backgroundColor: 'rgba(104,218,221,1)',
                pointBackgroundColor: 'rgba(104,218,221,1)',
                pointBorderColor: 'rgba(104,218,221,1)',
                borderWidth: 1,
                pointBorderWidth: 1,
                pointRadius: 0,
                pointHitRadius: 30,
            },
        ],
    };
    var lineOptions = {
        responsive: true,
        maintainAspectRatio: false,
        showScale: false,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                },
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
            }]
        },
        legend: {
            labels: {
                boxWidth: 12
            }
        },
    };
    var ctx = document.getElementById("line_chart").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options: lineOptions});

    
    var chartdata_1 = {
        labels: ["J", "F", "M", "A", "M", "J", "J", 'A', 'S', 'O', 'N', 'D'],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: '#18C5A9',
                borderColor: "#fff",
                data: [5,6,5,8,3,2,6,7,5,4,9,6]
            }
        ]
    };
    var chartOptions_1 = {
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
                    tickMarkLength: 0
                },
                ticks: {
                    display: false,
                    padding: 0,
                },
            }]
        },
        legend: {display: false}
    };
  
    var ctx = document.getElementById("chart_1").getContext("2d");
    new Chart(ctx, {type: 'bar', data: chartdata_1, options: chartOptions_1});

  
    // doughnut chart

    var doughnutData = {
        labels: ["App","Software","Laptop" ],
        datasets: [{
            data: [100,40,60],
            //backgroundColor: ["#3bceb6","#bdc3c7","#8995c7"],
            backgroundColor: ["#5c6bc0","#18c5a9","#f39c12"],
        }]
    } ;
    var doughnutOptions = {
        responsive: true,
        legend: {display: false},
        cutoutPercentage: 70
    };
    var ctx4 = document.getElementById("doughnut_chart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});


    // EARNINGS Chart

    var ctx = document.getElementById("earnings_chart").getContext("2d");
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

    // Chart c

    var chartdata_c = {
        labels: ["J", "F", "M", "A", "M", "J", "J", 'A', 'S', 'O', 'N', 'D'],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: 'rgba(255,255,255,.85)', //'#18C5A9'
                borderColor: "#fff",
                hoverBackgroundColor: '#fff',
                data: [5,6,5,8,3,4,6,7,5,4,9,6]
            }
        ]
    };
    var chartOptions_c = {
        responsive: true,
        maintainAspectRatio: false,
        showScale: false,
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                    fontColor: '#fff'
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                    drawTicks:false,
                    tickMarkLength: 0
                },
                ticks: {
                    display: false,
                    padding: 0,
                    fontColor: '#eee'
                },
            }]
        },
        legend: {display: false}
    };
    var ctx = document.getElementById("chart_c").getContext("2d");
    new Chart(ctx, {type: 'bar', data: chartdata_c, options: chartOptions_c});

    // Chart d

    var doughnutData = {
        labels: ["App","Software","Laptop",'Smartphone'],
        datasets: [{
            data: [60,60,25,35],
            backgroundColor: ['rgba(255,255,255,.85)', 'rgba(255,255,255,.85)', 'rgba(255,255,255,.85)', 'rgba(255,255,255,.5)'],
            hoverBackgroundColor: '#fff',
            borderColor: '#ff4081',
            hoverBorderColor: '#fff',
        }]
    };
    var doughnutOptions = {
        responsive: true,
        legend: {display: false},
        cutoutPercentage: 70,
        circumference: 1.3 * Math.PI,
        rotation: 0.85 * Math.PI
    };
    var ctx4 = document.getElementById("chart_d").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

});