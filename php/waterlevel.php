<?php include "../chartdata.php"; ?>
<?php include "../data_ret.php"; ?>
<?php include "../average.php"; ?>
<?php include "../includes/chartdata.php"; ?>
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

    <link rel="icon" type="image/x-icon" href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
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
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
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
                    <div data-i18n="Account">Fourly Readings</div>
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
            <li class="menu-item">
              <a href="../analytics/analytics.php" class="menu-link" target="_blank">
                <i class="menu-icon tf-icons bx bx-line-chart"></i>
                <div data-i18n="Tables">Analytics</div>
              </a>
            </li>
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
        <div class="layout-page">
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
              <ul class="navbar-nav flex-row align-items-center ms-auto">
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
                      <a class="dropdown-item" href="../logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hydroponics /</span> Fourly Water Level Readings</h4>
              <div class="table-responsive text-nowrap">
                <table id="datatables" class="table card-table">
                  <thead>
                    <tr>
                      <th>Date & Time</th>
                      <th>Readings</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php                   
                    foreach ($temperaturedate as $index => $date) {
                        echo '<tr>';
                        echo '<td><i class="text-danger"></i> <strong>' . $date . '</strong></td>';
                        if (isset($data_lchart[$index])) {
                          echo '<td>' . $data_lchart[$index]['level_readings'] . '</td>';
                        } else {
                          echo '<td>N/A</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/report-main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#datatables');
    </script>
  </body>
</html>
