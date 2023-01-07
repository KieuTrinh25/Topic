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
                <h2>Form School Years </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ route ('admin.students.update', $student->id) }}">
                    @method('put')
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name" Name value="{{ $student->name }}">
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" required="required" class="form-control ">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Faculty</label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="faculty_id">
                                @foreach($facultyList as $fac)
                                <option @if($fac->id == $student->faculty_id) selected @endif value="{{ $fac->id }}">{{ $fac->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                            
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
     <!-- /page content -->
  @endsection