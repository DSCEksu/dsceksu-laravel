$(function(){

    $('.easypie').each(function(){
        $(this).easyPieChart({
          trackColor: $(this).attr('data-trackColor') || '#f2f2f2',
          scaleColor: false,
        });
    }); 

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

});