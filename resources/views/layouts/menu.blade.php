<!-- Left Sidebar -->
<div class="left main-sidebar">

  <div class="sidebar-inner leftscroll">

    <!-- Side bar [Menu] -->
    <div id="sidebar-menu">
      <ul>
        <li class="submenu">
        <a class="active" href="{{ route('dashboard') }}">
            <i class="fa fa-fw fa-bars"></i>
            <span> Dashboard </span>
          </a>
        </li>
        <li class="submenu">
          <a href="#">
            <i class="fa fa-fw fa-phone"></i>
            <span> Calling Lists </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="list-unstyled">
              <li>
                  <a href="{{ route('admin.call.all') }}">All
                    <span class="label radius-circle bg-danger float-right">30</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('admin.call.new') }}">New
                    <span class="label radius-circle bg-danger float-right">5</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('admin.call.pregnent') }}">Pregnent
                    <span class="label radius-circle bg-primary float-right">10</span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('admin.call.step') }}">Step
                      <span class="label radius-circle bg-warning float-right">15</span>
                  </a>
              </li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">
            <i class="fa fa-fw fa-users"></i>
            <span> Customers </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="list-unstyled">
              <li>
                  <a href="{{ route('admin.customers.new') }}">New</a>
              </li>
              <li>
                  <a href="{{ route('admin.customers.view', ['type'=>'mom']) }}">Mom</a>
              </li>
              <li>
                  <a href="{{ route('admin.customers.view', ['type'=>'kid']) }}">Kid</a>
              </li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">
            <i class="fa fa-fw fa-table"></i>
            <span> Sources </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="list-unstyled">
              <li>
                  <a href="{{ route('admin.sources.new') }}">New</a>
              </li>
              <li>
                  <a href="{{ route('admin.sources.profile',['type'=>'hcp']) }}">Hospital / Clinic</a>
              </li>
              <li>
                  <a href="{{ route('admin.sources.profile',['type'=>'retail']) }}">Retail</a>
              </li>
              <li>
                  <a href="{{ route('admin.sources.profile',['type'=>'pc']) }}">PC</a>
              </li>
              <li>
                  <a href="{{ route('admin.sources.profile',['type'=>'other']) }}">Other</a>
              </li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">
            <i class="fa fa-fw fa-th"></i>
            <span> Products </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="list-unstyled">
            <li>
              <a href="{{ route('admin.product.new') }}">Add New</a>
            </li>
            <li>
              <a href="{{ route('admin.product.view') }}">View All</a>
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a href="#">
            <span class="label radius-circle bg-danger float-right">20</span>
            <i class="fa fa-fw fa-copy"></i>
            <span> Reports </span>
          </a>
          <ul class="list-unstyled">
            <li>
              <a href="{{ route('admin.reports.all') }}">All</a>
            </li>
            <li>
              <a href="#">Daily</a>
            </li>
            <li>
              <a href="#">Weekly</a>
            </li>
          </ul>
        </li>
        <li class="submenu">
            <a href="#">
              <i class="fa fa-fw fa-user"></i>
              <span> Users </span>
              <span class="menu-arrow"></span>
            </a>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ route('admin.users.new') }}">New user</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.view') }}">View all</a>
                </li>
                <li>
                    <a href="{{ route('admin.users.roles') }}">Roles</a>
                </li>
            </ul>
          </li>
        <li class="submenu">
          <a href="#">
            <span class="label radius-circle bg-primary float-right">9</span>
            <i class="fa fa-fw fa-indent"></i>
            <span> Preferences </span>
          </a>
          <ul>
            <li class="submenu">
              <a href="#">
                <span>Alerts</span>
                <span class="menu-arrow"></span>
              </a>
              <ul style="">
                <li>
                  <a href="#">
                    <span>Pregnent</span>
                  </a>
                </li>
                <li>
                    <a href="#">
                      <span>Step</span>
                    </a>
                  </li>
              </ul>
            </li>
            <li>
                <a href="#">Web Setting</a>
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
