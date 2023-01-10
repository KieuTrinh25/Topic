@extends('admin.master')

@section('title', @trans('admin.label_all_semesters'))

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
            <h2>Table Semesters</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                    class="fa fa-wrench"></i></a>
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

          <div class="x_content">
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    
                    <th class="column-title">Id </th>
                    <th class="column-title">Code</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Status</th>
                    <th class="column-title">Start time</th>
                    <th class="column-title">End time</th>
                    <th class="column-title">Code school year</th>
                    <th class="column-title no-link last"><span class="nobr">Actions</span>
                    <th class="column-title no-link last"><span class="nobr">Actions</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt">
                        </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($semesterList as $semester)
                  <tr class="even pointer">
                    <td class=" ">{{ $semester->id }}</td>
                    <td class=" ">{{ $semester->code }}</td>
                    <td class=" ">{{ $semester->name }}</i></td>
                    <td class="">{{ $semester->status }}</td>
                    <td class="">{{ $semester->start_time }}</td>
                    <td class="">{{ $semester->end_time }}</td>
                    <td class="">{{ $semester->SchoolYear->code }}</td>
                    <td class=" last"> <a href="{{ route('admin.semesters.edit', $semester->id) }}"><i
                          class="mdi mdi-border-color"></i>edit</a>
                    <td class=" last">
                      <form method="post" action="{{ route('admin.semesters.destroy', $semester->id) }}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn"><i class="mdi mdi-delete"></i>delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>


          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Semesters</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
            <form id="demo-form2" method="POST" action="{{ route('admin.semesters.store') }}"
              enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
              @csrf
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="code">code <span
                    class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="code" required="required" class="form-control " name="code"
                    value="{{ old('code') }}">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span
                    class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="name" required="required" class="form-control " name="name"
                    value="{{ old('name') }}">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Status <span
                    class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="status" required="required" class="form-control " name="status"
                    value="{{ old('status') }}">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="start_time">Start Time <span
                    class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input name="start_time" id="start_time" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"
                    required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                    onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="{{ old('start_time') }}">
                  <script>
                    function timeFunctionLong(input) {
                                    setTimeout(function() {
                                        input.type = 'text';
                                    }, 60000);
                                }
                  </script>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="end_time">End Time<span
                    class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input name="end_time" id="end_time" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"
                    required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                    onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" value="{{ old('end_time') }}">
                  <script>
                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                  </script>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 label-align">school_year_id</label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="school_year_id">
                        @foreach($schoolYearList as $school)
                        <option value="{{ $school->id }}">{{ $school->code }}</option>
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
    </div>
  </div>
</div>
<!-- /page content -->
@endsection