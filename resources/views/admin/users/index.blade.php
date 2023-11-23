@extends('layouts.admin')
@section('page-name')
    Manage User
@endsection
@section('section-content')
    <form method="POST" action="">
        {{ csrf_field() }}
        @include('message')
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Add New User
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Name<span style="color: red">*</span></label>
                                <input type="text" class="form-control" name ="name"required placeholder="Enter name"
                                    value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email <span style="color: red">*</span></label>
                                <input type="email" class="form-control"value="{{ $user->email }}" name ="email"required
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Role <span style="color: red">*</span></label>
                                <select class="form-control" name="role" required>
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @if ($user->role_id == $role->id)
                                            selected
                                        @endif>{{ $role->display_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Role List
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $value)
                                        <tr>
                                            <td>
                                                {{ $value->id }}
                                            </td>
                                            <td>
                                                {{ $value->name }}
                                            </td>
                                            <td>
                                                {{ $value->email }}
                                            </td>
                                            <td>
                                                {{ $value->role_name }}
                                            </td>
                                            <td>
                                                <a href="{{ url('/admin/users/' . $value->id . '/edit') }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ url('/admin/users/delete' . $value->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
