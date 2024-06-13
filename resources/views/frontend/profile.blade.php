@extends('layouts.frontend.app')
@section('content')
    <button style="text-align: center; background-color:rgb(45, 150, 96)">
        <a href="{{ route('user.viwedeletAccount') }}" style="color: aliceblue">

            <i class="ace-icon bx bx-power-off"></i>
            Delete Account
        </a>

    </button>
    <button style="text-align: center; background-color:rgb(45, 150, 96)">
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
            style="color: aliceblue">

            <i class="ace-icon bx bx-power-off"></i>
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </button>

    <style>
        .circle-icon {
            font-family: 'BoxIcons';
            font-weight: normal;
            --size: 20px;
            /* قم بتغيير هذا القيمة حسب الحاجة */
        }
    </style>
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <span>
                    <img alt="Alex's Avatar" id="avatar2" src="{{ asset('dashboard/assets/avatars/profile-pic.jpg') }}" />
                </span>
                <div class="profile-contact-links align-left">
                    <a href="{{ route('user.edit') }}" class="btn btn-link">
                        <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                        Modify information
                    </a>




                </div>



            </div><!-- /.col -->

            <div class="col-2 ">
                <h4 class="blue">
                    <span class="middle">{{ $user->name }}</span>

                    <span style="color: green" class="circle-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25">
                            <circle cx="10" cy="10" r="8" fill="#008000" />
                        </svg>
                        online
                    </span>
                </h4>

                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <h2> Username </h2>

                        <div class="profile-info-value">
                            <span>{{ $user->name }}</span>
                        </div>
                    </div>



                    <div class="profile-info-row">
                        <h2> gender </h2>

                        <div class="profile-info-value">
                            <span>{{ $user->gender }}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <h2> phone </h2>

                        <div class="profile-info-value">
                            <span>{{ $user->phone }}</span>
                        </div>
                    </div>

                    <div class="profile-info-row">
                        <h2> email</h2>

                        <div class="profile-info-value">
                            <span>{{ $user->email }}</span>
                        </div>
                    </div>
                </div>


            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
@endsection
