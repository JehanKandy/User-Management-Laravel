@extends('layouts.admin_dash')


@section('content')
    <div class="admin-card">
        <h3>Name : <b> {{ $members->name }} </b></h3><br><br>
        <h5>Email : {{ $members->email }}</h5>
    </div>
@endsection