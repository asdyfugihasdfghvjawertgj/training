<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable=[
    	'name','course_id','price','time','room_no','image','start_date','description','end_date'];
}
