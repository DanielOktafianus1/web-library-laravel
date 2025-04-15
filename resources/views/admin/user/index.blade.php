@extends('admin.base')
@section('title', 'USER CONTROL')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class=" table-primary">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if (isset($user) && $user->gender == 1)
                                <i class="bi bi-gender-male"></i> {{ 'Male' }}
                            @elseif (isset($user) && $user->gender == 2)
                                <i class="bi bi-gender-female"></i> {{ 'Female' }}
                            @else
                                {{ 'Not a human' }}
                            @endif
                        </td>
                        <td>
                            @if (isset($user) && $user->level == 1)
                                <span class="badge text-bg-warning">{{ 'Cashier' }}</span>
                            @elseif (isset($user) && $user->level == 2)
                                <span class="badge text-bg-success">{{ 'Admin' }}</span>
                            @elseif (isset($user) && $user->level == 3)
                                <span class="badge bg-primary"> {{ 'Administrator' }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning mb-1">Edit</a>
                            <a href="" class="btn btn-sm btn-success mb-1">Show</a>
                            <a href="" class="btn btn-sm btn-danger mb-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
