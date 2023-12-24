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
                <div data-i18n="Tables">Log Book</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="../analytics/analytics.php" class="menu-link" target="_blank">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                <div data-i18n="Tables">Analytics</div>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hydroponics /</span> Overall Water Condition</h4>
              <div style="padding-bottom: 10px;">
                <button id="downloadBtn" class="btn btn-md btn-primary"><i class="fa-solid fa-download"></i> Download CSV</button>
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table card-table">
                  <thead>
                    <tr>
                      <th>Time & Date</th>
                      <th>Readings</th>
                      <th>Average</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[0]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[0]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[0]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[0]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[0]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[0]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[0]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[0]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[1]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[1]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[1]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[1]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[1]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[1]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[1]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[1]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[2]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[2]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[2]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[2]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[2]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[2]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[2]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[2]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[3]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[3]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[3]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[3]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[3]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[3]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[3]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[3]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[4]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[4]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[4]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[4]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[4]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[4]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[4]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[4]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[5]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[5]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[5]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[5]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[5]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[5]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[5]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[5]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[6]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[6]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[6]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[6]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[6]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[6]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[6]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[6]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[7]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[7]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[7]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[7]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[7]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[7]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[7]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[7]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                    <tr>
                      <td><i class= text-danger "></i> <strong><?php echo $temperaturedate[8]; ?></strong></td>
                      <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Acidity: pH of <?php echo $data_acid[8]; ?>"
                          >
                            <img src="../assets/img/icons/unicons/flask.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Total Dissolved Solids: <?php echo $data_tds[8]; ?> ppm"
                          >
                            <img src="../assets/img/icons/unicons/atom.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Water Temperature: <?php echo $data_temp[8]; ?>°C"
                          >
                            <img src="../assets/img/icons/unicons/thermometer.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterflow: <?php echo $data_flow[8]; ?> L/m"
                          >
                            <img src="../assets/img/icons/unicons/flow.png" alt="sensor" class="rounded-circle" />
                          </li>
                          <li
                            data-bs-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-bs-placement="top"
                            class="avatar avatar-xs pull-up"
                            title="Waterlevel: <?php echo $data_level[8]; ?> m"
                          >
                            <img src="../assets/img/icons/unicons/tide.png" alt="sensor" class="rounded-circle" />
                          </li>

                        
                        </ul>
                      </td>
                      <td><?php echo round($averages[8]['average']); ?>%</td>
                      <td><span class="badge bg-label-primary me-1"><?php echo $averages[8]['label']; ?></span></td>
                      <td>Add Solution & Increase Water Flow</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--/ Table within card -->
            <!-- / Content -->
            <!-- Footer -->
            
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

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
        document.getElementById('downloadBtn').addEventListener('click', function() {
            // Trigger the download by making a request to the PHP script
            window.location.href = '../download.php';
        });
    </script>
  </body>
</html>
