@extends('layouts.frontend.app')

@section('content')

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif

            <!-- Adjust the form method to DELETE -->
            <form action="{{ route('user.deletAccount') }}" method="POST">
                @csrf
             
                <div class="profile-user-info">
                    <div class="profile-info-row">
                        <h2> Email</h2>
                        <div>
                            <input type="email" name="email">
                        </div>
                    </div>
                    <div class="profile-info-row">
                        <h2> Password</h2>
                        <div>
                            <input type="password" name="password"> <!-- Fixed typo in "passwoed" -->
                        </div>
                    </div>
                </div>
                <div class="profile-contact-links align-left">
                    <button type="submit" class="btn btn-link">
                        <i class="ace-icon fa fa-minus-circle bigger-120 red"></i> <!-- Changed icon to indicate deletion -->
                        Delete Account
                    </button>
                </div>
            </form>
        </div><!-- /.row -->
    </div>
</div>

@endsection
