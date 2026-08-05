<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'Sistem Sekolah - Tambah Kelas';

        $majors = [
            ['id' => 1, 'code' => 'AKL'],
            ['id' => 2, 'code' => 'TKJ'],
            ['id' => 3, 'code' => 'BD'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view('classes.create', [
            'title' => $title,
            'majors' => $majors,
            'teachers' => $teachers,
        ]);
    }
}