<div class="footer">
    <div class="container">
        <div class="box">

            <div class="logo">
                <img class="footer-logo" src="assets/images/categories/pngegg(8).png" alt="sport">
            </div>

            <ul class="social">
                @foreach ($socials as $social)
                    <li title="{{ $social->title }}">
                        <a
                            href="{{ Str::startsWith($social->link, 'https://') ? $social->link : Str::of($social->link)->prepend('https://') }}"><i
                                class="bx bxl-{{ $social->type }}"></i></a>
                    </li>
                @endforeach
            


            </ul>
       
        </div>
        <div class="box">
            <ul class="links">
                <li><a href="{{ route('front') }}">Home</a></li>
          
                <li><a href="{{ route('about') }}">About US</a></li>
                <li><a href="{{ route('service') }}">service US</a></li>

            </ul>
        </div>
  
        <div class="col-4">
           
            <p >Success isn't always about greatness. It's about consistency. Consistent
                hard work gains success. Greatness will come.</p>
         
        </div>
    </div>

</div>
