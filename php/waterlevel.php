<?php include "../chartdata.php"; ?>
<?php include "../data_ret.php"; ?>
<?php include "../average.php"; ?>
<?php include "../includes/chartdata.php"; ?>
<?php
$chart_flow_data = array();
$chart_categories = array();

foreach ($temperaturedate as $index => $date) {
    $chart_categories[] = $date;
    if (isset($data_fchart[$index])) {
        $chart_flow_data[] = $data_lchart[$index]['level_readings'];
    } else {
        $chart_flow_data[] = 'N/A';
    }
}
$query_a_temp = "SELECT AVG(temp_readings) AS average_temp FROM temperature";
$result_a_temp = mysqli_query($conn, $query_a_temp);
$a_temp = "";
if ($result_a_temp && mysqli_num_rows($result_a_temp) > 0) {
    $arow = mysqli_fetch_assoc($result_a_temp);
    $a_temp = $arow['average_temp'];
} else {
    echo "No data";
}

$query_a_ph = "SELECT AVG(acid_readings) AS average_acid FROM acidity";
$result_a_ph = mysqli_query($conn, $query_a_ph);
$a_ph = "";
if ($result_a_ph && mysqli_num_rows($result_a_ph) > 0) {
    $phrow = mysqli_fetch_assoc($result_a_ph);
    $a_ph = $phrow['average_acid'];
} else {
    echo "No data";
}

$query_tds_ph = "SELECT AVG(tds_readings) AS average_tds FROM total_dissolved_solids";
$result_tds_ph = mysqli_query($conn, $query_tds_ph);
$tds_ph = "";
if ($result_tds_ph && mysqli_num_rows($result_tds_ph) > 0) {
    $tdsrow = mysqli_fetch_assoc($result_tds_ph);
    $tds_ph = $tdsrow['average_tds'];
} else {
    echo "No data";
}

$query_f_ph = "SELECT AVG(flow_readings) AS average_flow FROM waterflow";
$result_f_ph = mysqli_query($conn, $query_f_ph);
$f_ph = "";
if ($result_f_ph && mysqli_num_rows($result_f_ph) > 0) {
    $frow = mysqli_fetch_assoc($result_f_ph);
    $f_ph = $frow['average_flow'];
} else {
    echo "No data";
}

$query_l_ph = "SELECT AVG(level_readings) AS average_level FROM waterlevel";
$result_l_ph = mysqli_query($conn, $query_l_ph);
$l_ph = "";
if ($result_f_ph && mysqli_num_rows($result_f_ph) > 0) {
    $lrow = mysqli_fetch_assoc($result_l_ph);
    $l_ph = $lrow['average_level'];
} else {
    echo "No data";
}
?>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hydroponics /</span> Four-hourly Water Level Readings</h4>
              <select id="monthDropdown" class="form-select form-select-sm mb-5" >
                              <option value="Day">Four-hourly</option>
                              <option value="Month">Monthly</option>
                              <option value="Year">Yearly</option>
              </select>
              <div id="chartContainer" class="px-2">
                  <div id="totalRevenueChart2" class="px-2"></div>
                  <div class="px-2" id="totalRevenueChart" style="display: none;"></div>
                  <div class="px-2" id="totalRevenueChart3" style="display: none;"></div>
              </div>
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
                          echo '<td>' . $data_lchart[$index]['level_readings'] . ' m'.'</td>';
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
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script>
        new DataTable('#datatables');
    </script>
    <script>
      monthDropdown.addEventListener("change", function () {
      const selectedOption = monthDropdown.value;

      totalRevenueChart.style.display = "none";
      totalRevenueChart2.style.display = "none";
      totalRevenueChart3.style.display = "none";

      setTimeout(function () {
        if (selectedOption === "Month") {
          totalRevenueChart.style.display = "block";
        } else if (selectedOption === "Day") {
          totalRevenueChart2.style.display = "block";
        } else if (selectedOption === "Year") {
          totalRevenueChart3.style.display = "block";
        }
      }, 10);
    });
    </script>
    <script>
      /**
       * Dashboard Analytics
       */

      'use strict';

      (function () {
        let cardColor, headingColor, axisColor, shadeColor, borderColor;

        cardColor = config.colors.shadeColor;
        headingColor = config.colors.headingColor;
        axisColor = config.colors.axisColor;
        borderColor = config.colors.borderColor;

        // Total Revenue Report Chart - Bar Chart
        // --------------------------------------------------------------------
        const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
          totalRevenueChartOptions = {
            series: [
              {
                name: 'Average Water Level(%)',
                data: [0, 0, 0, <?php echo json_encode($l_ph); ?>, 0 ,0 ,0 ,0 ,0 ,0 ,0 ,0]
              }
            ],
            chart: {
              height: 250,
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
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
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
                name: 'Water Level',
                data: <?php echo json_encode($chart_flow_data); ?>
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
              categories: <?php echo json_encode($chart_categories); ?>,
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
            name: 'Average Water Level(%)',
            data: [<?php echo json_encode($l_ph); ?>]
          }
        ],
        chart: {
          height: 250,
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
          categories: ['2024'],
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
            series: [1,2,3,4],
            labels: ['Water Condtion'],
            chart: {
              height: 300,
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
            colors: [config.colors.success],
            fill: {
              type: 'gradient',
              gradient: {
                shade: 'dark',
                shadeIntensity: 0.5,
                gradientToColors: [config.colors.danger],
                inverseColors: false,
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
              height: 155,
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
                data: [1,2,3,4]
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
