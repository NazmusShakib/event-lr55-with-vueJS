<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Member extends Model
{
    protected $table = "members";
    protected $fillable = [
        'sp_user_id',
        'hh_user_id',
        'sp_title',
        'hh_title',
        'sp_fname',
        'hh_fname',
        'sp_mname',
        'hh_mname',
        'sp_lname',
        'hh_lname',
        'sp_sex',
        'hh_sex',
        'sp_dob',
        'hh_dob',
        'sp_address',
        'hh_address',
        'sp_alt_address',
        'hh_alt_address',
        'sp_home_phone',
        'hh_home_phone',
        'sp_cell_phone',
        'hh_cell_phone',
        'sp_work_phone',
        'hh_work_phone',
        'sp_email',
        'hh_email',
        'sp_fax',
        'hh_fax',
        'sp_extra_phone',
        'hh_extra_phone',
        'sp_marital_status',
        'hh_marital_status',
        'sp_anniversary_date',
        'hh_anniversary_date',
        'sp_occupation',
        'hh_occupation',
        'sp_employer',
        'hh_employer',
        'sp_member_status',
        'hh_member_status',
        'sp_church_background',
        'hh_church_background',
        'sp_baptized',
        'hh_baptized',
        'sp_skills',
        'hh_skills',
        'childrens',
        'hh_previous_positions',
        'sp_previous_positions',
        'hh_activities',
        'sp_activities',
        'hh_spiritual_gifts',
        'sp_spiritual_gifts',
        'hh_willing_to_serve',
        'sp_willing_to_serve',
        'comments'
    ];

    public function hhUser()
    {
        return $this->hasOne('App\User', 'id', 'hh_user_id');
    }

    public function spUser()
    {
        return $this->hasOne('App\User', 'id', 'sp_user_id');
    }
}
