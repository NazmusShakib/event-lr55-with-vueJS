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
                        <p class="text-muted font-13 m-b-30">
                            The Buttons extension for DataTables provides a common set of options, API methods and
                            styling to display buttons on a page that will interact with a DataTable. The core library
                            provides the based framework upon which plug-ins can built.
                        </p>
                        <div id="datatable-buttons_wrapper"
                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="dt-buttons btn-group">
                                <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"
                                        aria-controls="datatable-buttons" href="#"><span>CSV</span></a>
                                <a class="btn btn-default buttons-print btn-sm" tabindex="0"
                                        aria-controls="datatable-buttons" href="#"><span>Print</span></a>
                            </div>
                            <div id="datatable-buttons_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control input-sm" placeholder=""
                                            aria-controls="datatable-buttons"></label></div>
                            <table id="datatable-buttons"
                                   class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid"
                                   aria-describedby="datatable-buttons_info" style="width: 1031px;">
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
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Airi Satou</td>
                                    <td style="">Accountant</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Angelica Ramos</td>
                                    <td style="">Chief Executive Officer (CEO)</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td tabindex="0" class="sorting_1">Ashton Cox</td>
                                    <td style="">Junior Technical Author</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Bradley Greer</td>
                                    <td style="">Software Engineer</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Brenden Wagner</td>
                                    <td style="">Software Engineer</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>

                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Brielle Williamson</td>
                                    <td style="">Integration Specialist</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>

                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Bruno Nash</td>
                                    <td style="">Software Engineer</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>

                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1" tabindex="0">Caesar Vance</td>
                                    <td style="">Pre-Sales Support</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>

                                <tr role="row" class="odd">
                                    <td class="sorting_1" tabindex="0">Cara Stevens</td>
                                    <td style="">Sales Assistant</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>
                                </tr>

                                <tr role="row" class="even">
                                    <td tabindex="0" class="sorting_1">Cedric Kelly</td>
                                    <td style="">Senior Javascript Developer</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">+799-49-1958460</td>
                                    <td style="">head@example.com</td>
                                    <td style="">spouse@example.com</td>
                                    <td style=""><i class="fa fa-eye" title="View"></i> | <i class="fa fa-edit" title="Edit"></i> |  <i class="fa fa-trash" title="Delete"></i> </td>

                                </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                            <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="datatable-buttons_previous"><a
                                                href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0">Previous</a>
                                    </li>
                                    <li class="paginate_button active"><a href="#" aria-controls="datatable-buttons"
                                                                          data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons"
                                                                    data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons"
                                                                    data-dt-idx="3" tabindex="0">3</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons"
                                                                    data-dt-idx="4" tabindex="0">4</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons"
                                                                    data-dt-idx="5" tabindex="0">5</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="datatable-buttons"
                                                                    data-dt-idx="6" tabindex="0">6</a></li>
                                    <li class="paginate_button next" id="datatable-buttons_next"><a href="#"
                                                                                                    aria-controls="datatable-buttons"
                                                                                                    data-dt-idx="7"
                                                                                                    tabindex="0">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


