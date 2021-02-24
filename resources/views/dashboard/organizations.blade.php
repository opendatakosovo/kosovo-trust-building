@extends('dashboard.base')

@section('content')

<h1 style="text-align:center;">Organizations data page</h1>

<div class="container-fluid">
            <div class="fade-in">
             
              <!-- /.row-->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i>Organizations</div>
                    <div class="card-body">
                    <div class="row"> 
                          <a href="{{ route('notes.create') }}" class="btn btn-primary m-2">{{ __('Add Organization') }}</a>
                        </div>
                        </br>
                      <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Vishnu Serghei</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                          <tr>
                            <td>Zbyněk Phoibos</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td><span class="badge badge-danger">Banned</span></td>
                          </tr>
                          <tr>
                            <td>Einar Randall</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td><span class="badge badge-secondary">Inactive</span></td>
                          </tr>
                          <tr>
                            <td>Félix Troels</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                          <tr>
                            <td>Aulus Agmundr</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td><span class="badge badge-success">Active</span></td>
                          </tr>
                        </tbody>
                      </table>
                      <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>

@endsection

@section('javascript')

@endsection