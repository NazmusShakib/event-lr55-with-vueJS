@extends('layouts.master')

@push('styles')


@endpush



@section('main-content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Members</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href="{{route('membershipFormForAdmin')}}" class="btn btn-primary">Add Member</a>
                            {{--<small>Users</small>--}}
                        </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="datatable-buttons_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="dt-buttons btn-group">
                                <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="datatable-buttons" href="#"><span>CSV</span></a>
                                <a class="btn btn-default buttons-print btn-sm" tabindex="0"
                                        aria-controls="datatable-buttons" href="#"><span>Print</span></a>
                            </div>
                            <div id="datatable-buttons_filter" class="dataTables_filter">
                                <label>Search:<input
                                            type="search" class="form-control input-sm" placeholder=""
                                            aria-controls="datatable-buttons">
                                </label>
                            </div>
                                <table class="table table-striped table-bordered" role="grid"
                                   aria-describedby="datatable-buttons_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 158px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Household Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 151px;"
                                        aria-label="Position: activate to sort column ascending">Spouse Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 119px;"
                                        aria-label="Office: activate to sort column ascending">Household Phone
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 119px;"
                                        aria-label="Age: activate to sort column ascending">Spouse Phone
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 117px;"
                                        aria-label="Start date: activate to sort column ascending">Household email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 117px;"
                                        aria-label="Start date: activate to sort column ascending">Spouse email
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 92px;"
                                        aria-label="Salary: activate to sort column ascending">Action
                                    </th>
                                </tr>
                                </thead>

                                <tbody>


                                @foreach($members as $key => $member)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{$member->hh_title}} {{$member->hh_fname}} {{$member->hh_lname}}</td>
                                        <td>{{$member->sp_title}} {{$member->sp_fname}} {{$member->sp_lname}}</td>
                                        <td>{{$member->hh_cell_phone}}</td>
                                        <td>{{$member->sp_cell_phone}}</td>
                                        <td>{{$member->hh_email}}</td>
                                        <td>{{$member->sp_email}}</td>
                                        <td>
                                            <a href="{{route('member.show', ['id' => $member->id])}}"><i class="fa fa-eye" title="View"></i></a>  |
                                            <i class="fa fa-edit" title="Edit"></i> |
                                            <a href="{{route('member-delete', ['id' => $member->id])}}" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash" title="Delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                            </table>
                            {{ $members->render() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


