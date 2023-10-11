<!-- database connection -->
<?php include "../data_con.php"; ?>
<?php include "../data_ret.php"; ?>
<?php include "../includes/chartdata.php"; ?>

<?php 
session_start(); 
if(!isset($_SESSION['user_id'])){ 
    header('Location: ../index.php'); 
    exit;
}

$user_id = $_SESSION['user_id'];

$user_query = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $user_query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$userresult = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($userresult)) {
    $data_user = $row['username'];
}

mysqli_stmt_close($stmt);

mysqli_close($conn);
?>
<style>
  .chartTable {
        max-height: 200px;
        overflow-y: auto;
        display: block;
    }
</style>
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

    <title>Capstone 2023| NFT Hydroponics </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="ph.php" class="app-brand-link">
              <i class="fas fa-tint"></i> <span class="app-brand-text demo menu-text fw-bolder ms-2"> 
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
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Connections">Connections</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Misc</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-misc-error.html" class="menu-link">
                    <div data-i18n="Error">Error</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-misc-under-maintenance.html" class="menu-link">
                    <div data-i18n="Under Maintenance">Under Maintenance</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- Tables -->
            <li class="menu-item">
              <a href="report.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Tables">Report</div>
              </a>
            </li>
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Miscellaneous</span></li>
            <li class="menu-item">
              <a
                href="github page here static"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-mobile"></i>
                <div data-i18n="Support">GSM</div>
              </a>
            </li>
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
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
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
                          <div class="flex-shrink-0 me-3">
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
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Hi <?php echo $data_user; ?>!</h5>
                          <p class="mb-4">
                            You have  <span class="fw-bold" style="color: red;">2</span> notifications  today!  Check details📋 below..
                          </p>
                          <a href="javascript:;" class="btn btn-sm btn-outline-primary"  id="viewBadges">View Notifications</a>
                          <div class="popup" id="popup">
                            <div class="popup-content">
                              <h1>Notifications</h1>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              </p>
                              <button id="closePopup" class="close-button">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/support-animation.webp"
                            height="150"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/flow.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                  <a class="dropdown-item" href="javascript:void(0);" id="view-more-flowlink">
                                      <h3>Water Flow</h3>
                                      <table class="chartTable">
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Readings</th>
                                        </tr>
                                        <?php foreach ($data_fchart as $row): ?>
                                            <tr>
                                                <td><?php echo date('m/d/Y', strtotime($row['flow_cdate'])); ?></td>
                                                <td><?php echo date('h:i a', strtotime($row['flow_cdate'])); ?></td>
                                                <td><?php echo $row['flow_readings']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                  </a>
                                  <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <div id="waterflow">
                              <span class="fw-semibold d-block mb-1">Water Flow</span>
                              <h3 class="card-title mb-2"><?php echo $flowvalue; ?> L/min</h3>
                              <small class="<?php echo $class; ?> fw-semibold"><i class="<?php echo $icon; ?>"></i> <?php echo $flowvalue_comp; ?> L/min</small>
                          </div>
                          <script>
                              function updateWaterFlow() {
                                  $.ajax({
                                      url: '../includes/flow.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function (data) {
                                          $('#waterflow .card-title').text(data.flowvalue + ' L/min');
                                          $('#waterflow small').html('<i class="' + data.icon + '"></i> ' + data.flowvalue_comp + ' L/min');
                                          $('#waterflow small').removeClass().addClass(data.class + ' fw-semibold');
                                      },
                                      error: function (error) {
                                          console.error('Error updating water flow:', error);
                                      }
                                  });
                              }

                              setInterval(updateWaterFlow, 100);
                          </script>

                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/tide.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <h3>Water Level</h3>
                                    <table class="chartTable">
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Readings</th>
                                        </tr>
                                        <?php foreach ($data_lchart as $row): ?>
                                            <tr>
                                                <td><?php echo date('m/d/Y', strtotime($row['level_cdate'])); ?></td>
                                                <td><?php echo date('h:i a', strtotime($row['level_cdate'])); ?></td>
                                                <td><?php echo $row['level_readings']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <div id="waterlevel">
                              <span class="fw-semibold d-block mb-1">Water Level</span>
                              <h3 class="card-title mb-2"><?php echo $levelvalue; ?> m</h3>
                              <small class="<?php echo $levelclass; ?> fw-semibold"><i class="<?php echo $levelicon; ?>"></i> <?php echo $levelvalue_comp; ?> m</small>
                          </div>
                          <script>
                              function updateWaterLevel() {
                                  $.ajax({
                                      url: '../includes/level.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function (data) {
                                          $('#waterlevel .card-title').text(data.levelvalue + ' L/min');
                                          $('#waterlevel small').html('<i class="' + data.levelicon + '"></i> ' + data.levelvalue_comp + ' L/min');
                                          $('#waterlevel small').removeClass().addClass(data.levelclass + ' fw-semibold');
                                      },
                                      error: function (error) {
                                          console.error('Error updating water flow:', error);
                                      }
                                  });
                              }

                              setInterval(updateWaterLevel, 100);
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">
                          <label for="monthDropdown">Average Water Condition</label>
                          <select id="monthDropdown">
                              <option value="Day">Four-hourly</option>
                              <option value="Month">Quarterly</option>
                              <option value="Year">Yearly</option>
                          </select>
                        </h5>                 
                        <div id="chartContainer" class="px-2">
                          <div id="totalRevenueChart2" class="px-2"></div>
                          <div class="px-2" id="totalRevenueChart" style="display: none;"></div>
                          <div class="px-2" id="totalRevenueChart3" style="display: none;"></div>
                        </div>
                      </div>                   
                      <div class="col-md-4">
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">Current Water <br> Condition: 50</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                              
                            </div>
                            <div class="d-flex flex-column">
                              <h6 class="mb-0">0-24</h6>
                              <h6 class="mb-0">25-49</h6>
                              <h6 class="mb-0">50-69</h6>
                              <h6 class="mb-0">70-89</h6>
                              <h6 class="mb-0">90-100</h6>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="me-2">
                              
                            </div>
                            <div class="d-flex flex-column">
                              <h6 class="mb-0">extremely poor</h6>
                              <h6 class="mb-0">poor</h6>
                              <h6 class="mb-0">medium</h6>
                              <h6 class="mb-0">good</h6>
                              <h6 class="mb-0">excellent</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                  <div class="row">
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <a href="https://www.htgsupply.com/wp-content/uploads/2019/05/PH-SCALE-EXAMPLES.jpg" target="_blank" title="Click me for conversion">
                                <img src="../assets/img/icons/unicons/flask.png" alt="Credit Card" class="rounded" />
                              </a>                              
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <h3>Acidity</h3>
                                    <table class="chartTable">
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Readings</th>
                                        </tr>
                                        <?php foreach ($data_achart as $row): ?>
                                            <tr>
                                                <td><?php echo date('m/d/Y', strtotime($row['acid_cdate'])); ?></td>
                                                <td><?php echo date('h:i a', strtotime($row['acid_cdate'])); ?></td>
                                                <td><?php echo $row['acid_readings']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <div id="acidity">
                              <span class="fw-semibold d-block mb-1">Acidity</span>
                              <h3 class="card-title mb-2">pH of <?php echo $acidvalue; ?></h3>
                              <small class="<?php echo $acidclass; ?> fw-semibold"><i class="<?php echo $acidicon; ?>"></i>pH of <?php echo $acidvalue_comp; ?></small>
                          </div>
                          <script>
                              function updateAcidity() {
                                  $.ajax({
                                      url: '../includes/acid.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function (data) {
                                          $('#acidity .card-title').text(data.acidvalue + ' L/min');
                                          $('#acidity small').html('<i class="' + data.acidicon + '"></i> ' + data.acidvalue_comp + ' L/min');
                                          $('#acidity small').removeClass().addClass(data.acidclass + ' fw-semibold');
                                      },
                                      error: function (error) {
                                          console.error('Error updating water flow:', error);
                                      }
                                  });
                              }

                              setInterval(updateAcidity, 100);
                          </script>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <a href="https://www.ro-system.org/wp-content/uploads/2021/07/total-dissolved-solids-chart.jpg" target="_blank" title="Click me for conversion">
                                <img src="../assets/img/icons/unicons/atom.png" alt="Credit Card" class="rounded" />
                              </a>
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt1"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <h3>Total Dissolved Solids</h3>
                                    <table class="chartTable">
                                        <tr>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Readings</th>
                                        </tr>
                                        <?php foreach ($data_tchart as $row): ?>
                                            <tr>
                                                <td><?php echo date('m/d/Y', strtotime($row['tds_cdate'])); ?></td>
                                                <td><?php echo date('h:i a', strtotime($row['tds_cdate'])); ?></td>
                                                <td><?php echo $row['tds_readings']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </table>
                                </a>
                                <!-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> -->
                              </div>
                            </div>
                          </div>
                          <div id="tds">
                              <span class="fw-semibold d-block mb-1">TDS</span>
                              <h5 class="card-title mb-2"><?php echo $tdsvalue; ?> ppm</h5>
                              <small class="<?php echo $tdsclass; ?> fw-semibold"><i class="<?php echo $tdsicon; ?>"></i><?php echo $tdsvalue_comp; ?> ppm</small>
                          </div>
                          <script>
                              function updateTds() {
                                  $.ajax({
                                      url: '../includes/tds.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function (data) {
                                          $('#tds .card-title').text(data.tdsvalue + ' L/min');
                                          $('#tds small').html('<i class="' + data.tdsicon + '"></i> ' + data.tdsvalue_comp + ' L/min');
                                          $('#tds small').removeClass().addClass(data.tdsclass + ' fw-semibold');
                                      },
                                      error: function (error) {
                                          console.error('Error updating water flow:', error);
                                      }
                                  });
                              }

                              setInterval(updateTds, 100);
                          </script>
                        </div>
                      </div>
                    </div>
                    <!-- </div>
    <div class="row"> -->
                    <div class="col-12 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title">
                                <h5 class="text-nowrap mb-2">Temperature</h5>
                                <span class="badge bg-label-warning rounded-pill"><?php echo $tempcdate; ?></span>
                              </div>
                              <div class="mt-sm-auto" id="temperature">
                                <small class="<?php echo $tempclass; ?> text-nowrap fw-semibold"
                                  ><i class="<?php echo $tempicon; ?>"></i> <?php echo $tempvalue_comp; ?> °C</small
                                >
                                <h3 class="mb-0"><?php echo $tempvalue; ?> °C</h3>
                              </div>
                              <script>
                                  function updateTemperature() {
                                      $.ajax({
                                          url: '../includes/temperature.php',
                                          type: 'GET',
                                          dataType: 'json',
                                          success: function (data) {
                                              var temperatureContent = data.tempvalue + ' °C';

                                              $('#temperature h3').text(temperatureContent);

                                              $('#temperature small').html('<i class="' + data.tempicon + '"></i> ' + data.tempvalue_comp + ' °C');

                                              $('#temperature small').removeClass().addClass(data.tempclass + ' text-nowrap fw-semibold');
                                          },
                                          error: function (error) {
                                              console.error('Error updating water flow:', error);
                                          }
                                      });
                                  }

                                  setInterval(updateTemperature, 100);
                              </script>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  | Capstonics
                </div>
                <div>
                 
                  <a
                    href="#"
                    target="_blank"
                    class="footer-link me-4"
                    >Data & SMS Available: 4gb and 300 SMS</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- chart -->
    <script>
      /**
       * Dashboard Analytics
       */

      'use strict';

      (function () {
        let cardColor, headingColor, axisColor, shadeColor, borderColor;

        cardColor = config.colors.white;
        headingColor = config.colors.headingColor;
        axisColor = config.colors.axisColor;
        borderColor = config.colors.borderColor;

        // Total Revenue Report Chart - Bar Chart
        // --------------------------------------------------------------------
        const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
          totalRevenueChartOptions = {
            series: [
              {
                name: 'Average Water Condition',
                data: [18, 7, 15, 29]
              }
            ],
            chart: {
              height: 300,
              stacked: true,
              type: 'bar',
              toolbar: { show: false }
            },
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: '33%',
                borderRadius: 12,
                startingShape: 'rounded',
                endingShape: 'rounded'
              }
            },
            colors: [config.colors.primary, config.colors.info],
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'smooth',
              width: 6,
              lineCap: 'round',
              colors: [cardColor]
            },
            legend: {
              show: true,
              horizontalAlign: 'left',
              position: 'top',
              markers: {
                height: 8,
                width: 8,
                radius: 12,
                offsetX: -3
              },
              labels: {
                colors: axisColor
              },
              itemMargin: {
                horizontal: 10
              }
            },
            grid: {
              borderColor: borderColor,
              padding: {
                top: 0,
                bottom: -8,
                left: 20,
                right: 20
              }
            },
            xaxis: {
              categories: ['Jan - Mar', 'Apr - Jun', 'Jul - Sep', 'Oct - Dec'],
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              },
              axisTicks: {
                show: false
              },
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              }
            },
            responsive: [
              {
                breakpoint: 1700,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '32%'
                    }
                  }
                }
              },
              {
                breakpoint: 1580,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '35%'
                    }
                  }
                }
              },
              {
                breakpoint: 1440,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '42%'
                    }
                  }
                }
              },
              {
                breakpoint: 1300,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '48%'
                    }
                  }
                }
              },
              {
                breakpoint: 1200,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '40%'
                    }
                  }
                }
              },
              {
                breakpoint: 1040,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 11,
                      columnWidth: '48%'
                    }
                  }
                }
              },
              {
                breakpoint: 991,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '30%'
                    }
                  }
                }
              },
              {
                breakpoint: 840,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '35%'
                    }
                  }
                }
              },
              {
                breakpoint: 768,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '28%'
                    }
                  }
                }
              },
              {
                breakpoint: 640,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '32%'
                    }
                  }
                }
              },
              {
                breakpoint: 576,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '37%'
                    }
                  }
                }
              },
              {
                breakpoint: 480,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '45%'
                    }
                  }
                }
              },
              {
                breakpoint: 420,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '52%'
                    }
                  }
                }
              },
              {
                breakpoint: 380,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '60%'
                    }
                  }
                }
              }
            ],
            states: {
              hover: {
                filter: {
                  type: 'none'
                }
              },
              active: {
                filter: {
                  type: 'none'
                }
              }
            }
          };
        if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
          const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
          totalRevenueChart.render();
        }
      //------------------------------------------------------------------------------------------------
        const totalRevenueChartEl2 = document.querySelector('#totalRevenueChart2'),
          totalRevenueChartOptions2 = {
            series: [
              {
                name: 'Average Water Condition',
                data: [18, 7, 15, 29]
              }
            ],
            chart: {
              height: 300,
              stacked: true,
              type: 'bar',
              toolbar: { show: false }
            },
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: '33%',
                borderRadius: 12,
                startingShape: 'rounded',
                endingShape: 'rounded'
              }
            },
            colors: [config.colors.primary, config.colors.info],
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'smooth',
              width: 6,
              lineCap: 'round',
              colors: [cardColor]
            },
            legend: {
              show: true,
              horizontalAlign: 'left',
              position: 'top',
              markers: {
                height: 8,
                width: 8,
                radius: 12,
                offsetX: -3
              },
              labels: {
                colors: axisColor
              },
              itemMargin: {
                horizontal: 10
              }
            },
            grid: {
              borderColor: borderColor,
              padding: {
                top: 0,
                bottom: -8,
                left: 20,
                right: 20
              }
            },
            xaxis: {
              categories: ['7:30 AM', '11:30 AM', '3:30 PM', '7:30 PM'],
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              },
              axisTicks: {
                show: false
              },
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              }
            },
            responsive: [
              {
                breakpoint: 1700,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '32%'
                    }
                  }
                }
              },
              {
                breakpoint: 1580,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '35%'
                    }
                  }
                }
              },
              {
                breakpoint: 1440,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '42%'
                    }
                  }
                }
              },
              {
                breakpoint: 1300,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '48%'
                    }
                  }
                }
              },
              {
                breakpoint: 1200,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '40%'
                    }
                  }
                }
              },
              {
                breakpoint: 1040,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 11,
                      columnWidth: '48%'
                    }
                  }
                }
              },
              {
                breakpoint: 991,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '30%'
                    }
                  }
                }
              },
              {
                breakpoint: 840,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '35%'
                    }
                  }
                }
              },
              {
                breakpoint: 768,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '28%'
                    }
                  }
                }
              },
              {
                breakpoint: 640,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '32%'
                    }
                  }
                }
              },
              {
                breakpoint: 576,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '37%'
                    }
                  }
                }
              },
              {
                breakpoint: 480,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '45%'
                    }
                  }
                }
              },
              {
                breakpoint: 420,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '52%'
                    }
                  }
                }
              },
              {
                breakpoint: 380,
                options: {
                  plotOptions: {
                    bar: {
                      borderRadius: 10,
                      columnWidth: '60%'
                    }
                  }
                }
              }
            ],
            states: {
              hover: {
                filter: {
                  type: 'none'
                }
              },
              active: {
                filter: {
                  type: 'none'
                }
              }
            }
          };
        
        if (typeof totalRevenueChartEl2 !== undefined && totalRevenueChartEl2 !== null) {
            const totalRevenueChart2 = new ApexCharts(totalRevenueChartEl2, totalRevenueChartOptions2);
            totalRevenueChart2.render();
        }
      //---------------------------------------------------------------------------------------------
      const totalRevenueChartEl3 = document.querySelector('#totalRevenueChart3'),
      totalRevenueChartOptions3 = {
        series: [
          {
            name: 'Average Water Condition',
            data: [18, 7, 15, 29]
          }
        ],
        chart: {
          height: 300,
          stacked: true,
          type: 'bar',
          toolbar: { show: false }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '33%',
            borderRadius: 12,
            startingShape: 'rounded',
            endingShape: 'rounded'
          }
        },
        colors: [config.colors.primary, config.colors.info],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth',
          width: 6,
          lineCap: 'round',
          colors: [cardColor]
        },
        legend: {
          show: true,
          horizontalAlign: 'left',
          position: 'top',
          markers: {
            height: 8,
            width: 8,
            radius: 12,
            offsetX: -3
          },
          labels: {
            colors: axisColor
          },
          itemMargin: {
            horizontal: 10
          }
        },
        grid: {
          borderColor: borderColor,
          padding: {
            top: 0,
            bottom: -8,
            left: 20,
            right: 20
          }
        },
        xaxis: {
          categories: ['2020', '2021', '2022', '2023'],
          labels: {
            style: {
              fontSize: '13px',
              colors: axisColor
            }
          },
          axisTicks: {
            show: false
          },
          axisBorder: {
            show: false
          }
        },
        yaxis: {
          labels: {
            style: {
              fontSize: '13px',
              colors: axisColor
            }
          }
        },
        responsive: [
          {
            breakpoint: 1700,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '32%'
                }
              }
            }
          },
          {
            breakpoint: 1580,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '35%'
                }
              }
            }
          },
          {
            breakpoint: 1440,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '42%'
                }
              }
            }
          },
          {
            breakpoint: 1300,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '48%'
                }
              }
            }
          },
          {
            breakpoint: 1200,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '40%'
                }
              }
            }
          },
          {
            breakpoint: 1040,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 11,
                  columnWidth: '48%'
                }
              }
            }
          },
          {
            breakpoint: 991,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '30%'
                }
              }
            }
          },
          {
            breakpoint: 840,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '35%'
                }
              }
            }
          },
          {
            breakpoint: 768,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '28%'
                }
              }
            }
          },
          {
            breakpoint: 640,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '32%'
                }
              }
            }
          },
          {
            breakpoint: 576,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '37%'
                }
              }
            }
          },
          {
            breakpoint: 480,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '45%'
                }
              }
            }
          },
          {
            breakpoint: 420,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '52%'
                }
              }
            }
          },
          {
            breakpoint: 380,
            options: {
              plotOptions: {
                bar: {
                  borderRadius: 10,
                  columnWidth: '60%'
                }
              }
            }
          }
        ],
        states: {
          hover: {
            filter: {
              type: 'none'
            }
          },
          active: {
            filter: {
              type: 'none'
            }
          }
        }
      };


      if (typeof totalRevenueChartEl3 !== undefined && totalRevenueChartEl3 !== null) {
        const totalRevenueChart3 = new ApexCharts(totalRevenueChartEl3, totalRevenueChartOptions3);
        totalRevenueChart3.render();
      }
      //---------------------------------------------------------------------------------------------
        // Growth Chart - Radial Bar Chart
        // --------------------------------------------------------------------
        const growthChartEl = document.querySelector('#growthChart'),
          growthChartOptions = {
            series: [50],
            labels: ['Medium'],
            chart: {
              height: 240,
              type: 'radialBar'
            },
            plotOptions: {
              radialBar: {
                size: 150,
                offsetY: 10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                  size: '55%'
                },
                track: {
                  background: cardColor,
                  strokeWidth: '100%'
                },
                dataLabels: {
                  name: {
                    offsetY: 15,
                    color: headingColor,
                    fontSize: '15px',
                    fontWeight: '600',
                    fontFamily: 'Public Sans'
                  },
                  value: {
                    offsetY: -25,
                    color: headingColor,
                    fontSize: '22px',
                    fontWeight: '500',
                    fontFamily: 'Public Sans'
                  }
                }
              }
            },
            colors: [config.colors.primary],
            fill: {
              type: 'gradient',
              gradient: {
                shade: 'dark',
                shadeIntensity: 0.5,
                gradientToColors: [config.colors.primary],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 0.6,
                stops: [30, 70, 100]
              }
            },
            stroke: {
              dashArray: 5
            },
            grid: {
              padding: {
                top: -35,
                bottom: -10
              }
            },
            states: {
              hover: {
                filter: {
                  type: 'none'
                }
              },
              active: {
                filter: {
                  type: 'none'
                }
              }
            }
          };
        if (typeof growthChartEl !== undefined && growthChartEl !== null) {
          const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
          growthChart.render();
        }

        // Profit Report Line Chart
        // --------------------------------------------------------------------
        const profileReportChartEl = document.querySelector('#profileReportChart'),
          profileReportChartConfig = {
            chart: {
              height: 80,
              // width: 175,
              type: 'line',
              toolbar: {
                show: false
              },
              dropShadow: {
                enabled: true,
                top: 10,
                left: 5,
                blur: 3,
                color: config.colors.warning,
                opacity: 0.15
              },
              sparkline: {
                enabled: true
              }
            },
            grid: {
              show: false,
              padding: {
                right: 8
              }
            },
            colors: [config.colors.warning],
            dataLabels: {
              enabled: false
            },
            stroke: {
              width: 5,
              curve: 'smooth'
            },
            series: [
              {
                name: "Readings", 
                data: [110, 270, 145, 245, 205, 285]
              }
            ],
            xaxis: {
              show: false,
              lines: {
                show: false
              },
              labels: {
                show: false
              },
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              show: false
            }
          };
        if (typeof profileReportChartEl !== undefined && profileReportChartEl !== null) {
          const profileReportChart = new ApexCharts(profileReportChartEl, profileReportChartConfig);
          profileReportChart.render();
        }
      })();

    </script>
  </body>
</html>
