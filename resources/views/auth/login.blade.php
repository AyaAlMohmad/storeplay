@extends('layouts.app')

@section('content')
    <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>
                    Please Enter Your Information
                </h4>

                <div class="space-6"></div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <fieldset>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" placeholder="email" name="email" />
                                <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="password" class="form-control" placeholder="Password" name="password" />
                                <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">
                            <label class="inline">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"> Remember Me</span>
                            </label>

                            <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-key"></i>
                                <span class="bigger-110">Login</span>
                            </button>
                        </div>

                        <div class="space-4"></div>
                    </fieldset>
                </form>

                <div class="social-or-login center">
                    <span class="bigger-110">Or Login Using</span>
                </div>

                <div class="space-6"></div>

                <div class="social-login center">
                    <a class="btn btn-primary">
                        <i class="ace-icon fa fa-facebook"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="ace-icon fa fa-twitter"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="ace-icon fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <!-- /.widget-main -->

            <div class="toolbar clearfix" style="background: #5090C1;
        border-top: 2px solid #597597;">
               
                    <div>
                        <a href="{{ route('password.request') }}" style="color: #FE9; margin-left: 11px;"
                            class="forgot-password-link">
                            <i class="ace-icon fa fa-arrow-left"></i>
                            I forgot my password
                        </a>

                    </div>
                
                <div>
                    <a href="{{ route('register') }}" class="user-signup-link">
                        I want to register
                        <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.widget-body -->
    </div>
@endsection
