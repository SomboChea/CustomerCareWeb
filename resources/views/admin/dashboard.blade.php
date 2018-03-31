@extends("layouts.app")

@section("title", "Dashboard")

@section("content")

    <!-- top bar navigation -->
    <div class="headerbar">

      <!-- LOGO -->
      <div class="headerbar-left">
        <a href="index.html" class="logo">
          <img alt="Logo" src="assets/images/logo.png" />
          <span>CC DEMO</span>
        </a>
      </div>
      <!-- End LOGO -->

      <!-- Navbar [Menu] -->
      <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">

          <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa fa-fw fa-envelope-o"></i>
              <span class="notif-bullet"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
              
              <!-- item-->
              <div class="dropdown-item noti-title">
                <h5>
                  <small>
                    <span class="label label-danger pull-xs-right">12</span>Contact Messages</small>
                </h5>
              </div>

              <!-- item-->
              <a href="#" class="dropdown-item notify-item">
                <p class="notify-details ml-0">
                  <b>Jokn Doe</b>
                  <span>New message received</span>
                  <small class="text-muted">2 minutes ago</small>
                </p>
              </a>

              <!-- All-->
              <a href="#" class="dropdown-item notify-item notify-all">
                View All
              </a>

            </div>
          </li>

          <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="fa fa-fw fa-bell-o"></i>
              <span class="notif-bullet"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
              
              <!-- item-->
              <div class="dropdown-item noti-title">
                <h5>
                  <small>
                    <span class="label label-danger pull-xs-right">5</span>Allerts</small>
                </h5>
              </div>

              <!-- item-->
              <a href="#" class="dropdown-item notify-item">
                <div class="notify-icon bg-faded">
                  <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                </div>
                <p class="notify-details">
                  <b>John Doe</b>
                  <span>User registration</span>
                  <small class="text-muted">3 minutes ago</small>
                </p>
              </a>

              <!-- All-->
              <a href="#" class="dropdown-item notify-item notify-all">
                View All Allerts
              </a>

            </div>
          </li>

          <li class="list-inline-item dropdown notif">
            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <!-- item-->
              <div class="dropdown-item noti-title">
                <h5 class="text-overflow">
                  <small>Hello, admin</small>
                </h5>
              </div>

              <!-- item-->
              <a href="pro-profile.html" class="dropdown-item notify-item">
                <i class="fa fa-user"></i>
                <span>Profile</span>
              </a>

              <!-- item-->
              <a href="#" class="dropdown-item notify-item">
                <i class="fa fa-power-off"></i>
                <span>Logout</span>
              </a>

              <!-- item-->
              <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                <i class="fa fa-external-link"></i>
                <span>Pike Admin</span>
              </a>
            </div>
          </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
          <li class="float-left">
            <button class="button-menu-mobile open-left">
              <i class="fa fa-fw fa-bars"></i>
            </button>
          </li>
        </ul>

      </nav>
      <!-- End Navbar [Menu] -->

    </div>
    <!-- End top bar Navigation -->


    <!-- Left Sidebar -->
    <div class="left main-sidebar">

      <div class="sidebar-inner leftscroll">

        <!-- Side bar [Menu] -->
        <div id="sidebar-menu">
          <ul>
            <li class="submenu">
              <a class="active" href="index.html">
                <i class="fa fa-fw fa-bars"></i>
                <span> Dashboard </span>
              </a>
            </li>
            <li class="submenu">
              <a href="charts.html">
                <i class="fa fa-fw fa-area-chart"></i>
                <span> Charts </span>
              </a>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="fa fa-fw fa-table"></i>
                <span> Tables </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="tables-basic.html">Basic Tables</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="fa fa-fw fa-tv"></i>
                <span> User Interface </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="ui-alerts.html">Alerts</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="fa fa-fw fa-file-text-o"></i>
                <span> Forms </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="forms-general.html">General Elements</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="fa fa-fw fa-th"></i>
                <span> Plugins </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="star-rating.html">Star Rating</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <i class="fa fa-fw fa-image"></i>
                <span> Images and Galleries </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="media-fancybox.html">
                    <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <span class="label radius-circle bg-danger float-right">20</span>
                <i class="fa fa-fw fa-copy"></i>
                <span> Example Pages </span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="page-pricing-tables.html">Pricing Tables</a>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#">
                <span class="label radius-circle bg-primary float-right">9</span>
                <i class="fa fa-fw fa-indent"></i>
                <span> Menu Levels </span>
              </a>
              <ul>
                <li class="submenu">
                  <a href="#">
                    <span>Third Level</span>
                    <span class="menu-arrow"></span>
                  </a>
                  <ul style="">
                    <li>
                      <a href="#">
                        <span>Third Level Item</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a class="pro" href="#">
                <i class="fa fa-fw fa-google"></i>
                <span> Admin Pro </span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="list-unstyled">
                <li>
                  <a href="pro-settings.html">Settings</a>
                </li>
                <li>
                  <a href="pro-profile.html">My Profile</a>
                </li>
                <li>
                  <a href="pro-users.html">Users</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <!-- End Side bar [Menu] -->

        <div class="clearfix"></div>

      </div>

    </div>
    <!-- End Left Sidebar -->


    <div class="content-page">

      <!-- Start content -->
      <div class="content">


        <div class="container-fluid">

          <!-- Dashboard row -->
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-holder">
                <h1 class="main-title float-left">Dashboard</h1>
                <ol class="breadcrumb float-right">
                  <li class="breadcrumb-item">Home</li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- end Dashboard row -->

          <!-- Statistic row -->
          <div class="row">

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card-box noradius noborder bg-default">
                <i class="fa fa-file-text-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">All Called</h6>
                <h1 class="m-b-20 text-white counter">1,587</h1>
                <span class="text-white">Today 15 New</span>
              </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card-box noradius noborder bg-warning">
                <i class="fa fa-bar-chart float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Visitors</h6>
                <h1 class="m-b-20 text-white counter">250</h1>
                <span class="text-white">Bounce rate: 25%</span>
              </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card-box noradius noborder bg-info">
                <i class="fa fa-user-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Users</h6>
                <h1 class="m-b-20 text-white counter">120</h1>
                <span class="text-white">25 New Users</span>
              </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card-box noradius noborder bg-danger">
                <i class="fa fa-bell-o float-right text-white"></i>
                <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
                <h1 class="m-b-20 text-white counter">58</h1>
                <span class="text-white">5 New Alerts</span>
              </div>
            </div>

          </div>
          <!-- end Statistic row -->


          <!-- Chart JS -->
          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-line-chart"></i> Product Sold</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet
                  sollicitudin.
                </div>

                <div class="card-body">
                  <canvas id="lineChart"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
              <!-- end card-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-bar-chart-o"></i> All Mom</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet
                  sollicitudin.
                </div>

                <div class="card-body">
                  <canvas id="pieChart"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
              <!-- end card-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-bar-chart-o"></i> Top Sources</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet
                  sollicitudin.
                </div>

                <div class="card-body">
                  <canvas id="doughnutChart"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
              <!-- end card-->
            </div>

          </div>
          <!-- end row -->


          <div class="row">

            <!-- Data Table -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-users"></i> Top Customers</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet
                  sollicitudin.
                </div>

                <div class="card-body">

                  <table id="example1" class="table table-bordered table-responsive-xl table-hover display">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
              <!-- end card-->
            </div>

            <!-- Tasks Progress -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-phone"></i> Calling Progress</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>

                <div class="card-body">

                  <p class="font-600 m-b-5">Task 1
                    <span class="text-primary pull-right">
                      <b>95%</b>
                    </span>
                  </p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95"
                      aria-valuemin="0" aria-valuemax="95"></div>
                  </div>

                  <div class="m-b-20"></div>

                  <p class="font-600 m-b-5">Task 3
                    <span class="text-info pull-right">
                      <b>75%</b>
                    </span>
                  </p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="75"></div>
                  </div>
                  <div class="m-b-20"></div>

                  <p class="font-600 m-b-5">Task 5
                    <span class="text-warning pull-right">
                      <b>68%</b>
                    </span>
                  </p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68"
                      aria-valuemin="0" aria-valuemax="68"></div>
                  </div>

                  <div class="m-b-20"></div>

                  <p class="font-600 m-b-5">Task 7
                    <span class="text-danger pull-right">
                      <b>55%</b>
                    </span>
                  </p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="55"></div>
                  </div>

                  
                </div>
                <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
              </div>
              <!-- end card-->
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
              <div class="card mb-3">
                <div class="card-header">
                  <h3>
                    <i class="fa fa-envelope-o"></i> Latest messages</h3>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>

                <div class="card-body">

                  <div class="widget-messages nicescroll" style="height: 400px;">
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">John Doe</p>
                        <p class="message-item-msg">Hello. I want to buy your product</p>
                        <p class="message-item-date">11:50 PM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Ashton Cox</p>
                        <p class="message-item-msg">Great job for this task</p>
                        <p class="message-item-date">14:25 PM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Colleen Hurst</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">13:20 PM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Fiona Green</p>
                        <p class="message-item-msg">Nice to meet you</p>
                        <p class="message-item-date">15:45 PM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Donna Snider</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar5.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Garrett Winters</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar6.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Herrod Chandler</p>
                        <p class="message-item-msg">Hello! I'm available for this job</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Jena Gaines</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar2.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Airi Satou</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                    <a href="#">
                      <div class="message-item">
                        <div class="message-user-img">
                          <img src="assets/images/avatars/avatar10.png" class="avatar-circle" alt="">
                        </div>
                        <p class="message-item-user">Brielle Williamson</p>
                        <p class="message-item-msg">I have a new project for you</p>
                        <p class="message-item-date">15:45 AM</p>
                      </div>
                    </a>
                  </div>

                </div>
                <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
              </div>
              <!-- end card-->
            </div>

          </div>

        </div>
        <!-- END container-fluid -->

      </div>
      <!-- END content -->

    </div>
    <!-- END content-page -->

    <footer class="footer">
      <span class="text-right">
        Copyright
        <a target="_blank" href="#">Your Website</a>
      </span>
      <span class="float-right">
        Powered by
        <a target="_blank" href="https://www.pikeadmin.com">
          <b>Pike Admin</b>
        </a>
      </span>
    </footer>

@endsection()