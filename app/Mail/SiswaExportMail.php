<?php

namespace App\Mail;

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SiswaExportMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // Constructor kosong
    }

    public function build()
    {
        return $this->subject('Data Siswa')
                    ->attach(Excel::download(new SiswaExport, 'siswa.xlsx')->getFile())
                    ->view('emails.siswa_export'); // Pastikan Anda memiliki view ini
    }
}