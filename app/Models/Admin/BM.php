<?php

namespace App\Models\Admin;

use App\Models\ModelAuthenticate;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class BM extends ModelAuthenticate
{
    use HasFactory;

    protected $table = 'sda';
    protected $primaryKey = 'id';

    public function getTanggalSpmStringAttribute()
    {
        return Carbon::parse($this->attributes['tgl_spm'])->translatedFormat('l, d F Y');
    }

    function handleUploadPdf()
    {
        $this->handleDeletePdf();
        if (request()->hasFile('url_pdf')) {
            $url_pdf = request()->file('url_pdf');
            $destination = "pdf";
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $url_pdf->extension();
            $url = $url_pdf->storeAs($destination, $filename);
            $this->url_pdf = "app/" . $url;
            $this->save();
        }
    }

    function handleDeletePdf()
    {
        $url_pdf = $this->url_pdf;
        if ($url_pdf) {
            $path = public_path($url_pdf);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
