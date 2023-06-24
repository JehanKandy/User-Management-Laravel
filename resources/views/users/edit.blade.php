@extends('layouts.admin_dash')

@section('content')

    <div class="admin-card">
        <form action="{{ url('users/' .$members->id) }}" method="POST">
            
        </form>
    </div>

@endsection