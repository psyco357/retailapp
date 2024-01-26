<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getMethot()
    {
        $methot = get_class_methods($this);
        // Filter hanya metode yang dimulai dengan "menu_"
        $menuMethods = array_filter($methot, function ($method) {
            return strpos($method, 'User') === 0;
        });
        // dd($menuMethods);
        // Hilangkan awalan "menu_" dan kembalikan daftar judul metode
        // $titles = array_map(function ($method) {
        //     return str_replace('Admin', '', $method);
        // }, $menuMethods);
        // dd($titles);
        return $menuMethods;
    }


    public function UserMenu()
    {
        return "Halo dari menu User!";
    }
    public function UserAbout()
    {
        return "Halo dari about User!";
    }
    public function UserUser()
    {
        return "Halo dari user!";
    }
}
