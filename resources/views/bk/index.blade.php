@extends('layouts.main')

@section('content')
<div class="row mt-4">
  <div class="col-sm-4 col-xs-12">
    <div class="card">
      <div class="card-body p-3 position-relative">
        <div class="row">
          <div class="col-7 text-start">
            <p class="text-sm mb-1 text-capitalize font-weight-bold">Total Kasus</p>
            <h5 class="font-weight-bolder mb-0">
              38 Kasus
            </h5>
            <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+22 <span class="font-weight-normal text-secondary">sejak tahun ajaran lalu</span></span>
          </div>
          <div class="col-5">
            <div class="dropdown text-end">
              <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-xs text-secondary">2021-2022</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-xs-12">
    <div class="card">
      <div class="card-body p-3 position-relative">
        <div class="row">
          <div class="col-7 text-start">
            <p class="text-sm mb-1 text-capitalize font-weight-bold">Kasus Selesai</p>
            <h5 class="font-weight-bolder mb-0">
              32 Kasus
            </h5>
            <span class="text-sm text-end text-danger font-weight-bolder mt-auto mb-0">-2 <span class="font-weight-normal text-secondary">sejak tahun ajaran lalu</span></span>
          </div>
          <div class="col-5">
            <div class="dropdown text-end">
              <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-xs text-secondary">2021-2022</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-xs-12">
    <div class="card">
      <div class="card-body p-3 position-relative">
        <div class="row">
          <div class="col-7 text-start">
            <p class="text-sm mb-1 text-capitalize font-weight-bold">Kasus belum selesai</p>
            <h5 class="font-weight-bolder mb-0">
              6 Kasus
            </h5>
            <span class="text-sm text-end text-success font-weight-bolder mt-auto mb-0">+2 <span class="font-weight-normal text-secondary">sejak tahun ajaran lalu</span></span>
          </div>
          <div class="col-5">
            <div class="dropdown text-end">
              <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-xs text-secondary">2021-2022</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="dropdownUsers1">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7 days</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last week</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30 days</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="card" style="height: 380px;">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-0">Kelas Kasus Siswa</h6>
            <!-- <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
              <i class="material-icons text-sm">priority_high</i>
            </button> -->
          </div>
        </div>
        <div class="card-body pb-0 p-3 mt-4">
          <div class="row">
            <div class="col-7 text-start">
              <div class="chart">
                <canvas id="chart-pie" class="chart-canvas" height="400" width="199" style="display: block; box-sizing: border-box; height: 200px; width: 99.7px;"></canvas>
              </div>
            </div>
            <div class="col-5 my-auto">
              <span class="badge badge-md badge-dot me-4 d-block text-start">
                <i style="background-color: #4f2122;"></i>
                <span class="text-dark text-xs">Siswa Kelas X</span>
              </span>
              <span class="badge badge-md badge-dot me-4 d-block text-start">
                <i style="background-color: #3A416A;"></i>
                <span class="text-dark text-xs">Siswa Kelas XI</span>
              </span>
              <span class="badge badge-md badge-dot me-4 d-block text-start">
                <i style="background-color: #aa7a2c;"></i>
                <span class="text-dark text-xs">Siswa Kelas XII</span>
              </span>
            </div>
          </div>
        </div>
        <!-- <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
          <div class="w-60">
            <p class="text-sm">
              More than <b>1,200,000</b> sales aare made using referral marketing, and <b>700,000</b> are from social media.
            </p>
          </div>
          <div class="w-40 text-end">
            <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a>
          </div>
        </div> -->
      </div>
    </div>
    <div class="col-lg-8 col-sm-6 col-xs-12">
      <div class="card">
        <div class="card-header pb-0 p-3">
          <div class="d-flex justify-content-between">
            <h6 class="mb-0">Kasus Bulanan</h6>
            <!-- <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
              <i class="material-icons text-sm">priority_high</i>
            </button> -->
          </div>
          <div class="d-flex align-items-center">
            <!-- <span class="badge badge-md badge-dot me-4">
              <i class="bg-primary"></i>
              <span class="text-dark text-xs">Facebook Ads</span>
            </span>
            <span class="badge badge-md badge-dot me-4">
              <i class="bg-dark"></i>
              <span class="text-dark text-xs">Google Ads</span>
            </span> -->
          </div>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="chart-line" class="chart-canvas" height="600" width="480" style="display: block; box-sizing: border-box; height: 300px; width: 240px;"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Kasus</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Siswa</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kasus</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alasan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Skor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-3 py-1">
                      <div>
                        <img src="assets\img\faces\avatar.jpg" class="avatar me-3" alt="image">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Oktaviani Niken Trimaharani</h6>
                        <p class="text-sm font-weight-normal text-secondary mb-0"><span class="">XII IPA 4</span></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-normal mb-0">Merokok didalam kelas</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-sm font-weight-normal mb-0">Asam</p>
                  </td>
                  <td class="align-middle text-end">
                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                      <p class="text-sm font-weight-normal mb-0">13</p>
                      <i class="fa fa-long-arrow-down text-sm ms-1 text-danger"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-3 py-1">
                      <div>
                        <img src="assets\img\faces\user.png" class="avatar me-3" alt="image">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nanang Fauzan Najib</h6>
                        <p class="text-sm font-weight-normal text-secondary mb-0"><span class="">XII IPA 4</span></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-normal mb-0">Merokok didalam kelas</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-sm font-weight-normal mb-0">Bersama Niken</p>
                  </td>
                  <td class="align-middle text-end">
                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                      <p class="text-sm font-weight-normal mb-0">13</p>
                      <i class="fa fa-long-arrow-down text-sm ms-1 text-danger"></i>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-3 py-1">
                      <div>
                        <img src="assets\img\faces\card-profile1-square.jpg" class="avatar me-3" alt="image">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Alif Andi Maryudi</h6>
                        <p class="text-sm font-weight-normal text-secondary mb-0"><span class="">X IPS 2</span></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-normal mb-0">Mematahkan Keran Air</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-sm font-weight-normal mb-0">Tidak sengaja</p>
                  </td>
                  <td class="align-middle text-end">
                    <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                      <p class="text-sm font-weight-normal mb-0">20</p>
                      <!-- <i class="fa fa-long-arrow-up text-sm ms-1 text-success"></i> -->
                      <i class="fa fa-long-arrow-down text-sm ms-1 text-danger"></i>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/chartjs.min.js"></script>
