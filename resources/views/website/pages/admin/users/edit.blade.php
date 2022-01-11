@extends('website.layouts.default', [
'pageName1' => 'Edit User',
'pageName2' => '',
'pageDesc' => ' Edit User',
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
                    <h4 class="panel-title">Edit User</h4>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <form action="{{ route('user.update', $user) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="name">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control m-b-5" id="name" name="name" placeholder="Enter Name"
                                    value="{{ old('name') ? old('name') : $user->name }}" />
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3" for="email">Email address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control m-b-5" id="email" name="email"
                                    placeholder="Enter email" value="{{ old('email') ? old('email') : $user->email }}" />
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-b-15">
                            <label class="col-form-label col-md-3">Select User Type</label>
                            <div class="col-md-9">
                                <select class="form-control" name="user_type">
                                    <option value="" selected>Select User</option>
                                    <option value="1" {{ old('user_type') == 1 ? 'selected' : '' }}
                                        {{ $user->user_type == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ old('user_type') == 2 ? 'selected' : '' }}
                                        {{ $user->user_type == 2 ? 'selected' : '' }}>Teacher</option>
                                </select>
                                @error('user_type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-b-15">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button class="btn btn-primary">Update</button>
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
