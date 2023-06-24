@extends('layouts.admin_dash')

@section('content')
    
    <div class="admin-card">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($members as $item)
                <tr>
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @php
                            switch ($item->role) {
                                case 1:
                                    echo "<h2><span class='badge bg-secondary'>New</span></h2>";
                                    break;
                                case 2:
                                    echo "<h2><span class='badge bg-secondary'>New</span></h2>";
                                    break;
                                case 3:
                                    echo "<h2><span class='badge bg-secondary'>New</span></h2>";
                                    break;
                                
                                default:                                    
                                    break;
                            }
                        @endphp

                    </td>
                    <td>Action</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

