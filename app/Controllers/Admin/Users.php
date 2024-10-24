<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // Menampilkan pesan sederhana untuk halaman admin
        echo "Ini adalah halaman admin";
        return view('Admin/users');
    }

    public function check()
    {
        // Mengambil parameter 'role' dari URL
        $role = $this->request->getGet('role');

        // Menggunakan if-else untuk menangani berbagai kondisi berdasarkan nilai parameter 'role'
        if ($role === 'admin') {
            // Jika role adalah 'admin', tampilkan halaman admin
            return view('admin', ['message' => 'Selamat datang, Admin']);
        } elseif ($role === 'user') {
            // Jika role adalah 'user', tampilkan halaman user
            return view('user', ['message' => 'Selamat datang, User']);
        } elseif ($role) {
            // Jika role adalah nama lain, tampilkan pesan personal
            return view('personal', ['message' => 'Halo, selamat datang ' . ucfirst($role)]);
        } else {
            // Jika tidak ada parameter 'role' atau tidak valid, tampilkan halaman error
            return view('error', ['message' => 'Role tidak valid. Silakan pilih "admin", "user", atau masukkan nama.']);
        }
    }
}
