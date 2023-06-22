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
    <div class="col-lg-4"><div class="admin-card"><i class='fab fa-accessible-icon' style='font-size:48px'></i>hi all</div></div>
    <div class="col-lg-4"><div class="admin-card">hi all</div></div>
    <div class="col-lg-4"><div class="admin-card">hi all</div></div>
</div>


@endsection
