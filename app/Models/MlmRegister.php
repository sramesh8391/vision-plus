<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlmRegister extends Model
{
    protected $table = 'mlm_register';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    use HasFactory;
}
