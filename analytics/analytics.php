<!doctype html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nft Hydroponics System| Analytics</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-............" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
</head>

<body>
    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><i class="fa-solid fa-droplet fa-bounce" style="color: #075ef2;"></i>  Nft Hydroponics System Analytics</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#" class="btn btn-success btn-sm" onclick="printPage()"><i class="fas fa-print"></i> Print Report</a></li>
                            <li><a href="../php/ph.php" class="btn btn-primary btn-sm" ><i class="fas fa-home"></i> Home</a></li>
                        </ol>
                        <input type="file" id="fileInput" style="display: none;">
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3" ><i class="fas fa-info-circle" style="color: rgba(0, 0, 255, 0.815);;"></i> Summary</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus eveniet, ipsa maxime, eligendi veritatis soluta accusamus perferendis mollitia error beatae, quam ut praesentium esse accusantium aut. Mollitia id veritatis sint voluptas vitae corporis. Quisquam, illo esse ducimus velit maxime, culpa enim delectus facilis accusantium obcaecati repellat? Similique soluta deleniti quod ipsum in quas earum fugit excepturi illo reprehenderit saepe perferendis iste ipsa tempora tenetur numquam totam cupiditate dolorum, ducimus facilis. Ab esse ducimus laborum corporis, in, provident natus nostrum dicta sunt eius animi illo voluptate. Expedita rem sunt quidem in nostrum adipisci labore eveniet, praesentium assumenda culpa veniam, maiores commodi voluptatem mollitia quod perferendis natus molestias ad recusandae velit! Deserunt porro necessitatibus hic aliquid? Quae laboriosam, eveniet sed magnam dolorem vero architecto neque perspiciatis reprehenderit, incidunt voluptatibus ea a nostrum at nemo iusto nihil temporibus amet voluptatum optio corporis! </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Water Temperature vs Acidity</h4>
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Yearly Water Quality</h4>
                                <canvas id="singelBarChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Outlier Detection</h4>
                                <!-- <canvas id="lineChart"></canvas> -->
                                <div id="scatterchart_material" style="width: 900px; height: 530px;"></div>
                            </div>
                        </div>
                    </div>
                    <!-- make a input file button -->
                    <!-- make function for Predictions -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Prediction</h4>
                                <canvas id="team-chart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Quarterly Water Quality</h4>
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
      <!-- <script src="js/tensorflow.js"></script> -->
      <script type="text/javascript">
        google.charts.load('current', {'packages':['scatter']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart () {
  
          var data = new google.visualization.DataTable();
          data.addColumn('number', 'Ambot');
          data.addColumn('number', 'AWQ');
  
          data.addRows([
            [0, 67], [1, 88], [2, 77],
            [3, 93], [4, 85], [5, 91],
            [6, 71], [7, 78], [8, 93],
            [9, 80], [10, 82],[0, 75],
            [5, 80], [3, 90], [1, 72],
            [5, 75], [6, 68], [7, 98],
            [3, 82], [9, 94], [2, 79],
            [2, 95], [2, 86], [3, 67],
            [4, 60], [2, 80], [6, 92],
            [2, 81], [8, 79], [9, 83],
            [3, 75], [1, 80], [3, 71],
            [3, 89], [4, 92], [5, 85],
            [6, 92], [7, 78], [6, 95],
            [3, 81], [0, 64], [4, 85],
            [2, 83], [3, 96], [4, 77],
            [5, 89], [4, 89], [7, 84],
            [4, 92], [9, 98]
          ]);
  
          var options = {
            width: 600,
            height: 500,
            chart: {
              // title: 'Students\' Final Grades',
              // subtitle: 'based on hours studied'
            },
            hAxis: {title: 'Ambot'},
            vAxis: {title: 'Ambot'}
          };
  
          var chart = new google.charts.Scatter(document.getElementById('scatterchart_material'));
  
          chart.draw(data, google.charts.Scatter.convertOptions(options));
        }
      </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script>
        jQuery(document).ready(function () {
          var infoDiv = jQuery('<div id="infoDiv"></div>');
          infoDiv.css({
            position: 'fixed',
            top: '40%',
            left: '50%',
            transform: 'translate(-50%, -50%)',
            padding: '15px',
            background: '#fff',
            border: '1px solid #ccc',
            borderRadius: '1px',
            zIndex: '1000',
            display: 'none'
          });
      
          jQuery('body').append(infoDiv);
      
          jQuery('#vmap').vectorMap({
            map: 'usa_en',
            onRegionClick: function (element, code, region) {
              var message = 'Data here! ' + region + ' code: ' + code.toUpperCase();

              infoDiv.text(message);
              infoDiv.fadeIn();
              
              setTimeout(function () {
                infoDiv.fadeOut();
              }, 5000);
            }
          });
        });
      </script>
      <script>
            function printPage() {
                window.print();
            }
       </script>
      <script type="text/javascript" src="js/jquery.vmap.js"></script>
      <!--  Chart js -->
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/chartjs-init.js"></script>    
</body>
</html>
