<header class="header">
    <div class="logo">
        <a href="{{ route('front') }}" style="color:inherit;" >   <i class="bx bx-football " style="color:#e5e5e5;font-size: 48px; "></i> </a>

    </div>
    <nav class="headbar">

        <ul>
            <li><a href="{{ route('front') }}">Home</a></li>
            <li> <span class="dropdown">
                <a href="#">Products</a>
               
                    <span class="bx bx-caret-down cart-dwon"></span>
                    <div class="dropdown-content">
                        @foreach ($headerCategory as $category)
                        <a href="{{ route('product.index',$category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </span>
            </li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('service') }}">Service</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="{{ route('user.order') }}"> <i class="bx bx-cart"></i></a>
        <a href="{{ route('user') }}"> <i class="bx bx-user-circle"></i></a>
        <i class="bx bx-list-ul menu-icon"></i>
    </div>
</header>