<script>
  var ctx1 = document.getElementById("chart-line").getContext("2d");
  var ctx2 = document.getElementById("chart-pie").getContext("2d");
  // var ctx3 = document.getElementById("chart-bar").getContext("2d");
    // Line chart
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec","Jan","Feb","Mar","Apr", "May", "Jun"],
        datasets: [{
          label: "Kasus",
          tension: 0,
          pointRadius: 5,
          pointBackgroundColor: "#e91e63",
          pointBorderColor: "transparent",
          borderColor: "#e91e63",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [1,7,3,4,0,6,7,10,9,10,2,12],
          maxBarThickness: 6
        },
        {
          label: "Siswa Kelas XII",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "#aa7a2c",
          pointBorderColor: "transparent",
          borderColor: "#aa7a3c",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [1,3,1,1,0,3,0,3,1,3,0,4],
          maxBarThickness: 6
        },

        {
          label: "Siswa Kelas XI",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "#3A416A",
          pointBorderColor: "transparent",
          borderColor: "#3A416A",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [0,3,2,1,0,2,1,3,2,5,1,5],
          maxBarThickness: 6
        },
        {
          label: "Siswa Kelas X",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "#4f2122",
          pointBorderColor: "transparent",
          borderColor: "#4f2122",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [0,1,0,2,0,1,6,4,6,2,1,3],
          maxBarThickness: 6
        }
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: '#c1c4ce5c'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#9ca2b7',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: true,
              borderDash: [5, 5],
              color: '#c1c4ce5c'
            },
            ticks: {
              display: true,
              color: '#9ca2b7',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
    // Pie chart
    new Chart(ctx2, {
      type: "pie",
      data: {
        labels: ['Siswa Kelas X', 'Siswa Kelas XI', 'Siswa Kelas XII'],
        datasets: [{
          label: "Kasus",
          weight: 9,
          cutout: 0,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 1,
          backgroundColor: ['#4f2122', '#3A416A', '#aa7a2c'],
          data: [11, 10, 18],
          fill: false
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });
  </script>
@endsection