<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CK;
use Illuminate\Http\Request;

class CkController extends Controller
{
    public function index()
    {
        $data['list_ck'] = CK::all();
        return view('admin.ck.index', $data);
    }
    public function store()
    {
        $ck = new CK();
        $ck->nama_cv = request('nama_cv');
        $ck->nama_pekerjaan = request('nama_pekerjaan');
        $ck->no_spm = request('no_spm');
        $ck->tgl_spm = request('tgl_spm');
        $ck->no_urut = request('no_urut');
        $ck->jumlah_uang = request('jumlah_uang');

        $ck->save();

        $ck->handleUploadPdf();

        return redirect('admin/ck')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('admin.ck.show', [
            'ck' => CK::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('admin.ck.edit', [
            'ck' => CK::findOrFail($id),
        ]);
    }

    public function update($id)
    {
        $ck = CK::find($id);
        if (request('nama_cv')) $ck->nama_cv = request('nama_cv');
        if (request('nama_pekerjaan')) $ck->nama_pekerjaan = request('nama_pekerjaan');
        if (request('no_spm')) $ck->no_spm = request('no_spm');
        if (request('tgl_spm')) $ck->tgl_spm = request('tgl_spm');
        if (request('no_urut')) $ck->no_urut = request('no_urut');
        if (request('jumlah_uang')) $ck->jumlah_uang = request('jumlah_uang');
        $ck->save();

        return redirect('admin/ck')->with('success', 'Berhasil di Edit');
    }

    function destroy($id)
    {
        $ck = CK::find($id);
        $ck->delete();
        return redirect('admin/ck')->with('danger', 'Data Berhasil Dihapus');
    }
}
