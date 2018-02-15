
    <div class="x_panel">

        <div class="x_content">
            <br>
            <table id="datatable-responsive"
       class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
       cellspacing="0" width="100%" role="grid"
       aria-describedby="datatable-responsive_info" style="width: 100%;">
    <thead>
    <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive"
            rowspan="1" colspan="1" style="width: 96px;" aria-sort="ascending"
            aria-label="First name: activate to sort column descending">Fields
        </th>
        <th class="sorting" tabindex="0" aria-controls="datatable-responsive"
            rowspan="1" colspan="1" style="width: 94px;"
            aria-label="Last name: activate to sort column ascending">Head of Household
        </th>
        <th class="sorting" tabindex="0" aria-controls="datatable-responsive"
            rowspan="1" colspan="1" style="width: 199px;"
            aria-label="Position: activate to sort column ascending">Spouse
        </th>
    </tr>
    </thead>
    <tbody>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1">Title</td>
        <td>{{$member->hh_title}}</td>
        <td>{{$member->sp_title}}</td>
    </tr>

    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">First Name</td>
        <td>{{$member->hh_fname}}</td>
        <td>{{$member->sp_fname}}</td>
    </tr>

    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Middle Name</td>
        <td>{{$member->hh_mname}}</td>
        <td>{{$member->sp_mname}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Last Name</td>
        <td>{{$member->hh_lname}}</td>
        <td>{{$member->sp_lname}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Sex</td>
        <td>{{$member->hh_sex}}</td>
        <td>{{$member->sp_sex}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Birthday</td>
        <td>{{$member->hh_dob}}</td>
        <td>{{$member->sp_dob}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Address: City, State / Zip</td>
        <td>{{$member->hh_address}}</td>
        <td>{{$member->sp_address}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Alternate Address (Address,City, State / Zip)</td>
        <td>{{$member->hh_alt_address}}</td>
        <td>{{$member->sp_alt_address}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Home Phone</td>
        <td>{{$member->hh_home_phone}}</td>
        <td>{{$member->sp_home_phone}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Cell Phone</td>
        <td>{{$member->hh_cell_phone}}</td>
        <td>{{$member->sp_cell_phone}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Work Phone</td>
        <td>{{$member->hh_work_phone}}</td>
        <td>{{$member->sp_work_phone}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Email</td>
        <td>{{$member->hh_email}}</td>
        <td>{{$member->sp_email}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Fax #</td>
        <td>{{$member->hh_fax}}</td>
        <td>{{$member->sp_fax}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Extra Phone</td>
        <td>{{$member->hh_extra_phone}}</td>
        <td>{{$member->sp_extra_phone}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Marital Status</td>
        <td>{{$member->hh_marital_status}}</td>
        <td>{{$member->sp_marital_status}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Anniversary Date</td>
        <td>{{$member->hh_anniversary_date}}</td>
        <td>{{$member->sp_anniversary_date}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Occupation</td>
        <td>{{$member->hh_occupation}}</td>
        <td>{{$member->sp_occupation}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Employer</td>
        <td>{{$member->hh_employer}}</td>
        <td>{{$member->sp_employer}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Member Status</td>
        <td>{{$member->hh_member_status}}</td>
        <td>{{$member->sp_member_status}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Church Background</td>
        <td>{{$member->hh_church_background}}</td>
        <td>{{$member->sp_church_background}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Baptized</td>
        <td>{{$member->hh_baptized}}</td>
        <td>{{$member->sp_baptized}}</td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">First Child</td>
        <td colspan="2">
            <?php
            $childs = json_decode($member->childrens);
            echo "<b>Name: </b>" . $childs->child1->child1_name .
                "<br/><b>Date of birth: </b>" . $childs->child1->child1_dob .
                "<br/><b>Class: </b>" . $childs->child1->child1_class .
                "<br/><b>Grade: </b>" . $childs->child1->child1_grade .
                "<br/><b>Baptized: </b>" . $childs->child1->child1_baptized;
            ?>
        </td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Second Child</td>
        <td colspan="2">
            <?php
            echo "<b>Name: </b>" . $childs->child2->child2_name .
                "<br/><b>Date of birth: </b>" . $childs->child2->child2_dob .
                "<br/><b>Class: </b>" . $childs->child2->child2_class .
                "<br/><b>Grade: </b>" . $childs->child2->child2_grade .
                "<br/><b>Baptized: </b>" . $childs->child2->child2_baptized;
            ?>
        </td>
    </tr>
    <tr role="row" class="odd parent">
        <td tabindex="0" class="sorting_1" style="">Third Child</td>
        <td colspan="2">
            <?php
            echo "<b>Name: </b>" . $childs->child3->child3_name .
                "<br/><b>Date of birth: </b>" . $childs->child3->child3_dob .
                "<br/><b>Class: </b>" . $childs->child3->child3_class .
                "<br/><b>Grade: </b>" . $childs->child3->child3_grade .
                "<br/><b>Baptized: </b>" . $childs->child3->child3_baptized;
            ?>
        </td>
    </tr>
    <tr role="row" class="odd parent">
        <td>Skills</td>
        <td>
            <?php
            $hh_skills = json_decode($member->hh_skills);
            foreach ($hh_skills as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
        <td>
            <?php
            $sp_skills = json_decode($member->sp_skills);
            foreach ($sp_skills as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Previous Positions</td>
        <td>
            <?php
            $hh_previous_positions = json_decode($member->hh_previous_positions);
            foreach ($hh_previous_positions as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
        <td>
            <?php
            $sp_previous_positions = json_decode($member->sp_previous_positions);
            foreach ($sp_previous_positions as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Activities</td>
        <td>
            <?php
            $hh_activities = json_decode($member->hh_activities);
            foreach ($hh_activities as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
        <td>
            <?php
            $sp_activities = json_decode($member->sp_activities);
            foreach ($sp_activities as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>Spiritual Gifts</td>
        <td>
            <?php
            $hh_spiritual_gifts = json_decode($member->hh_spiritual_gifts);
            foreach ($hh_spiritual_gifts as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
        <td>
            <?php
            $sp_spiritual_gifts = json_decode($member->sp_spiritual_gifts);
            foreach ($sp_spiritual_gifts as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Willing to Serve</td>
        <td><?php
            $hh_willing_to_serve = json_decode($member->hh_willing_to_serve);
            foreach ($hh_willing_to_serve as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
        <td><?php
            $sp_willing_to_serve = json_decode($member->sp_willing_to_serve);
            foreach ($sp_willing_to_serve as $key => $value) {
                if ($value) {
                    echo "<b>$key</b>, &nbsp;&nbsp;";
                }
            }
            ?>
        </td>
    </tr>

    <tr>
        <td>Comments</td>
        <td colspan="2"><?php echo $member->comments; ?></td>
    </tr>

    </tbody>
</table>
        </div>
    </div>

