<!-- Vendor scripts -->
<script src="/cms/vendor/jquery/dist/jquery.min.js"></script>
<script src="/cms/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="/cms/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/cms/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="/cms/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="/cms/vendor/jquery.flot.spline/index.js"></script>
<script src="/cms/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="/cms/vendor/iCheck/icheck.min.js"></script>
<script src="/cms/vendor/peity/jquery.peity.min.js"></script>
<script src="/cms/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="/cms/scripts/homer.js"></script>
<script src="/cms/scripts/charts.js"></script>

<script>

    $(function () {

        /**
         * Flot charts data and options
         */
        var data1 = [ [0, 55], [1, 48], [2, 40], [3, 36], [4, 40], [5, 60], [6, 50], [7, 51] ];
        var data2 = [ [0, 56], [1, 49], [2, 41], [3, 38], [4, 46], [5, 67], [6, 57], [7, 59] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
            },
            grid: {
                tickColor: "#f0f0f0",
                borderWidth: 1,
                borderColor: 'f0f0f0',
                color: '#6a6c6f'
            },
            colors: [ "#62cb31", "#efefef"],
        };

        $.plot($("#flot-line-chart"), [data1, data2], chartUsersOptions);

        /**
         * Flot charts 2 data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);



    });

</script>