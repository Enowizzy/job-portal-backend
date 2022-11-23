<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'job_categories';
    protected $guarded    = ['id'];
    protected $fillable = [
        'name',
        'slug',
    ];
}
