<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// MEMBER
Route::get('/sipp/member', function () {
    return view('sipp/member/index');
});

Route::get('/sipp/member/edit_akun', function () {
    return view('sipp/member/edit_akun');
});

Route::resource('/sipp/member/biodata', 'Member\BiodataController');

Route::get('/sipp/member/biodata', function () {
    return view('sipp/member/biodata');
});

Route::resource('/sipp/member/pembayaran', 'Member\BiodataController');

Route::get('/sipp/member/pembayaran', function () {
    return view('sipp/member/pembayaran');
});

Route::resource('/sipp/member/pendidikan_karir', 'Member\PendidikanKarirController');

Route::get('/sipp/member/pendidikan_karir', function () {
    return view('sipp/member/pendidikan_karir');
});

Route::resource('/sipp/member/portofolio_kasus', 'Member\PortofolioKasusController');

Route::get('/sipp/member/portofolio_kasus', function () {
    return view('sipp/member/portofolio_kasus');
});

Route::resource('/sipp/member/pengembangan_prof', 'Member\PengembanganProfessionalController');

Route::get('/sipp/member/pengembangan_prof', function () {
    return view('sipp/member/pengembangan_prof');
});


Route::get('/sipp/member/finalisasi', function () {
    return view('sipp/member/finalisasi');
});

// ADMINISTRASI
Route::get('/sipp/administrasi/', 'Administrasi\HomeController@index');
Route::resource('/sipp/administrasi/ubahberkas', 'Administrasi\HomeController');

// Route::get('/sipp/administrasi/home', function () {
//     return view('sipp/administrasi/home');
// });

Route::get('/sipp/administrasi/jadwal_wawancara', function () {
    return view('sipp/administrasi/jadwal_wawancara');
});

Route::resource('/sipp/administrasi/berkas_user', 'Administrasi\BerkasUserController');
Route::resource('/sipp/administrasi/berkas_user_show', 'Administrasi\BerkasUserController');

// Route::get('/sipp/administrasi/berkas_user', function () {
//     return view('sipp/administrasi/berkas_user');
// });

Route::get('pdfKeluar','Administrasi\DaftarDirekomendasikanController@pdfKeluar');
Route::resource('/sipp/administrasi/daftar_direkomendasikan', 'Administrasi\DaftarDirekomendasikanController');


// Route::resource('/pdfKeluar', 'Administrasi\DaftarDirekomendasikanController@index');
// Route::resource('/sipp/administrasi/daftar_direkomendasikan', 'Administrasi\DaftarDirekomendasikanController@printPreview');

// Route::get('/sipp/administrasi/daftar_direkomendasikan', function () {
//     return view('sipp/administrasi/daftar_direkomendasikan');
// });

Route::resource('/sipp/administrasi/master_user', 'Administrasi\MasterUserController');

// Route::get('/sipp/administrasi/master_user', function () {
//     return view('sipp/administrasi/master_user');
// });

Route::get('/sipp/administrasi/edit_akun', function () {
    return view('sipp/administrasi/edit_akun');
});

// TIM BIDANG 3
Route::get('/sipp/bidang/', 'Tim_Bidang3\HomeController@index');
Route::resource('/sipp/bidang/tb3_ubahberkas', 'Tim_Bidang3\HomeController');
Route::get('/sipp/bidang/tb3_buatjadwalwawancara', 'Tim_Bidang3\HomeController@buatjadwalwawancara_show')->name('buatjadwalwawancara.show');
Route::post('/sipp/bidang/tb3_buatjadwalwawancara', 'Tim_Bidang3\HomeController@buatjadwalwawancara_store')->name('buatjadwalwawancara.store');
// Route::get('/sipp/bidang', function () {
//     return view('sipp/tim_bidang3/index');
// });

Route::resource('/sipp/bidang/jadwalwawancara', 'Tim_Bidang3\JadwalWawancaraController');
// Route::get('/sipp/bidang/jadwal_wawancara', function () {
//     return view('sipp/tim_bidang3/jadwal_wawancara');
// });

Route::get('/sipp/bidang/wawancara_ulang', function () {
    return view('sipp/tim_bidang3/wawancara_ulang');
});

Route::get('/sipp/bidang/rekomendasi', function () {
    return view('sipp/tim_bidang3/rekomendasi');
});

Route::get('/sipp/bidang/edit_akun', function () {
    return view('sipp/tim_bidang3/edit_akun');
});

// PEWAWANCARA
Route::get('/sipp/wawancara', function () {
    return view('sipp/wawancara/index');
});

Route::get('/sipp/wawancara/jadwal_wawancara', function () {
    return view('sipp/wawancara/jadwal_wawancara');
});

Route::get('/sipp/wawancara/edit_akun', function () {
    return view('sipp/wawancara/edit_akun');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
