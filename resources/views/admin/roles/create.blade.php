@extends('admin.auth.layouts.master')



@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="card-header">
                                    <h2 class="card-title">Create Role</h2>
                                    <div class="card-actions">
                                        <a href="{{ route('admin.role.index') }}" class="btn btn-primary btn-3">
                                            <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                                            Back
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <form class="card" method="POST" action="{{ route('admin.role.store') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row row-cards">
                                            <div class="col-md-12">
                                                <x-admin.input-text label="Role Name" placeholder="Enter Role Name" name="role_name"/>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @foreach($permissions as $group => $permission)
                                                    <label class="form-label">{{ $group }}</label>
                                                        @foreach($permission as $item)
                                                        <label class="form-check">
                                                         <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $item->name }}">
                                                         <span class="form-check-label">{{ $item->name }}</span>
                                                        </label>
                                                        @endforeach
                                                @endforeach
                                            </div>
                                             <x-input-error :messages="$errors->first('permissions')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button type="submit" class="btn btn-primary">Create Role</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
