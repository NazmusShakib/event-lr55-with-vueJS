<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Excel;

class MemberController extends Controller
{

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
        )->get();
        return view('members.member-list', compact('members'));
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
            'sex' => $request->sp_sex,
            'role_id' => 3,
            'password' => 'secret',
        ]);

        $hhUser = User::create([
            'name' => "$request->hh_fname $request->hh_lname",
            'email' => $request->hh_email,
            'phone' => $request->hh_cell_phone,
            'sex' => $request->hh_sex,
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


    public function exportMemberData($type)
    {
        $data = Member::get()->toArray();
        return Excel::create('Member-list', function($excel) use ($data) {
            $excel->sheet('All', function($sheet) use ($data)
            {
                $sheet->cell('A1', function($cell) {$cell->setValue('HouseHolder Title');   });
                $sheet->cell('B1', function($cell) {$cell->setValue('HouseHolder First Name');   });
                $sheet->cell('C1', function($cell) {$cell->setValue('HouseHolder Middle Name');   });
                $sheet->cell('D1', function($cell) {$cell->setValue('HouseHolder Last Name');   });
                $sheet->cell('E1', function($cell) {$cell->setValue('Spouse Title');   });
                $sheet->cell('F1', function($cell) {$cell->setValue('Spouse First Name');   });
                $sheet->cell('G1', function($cell) {$cell->setValue('Spouse Middle Name');   });
                $sheet->cell('H1', function($cell) {$cell->setValue('Spouse Last Name');   });
                $sheet->cell('I1', function($cell) {$cell->setValue('HouseHolder Sex');   });
                $sheet->cell('J1', function($cell) {$cell->setValue('Spouse Sex');   });
                $sheet->cell('K1', function($cell) {$cell->setValue('HouseHolder DOB');   });
                $sheet->cell('L1', function($cell) {$cell->setValue('Spouse DOB');   });
                $sheet->cell('M1', function($cell) {$cell->setValue('HouseHolder address');   });
                $sheet->cell('N1', function($cell) {$cell->setValue('Spouse address');   });
                $sheet->cell('O1', function($cell) {$cell->setValue('HouseHolder alt address');   });
                $sheet->cell('P1', function($cell) {$cell->setValue('Spouse alt address');   });
                $sheet->cell('Q1', function($cell) {$cell->setValue('HouseHolder home phone');   });
                $sheet->cell('R1', function($cell) {$cell->setValue('Spouse home phone');   });
                $sheet->cell('S1', function($cell) {$cell->setValue('HouseHolder cell phone');   });
                $sheet->cell('T1', function($cell) {$cell->setValue('Spouse cell phone');   });
                $sheet->cell('U1', function($cell) {$cell->setValue('HouseHolder work phone');   });
                $sheet->cell('V1', function($cell) {$cell->setValue('Spouse work phone');   });
                $sheet->cell('W1', function($cell) {$cell->setValue('HouseHolder email');   });
                $sheet->cell('X1', function($cell) {$cell->setValue('Spouse email');   });
                $sheet->cell('Y1', function($cell) {$cell->setValue('HouseHolder fax');   });
                $sheet->cell('Z1', function($cell) {$cell->setValue('Spouse fax');   });
                $sheet->cell('AA1', function($cell) {$cell->setValue('HouseHolder extra phone');   });
                $sheet->cell('AB1', function($cell) {$cell->setValue('Spouse extra phone');   });
                $sheet->cell('AC1', function($cell) {$cell->setValue('HouseHolder marital status');   });
                $sheet->cell('AD1', function($cell) {$cell->setValue('Spouse marital status');   });
                $sheet->cell('AE1', function($cell) {$cell->setValue('HouseHolder anniversary date');   });
                $sheet->cell('AF1', function($cell) {$cell->setValue('Spouse anniversary date');   });
                $sheet->cell('AG1', function($cell) {$cell->setValue('HouseHolder occupation');   });
                $sheet->cell('AH1', function($cell) {$cell->setValue('Spouse occupation');   });
                $sheet->cell('AI1', function($cell) {$cell->setValue('HouseHolder employer');   });
                $sheet->cell('AJ1', function($cell) {$cell->setValue('Spouse employer');   });
                $sheet->cell('AK1', function($cell) {$cell->setValue('HouseHolder member status');   });
                $sheet->cell('AL1', function($cell) {$cell->setValue('Spouse member status');   });
                $sheet->cell('AM1', function($cell) {$cell->setValue('HouseHolder church background');   });
                $sheet->cell('AN1', function($cell) {$cell->setValue('Spouse church background');   });
                $sheet->cell('AO1', function($cell) {$cell->setValue('HouseHolder baptized');   });
                $sheet->cell('AP1', function($cell) {$cell->setValue('Spouse baptized');   });
                $sheet->cell('AQ1', function($cell) {$cell->setValue('HouseHolder skills');   });
                $sheet->cell('AR1', function($cell) {$cell->setValue('Spouse skills');   });
                $sheet->cell('AS1', function($cell) {$cell->setValue('Childrens');   });
                $sheet->cell('AT1', function($cell) {$cell->setValue('HouseHolder previous positions');   });
                $sheet->cell('AU1', function($cell) {$cell->setValue('Spouse previous positions');   });
                $sheet->cell('AV1', function($cell) {$cell->setValue('HouseHolder activities');   });
                $sheet->cell('AW1', function($cell) {$cell->setValue('Spouse activities');   });
                $sheet->cell('AX1', function($cell) {$cell->setValue('HouseHolder spiritual gifts');   });
                $sheet->cell('AY1', function($cell) {$cell->setValue('Spouse spiritual gifts');   });
                $sheet->cell('AZ1', function($cell) {$cell->setValue('HouseHolder  willing to serve');   });
                $sheet->cell('BA1', function($cell) {$cell->setValue('Spouse willing to serve');   });
                $sheet->cell('BB1', function($cell) {$cell->setValue('Comments');   });
                if (!empty($data)) {
                    foreach ($data as $key => $value) {
                        $i= $key+2;
                        $sheet->cell('A'.$i, $value['hh_title']);
                        $sheet->cell('B'.$i, $value['hh_fname']);
                        $sheet->cell('C'.$i, $value['hh_mname']);
                        $sheet->cell('D'.$i, $value['hh_lname']);
                        $sheet->cell('E'.$i, $value['sp_title']);
                        $sheet->cell('F'.$i, $value['sp_fname']);
                        $sheet->cell('G'.$i, $value['sp_mname']);
                        $sheet->cell('H'.$i, $value['sp_lname']);
                        $sheet->cell('I'.$i, $value['hh_sex']);
                        $sheet->cell('J'.$i, $value['sp_sex']);
                        $sheet->cell('K'.$i, $value['hh_dob']);
                        $sheet->cell('L'.$i, $value['sp_dob']);
                        $sheet->cell('M'.$i, $value['hh_address']);
                        $sheet->cell('N'.$i, $value['sp_address']);
                        $sheet->cell('O'.$i, $value['hh_alt_address']);
                        $sheet->cell('P'.$i, $value['sp_alt_address']);
                        $sheet->cell('Q'.$i, $value['hh_home_phone']);
                        $sheet->cell('R'.$i, $value['sp_home_phone']);
                        $sheet->cell('S'.$i, $value['hh_cell_phone']);
                        $sheet->cell('T'.$i, $value['sp_cell_phone']);
                        $sheet->cell('U'.$i, $value['hh_work_phone']);
                        $sheet->cell('V'.$i, $value['sp_work_phone']);
                        $sheet->cell('W'.$i, $value['hh_email']);
                        $sheet->cell('X'.$i, $value['sp_email']);
                        $sheet->cell('Y'.$i, $value['hh_fax']);
                        $sheet->cell('Z'.$i, $value['sp_fax']);
                        $sheet->cell('AA'.$i, $value['hh_extra_phone']);
                        $sheet->cell('AB'.$i, $value['sp_extra_phone']);
                        $sheet->cell('AC'.$i, $value['hh_marital_status']);
                        $sheet->cell('AD'.$i, $value['sp_marital_status']);
                        $sheet->cell('AE'.$i, $value['hh_anniversary_date']);
                        $sheet->cell('AF'.$i, $value['sp_anniversary_date']);
                        $sheet->cell('AG'.$i, $value['hh_occupation']);
                        $sheet->cell('AH'.$i, $value['sp_occupation']);
                        $sheet->cell('AI'.$i, $value['hh_employer']);
                        $sheet->cell('AJ'.$i, $value['sp_employer']);
                        $sheet->cell('AK'.$i, $value['hh_member_status']);
                        $sheet->cell('AL'.$i, $value['sp_member_status']);
                        $sheet->cell('AM'.$i, $value['hh_church_background']);
                        $sheet->cell('AN'.$i, $value['sp_church_background']);
                        $sheet->cell('AO'.$i, $value['hh_baptized']);
                        $sheet->cell('AP'.$i, $value['sp_baptized']);

                        $hh_skills = json_decode($value['hh_skills']);
                        $result = '';
                        foreach ($hh_skills as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AQ'.$i, $result);


                        $sp_skills = json_decode($value['sp_skills']);
                        $result = '';
                        foreach ($sp_skills as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AR'.$i, $result);

                        /*
                         * Children Start
                         *
                         */
                        $childs = json_decode($value['childrens']);
                        $firstChild = "<b>Name: </b>" . $childs->child1->child1_name .
                            "<br/><b>Date of birth: </b>" . $childs->child1->child1_dob .
                            "<br/><b>Class: </b>" . $childs->child1->child1_class .
                            "<br/><b>Grade: </b>" . $childs->child1->child1_grade .
                            "<br/><b>Baptized: </b>" . $childs->child1->child1_baptized;

                        $secondChild = "<b>Name: </b>" . $childs->child2->child2_name .
                            "<br/><b>Date of birth: </b>" . $childs->child2->child2_dob .
                            "<br/><b>Class: </b>" . $childs->child2->child2_class .
                            "<br/><b>Grade: </b>" . $childs->child2->child2_grade .
                            "<br/><b>Baptized: </b>" . $childs->child2->child2_baptized;

                        $thirdChild = "<b>Name: </b>" . $childs->child3->child3_name .
                            "<br/><b>Date of birth: </b>" . $childs->child3->child3_dob .
                            "<br/><b>Class: </b>" . $childs->child3->child3_class .
                            "<br/><b>Grade: </b>" . $childs->child3->child3_grade .
                            "<br/><b>Baptized: </b>" . $childs->child3->child3_baptized;

                        $sheet->cell('AS'.$i, $firstChild.'\n'.$secondChild.'\n'.$thirdChild);

                        /*
                         * Children Stop
                         */


                        $hh_previous_positions = json_decode($value['hh_previous_positions']);
                        $result = '';
                        foreach ($hh_previous_positions as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AT'.$i, $result);

                        $sp_previous_positions = json_decode($value['sp_previous_positions']);
                        $result = '';
                        foreach ($sp_previous_positions as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AU'.$i, $result);

                        $hh_activities = json_decode($value['hh_activities']);
                        $result = '';
                        foreach ($hh_activities as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AV'.$i, $result);

                        $sp_activities = json_decode($value['sp_activities']);
                        $result = '';
                        foreach ($sp_activities as $key => $val) {
                            if ($val) {
                                $result .= $key.", ";
                            }
                        }
                        $sheet->cell('AW'.$i, $result);

                        $hh_spiritual_gifts = json_decode($value['hh_spiritual_gifts']);
                        $result = '';
                        foreach ($hh_spiritual_gifts as $key => $val) {
                            if ($val) {
                                $result .= $key.', ';
                            }
                        }
                        $sheet->cell('AX'.$i, $result);

                        $sp_spiritual_gifts = json_decode($value['sp_spiritual_gifts']);
                        $result = '';
                        foreach ($sp_spiritual_gifts as $key => $val) {
                            if ($val) {
                                $result .= $key.', ';
                            }
                        }
                        $sheet->cell('AY'.$i, $result);

                        $hh_willing_to_serve = json_decode($value['hh_willing_to_serve']);
                        $result = '';
                        foreach ($hh_willing_to_serve as $key => $val) {
                            if ($val) {
                                $result .= $key.', ';
                            }
                        }
                        $sheet->cell('AZ'.$i, $result);

                        $sp_willing_to_serve = json_decode($value['sp_willing_to_serve']);
                        $result = '';
                        foreach ($sp_willing_to_serve as $key => $val) {
                            if ($val) {
                                $result .= $key.', ';;
                            }
                        }
                        $sheet->cell('BA'.$i, $result);
                        $sheet->cell('BB'.$i, $value['comments']);
                    }
                }
            });
        })->download($type);
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::with(['hhUser', 'spUser'])->find($id);
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
     * member Update By Admin the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function memberUpdateByAdmin(Request $request, $userID)
    {
        if (!empty($request->password) && !empty($request->password_confirmation)) {

            $validator = Validator::make($request->all(), [
                'password' => 'string|min:6|confirmed',
                'password_confirmation' => 'same:password'
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = [
                'password' => bcrypt($request->password),
                'role_id' => $request->role_id,
            ];
        } else {
            $data = [
                'role_id' => $request->role_id,
            ];
        }

        if (User::where('id', $userID)->update($data)) {
            return redirect()->back()->with('msg_success', 'Member updated successfully.');
        } else {
            return redirect()->back()->with('msg_error', 'Failed to update status.');
        }
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
            return redirect()->back()->with('msg_success', 'Member deleted successfully.');
        } else {
            return redirect()->back()->with('msg_error', 'Failed to delete.');
        }
    }
}
