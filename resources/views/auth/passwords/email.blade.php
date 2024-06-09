@extends('layouts.app')

@section('content')
    <div  >
        <div class="widget-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="widget-main">
                <h4 class="header red lighter bigger">
                    <i class="ace-icon fa fa-key"></i>
                    Retrieve Password
                </h4>

                <div class="space-6"></div>
                <p>Enter your email and to receive instructions</p>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <fieldset>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </label>
                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                        <div class="clearfix" >
                            <button  type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                                <i class="ace-icon fa fa-lightbulb-o"></i>
                                <span class="bigger-110">Send Me!</span>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /.widget-main -->

            <div class="toolbar center" style="background: #C16050;
            border-top: 2px solid #976559;
              border-top-width: 2px;
            padding: 9px 18px;
            ">
                <a href="{{ route('login') }}" style="color: #FE9;
                font-size: 14px;
                font-weight: bold;
                text-shadow: 1px 0px 1px rgba(0, 0, 0, 0.25);" class="back-to-login-link">
                    Back to login
                    <i class="ace-icon fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- /.widget-body -->
    </div>
   
@endsection
