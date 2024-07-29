<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\BM;
use Illuminate\Http\Request;

class BmController extends Controller
{
    public function index()
    {
        $data['list_bm'] = BM::all();
        return view('admin.bm.index', $data);
    }
    public function store()
    {
        $bm = new BM();
        $bm->nama_cv = request('nama_cv');
        $bm->nama_pekerjaan = request('nama_pekerjaan');
        $bm->no_spm = request('no_spm');
        $bm->tgl_spm = request('tgl_spm');
        $bm->no_urut = request('no_urut');
        $bm->jumlah_uang = request('jumlah_uang');

        $bm->save();

        $bm->handleUploadPdf();

        return redirect('admin/bm')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        return view('admin.bm.show', [
            'bm' => BM::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('admin.bm.edit', [
            'bm' => BM::findOrFail($id),
        ]);
    }

    public function update($id)
    {
        $bm = BM::find($id);
        if (request('nama_cv')) $bm->nama_cv = request('nama_cv');
        if (request('nama_pekerjaan')) $bm->nama_pekerjaan = request('nama_pekerjaan');
        if (request('no_spm')) $bm->no_spm = request('no_spm');
        if (request('tgl_spm')) $bm->tgl_spm = request('tgl_spm');
        if (request('no_urut')) $bm->no_urut = request('no_urut');
        if (request('jumlah_uang')) $bm->jumlah_uang = request('jumlah_uang');
        $bm->save();

        return redirect('admin/bm')->with('success', 'Berhasil di Edit');
    }

    function destroy($id)
    {
        $bm = BM::find($id);
        $bm->delete();
        return redirect('admin/bm')->with('danger', 'Data Berhasil Dihapus');
    }
}
