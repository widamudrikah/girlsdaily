<!DOCTYPE html>
<html>

<head>
    <title>Chart User</title>
</head>

<body>
    <h1>Chart Data User</h1>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users = <?php echo json_encode($users) ?>;

    Highcharts.chart('container', {
        title: {
            text: 'Chart User'
        },
        subtitle: {
            text: 'Data Pengunjung'
        },
        xAxis: {
            categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Ahad']
        },
        yAxis: {
            title: {
                text: 'Jumlah User'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

</html>