$(function() {
    // Line Chart example

    var lineData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor: 'rgba(67,174,168,0.5)',
                borderColor: 'rgba(67,174,168,0.7)',
                pointBackgroundColor: 'rgba(67,174,168,1)',
                pointBorderColor: "#fff",
                data: [28, 48, 40, 19, 86, 27, 90],
                //fill: false, // for removing background
            },{
                label: "Data 2",
                backgroundColor: 'rgba(213,217,219, 0.5)',
                borderColor: 'rgba(213,217,219, 1)',
                pointBorderColor: "#fff",
                data: [65, 59, 80, 81, 56, 55, 40],
                //fill: false,
            }
        ]
    };
    var lineOptions = {
        responsive: true,
        maintainAspectRatio: false
    };
    var ctx = document.getElementById("line_chart").getContext("2d");
    new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

    // Bar Chart example

    var barData = {
        labels: ["Sunday", "Munday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [
            {
                label: "Data 1",
                backgroundColor:'#DADDE0', //'rgba(220, 220, 220, 0.5)',
                data: [45, 80, 58, 74, 54, 59, 40]
            },
            {
                label: "Data 2",
                //backgroundColor:'#84cac6',// 'rgba(26,179,148,0.5)',
                backgroundColor: '#18C5A9', // '#30C8B3'
                borderColor: "#fff",
                data: [29, 48, 40, 19, 78, 31, 85]
            }
        ]
    };
    var barOptions = {
        responsive: true,
        maintainAspectRatio: false
    };

    var ctx = document.getElementById("bar_chart").getContext("2d");
    new Chart(ctx, {type: 'bar', data: barData, options:barOptions}); 

    // Polar area example

    var polarData = {
        datasets: [{
            data: [
                300,130,180
            ],
            backgroundColor: [
                "#3bceb6", "#bdc3c7", "#8995c7"
            ],
            label: [
                "My Radar chart"
            ]
        }],
        labels: [
            "App","Software","Laptop"
        ]
    };

    var polarOptions = {
        segmentStrokeWidth: 2,
        responsive: true

    };

    var ctx3 = document.getElementById("polar_chart").getContext("2d");
    new Chart(ctx3, {type: 'polarArea', data: polarData, options:polarOptions});

    // doughnut chart example

    var doughnutData = {
        labels: ["App","Software","Laptop" ],
        datasets: [{
            data: [200,40,60],
            backgroundColor: ["#3bceb6","#bdc3c7","#8995c7"]
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnut_chart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    // Radar chart example

    var radarData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
            {
                label: "My First dataset",
                backgroundColor: "rgba(189,195,199,0.2)",
                borderColor: "rgba(189,195,199,1)",
                data: [60, 75, 80, 81, 40, 65, 45]
            },
            {
                label: "My Second dataset",
                backgroundColor: "rgba(24,197,169,0.2)",
                borderColor: "rgba(24,197,169,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };

    var radarOptions = {
        responsive: true
    };

    var ctx5 = document.getElementById("radar_chart").getContext("2d");
    new Chart(ctx5, {type: 'radar', data: radarData, options:radarOptions});

});
