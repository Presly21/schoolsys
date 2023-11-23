@extends('layouts.admin')
@section('page-name')
    Manage Role
@endsection
@section('section-content')
<form method="POST" action="">
  {{csrf_field()}}
  @include('message')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Add New Role
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label >Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control"value="{{ $role->name }}"name ="name" required placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label >Display Name <span style="color: red">*</span></label>
                        <input type="text" class="form-control"value="{{ $role->display_name }}"  name ="name"required placeholder="Enter Display name">
                      </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     
                    </div>
                    </div>
                </div>
            <div class="col-md-6">
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
                            <th>Display Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($roles as $value)
                             <tr>
                              <td>
                                {{$value->id}}
                              </td>
                              <td>
                                {{$value->name}}
                              </td>
                              <td>
                                {{$value->display_name}}
                              </td>
                              <td>
                                <a href="{{ url('/admin/roles/' . $value->id . '/edit') }}"
                                  class="btn btn-primary">Edit</a>
                              <a href="{{ url('/admin/roles/delete' . $value->id) }}"
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
