<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    Protected $fillable=[
    	'user_id','DOB','gender','address','phone_no'];
}
