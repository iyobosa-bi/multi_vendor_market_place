@extends('admin.auth.layouts.master')




@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="card-header">
                                <h2 class="card-title">All Roles</h2>
                                <div class="card-actions">
                                    <a href="{{ route('admin.role.create') }}" class="btn btn-primary btn-3">
                                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>
                                        Add new
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-5">
                    <table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Maryjo Lebarree</td>
                          <td class="text-secondary">Civil Engineer, Product Management</td>
                          <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                          <td class="text-secondary">User</td>
                          <td>
                            <a href="#">Edit</a>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
