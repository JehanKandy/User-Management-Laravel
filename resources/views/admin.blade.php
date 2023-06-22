@extends('layouts.admin_dash')


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="row">
    <div class="col-lg-4">
        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-user-tie icon-admin'></i></div>
                <div class="col-lg-6">Admins</div>
                <div class="col-lg-2">50</div>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="admin-card">
            <i class='fas fa-user-tie icon-admin' ></i>
            <p class="title-card">Admins</p>
            <p class="body-card">50</p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="admin-card">
            <i class='fas fa-user-tie icon-admin' ></i>
            <p class="title-card">Admins</p>
            <p class="body-card">50</p>
    </div>
</div>


@endsection
