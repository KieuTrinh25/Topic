@extends('admin.master')

@section('title', @trans('admin.label_all_activities'))

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Tables <small>Some examples to get you started</small></h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row" style="display: block;">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Table Activities</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="card-tools">
                            <a class="btn btn-success" href="{{ route('roles.create') }}"><i class="fas fa-plus-square"></i>
                                New Role</a>
                        </div>
                        <div class="x_content">
                            <div class="card-body table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr class="bg-blue text-center">
                                        <th width="50px">No</th>
                                        <th>Name</th>
                                        <th width="150px">Action</th>
                                    </tr>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td class="text-center">{{ $role->name }}</td>
                                            <td class="text-center">

                                                @can('role-edit')
                                                    <a class="btn btn-sm btn-primary"
                                                        href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                                @endcan
                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger delete_confirm']) !!}
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                                {!! $roles->render() !!}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <div class="float-left">
                                    <div class="dataTables_info">
                                        Showing {{ $roles->firstItem() }} to {{ $roles->lastItem() }} of
                                        {{ $roles->total() }} entries
                                    </div>
                                </div>
                                <div class="float-right">
                                    {{ $roles->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function() {
            $('.delete_confirm').click(function(event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal.fire({
                        title: 'Are you sure you want to delete this record?',
                        text: "If you delete this, it will be gone forever.",
                        icon: 'warning',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!',
                        showDenyButton: true,
                        denyButtonText: 'Cancel',
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        } else if (result.isDenied) {
                            Swal.fire('Your record is safe', '', 'info')
                        }

                    });
            });
        });
    </script>
@endsection
<!-- /page content -->
