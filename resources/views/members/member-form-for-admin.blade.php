@extends('layouts.master')

@push('styles')

<style>
    fieldset {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
        padding: 10px;
        position: relative;
        border-radius: 4px;
        background-color: #f5f5f5;
        padding-left: 10px !important;
    }

    legend {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 0px;
        width: 35%;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 5px 5px 10px;
        background-color: #ffffff;
    }

    mark {
        font-size: 14px;
    }

    :required {
        background: url(https://cdn0.iconfinder.com/data/icons/fugue/icon/asterisk-small.png) no-repeat;
        background-position: right top;
    }

    form * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
</style>
@endpush


@section('main-content')

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Member</h3>
            </div>

            {{--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                    </div>
                </div>
            </div>--}}
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><a href="{{route('member.index')}}" class="btn btn-primary">< Back</a></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <form action="#" method="POST">
                            <input type="hidden" name="action" value="save_member_info"/>
                            <fieldset>
                                <legend>Membership Information</legend>
                                <div class='row'>
                                    <div class='col-sm-4'>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="user_title">Head of Household</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="user_title">Spouse</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_title" class="input-sm">Title: (Circle one)</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <select name="hh_title" id="hh_title" class="form-control selectpicker">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Rev.">Rev.</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <select name="sp_title" id="sp_title" class="form-control selectpicker">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Ms.">Ms.</option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Rev.">Rev.</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_fname" class="input-sm">First Name</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_fname" name="hh_fname"
                                                   size="30"
                                                   type="text" required/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_fname" name="sp_fname"
                                                   size="30" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_mname" class="input-sm">Middle name</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_mname" name="hh_mname"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_mname" name="sp_mname"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_lname" class="input-sm">Last Name</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_lname" name="hh_lname"
                                                   size="30"
                                                   type="text" required/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_lname" name="sp_lname"
                                                   size="30" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>


                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_sex_male" class="input-sm">Sex: (Check one)</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label input-sm">
                                                <input class="form-check-input" name="hh_sex" type="radio"
                                                       id="hh_sex_male" value="Male"> Male
                                            </label>

                                            <label class="form-check-label input-sm">
                                                <input class="form-check-input" name="hh_sex" type="radio"
                                                       id="hh_sex_female" value="Female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label input-sm">
                                                <input class="form-check-input" name="sp_sex" type="radio"
                                                       id="sp_sex_male" value="Male"> Male
                                            </label>

                                            <label class="form-check-label input-sm">
                                                <input class="form-check-input" name="sp_sex" type="radio"
                                                       id="sp_sex_female" value="Female">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_dob" class="input-sm">Birthday: (yr. optional)</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_dob" name="hh_dob"
                                                   size="30"
                                                   type="date"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" name="sp_dob" id="sp_dob"
                                                   size="30" type="date"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_address" class="input-sm">Address: City, State / Zip</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                    <textarea name="hh_address" id="hh_address" cols="5" rows="3"
                              class="form-control input-sm" required></textarea>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                    <textarea name="sp_address" id="sp_address" cols="5" rows="3"
                              class="form-control input-sm" required></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_alt_address" class="input-sm">Alternate Address
                                                (Address,City, State / Zip)</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                    <textarea name="hh_alt_address" id="hh_alt_address" cols="5" rows="3"
                              class="form-control input-sm"></textarea>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                    <textarea name="sp_alt_address" id="sp_alt_address" cols="5" rows="3"
                              class="form-control input-sm"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_home_phone" class="input-sm">Home Phone</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_home_phone" name="hh_home_phone"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_home_phone" name="sp_home_phone"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_cell_phone" class="input-sm">Cell Phone</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_cell_phone" name="hh_cell_phone"
                                                   size="30"
                                                   type="text" required/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_cell_phone" name="sp_cell_phone"
                                                   size="30" type="text" required/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_work_phone" class="input-sm">Work Phone</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_work_phone" name="hh_work_phone"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_work_phone" name="sp_work_phone"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_email" class="input-sm">Email</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_email" name="hh_email"
                                                   size="30" type="email" required/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_email" name="sp_email"
                                                   size="30"
                                                   type="email" required/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_fax" class="input-sm">Fax #</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_fax" name="hh_fax"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_fax" name="sp_fax"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_extra_phone" class="input-sm">Extra Phone</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_extra_phone"
                                                   name="hh_extra_phone"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_extra_phone"
                                                   name="sp_extra_phone"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_marital_status" class="input-sm">Marital Status</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_marital_status"
                                                   name="hh_marital_status"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_marital_status"
                                                   name="sp_marital_status"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_anniversary_date" class="input-sm">Anniversary Date</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_anniversary_date"
                                                   name="hh_anniversary_date"
                                                   size="30" type="date"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_anniversary_date"
                                                   name="sp_anniversary_date"
                                                   size="30"
                                                   type="date"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_occupation" class="input-sm">Occupation</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_occupation" name="hh_occupation"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_occupation" name="sp_occupation"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_employer" class="input-sm">Employer</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_employer" name="hh_employer"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_employer" name="sp_employer"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_member_status" class="input-sm">Member Status</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_member_status"
                                                   name="hh_member_status"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_member_status"
                                                   name="sp_member_status"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_church_background" class="input-sm">Church Background</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="hh_church_background"
                                                   name="hh_church_background"
                                                   size="30" type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="sp_church_background"
                                                   name="sp_church_background"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <label for="hh_baptized_yes" class="input-sm">Baptized</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class="form-check form-check-inline input-sm">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="hh_baptized_yes"
                                                       name="hh_baptized"
                                                       value="Yes"> Yes
                                            </label>

                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" id="hh_baptized_no"
                                                       name="hh_baptized" value="No">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <div class="form-check form-check-inline input-sm">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="sp_baptized_yes"
                                                           name="sp_baptized"
                                                           value="Yes"> Yes
                                                </label>

                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" id="sp_baptized_no"
                                                           name="sp_baptized"
                                                           value="No"> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Children</legend>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class='form-group'>
                                            <label for="user_title" class="input-sm">Name (first, middle, last)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class='form-group'>
                                            <label for="user_title" class="input-sm">Birth Date</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="user_title" class="input-sm">Grade </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="user_title" class="input-sm">Baptized</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class='form-group'>
                                            <label for="user_title" class="input-sm">Class</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child1_name" name="child1_name"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child1_dob" name="child1_dob"
                                                   size="30"
                                                   type="date"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child1_grade" name="child1_grade"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child1_baptized"
                                                   name="child1_baptized"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child1_class" name="child1_class"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child2_name" name="child2_name"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child2_dob" name="child2_dob"
                                                   size="30"
                                                   type="date"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child2_grade" name="child2_grade"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child2_baptized"
                                                   name="child2_baptized"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child2_class" name="child2_class"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child3_name" name="child3_name"
                                                   size="30"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-3'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child3_dob" name="child3_dob"
                                                   size="30"
                                                   type="date"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child3_grade" name="child3_grade"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child3_baptized"
                                                   name="child3_baptized"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class='col-sm-2'>
                                        <div class='form-group'>
                                            <input class="form-control input-sm" id="child3_class" name="child3_class"
                                                   size="7"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </fieldset>
                            <hr>

                            <fieldset>
                                <legend>Skills</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <mark> Please check all that apply, H=Head of household, S=Spouse</mark>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_skill_administrator" id="hh_skill_administrator"
                                               value=true>
                                        <input type="checkbox" name="sp_skill_administrator" id="sp_skill_administrator"
                                               value=true>
                                        <label class="input-sm">Administrator</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_cooking" id="hh_skill_cooking"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_cooking" id="sp_skill_cooking"
                                                   value=true>
                                            <label class="input-sm">Cooking</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_pianist" id="hh_skill_pianist"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_pianist" id="sp_skill_pianist"
                                                   value=true>
                                            <label class="input-sm">Pianist</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_skill_artist" id="hh_skill_artist" value=true>
                                        <input type="checkbox" name="sp_skill_artist" id="sp_skill_artist" value=true>
                                        <label class="input-sm">Artist</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_drama" id="hh_skill_drama" value=true>
                                            <input type="checkbox" name="sp_skill_drama" id="sp_skill_drama" value=true>
                                            <label class="input-sm">Drama</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_singing" id="hh_skill_singing"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_singing" id="sp_skill_singing"
                                                   value=true>
                                            <label class="input-sm">Singing</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_skill_caregiver" id="hh_skill_caregiver"
                                               value=true>
                                        <input type="checkbox" name="sp_skill_caregiver" id="sp_skill_caregiver"
                                               value=true>
                                        <label class="input-sm">Caregiver</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_electrical" id="hh_skill_electrical"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_electrical" id="sp_skill_electrical"
                                                   value=true>
                                            <label class="input-sm">Electrical</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_teaching" id="hh_skill_teaching"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_teaching" id="sp_skill_teaching"
                                                   value=true>
                                            <label class="input-sm">Teaching</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_skill_carpentry" id="hh_skill_carpentry"
                                               value=true>
                                        <input type="checkbox" name="sp_skill_carpentry" id="sp_skill_carpentry"
                                               value=true>
                                        <label class="input-sm">Carpentry</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_guitar" id="hh_skill_guitar"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_guitar" id="sp_skill_guitar"
                                                   value=true>
                                            <label class="input-sm">Guitar</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_computer" id="hh_skill_computer"
                                                   value=true>
                                            <input type="checkbox" name="sp_skill_computer" id="sp_skill_computer"
                                                   value=true>
                                            <label class="input-sm">Computer</label>
                                        </div>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_skill_music" id="hh_skill_music" value=true>
                                            <input type="checkbox" name="sp_skill_music" id="sp_skill_music" value=true>
                                            <label class="input-sm">Music</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Previous Positions</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <mark> Please check all that apply, H=Head of household, S=Spouse</mark>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_pp_choir_director" id="hh_pp_choir_director"
                                               value=true>
                                        <input type="checkbox" name="sp_pp_choir_director" id="sp_pp_choir_director"
                                               value=true>
                                        <label class="input-sm">Choir Director</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_treasurer" id="hh_pp_treasurer"
                                                   value=true>
                                            <input type="checkbox" name="sp_pp_treasurer" id="sp_pp_treasurer"
                                                   value=true>
                                            <label class="input-sm">Treasurer</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_child_ministry" id="hh_pp_child_ministry"
                                                   value=true>
                                            <input type="checkbox" name="sp_pp_child_ministry" id="sp_pp_child_ministry"
                                                   value=true>
                                            <label class="input-sm">Children’s Ministry</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_pp_deacon" id="hh_pp_deacon" value=true>
                                        <input type="checkbox" name="sp_pp_deacon" id="sp_pp_deacon" value=true>
                                        <label class="input-sm">Deacon</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_workship_leader"
                                                   id="hh_pp_workship_leader" value=true>
                                            <input type="checkbox" name="sp_pp_workship_leader"
                                                   id="sp_pp_workship_leader" value=true>
                                            <label class="input-sm">Worship Leader</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_finance" id="hh_pp_finance" value=true>
                                            <input type="checkbox" name="sp_pp_finance" id="sp_pp_finance" value=true>
                                            <label class="input-sm">Finance</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_pp_interim_board" id="hh_pp_interim_board"
                                               value=true>
                                        <input type="checkbox" name="sp_pp_interim_board" id="sp_pp_interim_board"
                                               value=true>
                                        <label class="input-sm">Interim Board</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_minister" id="hh_pp_minister" value=true>
                                            <input type="checkbox" name="sp_pp_minister" id="sp_pp_minister" value=true>
                                            <label class="input-sm">Minister</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_pp_ss_superintendent"
                                                   id="hh_pp_ss_superintendent" value=true>
                                            <input type="checkbox" name="sp_pp_ss_superintendent"
                                                   id="sp_pp_ss_superintendent" value=true>
                                            <label class="input-sm">SS Superintendent</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="checkbox" name="hh_pp_sunday_teacher" id="hh_pp_sunday_teacher"
                                               value=true>
                                        <input type="checkbox" name="sp_pp_sunday_teacher" id="sp_pp_sunday_teacher"
                                               value=true>
                                        <label class="input-sm">Sunday School Teacher</label>
                                    </div>
                                </div>
                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Activities</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <mark> Please check all that apply, H=Head of household, S=Spouse</mark>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_activities_boys_club"
                                               id="hh_activities_boys_club" value=true>
                                        <input type="checkbox" name="sp_activities_boys_club"
                                               id="sp_activities_boys_club" value=true>
                                        <label class="input-sm">Boys Club</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_activities_girl_scouts"
                                                   id="hh_activities_girl_scouts" value=true>
                                            <input type="checkbox" name="sp_activities_girl_scouts"
                                                   id="sp_activities_girl_scouts" value=true>
                                            <label class="input-sm">Girl Scouts</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_activities_schoolers"
                                                   id="hh_activities_schoolers" value=true>
                                            <input type="checkbox" name="sp_activities_schoolers"
                                                   id="sp_activities_schoolers" value=true>
                                            <label class="input-sm">Home Schoolers</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_activities_sports" id="hh_activities_sports"
                                               value=true>
                                        <input type="checkbox" name="sp_activities_sports" id="sp_activities_sports"
                                               value=true>
                                        <label class="input-sm">Sports</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_activities_young_adults"
                                                   id="hh_activities_young_adults" value=true>
                                            <input type="checkbox" name="sp_activities_young_adults"
                                                   id="sp_activities_young_adults" value=true>
                                            <label class="input-sm">Young Adults</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_activities_fitness"
                                                   id="hh_activities_fitness" value=true>
                                            <input type="checkbox" name="sp_activities_fitness"
                                                   id="sp_activities_fitness" value=true>
                                            <label class="input-sm">Fitness</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_activities_youth_groups"
                                               id="hh_activities_youth_groups" value=true>
                                        <input type="checkbox" name="sp_activities_youth_groups"
                                               id="sp_activities_youth_groups" value=true>
                                        <label class="input-sm">Youth Groups</label>
                                    </div>

                                </div>
                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Spiritual Gifts</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <mark> Please check all that apply, H=Head of household, S=Spouse</mark>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_sf_administrations" id="hh_sf_administrations"
                                               value=true>
                                        <input type="checkbox" name="sp_sf_administrations" id="sp_sf_administrations"
                                               value=true>
                                        <label class="input-sm">Administrations</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_sf_giving" id="hh_sf_giving" value=true>
                                            <input type="checkbox" name="sp_sf_giving" id="sp_sf_giving" value=true>
                                            <label class="input-sm">Giving</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_sf_teaching" id="hh_sf_teaching" value=true>
                                            <input type="checkbox" name="sp_sf_teaching" id="sp_sf_teaching" value=true>
                                            <label class="input-sm">Teaching</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_sf_encouragement" id="hh_sf_encouragement"
                                               value=true>
                                        <input type="checkbox" name="sp_sf_encouragement" id="sp_sf_encouragement"
                                               value=true>
                                        <label class="input-sm">Encouragement</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_sf_intercession" id="hh_sf_intercession"
                                                   value=true>
                                            <input type="checkbox" name="sp_sf_intercession" id="sp_sf_intercession"
                                                   value=true>
                                            <label class="input-sm">Intercession</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_sf_minister" id="hh_sf_minister" value=true>
                                            <input type="checkbox" name="sp_sf_minister" id="sp_sf_minister" value=true>
                                            <label class="input-sm">Minister</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_sf_dvangelism" id="hh_sf_dvangelism" value=true>
                                        <input type="checkbox" name="sp_sf_dvangelism" id="sp_sf_dvangelism" value=true>
                                        <label class="input-sm">Evangelism</label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_sf_prophecy" id="hh_sf_prophecy" value=true>
                                        <input type="checkbox" name="sp_sf_prophecy" id="sp_sf_prophecy" value=true>
                                        <label class="input-sm">Prophecy</label>
                                    </div>

                                </div>
                            </fieldset>

                            <hr>

                            <fieldset>
                                <legend>Willing to Serve</legend>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <mark> Please check all that apply, H=Head of household, S=Spouse</mark>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>H</label>
                                        <label>S</label>
                                        <label></label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_ws_planning_committee"
                                               id="hh_ws_planning_committee" value=true>
                                        <input type="checkbox" name="sp_ws_planning_committee"
                                               id="sp_ws_planning_committee" value=true>
                                        <label class="input-sm">Planning Committee</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_ws_hospitality" id="hh_ws_hospitality"
                                                   value=true>
                                            <input type="checkbox" name="sp_ws_hospitality" id="sp_ws_hospitality"
                                                   value=true>
                                            <label class="input-sm">Hospitality</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_ws_nursery" id="hh_ws_nursery" value=true>
                                            <input type="checkbox" name="sp_ws_nursery" id="sp_ws_nursery" value=true>
                                            <label class="input-sm">Nursery</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_ws_finances" id="hh_ws_finances" value=true>
                                        <input type="checkbox" name="sp_ws_finances" id="sp_ws_finances" value=true>
                                        <label class="input-sm">Finances</label>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_ws_maint" id="hh_ws_maint" value=true>
                                            <input type="checkbox" name="sp_ws_maint" id="sp_ws_maint" value=true>
                                            <label class="input-sm">Maint./Grounds</label>
                                        </div>
                                    </div>

                                    <div class='col-sm-4'>
                                        <div class='form-group'>
                                            <input type="checkbox" name="hh_ws_teaching" id="hh_ws_teaching" value=true>
                                            <input type="checkbox" name="sp_ws_teaching" id="sp_ws_teaching" value=true>
                                            <label class="input-sm">Teaching</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_ws_greeter" id="hh_ws_greeter" value=true>
                                        <input type="checkbox" name="sp_ws_greeter" id="sp_ws_greeter" value=true>
                                        <label class="input-sm">Greeter</label>
                                    </div>

                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_ws_music" id="hh_ws_music" value=true>
                                        <input type="checkbox" name="sp_ws_music" id="sp_ws_music" value=true>
                                        <label class="input-sm">Music</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="checkbox" name="hh_ws_visitation" id="hh_ws_visitation" value=true>
                                        <input type="checkbox" name="sp_ws_visitation" id="sp_ws_visitation" value=true>
                                        <label class="input-sm">Visitation</label>
                                    </div>
                                </div>
                            </fieldset>
                            <br>

                            <fieldset>
                                <legend>Comments</legend>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class='form-group'>
                                            <textarea name="comments" id="comments" cols="6" rows="3"
                                                      class="form-control input-sm"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>
                            <br>

                            <button type="submit" name="submit_membership_form"
                                    class="btn btn-success btn-sm btn-block">Submit
                            </button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


