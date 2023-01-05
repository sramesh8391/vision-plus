<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlmStaff extends Model
{
    protected $table = 'mlm_staff';
    protected $primaryKey = 'staff_id';
    use HasFactory;

    public $timestamps = false;
}
