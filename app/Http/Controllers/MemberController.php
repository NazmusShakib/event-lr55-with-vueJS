<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::select(
            'id', 'sp_user_id', 'hh_user_id', 'sp_title', 'hh_title', 'sp_fname', 'hh_fname', 'sp_lname', 'hh_lname', 'sp_cell_phone',
            'hh_cell_phone', 'sp_email', 'hh_email'
        )->paginate(10);
        return view('members.member-list', compact('members'));
    }

    /**
     * Display a membershipForm for public submission.
     *
     */
    public function membershipForm()
    {
        return view('members.membership-form');
    }

    /**
     * Display a membership Form For Admin section.
     *
     */
    public function membershipFormForAdmin()
    {
        return view('members.member-form-for-admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sp_email' => 'required|unique:members|max:155',
            'hh_email' => 'required|unique:members|max:155',
            'sp_cell_phone' => 'required|unique:members|max:155',
            'hh_cell_phone' => 'required|unique:members|max:155',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $spUser = User::create([
            'name' => "$request->sp_fname $request->sp_lname",
            'email' => $request->sp_email,
            'phone' => $request->sp_cell_phone,
            'role_id' => 3,
            'password' => 'secret',
        ]);

        $hhUser = User::create([
            'name' => "$request->hh_fname $request->hh_lname",
            'email' => $request->hh_email,
            'phone' => $request->hh_cell_phone,
            'role_id' => 3,
            'password' => 'secret',
        ]);

        $childrens = [
            'child1' => [
                'child1_name' => $request->child1_name,
                'child1_dob' => $request->child1_dob,
                'child1_grade' => $request->child1_grade,
                'child1_baptized' => $request->child1_baptized,
                'child1_class' => $request->child1_class
            ],
            'child2' => [
                'child2_name' => $request->child2_name,
                'child2_dob' => $request->child2_dob,
                'child2_grade' => $request->child2_grade,
                'child2_baptized' => $request->child2_baptized,
                'child2_class' => $request->child2_class
            ],
            'child3' => [
                'child3_name' => $request->child3_name,
                'child3_dob' => $request->child3_dob,
                'child3_grade' => $request->child3_grade,
                'child3_baptized' => $request->child3_baptized,
                'child3_class' => $request->child3_class
            ]
        ];

        $hh_skills = [
            'Administrator' => $request->hh_skill_administrator,
            'Cooking' => $request->hh_skill_cooking,
            'Pianist' => $request->hh_skill_pianist,
            'Artist' => $request->hh_skill_artist,
            'Drama' => $request->hh_skill_drama,
            'Singing' => $request->hh_skill_singing,
            'Caregiver' => $request->hh_skill_caregiver,
            'Electrical' => $request->hh_skill_electrical,
            'Teaching' => $request->hh_skill_teaching,
            'Carpentry' => $request->hh_skill_carpentry,
            'Guitar' => $request->hh_skill_guitar,
            'Computer' => $request->hh_skill_computer,
            'Music' => $request->hh_skill_music
        ];
        $sp_skills = [
            'Administrator' => $request->sp_skill_administrator,
            'Cooking' => $request->sp_skill_cooking,
            'Pianist' => $request->sp_skill_pianist,
            'Artist' => $request->sp_skill_artist,
            'Drama' => $request->sp_skill_drama,
            'Singing' => $request->sp_skill_singing,
            'Caregiver' => $request->sp_skill_caregiver,
            'Electrical' => $request->sp_skill_electrical,
            'Teaching' => $request->sp_skill_teaching,
            'Carpentry' => $request->sp_skill_carpentry,
            'Guitar' => $request->sp_skill_guitar,
            'Computer' => $request->sp_skill_computer,
            'Music' => $request->sp_skill_music
        ];

        $hh_previous_positions = [
            'Choir Director' => $request->hh_pp_choir_director,
            'Treasurer' => $request->hh_pp_treasurer,
            'Children’s Ministry' => $request->hh_pp_child_ministry,
            'Deacon' => $request->hh_pp_deacon,
            'Worship Leader' => $request->hh_pp_workship_leader,
            'Finance' => $request->hh_pp_finance,
            'Interim Board' => $request->hh_pp_interim_board,
            'Minister' => $request->hh_pp_minister,
            'SS Superintendent' => $request->hh_pp_ss_superintendent,
            'Sunday School Teacher' => $request->hh_pp_sunday_teacher
        ];
        $sp_previous_positions = [
            'Choir Director' => $request->sp_pp_choir_director,
            'Treasurer' => $request->sp_pp_treasurer,
            'Children’s Ministry' => $request->sp_pp_child_ministry,
            'Deacon' => $request->sp_pp_deacon,
            'Worship Leader' => $request->sp_pp_workship_leader,
            'Finance' => $request->sp_pp_finance,
            'Interim Board' => $request->sp_pp_interim_board,
            'Minister' => $request->sp_pp_minister,
            'SS Superintendent' => $request->sp_pp_ss_superintendent,
            'Sunday School Teacher' => $request->sp_pp_sunday_teacher
        ];

        $hh_activities = [
            'Boys Club' => $request->hh_activities_boys_club,
            'Girl Scouts' => $request->hh_activities_girl_scouts,
            'Home Schoolers' => $request->hh_activities_schoolers,
            'Sports' => $request->hh_activities_sports,
            'Young Adults' => $request->hh_activities_young_adults,
            'Fitness' => $request->hh_activities_fitness,
            'Youth Groups' => $request->hh_activities_youth_groups
        ];
        $sp_activities = [
            'Boys Club' => $request->sp_activities_boys_club,
            'Girl Scouts' => $request->sp_activities_girl_scouts,
            'Home Schoolers' => $request->sp_activities_schoolers,
            'Sports' => $request->sp_activities_sports,
            'Young Adults' => $request->sp_activities_young_adults,
            'Fitness' => $request->sp_activities_fitness,
            'Youth Groups' => $request->sp_activities_youth_groups
        ];

        $hh_spiritual_gifts = [
            'Administrations' => $request->hh_sf_administrations,
            'Giving' => $request->hh_sf_giving,
            'Teaching' => $request->hh_sf_teaching,
            'Encouragement' => $request->hh_sf_encouragement,
            'Intercession' => $request->hh_sf_intercession,
            'Minister' => $request->hh_sf_minister,
            'Evangelism' => $request->hh_sf_dvangelism,
            'Prophecy' => $request->hh_sf_prophecy
        ];
        $sp_spiritual_gifts = [
            'Administrations' => $request->sp_sf_administrations,
            'Giving' => $request->sp_sf_giving,
            'Teaching' => $request->sp_sf_teaching,
            'Encouragement' => $request->sp_sf_encouragement,
            'Intercession' => $request->sp_sf_intercession,
            'Minister' => $request->sp_sf_minister,
            'Evangelism' => $request->sp_sf_dvangelism,
            'Prophecy' => $request->sp_sf_prophecy
        ];

        $hh_willing_to_serve = [
            'Planning Committee' => $request->hh_ws_planning_committee,
            'Hospitality' => $request->hh_ws_hospitality,
            'Nursery' => $request->hh_ws_nursery,
            'Finances' => $request->hh_ws_finances,
            'Maint./Grounds' => $request->hh_ws_maint,
            'Teaching' => $request->hh_ws_teaching,
            'Greeter' => $request->hh_ws_greeter,
            'Music' => $request->hh_ws_music,
            'Visitation' => $request->hh_ws_visitation
        ];
        $sp_willing_to_serve = [
            'Planning Committee' => $request->sp_ws_planning_committee,
            'Hospitality' => $request->sp_ws_hospitality,
            'Nursery' => $request->sp_ws_nursery,
            'Finances' => $request->sp_ws_finances,
            'Maint./Grounds' => $request->sp_ws_maint,
            'Teaching' => $request->sp_ws_teaching,
            'Greeter' => $request->sp_ws_greeter,
            'Music' => $request->sp_ws_music,
            'Visitation' => $request->sp_ws_visitation
        ];


        $postData = [
            'sp_user_id' => $spUser->id,
            'hh_user_id' => $hhUser->id,
            'sp_title' => $request->sp_title,
            'hh_title' => $request->hh_title,
            'sp_fname' => $request->sp_fname,
            'hh_fname' => $request->hh_fname,
            'sp_mname' => $request->sp_mname,
            'hh_mname' => $request->hh_mname,
            'sp_lname' => $request->sp_lname,
            'hh_lname' => $request->hh_lname,
            'sp_sex' => $request->sp_sex,
            'hh_sex' => $request->hh_sex,
            'sp_dob' => $request->sp_dob,
            'hh_dob' => $request->hh_dob,
            'sp_address' => $request->sp_address,
            'hh_address' => $request->hh_address,
            'sp_alt_address' => $request->sp_alt_address,
            'hh_alt_address' => $request->hh_alt_address,
            'sp_home_phone' => $request->sp_home_phone,
            'hh_home_phone' => $request->hh_home_phone,
            'sp_cell_phone' => $request->sp_cell_phone,
            'hh_cell_phone' => $request->hh_cell_phone,
            'sp_work_phone' => $request->sp_work_phone,
            'hh_work_phone' => $request->hh_work_phone,
            'sp_email' => $request->sp_email,
            'hh_email' => $request->hh_email,
            'sp_fax' => $request->sp_fax,
            'hh_fax' => $request->hh_fax,
            'sp_extra_phone' => $request->sp_extra_phone,
            'hh_extra_phone' => $request->hh_extra_phone,
            'sp_marital_status' => $request->sp_marital_status,
            'hh_marital_status' => $request->hh_marital_status,
            'sp_anniversary_date' => $request->sp_anniversary_date,
            'hh_anniversary_date' => $request->hh_anniversary_date,
            'sp_occupation' => $request->sp_occupation,
            'hh_occupation' => $request->hh_occupation,
            'sp_employer' => $request->sp_employer,
            'hh_employer' => $request->hh_employer,
            'sp_member_status' => $request->sp_member_status,
            'hh_member_status' => $request->hh_member_status,
            'sp_church_background' => $request->sp_church_background,
            'hh_church_background' => $request->hh_church_background,
            'sp_baptized' => $request->sp_baptized,
            'hh_baptized' => $request->hh_baptized,
            'sp_skills' => json_encode($sp_skills),
            'hh_skills' => json_encode($hh_skills),
            'childrens' => json_encode($childrens),
            'hh_previous_positions' => json_encode($hh_previous_positions),
            'sp_previous_positions' => json_encode($sp_previous_positions),
            'hh_activities' => json_encode($hh_activities),
            'sp_activities' => json_encode($sp_activities),
            'hh_spiritual_gifts' => json_encode($hh_spiritual_gifts),
            'sp_spiritual_gifts' => json_encode($sp_spiritual_gifts),
            'hh_willing_to_serve' => json_encode($hh_willing_to_serve),
            'sp_willing_to_serve' => json_encode($sp_willing_to_serve),
            'comments' => $request->comments,
        ];

        if (Member::create($postData)) {
            return redirect()->back()->with('msg_success', 'Your information has been submitted successfully.');
        } else {
            return redirect()->back()->with('msg_error', 'The following information already exists in the system.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('members.member', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function memberDelete($id)
    {
        $member = Member::find($id);

        if ($member->delete()) {
            return redirect()->back()->with('msg_success', 'Member has been deleted successfully.');
        } else {
            return redirect()->back()->with('msg_error', 'Failed to delete.');
        }
    }
}
