@extends('layouts.master')

@push('styles')

@endpush

@section('main-content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Member Information</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab_content2"
                               role="tab"
                               id="profile-tab"
                               data-toggle="tab"
                               aria-expanded="false">Profile
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#tab_content1" id="home-tab"
                               role="tab" data-toggle="tab" aria-expanded="false">Details</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="profile-tab">
                            @include('members.member-profile')
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="home-tab">
                            @include('members.member-details')
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $("#hhPssNroleUpdate").parsley();
            $("#spPssNroleUpdate").parsley();
        });
    </script>
@endpush


