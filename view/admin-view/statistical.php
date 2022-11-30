<?php
    include_once '../../model/connect.php';
    include_once '../../model/statistical.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../src/css/main.css">
    <link rel="stylesheet" href="../../src/css/products.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart", "bar"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['cate_name', 'number_cate'],
            <?php foreach($categories as $value) {
                echo "['".$value["name"]."',".$value["count"]."],";
            } ?>
                
        ]);

        var options = {
          title: 'Thống kê hàng hóa theo số lượng sản phẩm',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);

        var dataColumn = google.visualization.arrayToDataTable([
            ['Category', 'Hight-Price', 'Low-Price', 'Average-Price'],
            <?php foreach($categories as $value) {
                echo "['".$value["name"]."',".$value["highPrice"].",".$value["lowPrice"].",".$value["avgPrice"]."],";
            } ?>
        ]);

        var optionsColumn = {
          chart: {
            title: 'Thống kê tiền các sản phẩm của từng danh mục',
            subtitle: 'Price of product',
          }
        };

        var chartColumn = new google.charts.Bar(document.getElementById('columnchart_material'));

        chartColumn.draw(dataColumn, google.charts.Bar.convertOptions(optionsColumn));
      }
    </script>
    <title>Product</title>
</head>
<body>
    <div class="containers">
        <?php include_once 'aside.php'?>
        <main>
            <?php require_once "header.php"?>
            <div class="banner">
                <div class="title">
                    <h1>Welcome to Statistical</h1>
                    <p>You can see statistical here</p>
                </div>
                <div class="pic-banner">
                    <img src="../../src/images/slider-pic.png" alt="">
                </div>
            </div>
            <div class="products">
                <div class="tools">
                    <p>Statistical List</p>
                    <div class="action">
                        <button id="view-chart" class="view-chart">Xem biểu đồ</button>
                        <form action="statistical.php" method="POST">
                            
                            <input type="text" name="findName" placeholder="Search name">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <table class="item-list">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Loại hàng</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </thead>
                </table>
                <div class="container">
                    <table class="item-list">
                        <div id="chart" class="chart">
                            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                            <div id="columnchart_material" style="width: 829px; height: 500px;"></div>
                        </div>
                        <tbody>
                            <?php foreach($categories as $key => $value): ?>
                                <tr style="text-align: center;">
                                    <td><?php echo $key?></td>
                                    <td><?php echo $value["name"]?></td>
                                    <td><?php echo $value["count"]?></td>
                                    <td><?php echo $value["highPrice"]?></td>
                                    <td><?php echo $value["lowPrice"]?></td>
                                    <td><?php echo $value["avgPrice"]?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>                
                    </table>
                </div>
            </div>
        </main>
    </div>

    <div class="logger">
        <div class="box">
            <h3>You want to delete this</h3>
            <p>*this file will remove from your table</p>
            <div class="onClick">

            </div>
        </div>
    </div>
    <script src="../../src/js/action.js"></script>
</body>
</html>