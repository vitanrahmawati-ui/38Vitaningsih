<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User; // Pastikan Model User terpanggil

Route::get('/users', function () {
    $users = User::all(); // Mengambil data user dari database

    return response()->json([
        'success' => true,
        'message' => 'Detail data berhasil diambil',
        'data' => $users
    ]);
});
