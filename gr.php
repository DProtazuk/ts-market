<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                zoomEnabled: true,
                theme: "dark2",

                axisX:{
                    valueFormatString: "####",
                    interval: 2
                },
                axisY:{
                    logarithmic: true, //change it to false
                    prefix: "$",
                    titleFontColor: "#6D78AD",
                    lineColor: "#6D78AD",
                    gridThickness: 0,
                    lineThickness: 1,
                    labelFormatter: addSymbols
                },
                axisY2:{
                    prefix: "$",
                    titleFontColor: "#51CDA0",
                    logarithmic: false, //change it to true
                    lineColor: "#51CDA0",
                    gridThickness: 0,
                    lineThickness: 1,
                    labelFormatter: addSymbols
                },
                legend:{
                    verticalAlign: "top",
                    fontSize: 16,
                    dockInsidePlotArea: true
                },
                data: [{
                    type: "line",
                    xValueFormatString: "####",
                    yValueFormatString: "$#,##0.##",
                    showInLegend: false,
                    name: "Log Scale",
                    dataPoints: [
                        { x: 2001, y: 8000 },
                        { x: 2002, y: 20000 },
                        { x: 2003, y: 40000 },
                        { x: 2004, y: 60000 },
                        { x: 2005, y: 90000 },
                        { x: 2006, y: 140000 },
                        { x: 2007, y: 200000 },
                        { x: 2008, y: 400000 },
                        { x: 2009, y: 600000 },
                        { x: 2010, y: 800000 },
                        { x: 2011, y: 900000 },
                        { x: 2012, y: 1400000 },
                        { x: 2013, y: 2000000 },
                        { x: 2014, y: 4000000 },
                        { x: 2015, y: 6000000 },
                        { x: 2016, y: 8000000 },
                        { x: 2017, y: 9000000 }
                    ]
                },
                    {
                        type: "line",
                        xValueFormatString: "####",
                        yValueFormatString: "$#,##0.##",
                        axisYType: "secondary",
                        showInLegend: false,
                        name: "Linear Scale",
                        dataPoints: [
                            { x: 2001, y: 8000 },
                            { x: 2002, y: 20000 },
                            { x: 2003, y: 40000 },
                            { x: 2004, y: 60000 },
                            { x: 2005, y: 90000 },
                            { x: 2006, y: 140000 },
                            { x: 2007, y: 200000 },
                            { x: 2008, y: 400000 },
                            { x: 2009, y: 600000 },
                            { x: 2010, y: 800000 },
                            { x: 2011, y: 900000 },
                            { x: 2012, y: 1400000 },
                            { x: 2013, y: 2000000 },
                            { x: 2014, y: 4000000 },
                            { x: 2015, y: 6000000 },
                            { x: 2016, y: 8000000 },
                            { x: 2017, y: 9000000 }
                        ]
                    }]
            });
            chart.render();

            function addSymbols(e){
                var suffixes = ["", "K", "M", "B"];

                var order = Math.max(Math.floor(Math.log(Math.abs(e.value)) / Math.log(1000)), 0);
                if(order > suffixes.length - 1)
                    order = suffixes.length - 1;

                var suffix = suffixes[order];
                return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
            }

        }
    </script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;">

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>