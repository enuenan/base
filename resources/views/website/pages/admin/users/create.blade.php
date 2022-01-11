@extends('website.layouts.default', [
'pageName1' => 'Create User',
'pageName2' => '',
'pageDesc' => ' Create User',
])

@section('content')
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title">Create User</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <h4 class="border border-3 border-success p-5 mb-5 text-center">
                        <span class="text-danger text-bold"> N.B </span>
                        Default Password of a newly created user is : password
                    </h4>
                    <form action="{{ route('user.store') }}" method="post" class="mt-4">
                        {{ csrf_field() }}
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="name">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="name" name="name" placeholder="Enter Name"
                                    value="{{ old('name') ? old('name') : '' }}" />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Email address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control m-b-5" id="email" name="email"
                                    placeholder="Enter email" value="{{ old('email') ? old('email') : '' }}" />
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Select User</label>
                            <div class="col-md-9">
                                <select class="form-control" name="user_type">
                                    <option value="" selected>Select User</option>
                                    <option value="1" {{ old('user_type') == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ old('user_type') == 2 ? 'selected' : '' }}>Teacher</option>
                                </select>
                                @error('user_type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end panel-body -->
                <!-- begin hljs-wrapper -->
                <!-- end hljs-wrapper -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
    </div>
@endsection
