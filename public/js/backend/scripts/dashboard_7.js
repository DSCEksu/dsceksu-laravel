$(function(){

    $('.easypie').each(function(){
        $(this).easyPieChart({
          trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
          scaleColor: false,
        });
    }); 

    // line chart

    var lineData = {
        labels: ["W1", "W2", "W3", "W4", "W5", "W6", "W7"],
        datasets: [
            {
                label: "Data 2",
                borderColor: 'rgba(213,217,219, 1)',
                pointBorderColor: "#fff",
                data: [50, 40, 65, 50, 70, 55, 65],
                borderWidth: 4,
                pointBorderWidth: 2,
                fill: false,
                //lineTension: .1
            }
        ]
    };
    var lineOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        scales: {
              xAxes: [{
                  gridLines: {
                      display: false,
                      color: 'rgba(255,255,255,.3)',
                  },
                  ticks: {
                      fontColor: '#eee'
                  }
              }],
              yAxes: [{
                  gridLines: {
                      color: 'rgba(255,255,255,.3)'
                  },
                  ticks: {
                      fontColor: '#eee'
                  }
              }]
        },
    };
    var ctx = document.getElementById("line_chart").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options: lineOptions}); 

    // Chart 1

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


    // Chart 2
    
    var chartdata = {
        labels: ['S', "M", "T", "W", "T", "F", "S"],
        datasets: [
            {
                label: "Data 1",
                borderColor: 'rgba(24,197,169,1)',
                backgroundColor: 'rgba(24,197,169,.7)', 
                data: [28, 48, 40, 19, 86, 27, 90],
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
  
    var ctx = document.getElementById("chart_2").getContext("2d");
    new Chart(ctx, {type: 'line', data: chartdata, options: chartOptions});



    $("#spark_1").sparkline('html', {
        type: 'line',
        lineColor: '#18C5A9',
        fillColor: '#18C5A9',
        width: '100%',
        height: '50'
    });
    $("#spark_2").sparkline('html', {
        type: 'line',
        lineColor: '#5C6BC0',
        fillColor: '#5C6BC0',
        width: '100%',
        height: '50'
    });


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