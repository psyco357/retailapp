<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        "namamenu",
        "titlemenu",
        "linkmenu",
        "parentid",
        "iconmenu",
        "statusmenu"
    ];
}
