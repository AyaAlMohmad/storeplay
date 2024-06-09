@extends('layouts.frontend.app')
@section('content')
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <span>
                    <img alt="Alex's Avatar" id="avatar2" src="{{ asset('dashboard/assets/avatars/profile-pic.jpg') }}" />
                </span>




            </div><!-- /.col -->

            <div class="col-2 ">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf

                    <div class="profile-user-info">
                        <div class="profile-info-row">
                            <h2> Username </h2>

                            <div>
                                <input type="text" name="name" value="{{ $user->name }}">
                            </div>
                        </div>



                        <div class="profile-info-row">
                            <h2> gender </h2>

                            <div>
                                <input type="text" name="gender" value="{{ $user->gender }}">
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <h2> phone </h2>

                            <div>
                                <input type="number" name="phone" value="{{ $user->phone }}">
                            </div>
                        </div>

                        <div class="profile-info-row">
                            <h2> email</h2>

                            <div>
                                <input type="email" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="profile-info-row">
                            <h2> password</h2>

                            <div>
                                <input type="password" name="passwoed">
                            </div>
                        </div>
                    </div>
                    <div class="profile-contact-links align-left">
                        <button type="submit" class="btn btn-link">
                            <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                            Modify
                        </button>




                    </div>
                </form>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div>
@endsection
