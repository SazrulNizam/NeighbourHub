<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->

  <head>
    <title>Home | NeighbourHUB</title>

    
@vite([
    'resources/assets/css/style.css',
    'resources/assets/fonts/material.css',
    'resources/assets/fonts/fontawesome.css',
    'resources/assets/fonts/feather.css',
    'resources/assets/fonts/tabler-icons.min.css',
    'resources/assets/fonts/phosphor/duotone/style.css',
    'resources/assets/js/script.js',
    
   
])

    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies."
    />
    <meta
      name="keywords"
      content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard"
    />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />

     <!-- [Font] Family -->
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="../assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="../assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header flex items-center py-4 px-6 h-header-height">
      <a href="../dashboard/index.html" class="b-brand flex items-center gap-3">
        <!-- ========   Change your logo from here   ============ -->
        <img src="../assets/images/logo-white.svg" class="img-fluid logo logo-lg" alt="logo" />
        <img src="../assets/images/favicon.svg" class="img-fluid logo logo-sm" alt="logo" />
      </a>
    </div>
    <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Navigation</label>
        </li>
        <li class="pc-item">
        <li class="pc-item">
        <a href="{{ route('welcome') }}" class="pc-link {{ Route::is('welcome') ? 'active' : '' }}">
  <span class="pc-micon">
    <i data-feather="home"></i>
  </span>
  <span class="pc-mtext">Dashboard</span>
</a>

        </li>
        <li class="pc-item pc-caption">
          <label>UI Components</label>
          <i data-feather="feather"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/bc_color.html" class="pc-link">
            <span class="pc-micon"> <i data-feather="edit"></i></span>
            <span class="pc-mtext">Manage Visitor</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../booking/facility.html" class="pc-link">
            <span class="pc-micon"> <i data-feather="plus-circle"></i></span>
            <span class="pc-mtext">Facility Booking</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../elements/icon-feather.html" class="pc-link">
            <span class="pc-micon"> <i data-feather="info"></i></span>
            <span class="pc-mtext">Announcement</span>
          </a>
        </li>

        <!-- <li class="pc-item pc-caption"> 
          <label>Pages</label>
          <i data-feather="monitor"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../pages/login-v1.html" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="../pages/register-v1.html" class="pc-link" target="_blank">
            <span class="pc-micon"> <i data-feather="user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>-->
        <li class="pc-item pc-caption">
          <label>Other</label>
          <i data-feather="sidebar"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
              class="pc-mtext">Menu levels</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="../other/sample-page.html" class="pc-link">
            <span class="pc-micon">
              <i data-feather="sidebar"></i>
            </span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup lg:hidden">
      <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
        <i data-feather="menu"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-2 py-1">
          <input type="search" class="form-control !border-0 !shadow-none" placeholder="Search here. . ." />
        </form>
      </div>
    </li>
  </ul>
</div>


<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="sun"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i data-feather="moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i data-feather="sun"></i>
          <span>Light</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i data-feather="settings"></i>
          <span>Default</span>
        </a>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="settings"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item">
          <i class="ti ti-user"></i>
          <span>My Account</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-settings"></i>
          <span>Settings</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-headset"></i>
          <span>Support</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-lock"></i>
          <span>Lock Screen</span>
        </a>
        <a href="#!" class="dropdown-item">
          <i class="ti ti-power"></i>
          <span>Logout</span>
        </a>
      </div>
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="bell"></i>
        <span class="badge bg-success-500 text-white rounded-full z-10 absolute right-0 top-0">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown p-2">
        <div class="dropdown-header flex items-center justify-between py-4 px-5">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body header-notification-scroll relative py-4 px-5"
          style="max-height: calc(100vh - 215px)">
          <p class="text-span mb-3">Today</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                
                <div class="grow">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">Weekly Maintenance</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                
                <div class="grow">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">Message</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span mb-3 mt-4">Yesterday</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
                
                <div class="grow ms-3">
                  <span class="float-end text-sm text-muted">2 hour ago</span>
                  <h5 class="text-body mb-2">Forms</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="card mb-2">
            <div class="card-body">
              <div class="flex gap-4">
               
                <div class="grow ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of
                    type and scrambled it to make a type
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="text-danger-500 hover:text-danger-600 focus:text-danger-600 active:text-danger-600">
            Clear all Notifications
          </a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
        <i data-feather="user"></i>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
        <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
          <div class="flex mb-1 items-center">
            <div class="shrink-0">
              <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="w-10 rounded-full" />
            </div>
            <div class="grow ms-3">
              <h6 class="mb-1 text-white">{{ Auth::user()->name }}</h6>
              <span class="text-white">{{ Auth::user()->email }}</span>
              
            </div>
          </div>
        </div>
        <div class="dropdown-body py-4 px-5">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-setting-outline"></use>
                </svg>
                <span>Settings</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-share-bold"></use>
                </svg>
                <span>Share</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
            </a>
            <div class="grid my-3">
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-primary flex items-center justify-center" 
        onclick="event.preventDefault(); this.closest('form').submit();">
        <svg class="pc-icon me-2 w-[22px] h-[22px]">
            <use xlink:href="#custom-logout-1-outline"></use>
        </svg>
        Logout
    </button>
