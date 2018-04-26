<!-- top bar navigation -->
<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
      <a href="admin" class="logo">
        <img alt="Logo" src="{{ env('APP_STATIC_LOGO') }}" />
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

        <li class=" list-inline-item dropdown notif">
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
            <script>
            
             $.ajax({
                  url:"api/alert",
                  method:"Get",
                  success:function(data){
                    data.forEach(function(element,index,arr){
                      
                      $.get("/api/name/"+element.mom_id,function(name){
                        var itm= '<a href="#" class="dropdown-item notify-item">\
                            <div class="notify-icon bg-faded">\
                              <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid"></div>\
                            <p class="notify-details">\
                              <b>'+name+'</b>\
                              <span>User registration</span>\
                              <small class="text-muted">'+element.created_date+'</small>\
                            </p>\
                          </a>';
                        $(".alert_navbar").append(itm);
                      })
                      
                    });
                  }
                });
            
              </script>

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