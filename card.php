<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Fonts and icons -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>


</head>

<body>

<div class="col-6 bg-danger">
    <canvas id="multipleLineChart"></canvas>
</div>




<!-- Chart JS -->
<script src="/assets/js/plugin/chart.js/chart.min.js"></script>
<script>
    var multipleLineChart = document.getElementById('multipleLineChart').getContext('2d');

    var myMultipleLineChart = new Chart(multipleLineChart, {
        type: 'line',
        data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [{
                label: "Текущая",
                showLabelBackdrop: true,
                borderColor: "#47A38E",
                pointBackgroundColor: "#47A38E",
                pointBorderWidth: 1,
                pointHoverRadius: 2,
                pointHoverBorderWidth: 1,
                pointRadius: 3,
                backgroundColor: 'transparent',
                fill: true,
                borderWidth: 2,
                data: [9000, 6500, 7000, 12000, 13500, 15000, 16005]
            }, {
                label: "Предидущая",
                showLabelBackdrop: true,
                borderColor: "#7E5195",
                pointBackgroundColor: "#7E5195",
                pointBorderWidth: 1,
                pointHoverRadius: 2,
                pointHoverBorderWidth: 1,
                pointRadius: 3,
                backgroundColor: 'transparent',
                fill: true,
                borderWidth: 2,
                data: [2500, 4200, 3600, 3700, 4000, 3000, 5000]
            }]
        },
        options : {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'top',
            },
            tooltips: {
                bodySpacing: 4,
                mode:"nearest",
                intersect: 0,
                position:"nearest",
                xPadding:10,
                yPadding:10,
                caretPadding:10
            },
            layout:{
                padding:{left:15,right:15,top:15,bottom:15}
            }
        }
    });
</script>

<style>
    canvas {
        background-color: #282828 !important;
        min-height: 200px;
    }

</style>

</body>
</html>