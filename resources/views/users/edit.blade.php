@extends('layouts.admin_dash')

@section('content')

    <div class="admin-card">
        <form action="{{ url('users/' .$members->id) }}" method="POST">
            <h3>Name : <b> {{ $members->name }} </b></h3><br><br>
            <h5>Email : {{ $members->email }}</h5>

            <input type="radio" name="role" value="1">Admin <br>
            <input type="radio" name="role" value="2">Staff <br>
            <input type="radio" name="role" value="3">Client <br>

            <input type="submit" value="Update" class="btn btn-success">

        </form>
    </div>

@endsection