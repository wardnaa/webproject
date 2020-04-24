

<!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
        <script type="text/javascript">
    (function ($) {
        "use strict";
        try {
        //WidgetChart 5
        var ctx = document.getElementById("statisticwar");
        if (ctx) {
        ctx.height = 220;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [
                {
                label: "Jumblah pengunjung ",
                data: [<?= $databases->perbulan(01);?>, <?= $databases->perbulan(02);?>, <?= $databases->perbulan(03);?>, <?= $databases->perbulan('04');?>, <?= $databases->perbulan(05);?>, <?= $databases->perbulan(06);?>, <?= $databases->perbulan(07);?>, <?= $databases->perbulan('08');?>, <?= $databases->perbulan('09');?>, <?= $databases->perbulan(10);?>, <?= $databases->perbulan(11);?>, <?= $databases->perbulan('12');?>],
                borderColor: "transparent",
                borderWidth: "0",
                backgroundColor: "#ccc",
                }
            ]
            },
            options: {
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                display: false,
                categoryPercentage: 1,
                barPercentage: 0.65
                }],
                yAxes: [{
                display: false
                }]
            }
            }
        });
        }

       } catch (error) {
        console.log(error);
       }

        try {
                // Percent Chart 2
        var ctx = document.getElementById("percent-chart2");
        if (ctx) {
        ctx.height = 209;
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
            datasets: [
                {
                label: "My First dataset",
                data: [1, 2],
                backgroundColor: [
                    '#00b5e9',
                    '#fa4251'
                ],
                hoverBackgroundColor: [
                    '#00b5e9',
                    '#fa4251'
                ],
                borderWidth: [
                    0, 0
                ],
                hoverBorderColor: [
                    'transparent',
                    'transparent'
                ]
                }
            ],
            labels: [
                'Products',
                'Services'
            ]
            },
            options: {
            maintainAspectRatio: false,
            responsive: true,
            cutoutPercentage: 87,
            animation: {
                animateScale: true,
                animateRotate: true
            },
            legend: {
                display: false,
                position: 'bottom',
                labels: {
                fontSize: 14,
                fontFamily: "Poppins,sans-serif"
                }

            },
            tooltips: {
                titleFontFamily: "Poppins",
                xPadding: 15,
                yPadding: 10,
                caretPadding: 0,
                bodyFontSize: 16,
            }
            }
        });
        }

    } catch (error) {
        console.log(error);
    }
        })(jQuery);

    </script>

</body>

</html>
<!-- end document-->
