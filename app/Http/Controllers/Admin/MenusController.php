<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{

    //membuat pengambilan data untuk routes awali dengan Admin 
    // maka Akan automatis terisi tanpa pergi ke routes
    public function getMethot()
    {
        $methot = get_class_methods($this);
        // Filter hanya metode yang dimulai dengan "menu_"
        $menuMethods = array_filter($methot, function ($method) {
            return strpos($method, 'Admin') === 0;
        });
        // dd($menuMethods);
        // Hilangkan awalan "menu_" dan kembalikan daftar judul metode
        // $titles = array_map(function ($method) {
        //     return str_replace('Admin', '', $method);
        // }, $menuMethods);
        // dd($titles);
        return $menuMethods;
    }


    public function AdminMenu()
    {
        $posts = Menus::all();
        return view('admin.pages.dashboard', compact('posts'));
    }
    public function AdminAbout()
    {
        return "Halo dari about!";
    }
    public function AdminUser()
    {
        return "Halo dari user!";
    }
    //
}
