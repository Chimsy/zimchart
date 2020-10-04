<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="css/container.css" rel="stylesheet" media="all">

</head>

<body>

<div id="container"></div>


<!-- Scripts -->
<script src="zim-chart/highmaps.js"></script>
<script src="zim-chart/exporting.js"></script>
<script src="zim-chart/zw-all.js"></script>
</body>
</html>


<script>

// Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
    ['zw-ma', 10],
    ['zw-ms', 1],
    ['zw-bu', 2],
    ['zw-mv', 3],
    ['zw-mw', 4],
    ['zw-mc', 5],
    ['zw-ha', 6],
    ['zw-mn', 7],
    ['zw-mi', 8],
    ['zw-me', 9]
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/zw/zw-all'
    },

    title: {
        text: 'Highmaps basic demo'
    },

    subtitle: {
        text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/zw/zw-all.js">Zimbabwe..</a>'
    },

    mapNavigation: {
        enabled: true,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0
    },

    series: [{
        data: data,
        name: 'Random data',
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

</script>
