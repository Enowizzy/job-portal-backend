<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded    = ['id'];
    protected $fillable = [
        'position',
        'company',
        'location',
        'message',
        'job_link',
        'job_nature',
        'end_date',
        'edu_exp',
        'vacancy',
        'pdf',
        'image',
    ];
}
