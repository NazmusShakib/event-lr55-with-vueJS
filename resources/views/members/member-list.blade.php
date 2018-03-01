@extends('layouts.master')


@push('styles')

<link href="{{asset('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}"
      rel="stylesheet">
<link href="{{asset('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

@endpush

@section('main-content')
<div class="row">


    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><a href="{{route('membershipFormForAdmin')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Member</a>
                    {{--<small>Users</small>--}}
                </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="dt-buttons btn-group">
                    <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                       aria-controls="datatable-buttons" href="{{route('exportMemberData', 'csv')}}"><span>CSV</span></a>
                    <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                       aria-controls="datatable-buttons" href="{{route('exportMemberData', 'xlsx')}}"><span>XLSX</span></a>
                    {{--<a class="btn btn-default buttons-print btn-sm" tabindex="0"
                       aria-controls="datatable-buttons" href="#"><span>Print</span></a>--}}
                </div>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Household Name</th>
                        <th>Spouse Name</th>
                        <th>Household Phone</th>
                        <th>Spouse Phone</th>
                        <th>Household email</th>
                        <th>Spouse email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($members as $key => $member)
                        <tr>
                            <td>{{$member->hh_title}} {{$member->hh_fname}} {{$member->hh_lname}}</td>
                            <td>{{$member->sp_title}} {{$member->sp_fname}} {{$member->sp_lname}}</td>
                            <td>{{$member->hh_cell_phone}}</td>
                            <td>{{$member->sp_cell_phone}}</td>
                            <td>{{$member->hh_email}}</td>
                            <td>{{$member->sp_email}}</td>
                            <td>
                                <a href="{{route('member.show', ['id' => $member->id])}}"><i class="fa fa-eye" title="View"></i></a>  |
                                <i class="fa fa-edit" title="Edit"></i> |
                                <a href="{{route('memberDelete', ['id' => $member->id])}}" onclick="return confirm('Are you sure?')"> <i class="fa fa-trash" title="Delete"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>

</div>

@endsection


@push('js')

<!-- Datatables -->
<script src="{{asset('assets/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
@endpush
