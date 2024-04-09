<?php include "../chartdata.php"; ?>
<?php include "../data_ret.php"; ?>
<?php include "../average.php"; ?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Capstone 2023| Reports </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <style>
    @media print {
        #contentToPrint {
            display: block !important;
        }
    }
    </style>
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
    <style>
        .container {
            display: flex;
            align-items: center;
            margin-bottom: 20px; 
        }

        .download-button {
            background-color: blue;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 8px; 
        }

        .green-button {
            background-color: green;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .table-responsive {
        }

        .card-table {
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="ph.php" class="app-brand-link">
                <i class="fa-solid fa-droplet fa-bounce fa-2xl" style="color: #095cec;"></i>  <span class="app-brand-text demo menu-text fw-bolder ms-2"> 
                <span style="text-transform: uppercase;">H</span>ydroponics</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="ph.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Account Settings">Logs</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="report.php" class="menu-link">
                    <div data-i18n="Account">Four-hourly Readings</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="waterflow.php" class="menu-link">
                    <div data-i18n="Connections">Water Flow</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="waterlevel.php" class="menu-link">
                    <div data-i18n="Connections">Water Level </div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="acidity.php" class="menu-link">
                    <div data-i18n="Connections">Acidity</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="temperature.php" class="menu-link">
                    <div data-i18n="Connections">Temperature</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tds.php" class="menu-link">
                    <div data-i18n="Connections">Total Dissolved Solids</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Miscellaneous</span></li>
            
            <li class="menu-item">
              <a
                href="github page here static"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="github page here static"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center  me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 ">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Jessie Sam</span>
                            <small class="text-muted">Farmer</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <!-- <a class="dropdown-item" href="auth-login-basic.html"></a> -->
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hydroponics /</span> Four-hourly Water Condition</h4>
              <div style="padding-bottom: 10px;">
                <button id="downloadBtn" class="btn btn-md btn-success"><i class="fa-solid fa-download"></i> Download CSV</button>
                <button id="printButton" class="btn btn-md btn-primary"><i class="fas fa-print"></i> Print</button>
              </div>
              <div id="contentToPrint" style="display:none;">
                  <h3 class="text-center mt-5">Republic of the Philippines</h3>
                  <h5 class="text-center mt-2">NFT Hydroponics System</h5>
                  <h5 class="text-center mt-2 mb-5">Report</h5>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Temperature Report</strong></h3>
                        <p>Highest Temperature: </p>
                        <p>Lowest temperature: </p>
                        <p>Average temperature:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Acidity Report</strong></h3>
                        <p>Acidity at Highest Temperature: </p>
                        <p>Acidity at Lowest temperature: </p>
                        <p>Average Acidity:</p>
                    </div>
                    <div class="col">
                        <h3><strong>Total Dissolved Solids Report</strong></h3>
                        <p>TDS at Highest Temperature: </p>
                        <p>TDS at Lowest temperature: </p>
                        <p>Average Total Dissolved Solids:</p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                        <h3><strong>Water Flow Report</strong></h3>
                        <p>Waterflow at Highest Temperature: </p>
                        <p>Waterflow at Lowest temperature: </p>
                        <p>Average Waterflow:</p>
                    </div>
                    <div class="col mb-5">
                        <h3><strong>Water Level Report</strong></h3>
                        <p>Highest Water Level: </p>
                        <p>Lowest Water Level: </p>
                        <p>Average Water Level:</p>
                    </div>
                  </div>
                  <div style="margin: 6rem;"></div>
                  <div>
                    <h3 class="text-center mt-5"><strong>Water Quality Summary</strong></h3>
                  </div>
                  <div class="row mt-5">
                    <div class="col">
                        <h3>Four-Hourly</h3>
                        <p>Highest Water Condition: </p>
                        <p>Lowest Water Condition: </p>
                        <p>Average Water Condition:</p>
                    </div>
                    <div class="col">
                        <h3>Quarterly</h3>
                        <p>Highest Water Condition: </p>
                        <p>Lowest Water Condition: </p>
                        <p>Average Water Condition:</p>
                    </div>
                    <div class="col">
                        <h3>Yearly</h3>
                        <p>Highest Water Condition: </p>
                        <p>Lowest Water Condition: </p>
                        <p>Average Water Condition:</p>
                    </div>
                  </div>
                  <div style="margin: 2rem;"></div>
                  <h3><strong>Overall Water Quality Monitoring Table</strong></h3>
                  <table class="table card-table">
                      <thead>
                        <tr>
                          <th>Date & Time</th>
                          <th>Acidity</th>
                          <th>TDS</th>
                          <th>Temp</th>
                          <th>Waterflow</th>
                          <th>Waterlevel</th>
                          <th>Average</th>
                          <th>Status</th>
                          <th>Actions for acidity</th>
                          <th>Actions for tds</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">

                        <?php                   
                        foreach ($temperaturedate as $index => $date) {
                            echo '<tr>';
                            echo '<td><i class="text-danger"></i> <strong>' . $date . '</strong></td>';
                            echo '<td> pH of ' . $data_acid[$index] . '</td>';
                            echo '<td>' . $data_tds[$index] . 'ppm</td>';
                            echo '<td>' . $data_temp[$index] . '°C</td>';
                            echo '<td>' . $data_flow[$index] . ' L/m</td>';
                            echo '<td>' . $data_level[$index] . 'm</td>';
                            echo '<td>' . round($averages[$index]['average']) . '%</td>';
                            echo '<td><span class="badge bg-label-primary me-1">' . $averages[$index]['label'] . '</span></td>';
                            echo '<td>' . $data_acid_action[$index].'</td>';
                            echo '<td>' . $data_tds_action[$index].'</td>';
                            echo '</tr>';
                        }
                        ?>
                      </tbody>
                  </table>
              </div>
              <div class="table-responsive text-nowrap">
                <table id="datatable" class="table card-table">
                  <thead>
                    <tr>
                      <th>Date & Time</th>
                      <th>Readings</th>
                      <th>Average</th>
                      <th>Status</th>
                      <th>Actions for acidity</th>
                      <th>Actions for tds</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">

                    <?php                   
                    foreach ($temperaturedate as $index => $date) {
                        echo '<tr>';
                        echo '<td><i class="text-danger"></i> <strong>' . $date . '</strong></td>';

                        echo '<td>';
                        echo '<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">';

                        $sensorTypeToData = [
                            'Acidity' => $data_acid,
                            'Total Dissolved Solids' => $data_tds,
                            'Water Temperature' => $data_temp,
                            'Waterflow' => $data_flow,
                            'Waterlevel' => $data_level,
                        ];

                        foreach ($sensorTypeToData as $sensorType => $sensorDataArray) {
                            echo '<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up"';
                            echo 'title="' . $sensorType . ': ' . $sensorDataArray[$index] . '">';
                            echo '<img src="../assets/img/icons/unicons/';
                            
                            $sensorTypeToIcon = [
                                'Acidity' => 'flask.png',
                                'Total Dissolved Solids' => 'atom.png',
                                'Water Temperature' => 'thermometer.png',
                                'Waterflow' => 'flow.png',
                                'Waterlevel' => 'tide.png',
                            ];

                            echo $sensorTypeToIcon[$sensorType] . '" alt="sensor" class="rounded-circle" />';
                            echo '</li>';
                        }

                        echo '</ul>';
                        echo '</td>';
                        echo '<td>' . round($averages[$index]['average']) . '%</td>';
                        echo '<td><span class="badge bg-label-primary me-1">' . $averages[$index]['label'] . '</span></td>';
                        echo '<td>' . $data_acid_action[$index].'</td>';
                        echo '<td>' . $data_tds_action[$index].'</td>';
                        echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!--/ Table within card -->
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/report-main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            window.location.href = '../download.php';
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#datatable');
    </script>
    <script>
    document.getElementById("printButton").addEventListener("click", function() {
        printDiv("contentToPrint");
    });

    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>


  </body>
</html>
