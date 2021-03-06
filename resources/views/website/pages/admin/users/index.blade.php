@extends('website.layouts.default', [
'pageName1' => 'All ' .$type,
'pageName2' => '',
'pageDesc' => ' '.$type,
])

@section('page-css')
    <link href="{{ asset('website/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('website/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css') }}"
        rel="stylesheet" />
@endsection

@section('content')
    <div class="panel panel-inverse">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i>
                </a>
            </div>
            <h4 class="panel-title">All {{ $type }}</h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <div class="d-flex justify-content-end">
                <a href="{{ route('user.create') }}">
                    <button class="btn btn-primary float-right">Add User</button>
                    <div class="clearfix mb-2"></div>
                </a>
                <a href="{{ route('allAdmin') }}">
                    <button class="btn btn-primary float-right">All Admin</button>
                    <div class="clearfix mb-2"></div>
                </a>
                <a href="{{ route('allTeacher') }}">
                    <button class="btn btn-primary float-right">Add User</button>
                    <div class="clearfix mb-2"></div>
                </a>
            </div>
            <table id="data-table-buttons" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="gradeU">
                            <td width="1%" class="f-s-600 text-inverse">{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('user.edit', $user) }}" class="btn btn-primary"><i
                                            class="far fa-edit"></i>
                                    </a>
                                    @if (session()->get('user_type') != $user->user_type)
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteUser{{ $user->id }}">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure want to delete?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <a href="{{ route('user.destroy', $user) }}"
                                                            class="btn btn-primary">Save changes
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
@endsection

@section('init-js')
    TableManageButtons.init();
@endsection

@section('page-js')
    <script src="{{ asset('website/assets/plugins/DataTables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('website/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('website/assets/js/demo/table-manage-buttons.demo.min.js') }}"></script>
@endsection
