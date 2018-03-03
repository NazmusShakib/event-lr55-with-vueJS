@extends('layouts.master')

@push('styles')
<!-- FullCalendar -->
<link href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.print.css') }}" rel="stylesheet" media="print">
@endpush

@section('main-content')

    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Member</span>
            <div class="count">{{$counter['member'] * 2 }}</div>
            {{--<span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
            <div class="count green">{{$counter['male']}}</div>
            {{--<span class="count_bottom"><i class="green"><i
                            class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
            <div class="count">{{$counter['female']}}</div>
            {{--<span class="count_bottom"><i class="red"><i
                            class="fa fa-sort-desc"></i>12% </i> From last Week</span>--}}
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>Active events</h3>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div id='calendar'></div>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <br/>

    {{--<div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <!-- start of weather widget -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Daily active users
                                <small>Sessions</small>
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="temperature"><b>Monday</b>, 07:30 AM
                                        <span>F</span>
                                        <span><b>C</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="weather-icon">
                                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="weather-text">
                                        <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="weather-text pull-right">
                                    <h3 class="degrees">23</h3>
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="row weather-days">
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Mon</h2>
                                        <h3 class="degrees">25</h3>
                                        <canvas id="clear-day" width="32" height="32"></canvas>
                                        <h5>15 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Tue</h2>
                                        <h3 class="degrees">25</h3>
                                        <canvas height="32" width="32" id="rain"></canvas>
                                        <h5>12 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Wed</h2>
                                        <h3 class="degrees">27</h3>
                                        <canvas height="32" width="32" id="snow"></canvas>
                                        <h5>14 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Thu</h2>
                                        <h3 class="degrees">28</h3>
                                        <canvas height="32" width="32" id="sleet"></canvas>
                                        <h5>15 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Fri</h2>
                                        <h3 class="degrees">28</h3>
                                        <canvas height="32" width="32" id="wind"></canvas>
                                        <h5>11 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="daily-weather">
                                        <h2 class="day">Sat</h2>
                                        <h3 class="degrees">26</h3>
                                        <canvas height="32" width="32" id="cloudy"></canvas>
                                        <h5>10 <i>km/h</i></h5>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end of weather widget -->
            </div>
        </div>
    </div>--}}


    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 10px;">

                <div class="block_content">
                    <h2 class="title">
                        <a id="title2"></a>
                    </h2>
                    <div class="byline">
                        <span id="agoTime2"></span> by <a id="user2"></a>
                    </div>
                    <p class="excerpt" id="description2" style="margin: 10px 0 10px 0;"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>


@endsection

@push('js')

<!-- FullCalendar -->
<script src="{{ asset('assets/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('assets/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>

<script>
    $(document).ready(function () {

        init_calendar();
        /* CALENDAR */

        function init_calendar() {

            if (typeof ($.fn.fullCalendar) === 'undefined') {
                return;
            }
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
                eventClick: function (calEvent, jsEvent, view) {
                    $('#fc_edit').click();
                    $('#title2').text(calEvent.title);
                    $('#user2').text(calEvent.user.name);
                    $('#agoTime2').text(calEvent.created_at);
                    $('#description2').text(calEvent.description);

                    console.log(calEvent);

                    categoryClass = $("#event_type").val();

                    calendar.fullCalendar('unselect');
                },
                editable: false,
                events: '{!! route('get-events') !!}'
            });
        }

    });
</script>


@endpush