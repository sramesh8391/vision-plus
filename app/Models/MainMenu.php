<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    protected $table = 'main_menu';
    protected $primaryKey = 'menu_id';
    use HasFactory;
    public $timestamps = false;
}
