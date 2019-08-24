$(function() {
    // Simple area
    var graph = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_graph"),
        series: [{
            color: '#3bceb6',
            data: [
                { x: 0, y: 40 },
                { x: 1, y: 49 },
                { x: 2, y: 38 },
                { x: 3, y: 30 },
                { x: 4, y: 32 } ]
        }]
    });
    graph.render();
    
    // Multiple Area
    var graph2 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_multiarea"),
        renderer: 'area',
        stroke: true,
        series: [ {
            data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 20 }, { x: 4, y: 16 } ],
            color: '#3bceb6',
            stroke: '#3bceb6'
        }, {
            data: [ { x: 0, y: 22 }, { x: 1, y: 25 }, { x: 2, y: 38 }, { x: 3, y: 44 }, { x: 4, y: 46 } ],
            color: '#dee1e3',
            stroke: '#c7cccf'
        } ]
    } );
    graph2.renderer.unstack = true;
    graph2.render();

    // Simple line
    var graph3 = new Rickshaw.Graph({
        element: document.querySelector("#rickshaw_line"),
        renderer: 'line',
        series: [ {
            data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
            color: '#18C5A9'
        } ]
    } );
    graph3.render();

    // Multiple line
    var graph4 = new Rickshaw.Graph({
        element: document.querySelector("#rickshaw_multiline"),
        renderer: 'line',
        series: [{
            data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
            color: '#18C5A9'
        }, {
            data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
            color: '#bdc3c7'
        }]
    });
    graph4.render();

    // Bar
    var graph5 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_bars"),
        renderer: 'bar',
        series: [ {
            data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
            color: '#18C5A9'
        } ]
    } );
    graph5.render();

    // Bars stacked
    var graph6 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_bars_stacked"),
        renderer: 'bar',
        series: [
            {
                data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
                color: '#18C5A9'
            }, {
                data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
                color: '#bdc3c7'
            } ]
    } );
    graph6.render();

    // Multiple Bars
    var graph7 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_multibars"),
        renderer: 'bar',
        stack: false,
        series: [ 
            {
                data: [ { x: 0, y: 40 }, { x: 1, y: 49 }, { x: 2, y: 38 }, { x: 3, y: 30 }, { x: 4, y: 32 } ],
                color: '#18C5A9'
            }, {
                data: [ { x: 0, y: 20 }, { x: 1, y: 24 }, { x: 2, y: 19 }, { x: 3, y: 15 }, { x: 4, y: 16 } ],
                color: '#bdc3c7'

        } ]
    } );
    graph7.render();

    // Scatterplot
    var graph8 = new Rickshaw.Graph( {
        element: document.querySelector("#rickshaw_scatterplot"),
        renderer: 'scatterplot',
        stroke: true,
        padding: { top: 0.05, left: 0.05, right: 0.05 },
        series: [ {
            data: [ { x: 0, y: 15 },
                { x: 1, y: 18 },
                { x: 2, y: 10 },
                { x: 3, y: 12 },
                { x: 4, y: 15 },
                { x: 5, y: 24 },
                { x: 6, y: 28 },
                { x: 7, y: 31 },
                { x: 8, y: 22 },
                { x: 9, y: 18 },
                { x: 10, y: 16 }
            ],
            color: '#18C5A9'
        } ]
    } );
    graph8.render();
});