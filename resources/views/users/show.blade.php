@extends('layouts.admin_dash')


@section('content')
    <div class="card-admin">
        <h3>Name : <b> {{ $members->name }} </b></h3>
    </div>
@endsection