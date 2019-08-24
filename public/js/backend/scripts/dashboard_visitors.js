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

    // Map

    var markers = [
        { latLng: [55.524010, 105.318756], name: 'Russia', visits: 1000},
        { latLng: [60.128161, 18.643501], name: 'Sweden', visits: 1000 },
        { latLng: [35.861660, 104.195397], name: 'China', visits: 1000 },
        { latLng: [37.090240, -95.712891], name: 'USA(Neda Shine)', visits: 1000 },
        { latLng: [52.130366, -92.346771], name: 'Canada', visits: 1000 },
        { latLng: [-25.274398, 133.775136], name: 'Austrlia(Neda Shine)', visits: 1000 },
        { latLng: [51.165691, 10.451526], name: 'Germany', visits: 1000 },
        { latLng: [26.02, 50.55], name: 'Bahrain', visits: 1000 },
        { latLng: [-3, -61.38], name: 'Brazil', visits: 1000 },
    ];

    $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        focusOn: {
            scale: 2,
            x: 0.5, 
            y: 0.5,
        },
        regionStyle: {
            initial: {
                fill: '#DADDE0',
            }
        },
        markers: markers,
        markerStyle: {
            initial: {
                fill: '#ff4081',
                stroke: '#ffc6d9',
                "stroke-width": 5,
                r:8
            },
            hover: {
                fill: '#ff4081',
                stroke: '#ffc6d9',
            }
        },
        onMarkerTipShow: function(e, label, index){
            label.html( ''+markers[index].name+' (Visits - '+markers[index].visits);
        },
    });

  
});
