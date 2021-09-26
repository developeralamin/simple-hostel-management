<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
   protected $fillable =['course_code','course_sort_name','course_full_name','posting_date'];

}
