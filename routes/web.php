<?php

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//membuat route /students untuk memanggil function index
Route::get('/students', [StudentsController::class, 'index']);

Route::get('/class', [ClassRoomController::class, 'index']);

Route::get('/nama', function () {
    return 'nama saya chika';
});

Route::get('/tambah', function () {
    return 5 + 5;
});

Route::get('/kurang', function () {
    return 10 - 5;
});

Route::get('/bagi', function () {
    return 8 / 2;
});

//memanggil tampilan contact
Route::get('/contact', function () {
    return view('contact', [
        'nama_siswa' => 'chika',
        'kelas' => '12 rpl c',
        'alamat' => 'cimahi',
        'telp' => '081549626095',
    ]);
});
//memanggil tampilan biodata
Route::get('/biodata', function () {
    return view('biodata', [
        'nama' => 'chika',
        'alamat' => 'blok jambu',
        'telp' => '081549626095',
        'hobi' => 'traveling',
        'agama' => 'islam',
        'sekolah' => 'smk ti pembangunan cimahi',
        'ttl' => '09 september 2006',
    ]);
});


//Route::get('product/{id}',function ($id){
//misal product/11 jadi $id bernilai 11
//  return 'ini produk dengan id produk : '.$id;
//});

//Route::get('product/{id}',function ($id){
//return view ('product.detail' ,[
//  'id' => $id]);
//});

//detail produk
Route::get('product/{id}', function ($id) {
    $produk = [
        [
            'id' => 1,
            'nama_produk' => 'Apple 15 pro',
            'harga' => 2000000,
            'stok' => 20
        ],
        [
            'id' => 2,
            'nama_produk' => 'Apple 14 pro',
            'harga' => 2500000,
            'stok' => 7
        ],
        [
            'id' => 3,
            'nama_produk' => 'Apple 10 pro',
            'harga' => 3000000,
            'stok' => 9
        ]
    ];

    //select * from produk where id_produk=$id
    $cari_produk = collect($produk)->where('id', $id)->first();
    return view('product.detail', [
        'data' => $cari_produk
    ]);

    // dd($data);
    //die;


});


//detail siswa
Route::get('siswa/{Nis}', function ($Nis) {
    $siswa = [
        [
            'Nis' => 10982,
            'nama_siswa' => 'chika',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'basket',
        ],
        [
            'Nis' => 10976,
            'nama_siswa' => 'Ratna',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'paskibra',

        ],
        [
            'Nis' => 10996,
            'nama_siswa' => 'risma',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'fiksi',
        ],
        [
            'Nis' => 10990,
            'nama_siswa' => 'coin',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'basket',
        ],
        [
            'Nis' => 10995,
            'nama_siswa' => 'legia',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'silat',
        ]
    ];

    //select * from produk where id_produk=$id
    $cari_siswa = collect($siswa)->where('Nis', $Nis)->first();
    return view('siswa.detailsiswa', [
        'data' => $cari_siswa
    ]);

    // dd($data);
    // die;
});

//home

Route::get('/home', function () {
    $siswa = [
        [
            'Nis' => 10982,
            'nama_siswa' => 'chika',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'basket',
        ],
        [
            'Nis' => 10976,
            'nama_siswa' => 'Ratna',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'paskibra',

        ],
        [
            'Nis' => 10992,
            'nama_siswa' => 'alya sakila',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,
            'eskul' => 'fiksi',
        ],
        [
            'Nis' => 10990,
            'nama_siswa' => 'coin',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,


        ],
        [
            'Nis' => 10995,
            'nama_siswa' => 'aye',
            'jurusan' => 'Rekayasa perangkat lunak',
            'tingkat' => 12,

        ]
    ];


    return view('home', [
        'nama' => 'chika',
        'role' => 'siswa',
        'data' => $siswa
    ]);
});
