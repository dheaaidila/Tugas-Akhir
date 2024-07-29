<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\BM;
use App\Models\Admin\CK;
use App\Models\Admin\SDA;

class PencarianSP2DController extends Controller
{
    public function index()
    {
        return view('admin.pencariansp2d.index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'bidang' => 'required',
            'kriteria' => 'required',
            'isi_kriteria' => 'required',
            'kode_keamanan' => 'required|captcha',
        ]);

        $bidang = $request->input('bidang');
        $kriteria = $request->input('kriteria');
        $isiKriteria = $request->input('isi_kriteria');

        // Select the correct model based on the 'bidang'
        switch ($bidang) {
            case 'SDA':
                $model = SDA::query();
                break;
            case 'CK':
                $model = CK::query();
                break;
            case 'BM':
                $model = BM::query();
                break;
            default:
                return redirect()->back()->withErrors(['bidang' => 'Bidang tidak valid']);
        }

        if ($kriteria && $isiKriteria) {
            $model->where($kriteria, 'LIKE', '%' . $isiKriteria . '%');
        }

        $results = $model->get();

        if ($results->isEmpty()) {
            return redirect()->back()->with('danger', 'Data tidak tersedia.');
        }

        return view('admin.pencariansp2d.result', compact('results'));
    }
}
