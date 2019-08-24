$(function(){

    var mapData = {
        "US": 298,
        "SA": 200,
        "DE": 220,
        "FR": 540,
        "CN": 120,
        "AU": 760,
        "BR": 550,
        "IN": 200,
        "GB": 120,
    };
    
    $('#world_map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: '#DADDE0',
            }
        },

        series: {
            regions: [{
                values: mapData,
                scale: ["#18C5A9"],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionTipShow: function(e, el, code){
            el.html(el.html()+' (Visits - '+mapData[code]+')');
        }
    });

    var mapUsaData = {
        'US-VA': 120,
        'US-MT': 210,
        'US-TX': 251,
        'US-NY': 455,
        'US-FL': 308,
        'US-CA': 704,
        'US-NE': 408,
    }

    $('#usa_map').vectorMap({
        map: 'us_aea_en',
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: '#DADDE0',
            }
        },

        series: {
            regions: [{
                values: mapUsaData,
                scale: ["#18C5A9"],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionTipShow: function(e, el, code){
            el.html(el.html()+' (Visits - '+mapUsaData[code]+')');
        }
    });


    // Map 3

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

    $('#map_3').vectorMap({
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