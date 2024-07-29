<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SDA;

class SdaController extends Controller
{
    public function index()
    {
        $data['list_sda'] = SDA::all();
        return view('admin.sda.index', $data);
    }

    public function store()
    {
        $sda = new SDA();
        $sda->nama_cv = request('nama_cv');
        $sda->nama_pekerjaan = request('nama_pekerjaan');
        $sda->no_spm = request('no_spm');
        $sda->tgl_spm = request('tgl_spm');
        $sda->no_urut = request('no_urut');
        $sda->jumlah_uang = request('jumlah_uang');

        $sda->save();

        $sda->handleUploadPdf();

        return redirect('admin/sda')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('admin.sda.show', [
            'sda' => SDA::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('admin.sda.edit', [
            'sda' => SDA::findOrFail($id),
        ]);
    }

    public function update($id)
    {
        $sda = SDA::find($id);
        if (request('nama_cv')) $sda->nama_cv = request('nama_cv');
        if (request('nama_pekerjaan')) $sda->nama_pekerjaan = request('nama_pekerjaan');
        if (request('no_spm')) $sda->no_spm = request('no_spm');
        if (request('tgl_spm')) $sda->tgl_spm = request('tgl_spm');
        if (request('no_urut')) $sda->no_urut = request('no_urut');
        if (request('jumlah_uang')) $sda->jumlah_uang = request('jumlah_uang');
        $sda->save();

        return redirect('admin/sda')->with('success', 'Berhasil di Edit');
    }

    function destroy($id)
    {
        $sda = SDA::find($id);
        $sda->delete();
        return redirect('admin/sda')->with('danger', 'Data Berhasil Dihapus');
    }
}