</form>


            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div></div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
          <div class="page-block">
            <div class="page-header-title">
              <h5 class="mb-0 font-medium">Default</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page">Default</li>
            </ul>
          </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Announcements</h5>
    </div>
    <div class="card-body space-y-4 mt-4">
      
      <!-- One announcement item -->
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          
          <div>
            <p class="m-0">Weekly Maintenance</p>

          </div>
        </div>
        <div class="flex items-center space-x-2 text-sm">
          <span class="w-2.5 h-2.5 rounded-full bg-green-400"></span>
          <span class="text-gray-600">11 MAY 12:56</span>
        </div>
      </div>

      <!-- Another item -->
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          
          <div>
            <p class="m-0">Tennis Court Opening</p>
            
          </div>
        </div>
        <div class="flex items-center space-x-2 text-sm">
          <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
          <span class="text-gray-600">11 MAY 10:35</span>
        </div>
        
      </div>
    </div>
  </div>
</div>

          <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Upcoming Visitor</h5>
    </div>
    <div class="card-body">
      <div class="flex items-center justify-between gap-3 flex-wrap">
        <h3 class="font-light flex items-center mb-0">
           <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
          Bella
        </h3>
        <p class="mb-0 text-sm text-gray-500">Checked in: <span class="font-medium">11 May 12:56 PM</span></p>
        
         
      </div>

      <div class="mt-6 text-right">
        <a href="/add-visitor" class="bg-info-500 text-white text-sm px-4 py-1.5 rounded hover:bg-info-600">
          + Add Visitor
        </a>
      </div>
    </div>
  </div>
</div>




          <div class="col-span-12 xl:col-span-4">
  <div class="card">
    <div class="card-header !pb-0 !border-b-0">
      <h5>Facility</h5>
    </div>
    <div class="card-body">
      <div class="flex items-center justify-between gap-3 flex-wrap">
        <h3 class="font-light flex items-center mb-0">
          <i class="feather icon-calendar text-primary-500 text-[30px] mr-1.5"></i>
          Futsal Court
        </h3>
        <p class="mb-0 text-sm text-gray-500">Available: <span class="text-green-600 font-medium">3 slots today</span></p>
      </div>

      <div class="mt-6 flex justify-between items-center">
        <p class="text-sm text-gray-600">Next booking: <span class="font-semibold">4:00 PM - 5:00 PM</span></p>
        <a href="../booking/facility.html" class="bg-primary-500 text-white text-sm px-3 py-1.5 rounded hover:bg-primary-600">
  Book Now
</a>
      </div>
    </div>
  </div>
</div>

         
         
          
  <div class="col-span-12 xl:col-span-4 md:col-span-6">
  <div class="card user-list">
    <div class="card-header">
      <h5>Complaint Log</h5>
    </div>

    
    <div class="card-body">
  <ul class="space-y-3 text-sm text-gray-700">
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-danger mr-2"></i>
        <span class="text-base">Noise complaint - Unit A3-12</span>
      </div>
      <span class="text-base text-gray-500">Today</span>
    </li>
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-warning mr-2"></i>
        <span class="text-base">Lift malfunction - Block B</span>
      </div>
      <span class="text-base text-gray-500">25 May</span>
    </li>
    <li class="flex justify-between">
      <div class="flex items-center">
        <i class="feather icon-alert-circle text-info mr-2"></i>
        <span class="text-base">Water leakage - Lobby</span>
      </div>
      <span class="text-base text-gray-500">24 May</span>
    </li>
  </ul>

  <div class="mt-6 text-right">
    <a href="/complaints" class="bg-danger-500 text-white text-sm px-4 py-1.5 rounded hover:bg-danger-600">
      View All
    </a>
  </div>
</div>

  </div>
</div>

          <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card table-card">
              <div class="card-header">
                <h5>Recent Visitor</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Isabella Christensen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            11 MAY 12:56
                          </h6>
                        </td>
                        
                      </tr>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-2.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Mathilde Andersen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-danger text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            11 MAY 10:35
                          </h6>
                        </td>
                        
                      </tr>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="../assets/images/user/avatar-3.jpg" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Karla Sorensen</h6>
                          <p class="m-0">One Time Pass</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            9 MAY 17:38
                          </h6>
                        </td>
                        
                      </tr>
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid mx-10">
        <div class="grid grid-cols-12 gap-1.5">
          
          
        </div>
      </div>
    </footer>
 
    <!-- Required Js -->

<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/icon/custom-icon.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/component.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>


    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

    
    <script>
      layout_change('false');
    </script>
     
    
    <script>
      layout_theme_sidebar_change('dark');
    </script>
    
     
    <script>
      change_box_container('false');
    </script>
     
    <script>
      layout_caption_change('true');
    </script>
     
    <script>
      layout_rtl_change('false');
    </script>
     
    <script>
      preset_change('preset-1');
    </script>
     
    <script>
      main_layout_change('vertical');
    </script>
    

  </body>
  <!-- [Body] end -->
</html>
