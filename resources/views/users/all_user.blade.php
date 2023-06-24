@extends('layouts.admin_dash')

@section('content')
    
    <div class="admin-card">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    
                @endforeach
            </tbody>
        </table>
    </div>


@endsection

