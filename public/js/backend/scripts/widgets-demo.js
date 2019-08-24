$(function(){
    
    $('.easypie').each(function(){
        $(this).easyPieChart({
          trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
          scaleColor: false,
        });
    }); 
    
    var ctx = document.getElementById("visitors_chart").getContext("2d");
    var visitors_chart = new Chart(ctx, {
        type: 'line', 
        data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [
                {
                    label: "Sessions",
                    data: [20, 18, 40, 50, 35, 24, 40],
                    borderColor: 'rgba(117,54,230,0.9)',
                    backgroundColor: 'rgba(117,54,230,0.9)',
                    pointBackgroundColor: 'rgba(117,54,230,0.9)',
                    pointBorderColor: 'rgba(117,54,230,0.9)',
                    borderWidth: 1,
                    pointBorderWidth: 1,
                    pointRadius: 0,
                    pointHitRadius: 30,
                },{
                    label: "Data 2",
                    data: [28, 48, 40, 35, 70, 33, 32],
                    backgroundColor: 'rgba(255,64,129, 0.7)',
                    borderColor: 'rgba(255,64,129, 0.7)',
                    pointBackgroundColor: 'rgba(255,64,129, 0.7)',
                    pointBorderColor: 'rgba(255,64,129, 0.7)',
                    borderWidth: 1,
                    pointBorderWidth: 1,
                    pointRadius: 0,
                    pointHitRadius: 30,
                },{
                    label: "Page Views",
                    data: [64, 54, 60, 65, 52, 85, 48],
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
        }, 
        options: {
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
        }
    });

    visitors_data = {
        1 : {
          data: [
            [20, 18, 40, 50, 35, 24, 40],
            [28, 48, 40, 35, 70, 33, 32],
            [64, 54, 60, 65, 52, 85, 48],
          ],
          labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        2 : {
          data: [
            [35, 20, 40, 24, 28, 38, 40],
            [55, 35, 32, 14, 40, 33, 22],
            [84, 62, 45, 70, 50, 85, 42],
          ],
          labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        3 : {
          data: [
            [50, 30, 25, 33, 28, 34, 45, 30, 55, 28, 42, 54],
            [45, 35, 28, 64, 40, 30, 32, 60, 50, 29, 33, 48],
            [54, 62, 35, 80, 40, 85, 42, 30, 41, 73, 68, 57],
          ],
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
    };

    $('#chart_tabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var id = $(this).attr('data-id');
        if(id && +id in visitors_data) {
            visitors_chart.data.labels = visitors_data[id].labels;
            var datasets = visitors_chart.data.datasets;
            $.each(datasets,function(index,value) {
                datasets[index].data = visitors_data[id].data[index];
            });
        }
        visitors_chart.update();
    });


    // Visitors Age Chart

    var ctx = document.getElementById("age_chart").getContext("2d");
    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    gradientStroke.addColorStop(0, "#f39c12");
    gradientStroke.addColorStop(1, "#e91e63");
    gradientFill.addColorStop(0, "#f39c12");
    gradientFill.addColorStop(1, "#e91e63");

    var lineData = {
        labels: ["-16", "16-20", "20-27", "27-35", "35-50", "50+"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: gradientFill,
                hoverBackgroundColor: gradientFill,
                //data: [33, 48, 86, 56, 72, 27],
                data: [12, 15, 25, 17, 22, 9],
            }
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
                    drawBorder: false,
                },
                barPercentage: 0.8,
                categoryPercentage: 0.8
            }],
            yAxes: [{
                display: false,
                gridLines: false,
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
            }]
        },
        legend: {display: false}
    };
    new Chart(ctx, {type: 'bar', data: lineData, options: lineOptions});

    // Visitors Screens Chart

    var doughnutData = {
        labels: ["Desktop","Mobile","Tablet" ],
        datasets: [{
            data: [50,20,30],
            backgroundColor: ["#5c6bc0","#18c5a9","#ff4081"],
            hoverBorderColor: ["#5c6bc0","#18c5a9","#ff4081"],
        }]
    } ;
    var doughnutOptions = {
        responsive: true,
        legend: {
            labels: {
                boxWidth: 12,
            }
        },
        cutoutPercentage: 70
    };
    var ctx4 = document.getElementById("screens_chart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
    
    // Sales Analytics Chart

    var ctx = document.getElementById("sales_chart_1").getContext("2d");
    var sales_chart = new Chart(ctx, {
        type: 'bar', 
        data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [
                {
                    label: "Sessions",
                    data: [20, 18, 40, 50, 35, 24, 40],
                    borderColor: 'rgba(117,54,230,0.9)',
                    backgroundColor: 'rgba(117,54,230,0.9)',
                    pointBackgroundColor: 'rgba(117,54,230,0.9)',
                    pointBorderColor: 'rgba(117,54,230,0.9)',
                    borderWidth: 1,
                    pointBorderWidth: 1,
                    pointRadius: 0,
                    pointHitRadius: 30,
                },{
                    label: "Data 2",
                    data: [28, 48, 40, 35, 70, 33, 32],
                    backgroundColor: 'rgba(255,64,129, 0.7)',
                    borderColor: 'rgba(255,64,129, 0.7)',
                    pointBackgroundColor: 'rgba(255,64,129, 0.7)',
                    pointBorderColor: 'rgba(255,64,129, 0.7)',
                    borderWidth: 1,
                    pointBorderWidth: 1,
                    pointRadius: 0,
                    pointHitRadius: 30,
                },{
                    label: "Page Views",
                    data: [64, 54, 60, 65, 52, 85, 48],
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
        }, 
        options: {
            responsive: true,
            maintainAspectRatio: false,
            showScale: false,
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                    barPercentage: 0.7,
                    categoryPercentage: 0.5
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
        }
    });

    sales_data = {
        1 : {
          data: [
            [20, 18, 40, 50, 35, 24, 40],
            [28, 48, 40, 35, 70, 33, 32],
            [64, 54, 60, 65, 52, 85, 48],
          ],
          labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        2 : {
          data: [
            [35, 20, 40, 24, 28, 38, 40],
            [55, 35, 32, 14, 40, 33, 22],
            [84, 62, 45, 70, 50, 85, 42],
          ],
          labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        },
        3 : {
          data: [
            [50, 30, 25, 33, 28, 34, 45, 30, 55, 28, 42, 54],
            [45, 35, 28, 64, 40, 30, 32, 60, 50, 29, 33, 48],
            [54, 62, 35, 80, 40, 85, 42, 30, 41, 73, 68, 57],
          ],
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
    };
    $('#sales_tabs a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var id = $(this).attr('data-id');
        if(id && +id in sales_data) {
            sales_chart.data.labels = sales_data[id].labels;
            var datasets = sales_chart.data.datasets;
            $.each(datasets,function(index,value) {
                datasets[index].data = sales_data[id].data[index];
            });
        }
        sales_chart.update();
    });

    // Revenue Chart

    var ctx = document.getElementById("revenue_chart").getContext("2d");
    var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
    var gradientFill = ctx.createLinearGradient(500, 0, 100, 0);
    gradientFill.addColorStop(0, "#f39c12");
    gradientFill.addColorStop(1, "#e91e63");
    var chartData = {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [
            {
                label: "PROFIT",
                backgroundColor: gradientFill,
                hoverBackgroundColor: gradientFill,
                //data: [30, 25, 50, 30, 50, 35, 60],
                data: [3429, 2857, 5715, 3429, 5715, 4000, 6858],
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

        elements: {
            line: {
                tension: 0
            },
        },
        scales: {
            xAxes: [{
                display: false,
                gridLines: false,
                scaleLabel: {
                    display: true,
                }
            }],
            yAxes: [{
                display: false,
                gridLines: false,
                scaleLabel: {
                    display: true,
                },
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

    // SUBSCRIPTIONS Chart

    var ctx = document.getElementById("subscriptions_chart").getContext("2d");
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

    // Earnings chart 2

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

    var ctx = document.getElementById("earnings_chart_2").getContext("2d");
    new Chart(ctx, {type: 'bar', data: chartdata, options: chartOptions});

    
    // Chart a

    var chartdata = {
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
    var ctx = document.getElementById("chart_a").getContext("2d");
    new Chart(ctx, {type: 'bar', data: chartdata, options: chartOptions});

    // Chart b

    var chartdata = {
        labels: ["App","Software","Laptop",'Smartphone'],
        datasets: [{
            data: [60,60,25,35],
            backgroundColor: ['rgba(255,255,255,.85)', 'rgba(255,255,255,.85)', 'rgba(255,255,255,.85)', 'rgba(255,255,255,.5)'],
            hoverBackgroundColor: '#fff',
            borderColor: '#ff4081',
            hoverBorderColor: '#fff',
        }]
    } ;
    var chartOptions = {
        responsive: true,
        legend: {display: false},
        cutoutPercentage: 70,
        circumference: 1.3 * Math.PI,
        rotation: 0.85 * Math.PI
    };
    var ctx4 = document.getElementById("chart_b").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: chartdata, options:chartOptions});


    // Small chart 1

    var barData = {
        labels: ["S", "M", "T", "W", "T", "F", "S"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: '#2CC4CB', // '#30C8B3'
                borderColor: "#fff",
                data: [29, 48, 40, 19, 78, 31, 85]
            }
        ]
    };
    var barOptions = {
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
    new Chart(ctx, {type: 'bar', data: barData, options:barOptions});

    // Small chart 2

    var data2 = {
        labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7"],
        datasets: [
            {
                label: "Data 1",
                borderColor: 'rgba(243,156,18,0.7)',
                pointBackgroundColor: 'rgba(243,156,18,1)',
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 86, 27, 90],
                borderWidth: 3,
                pointBorderWidth: 2,
                fill: false,
            }
        ]
    };
    var options2 = {
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
    var ctx = document.getElementById("chart_2").getContext("2d");
    new Chart(ctx, {type: 'line', data: data2, options:options2});

    // Small chart 3

    var data3 = {
        labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7"],
        datasets: [
            {
                label: "Data 1",
                borderColor: 'rgba(24,197,169,0.7)',
                backgroundColor: 'rgba(24,197,169,0.5)',
                pointBackgroundColor: 'rgba(24,197,169,1)',
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 86, 27, 90],
                borderWidth: 3,
                pointBorderWidth: 2,
                //fill: true,
            }
        ]
    };
    var options3 = {
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
    var ctx = document.getElementById("chart_3").getContext("2d");
    new Chart(ctx, {type: 'line', data: data3, options:options3});

    // Small chart 4

    var data4 = {
        labels: ["S", "M", "T", "W", "T", "F", "S"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor:'#DADDE0', //'rgba(220, 220, 220, 0.5)',
                data: [45, 80, 58, 74, 54, 59, 40]
            },
            {
                label: "Data 2",
                backgroundColor: '#18C5A9', // '#30C8B3'
                borderColor: "#fff",
                data: [29, 48, 40, 19, 78, 31, 85]
            }
        ]
    };
    var options4 = {
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

    var ctx = document.getElementById("chart_4").getContext("2d");
    new Chart(ctx, {type: 'bar', data: data4, options:options4});



    $("#spark_1").sparkline('html', {
        type: 'line',
        lineColor: '#18C5A9',
        fillColor: '#18C5A9',
        width: '100%',
        height: '50'
    });
    $("#spark_2").sparkline('html', {
        type: 'line',
        lineColor: '#747fa9',
        fillColor: '#747fa9',
        width: '100%',
        height: '50'
    });
    $("#spark_4").sparkline('html', {
        type: 'line',
        lineColor: '#F39C12',
        fillColor: '#F39C12',
        width: '100%',
        height: '50'
    });
    $("#spark_5").sparkline('html', {
        type: 'line',
        lineColor: '#34495f',
        fillColor: 'transparent',
        width: '100%',
        height: '50'
    });
    $("#spark_6").sparkline('html', {
        type: 'line',
        lineColor: '#fff',
        fillColor: 'transparent',
        width: '100%',
        height: '50'
    });
    $("#spark_8").sparkline('html', {
        type: 'line',
        lineColor: '#fff',
        fillColor: '#ebedee',
        width: '100%',
        height: '50'
    });


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
                $('#spark_3').sparkline(mpoints, { 
                  width: mpoints.length*2, 
                  lineColor: '#18C5A9', 
                  width: '100%',
                  height: '50',
                  tooltipSuffix: ' pixels per second' 
                });
            }
            lastmousetime = timenow;
            setTimeout(mdraw, mrefreshinterval);
        }
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval); 
    })();

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
                $('#spark_7').sparkline(mpoints, { 
                  width: mpoints.length*2, 
                  lineColor: '#fff',
                  fillColor: 'transparent', 
                  width: '100%',
                  height: '50',
                  tooltipSuffix: ' pixels per second' 
                });
            }
            lastmousetime = timenow;
            setTimeout(mdraw, mrefreshinterval);
        }
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval); 
    })();

});