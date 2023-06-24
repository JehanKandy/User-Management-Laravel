@extends('layouts.admin_dash')

@section('content')
    
    <div class="admin-card">
        <table class="table">
            <thead class="tabel-primary">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($members as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->role }}</td>
                    <td>Action</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

