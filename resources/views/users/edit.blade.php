@extends('layouts.admin_dash')

@section('content')

    <div class="admin-card">
        <form action="{{ url('users/' .$members->id) }}" method="POST">
            {!! csrf_field() !!}
            @method("PATCH")
            <h3>Name : <b> {{ $members->name }} </b></h3><br><br>
            <h5>Email : {{ $members->email }}</h5>
            <h5>User Type : 
                @php
                    switch ($members->role) {
                        case 1:
                            echo "<h4><span class='badge bg-danger'>Admin</span></h4>";
                            break;
                        case 2:
                            echo "<h4><span class='badge bg-warning'>Staff</span></h4>";
                            break;
                        case 3:
                            echo "<h4><span class='badge bg-success'>Client</span></h4>";
                            break;
                        
                        default:                                    
                            break;
                    }
                @endphp
            </h5>

            <input type="radio" name="role" value="1">Admin <br>
            <input type="radio" name="role" value="2">Staff <br>
            <input type="radio" name="role" value="3">Client <br>

            <input type="submit" value="Update" class="btn btn-success">

        </form>
    </div>

@endsection