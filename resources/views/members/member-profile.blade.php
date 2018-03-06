@include('layouts.alert-message')

<div class="col-md-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Head of Householder</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{route('memberUpdateByAdmin', ['userID' => $member->hh_user_id])}}" method="POST" id="hhPssNroleUpdate" class="form-horizontal form-label-left input_mask">
                {{csrf_field()}}
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-title" class="control-label">Title</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_title}}" class="form-control has-feedback-left" id="hh-title" placeholder="Title">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-fname" class="control-label">First Name</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_fname}}" class="form-control has-feedback-left" id="hh-fname" placeholder="First Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-mname" class="control-label">Middle Name</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_mname}}" class="form-control has-feedback-left" id="hh-mname" placeholder="Middle Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-lname" class="control-label">Last Name</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_lname}}" class="form-control has-feedback-left" id="hh-lname" placeholder="Last Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-email" class="control-label">Email</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_email}}" class="form-control has-feedback-left" id="hh-email" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="hh-phone" class="control-label">Phone</label>
                    <input type="text" readonly="readonly" value="{{$member->hh_cell_phone}}" class="form-control has-feedback-left" id="hh-phone" placeholder="Phone">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="role_id" class="form-control">
                            <option value="1" @if($member->hhUser->role_id == 1) selected @endif>Admin</option>
                            <option value="2" @if($member->hhUser->role_id == 2) selected @endif>Jr. Admin</option>
                            <option value="3" @if($member->hhUser->role_id == 3) selected @endif>Normal User</option>
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hhnewpwd">Password <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="password" name="password"
                               id="hhnewpwd"
                               class="form-control"
                               data-parsley-minlength="6"
                               data-parsley-minlength-message="Minimum length 6."
                               data-parsley-trigger="change"
                               placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hhconfirmPwd">Confirm Password <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="password"
                               name="password_confirmation"
                               id="hhconfirmPwd"
                               data-parsley-minlength="6"
                               data-parsley-minlength-message="Minimum length 6."
                               data-parsley-equalto="#hhnewpwd"
                               data-parsley-trigger="change"
                               class="form-control"
                               placeholder="Confirm Password">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


@if(!empty($member->sp_user_id))
    <div class="col-md-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Spouse</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form action="{{route('memberUpdateByAdmin', ['userID' => $member->sp_user_id])}}" method="POST" id="spPssNroleUpdate" class="form-horizontal form-label-left input_mask">
                {{csrf_field()}}
                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-title" class="control-label">Title</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_title}}" class="form-control has-feedback-left" id="sp-title" placeholder="Title">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-fname" class="control-label">First Name</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_fname}}" class="form-control has-feedback-left" id="sp-fname" placeholder="First Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-mname" class="control-label">Middle Name</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_mname}}" class="form-control has-feedback-left" id="sp-mname" placeholder="Middle Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-lname" class="control-label">Last Name</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_lname}}" class="form-control has-feedback-left" id="sp-lname" placeholder="Last Name">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-email" class="control-label">Email</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_email}}" class="form-control has-feedback-left" id="sp-email" placeholder="Email">
                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label for="sp-phone" class="control-label">Phone</label>
                    <input type="text" readonly="readonly" value="{{$member->sp_cell_phone}}" class="form-control has-feedback-left" id="sp-phone" placeholder="Phone">
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Role <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <select name="role_id" class="form-control">
                            <option value="1" @if($member->spuser->role_id == 1) selected @endif>Admin</option>
                            <option value="2" @if($member->spUser->role_id == 2) selected @endif>Jr. Admin</option>
                            <option value="3" @if($member->spUser->role_id == 3) selected @endif>Normal User</option>
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="spnewpwd">Password <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text"
                               name="password"
                               class="form-control"
                               id="spnewpwd"
                               data-parsley-minlength="6"
                               data-parsley-minlength-message="Minimum length 6."
                               data-parsley-trigger="change"
                               placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="spconfirmpwd">Confirm Password <span class="required">*</span></label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text"
                               name="password_confirmation"
                               class="form-control"
                               id="spconfirmpwd"
                               placeholder="Confirm Password"
                               data-parsley-minlength="6"
                               data-parsley-minlength-message="Minimum length 6."
                               data-parsley-equalto="#spnewpwd"
                               data-parsley-trigger="change"
                               placeholder="Confirm Password">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endif