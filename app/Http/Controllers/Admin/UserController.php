<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user.index', $data);
    }

    public function create()
    {
        $data['list_user'] = User::all();
        return view('admin.user.create', $data);
    }

    public function store()
    {
        $pegawai = new User();
        $pegawai->name = request('nama');
        $pegawai->type = 'PEGAWAI';
        $pegawai->nip = request('nip');
        $pegawai->division = request('division');
        $pegawai->password = request('password');

        $pegawai->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
}
