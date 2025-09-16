<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-submit', function () {
    return view("test-submit");
});

Route::post('/submit', function () {
    return "Form has been submitted";
});

Route::put('/update', function () {
    return "Send update data";
});

Route::delete('/remove', function () {
    return "Send Remove Data";
});

Route::prefix('admin')->group(function(){
    Route::get('/dosen', function () {
        return view('admin.dosen');
    });
    Route::get('/karyawan', function () {
        return view('admin.karyawan');
    });
    Route::get('/mahasiswa', function () {
        return view('admin.mahasiswa');
    });
});

// Route::('/admin/karyawan', function () {
//     return view('admin.karyawan');
// });

Route::match(['get','post'],'/feedback',function(\Illuminate\Http\Request $request){
    if ($request->isMethod('post')){
        return 'Form submitted';
    }
    return view('feedback');
});
