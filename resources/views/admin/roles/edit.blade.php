@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Admin</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="">
                                {{ csrf_field() }}
                                @include('message')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control"
                                            name ="name"value="{{ old('name', $user->name) }}"
                                            placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control"name="email"
                                            value="{{ old('email', $user->email) }}" placeholder="Enter email">
                                        <div style="color: red"> {{ $errors->first('email') }}</div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <footer class="main-footer">
                        <div class="float-right d-none d-sm-block">
                            <b>Version</b> 3.2.0
                        </div>
                        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All
                        rights reserved.
                    </footer>

                    <!-- Control Sidebar -->
                    <aside class="control-sidebar control-sidebar-dark">
                        <!-- Control sidebar content goes here -->
                    </aside>
                    <!-- /.control-sidebar -->
                </div>
            @endsection
