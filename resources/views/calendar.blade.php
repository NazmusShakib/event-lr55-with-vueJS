@extends('layouts.master')

@push('styles')
<!-- FullCalendar -->
<link href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet" media="print">
@endpush


@section('main-content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Calendar
                    <small>Click to add/edit events</small>
                </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Calendar Events
                            <small>Sessions</small>
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div id='calendar'></div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
                </div>
                <div class="modal-body">
                    <div id="testmodal" style="padding: 5px 20px;">
                        <form id="antoform" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:55px;" id="description"
                                              name="description"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
                </div>
                <div class="modal-body">

                    <div id="testmodal2" style="padding: 5px 20px;">
                        <form id="antoform2" class="form-horizontal calender" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title2" name="title2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:55px;" id="description2"
                                              name="description"></textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
@endsection

@push('js')
<!-- FullCalendar -->
<script src="{{ asset('assets/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>

<script>
    $(document).ready(function () {

        init_calendar();
        /* CALENDAR */

        function  init_calendar() {

            if( typeof ($.fn.fullCalendar) === 'undefined'){ return; }
            //console.log('init_calendar');

            var date = new Date(),
                d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear(),
                started,
                ended,
                categoryClass;

            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    $('#fc_create').click();

                    var started = start;
                    var ended = end;

                    console.log(started);
                    console.log(ended);

                    $(".antosubmit").one("click", function() {
                        var title = $("#title").val();
                        var description = $("#description").val();

                        console.log(started);
                        console.log(ended);
                        categoryClass = $("#event_type").val();

                        if (title) {
                            $.ajax({
                                url: '{!! route('add-event') !!}',
                                data: 'title='+ title +'&description='+ description +'&start='+ started +'&end='+ ended,
                                type: "POST",
                                success: function(response) {
                                    calendar.fullCalendar('renderEvent', {
                                            id : response.id,
                                            title: title,
                                            description: description,
                                            start: started,
                                            end: end,
                                            allDay: allDay
                                        },
                                        true // make the event "stick"
                                    );
                                }
                            });
                        }

                        $('#title').val('');
                        $('#description').val('');

                        calendar.fullCalendar('unselect');

                        $('.antoclose').click();

                        return false;
                    });
                },
                eventClick: function(calEvent, jsEvent, view) {
                    $('#fc_edit').click();
                    $('#title2').val(calEvent.title);
                    $('#description2').val(calEvent.description);

                    console.log(calEvent);

                    categoryClass = $("#event_type").val();

                    $(".antosubmit2").off('click').one("click", function() {
                        calEvent.title = $("#title2").val();
                        calEvent.description = $("#description2").val();
                        console.log(calEvent.id);
                        $.ajax({
                            url: '{!! route('add-event') !!}',
                            data: 'id='+ calEvent.id +'&title='+ calEvent.title +'&description='+ calEvent.description +'&start='+ calEvent.start +'&end='+ calEvent.end,
                            type: "POST",
                            success: function(response) {
                                calendar.fullCalendar('updateEvent', calEvent);
                                calEvent = "";
                            }
                        });

                        $('.antoclose2').click();
                        $(this).off('click');
                    });

                    calendar.fullCalendar('unselect');
                },
                editable: false,
                events: '{!! route('get-events') !!}'
            });

        }
    });
</script>
@endpush