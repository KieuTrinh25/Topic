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
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Activities</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="#">Settings 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                        <div class="card-body">
                            <div class="tab-pane" id="settings">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.<br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-md-2 col-form-label">Name</label>
                                        <div class="col-md-10">
                                            {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputPermission" class="col-md-2 col-form-label">Permission</label>
                                        <div class="col-md-10">

                                            <div class="row">
                                                <?php
                                                $abc = '';
                                                $len = count($permission);
                                                ?>
                                                @foreach ($permission as $key => $value)
                                                    <?php
                                                    if ($key === 0) {
                                                        echo '<div class="col-md-4">';
                                                    }
                                                    
                                                    if ($abc != substr($value->name, 0, strpos($value->name, '-')) && $key === 0) {
                                                        $abc = substr($value->name, 0, strpos($value->name, '-'));
                                                    
                                                        echo '<label>' . $abc . '</label><div class="block">';
                                                    } elseif ($abc != substr($value->name, 0, strpos($value->name, '-')) && $key !== 0) {
                                                        $abc = substr($value->name, 0, strpos($value->name, '-'));
                                                        echo '</div></div><div class="col-md-4">';
                                                        echo '<label>' . $abc . '</label><div class="block">';
                                                    }
                                                    ?>
                                                    {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                                    {{ $value->name }}
                                                    <br />
                                                    <?php
                                                    if ($key === $len - 1) {
                                                        echo '</div></div>';
                                                    }
                                                    ?>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
