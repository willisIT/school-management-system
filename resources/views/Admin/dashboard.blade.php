<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rapid School Management System | Admin Dashboard</title>
  <!-- plugins:css -->

  <link rel="stylesheet" href="{{ URL::asset('vendors/mdi/css/materialdesignicons.min.css'); }}">

  <link rel="stylesheet" href="{{ URL::asset('vendors/base/vendor.bundle.base.css'); }} ">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png'); }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body{
      font-family: 'Comfortaa', cursive;
    }
    .mdi {
      color:white;
    }
    .nav-link{
      color:white;
    }
    .menu-title{
      font-family: 'Comfortaa', cursive;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" >
            <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: black;">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100" >
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/rap.png" style="width:30px" alt="logo"/><span style="font-size: 10px;color:white"> <b>Rapid School Management</b></span></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #FF5733 ;">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100" >

              <span><b style="color:white">Rapid School Management System</b></span>

          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/user.png" alt="profile"/>
              <span class="nav-profile-name" style="color:white"><strong>{{$data->FirstName}} {{$data->LastName}}</strong></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{url('logout')}}">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->



      <nav class="sidebar sidebar-offcanvas" id="sidebar" sy>
        <ul class="nav">
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-graduation menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM School</b></span>
              <i style="color: white;" class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="color: white;">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item" style="color:white"><a class="nav-link" href="" style="color:white" > <b>Dashboard</b></a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">inquries</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">settings</a></li>
                <li class="nav-item" style="color:white">  <a class="nav-link" href="" style="color:white">Logs</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Leave Request</a></li>
                <li class="nav-item" style="color:white"> <a class="nav-link" href="" style="color:white">Live Classes</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bxs-school menu-icon'></i>
              <span class="menu-title" style=" font-family: 'Comfortaa', cursive;"><b>SM Adminstrator</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="" style="color:white">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="{{url('/account-admin-page')}}" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-wallet-alt menu-icon'></i>
              <span class="menu-title">SM Accounting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('account-admin-page')}}">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class='bx bx-book-reader menu-icon'></i>
              <span class="menu-title">SM Examination</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">SM Transport</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item"style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title"><b>SM Academics</b></span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Dashboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Income</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expenses</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Fee Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bulk Invoice Print</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title"><b>SM Library</b></span>
            </a>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Account</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="border: none;">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title"><b>School Manager</b></span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            @if (Session::has('success'))
              <span style="background-color: rgb(0, 255, 106); color:black">{{Session::get('success')}}</span> <br>
            @endif

          @if (Session::has('fail'))
              <span style="background-color: rgb(255, 0, 0); color:black">{{Session::get('fail')}}</span> <br>
          @endif

            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h5>Welcome back,</h5>
                    <p class="mb-md-0"><span class="badge badge-pill  badge-primary">{{$data->usertype}}</span></p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Admin Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-dark mb-0 hover-cursor"><b>{{$data->School}}</b></p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>

                  <button style="margin-right: 10px;" class="btn btn-outline-primary mt-2 mt-xl-0" ><a href="{{url('student-register')}}">Add student</a></button>

                  <button style="background-color: #FF5733;color:white;" class="btn mt-2 mt-xl-0" data-toggle="modal" data-target="#exampleModal"><strong>create class</strong></button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="{{route('create-class')}}" method="POST">
                          @csrf
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"><strong>create class</strong></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                              <label for="exampleInputEmail1">class name</label>
                              <input type="text" class="form-control" style="border: 1px blue solid;" id="Class" name="Class" aria-describedby="emailHelp" placeholder="Enter class name">
                              <small id="emailHelp" class="form-text text-muted"><strong>name of class should be in smallcase letters only!</strong></small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Total Students</label>
                              <input type="number" style="border: 1px blue solid;" class="form-control" id="classSize" name="Size" placeholder="Total number" value="0" readonly>
                            </div>



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" style="background-color: #FF5733;color:white;" class="btn"><strong><a style="color:white;text-decoration:none">create class</a></strong></button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Summary 1</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Summary 2</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Summary 3</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class='bx bxs-school icon-lg mr-3 text-primary' ></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><b>Total Classes</b></small>
                            <h5 class="mr-2 mb-0">12</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                           <i class='bx bx-intersect  mr-3 icon-lg text-danger' ></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><b>Total Sections</b></small>
                            <h5 class="mr-2 mb-0">12</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                         <i class='bx bxs-user-badge mr-3 icon-lg text-success' ></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><b>Total Students</b></small>
                            <h5 class="mr-2 mb-0">98</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><b>Active Students</b></small>
                            <h5 class="mr-2 mb-0">22</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-wallet mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted"><b>Total Payment</b></small>
                            <h5 class="mr-2 mb-0">GHS 345.00</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Active inquries</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Start date</small>
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium" href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                <a class="dropdown-item" href="#">12 Aug 2018</a>
                                <a class="dropdown-item" href="#">22 Sep 2018</a>
                                <a class="dropdown-item" href="#">21 Oct 2018</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Revenue</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total views</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Active inquries</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary"><strong>Receive Payment</strong></a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer" style="background-color:WHITE;">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a style="color:black; font-family: 'Comfortaa', cursive;" target="_blank">Rapid School Management System</a>. All rights reserved.</span>
            <span style="color: BLACK; font-family: 'Comfortaa', cursive;" class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class='bx bx-lock-alt'></i> <b>All-In-One School Management System</b></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ URL::asset('vendors/base/vendor.bundle.base.js'); }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ URL::asset('vendors/chart.js/Chart.min.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js'); }}"></script>

  <!-- inject:js -->
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js'); }}"></script>
  <script src="{{ URL::asset('js/template.js'); }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('js/dashboard.js'); }}"></script>
  <script src="{{ URL::asset('js/data-table.js'); }}"></script>
  <script src="{{ URL::asset('js/jquery.dataTables.js'); }}"></script>
  <script src="{{ URL::asset('js/dataTables.bootstrap4.js'); }}"></script>

  <!-- End custom js for this page-->
</body>

</html>

