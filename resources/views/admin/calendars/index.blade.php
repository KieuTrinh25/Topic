@extends('admin.master')

@section('title', @trans('admin.label_all_activities'))

@section('content')


    
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
            <div id='calendar'></div>
          </div>
      </div>
      
  </div>

</div>
<script>
  var data = '@json($events)';
    var events = JSON.parse(data);
  console.log(events);
</script>
<script type='importmap'>
  {
        "imports": {
          "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.0.2",
          "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.0.2"
        }
      }
    </script>
<script type='module'>
  import { Calendar } from '@fullcalendar/core'
      import dayGridPlugin from '@fullcalendar/daygrid'
      
      document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar')
        const calendar = new Calendar(calendarEl, {
          plugins: [dayGridPlugin],
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
          },
          
          events: events
        })
        calendar.render()
        
      })
</script>

@endsection