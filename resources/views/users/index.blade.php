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

                    </td>
                    <td>
                        <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection

