<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\MenusController;

$namespace = 'App\Http\Controllers\Admin';
$controllerFiles = glob(app_path('Http/Controllers/Admin/*.php'));
// Ekstrak nama file dan buat array untuk menyimpan nama class
$controllerClasses = [];

foreach ($controllerFiles as $file) {
    $pathInfo = pathinfo($file);
    $className = $namespace . '\\' . $pathInfo['filename'];
    $controllerClasses[] = $className;
}
// dd($controllerClasses);
foreach ($controllerClasses as $controller) {
    $controllerInstance = app()->make($controller);

    // Dapatkan daftar judul metode dari controller
    $titles = $controllerInstance->getMethot();
    // dd($titles);

    // Iterasi melalui daftar judul dan buat route secara dinamis
    foreach ($titles as $title) {
        // dd(strtolower($title));
        $methodName =  ucfirst($title);
        $uri =  strtolower($title);
        // var_dump($uri);
        Route::get($uri, [$controller, $methodName])->name($methodName);
    }
}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// mengambil method yang ada pada menuscontroller
// $titles = (new MenusController())->getMethot();

// // ulang data metdot dan ambil nila value setiap methodnya
// foreach ($titles as $title) {
//     $methodName = 'Admin' . $title;
//     $uri = '/admin' . strtolower($title);

//     Route::get($uri, [MenusController::class, $methodName])->name($methodName);
// }

Route::get('/', function () {
    return view('admin/pages/dashboard');
});

// Route::get('/menu', [MenusController::class, 'getMethot']);
