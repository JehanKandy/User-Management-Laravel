@extends('layouts.admin_dash')

@section('content')

    <div class="admin-card">
        <form action="{{ url('users/' .$members->id) }}" method="POST">
            <h3>Name : <b> {{ $members->name }} </b></h3><br><br>
            <h5>Email : {{ $members->email }}</h5>
            
        </form>
    </div>

@endsection