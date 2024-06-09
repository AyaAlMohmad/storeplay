<div class="sidebar-shortcuts" id="sidebar-shortcuts">

</div><!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
    <li class="{{ Request::route()->getName() == 'dash.index' ? 'active' : '' }}">
        <a href="{{ route('dash.index') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>



    <li class="{{ Request::route()->getName() == 'abouts.index' ? 'active' : '' }}">

        <a href="{{ route('abouts.index') }}">
            <i class="menu-icon fa  fa-users"></i>
            <span class="menu-text"> About Us </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="{{ Request::route()->getName() == 'socials.index' ? 'active' : '' }}">

        <a href="{{ route('socials.index') }}">
            <i class="menu-icon fa fa-envelope "></i>
            <span class="menu-text"> Social Media </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="{{ Request::route()->getName() == 'services.index' ? 'active' : '' }}">

        <a href="{{ route('services.index') }}">
            <i class="menu-icon fa fa-briefcase "></i>
            <span class="menu-text"> Services </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="{{ Request::route()->getName() == 'categories.index' ? 'active' : '' }}">
        <a href="{{ route('categories.index') }}">

            <i class="menu-icon fa  fa-hdd-o "></i>
            Category
        </a>

        <b class="arrow"></b>
    </li>

    <li class="{{ Request::route()->getName() == 'sub_categories.index' ? 'active' : '' }}">
        <a href="{{ route('sub_categories.index') }}">
            <i class="menu-icon glyphicon glyphicon-list"></i>
            Sub Category
        </a>

        <b class="arrow"></b>
    </li>

    <li class="{{ Request::route()->getName() == 'products.index' ? 'active' : '' }}">
        <a href="{{ route('products.index') }}">
            <i class="menu-icon fa fa-globe  "></i>
            Products
        </a>

        <b class="arrow"></b>
    </li>
    <li class="{{ Request::route()->getName() == 'orders.index' ? 'active' : '' }}">
        <a href="{{ route('orders.index') }}">
            <i class="menu-icon  fa fa-shopping-cart  "></i>
            Order
        </a>

        <b class="arrow"></b>
    </li>
  
</ul><!-- /.nav-list -->

<!-- #section:basics/sidebar.layout.minimize -->
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
        data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
