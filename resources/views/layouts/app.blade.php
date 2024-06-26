<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Auth</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/font-awesome.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace-fonts.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace.css') }}" />

    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace-rtl.css') }}" />





</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <i class="ace-icon fa fa-globe green"></i>
                           
                                <span class="red">Sport Store</span>
                                <span class="white" id="id-text2">Weights &</span>
                            </h1>
                            <h4 class="blue" id="id-company-text">&copy;   Sports mechanisms</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            @yield('content')
                            <!-- /.login-box -->

                            
                            <!-- /.forgot-box -->

                           
                            <!-- /.signup-box -->
                        </div>
                        <!-- /.position-relative -->

                        <div class="navbar-fixed-top align-right">
                            <br />
                            &nbsp;
                            <a id="btn-login-dark" href="#">Dark</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-blur" href="#">Blur</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-light" href="#">Light</a>
                            &nbsp; &nbsp; &nbsp;
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.main-content -->
    </div>
    
    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery ||
            document.write(
                "<script src='{{ asset('dashboard/assets/js/jquery.js') }}'>" + "<" + "/script>"
            );
    </script>

  
    <script type="text/javascript">
        if ("ontouchstart" in document.documentElement)
            document.write(
                "<script src='{{ asset('dashboard/assets/js/jquery.mobile.custom.js') }}'>" +
                "<" +
                "/script>"
            );
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on("click", ".toolbar a[data-target]", function(e) {
                e.preventDefault();
                var target = $(this).data("target");
                $(".widget-box.visible").removeClass("visible"); //hide others
                $(target).addClass("visible"); //show target
            });
        });

        //you don't need this, just used for changing background
        jQuery(function($) {
            $("#btn-login-dark").on("click", function(e) {
                $("body").attr("class", "login-layout");
                $("#id-text2").attr("class", "white");
                $("#id-company-text").attr("class", "blue");

                e.preventDefault();
            });
            $("#btn-login-light").on("click", function(e) {
                $("body").attr("class", "login-layout light-login");
                $("#id-text2").attr("class", "grey");
                $("#id-company-text").attr("class", "blue");

                e.preventDefault();
            });
            $("#btn-login-blur").on("click", function(e) {
                $("body").attr("class", "login-layout blur-login");
                $("#id-text2").attr("class", "white");
                $("#id-company-text").attr("class", "light-blue");

                e.preventDefault();
            });
        });
    </script>
</body>

</html>
