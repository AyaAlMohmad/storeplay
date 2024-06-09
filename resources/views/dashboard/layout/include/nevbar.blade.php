<div class="navbar-container" id="navbar-container">

    <!-- /section:basics/sidebar.mobile.toggle -->
    <div class="navbar-header pull-left">
        <!-- #section:basics/navbar.layout.brand -->
        <a href="#" class="navbar-brand">
            <small>
                <i class="ace-icon fa fa-globe white"></i>
             Sport Store
            </small>
        </a>

    </div>

    <!-- #section:basics/navbar.dropdown -->
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
   
            @if ($module_name != 'dash' && $method_name == 'index')
                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span >Activity</span>
                    </a>

                    <ul
                        class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li>


                            @if ($method_name == 'index' && in_array('create', $module_actions))
                                <a href="{{ route($module_name . '.create') }}" class="btn btn-primary btn-xs" ><i
                                        class="ace-icon fa fa-plus"></i> Create item</a>
                        </li>
            @endif
            @if ($method_name == 'index' && in_array('destroy', $module_actions))
                <li>
                    <a href="{{ route($module_name . '.soft') }}" class="btn btn-xs btn-danger"><i
                            class="ace-icon dripicons-trash bigger-120"></i> Recycle Bin</a>
                </li>
            @endif
        


        </ul>
        @endif
        </li>
        @if ($method_name != 'index' )
        <li class="btn btn-danger btn-sm">
        
            <a href="{{ route($module_name . '.index') }}" class="btn btn-danger btn-sm">
           <i class=" ace-icon fa fa-reply icon-only "style="font-size: 30px;"></i>
        </a>
     
        </li>
        @endif
        <!-- #section:basics/navbar.user_menu -->
        <li class="light-blue">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="{{ asset('dashboard/assets/avatars/user.jpg') }}"
                    alt="Jason's Photo" />
                <span class="user-info">
                    <small>Welcome,</small>
                    {{ Auth::user()->name }}
                </span>

                <i class="ace-icon fa fa-caret-down"></i>
            </a>

            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
          

           

                <li class="divider"></li>

                <li>
                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                          
                        <i class="ace-icon fa fa-power-off"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

        <!-- /section:basics/navbar.user_menu -->
        </ul>
    </div>

    <!-- /section:basics/navbar.dropdown -->
</div><!-- /.navbar-container -->
