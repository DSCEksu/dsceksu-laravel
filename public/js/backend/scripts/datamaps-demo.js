$(function(){

    // Basic example
    var map = new Datamap({
        element: document.getElementById("selected_map"),
        responsive: true,
        fills: {
            defaultFill: '#DADDE0',// '#d1d5d8' "#DBDAD6",
            active: '#18C5A9'
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0,
        },
        data: {
            USA: { fillKey: "active" },
            RUS: { fillKey: "active" },
            IND: { fillKey: "active" },
            ARG: { fillKey: "active" }
        }
    });
    
    // USA scope example
    var usa_map = new Datamap({
        element: document.getElementById("usa_map"),
        responsive: true,
        scope: 'usa',
        fills: {
            defaultFill: "#DADDE0",
            active: "#18C5A9"
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0
        },
        data: {
            FL: { fillKey: "active" },
            UT: { fillKey: "active" },
            MI: { fillKey: "active" },
        }
    });
    usa_map.labels(); 

    // Map with arcs
    var arc_map = new Datamap({
        element: document.getElementById("arc_map"),
        responsive: true,
        fills: {
            defaultFill: "#F2F2F0",
            to: "#DADDE0",
            from: "#18C5A9"
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0
        },
        data: {
            CAN: {fillKey: "from"},
            AUS: {fillKey: "from"},
            RUS: {fillKey: "to"},
            FRA: {fillKey: "to"},
            POL: {fillKey: "to"},
            IND: {fillKey: "to"},
            ARG: {fillKey: "to"},
            BRA: {fillKey: "to"},
        }
    });

    arc_map.arc(
        [
            { origin: 'CAN', destination: 'RUS'},
            { origin: 'CAN', destination: 'FRA'},
            { origin: 'CAN', destination: 'POL'},
            { origin: 'CAN', destination: 'AUS'},
            { origin: 'CAN', destination: 'ARG'},
            { origin: 'AUS', destination: 'IND'},
            { origin: 'AUS', destination: 'BRA'},
        ],
        { strokeColor: '#18C5A9', strokeWidth: 1}
    );

    // USA scope with arcs
    var arc_map_usa = new Datamap({
        element: document.getElementById("arc_map_usa"),
        scope: 'usa',
        responsive: true,
        fills: {
            defaultFill: "#F2F2F0",
            from: '#18C5A9'
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0
        },
        data: {
            'TX': { fillKey: 'from' },
            'FL': { fillKey: 'from' },
            'NC': { fillKey: 'from' },
            'CA': { fillKey: 'from' },
            'NY': { fillKey: 'from' },
            'MT': { fillKey: 'from' }
        }
    });

    arc_map_usa.arc([
      {
        origin: 'CA',
        destination: 'TX'
      },
      {
        origin: 'NY',
        destination: 'TX'
      },
      {
        origin: 'FL',
        destination: 'MT'
      },
      {
        origin: 'NC',
        destination: 'CA'
      },
      {
          origin: {
              latitude: 40.639722,
              longitude: -73.778889
          },
          destination: {
              latitude: 37.618889,
              longitude: -122.375
          }
      },
    ],
    { strokeColor: '#18C5A9', arcSharpness: 1.4});  

});