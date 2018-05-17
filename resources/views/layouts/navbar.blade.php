<!-- top bar navigation -->
<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
      <a href="{{ route('dashboard') }}" class="logo">
        <img alt="Logo" src="{{ asset(env('APP_STATIC_LOGO')) }}" />
        <span>Tel-Marketing</span>
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
          <div class=" dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">

            <!-- item-->
            <div class="alert-first dropdown-item noti-title">
              <h5>
                <small>
                  <span class="alert_count label label-danger pull-xs-right">0</span>Allerts</small>
              </h5>
            </div>




            <!-- item-->
            <script>
       // TODO
       var count=0;
             $.ajax({
                  url:"{{ route('api.alert') }}",
                  method:"Get",
                  error:function(){
                    alert("err")
                  },
                  success:function(data){

                    $.each(data,function(index,element){

                        if(count>4)
                          return;

                        var itm= '<a href="#" class="dropdown-item notify-item">\
                            <div class="notify-icon bg-faded">\
                              <img src="assets/images/avatars/admin.jpg" alt="img" class="rounded-circle img-fluid"></div>\
                            <p class="notify-details">\
                              <b>'+element.Mom_name+'</b>\
                              <small class="text-muted">Call Date : '+element.Expect_Call_Date+'</small>\
                            </p>\
                          </a>';
                          count++;

                        $(itm).insertAfter(".alert-first");
                        //$(".alert_navbar").append(itm);
                        $(".alert_count").text(count);


                    });
                    //alert(count);
                    console.log(count);
                    if(count==0){

                      $("<p class='text-center'>No Alert</p>").insertAfter(".alert-first");
                    }
                  }
                });

              </script>

            <!-- All-->
            <a href="" class="text-center dropdown-item notify-item notify-all">
              View All Allerts
            </a>

          </div>
        </li>

        <li class="list-inline-item dropdown notif">
          <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <img src="{{asset('assets/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
          </a>
          <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
            <!-- item-->
            <div class="dropdown-item noti-title">
              <h5 class="text-overflow">
                <small>Hello, {{Session::get('username')}}</small>
              </h5>
            </div>

            <!-- item-->
            <a href="pro-profile.html" class="dropdown-item notify-item">
              <i class="fa fa-user"></i>
              <span>Profile</span>
            </a>

            <!-- item-->
            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
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
