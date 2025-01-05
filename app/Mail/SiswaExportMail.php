<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SiswaExportMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $filePath; // Lokasi file yang akan dilampirkan

    /**
     * Buat instance baru dari SiswaExportMail.
     *
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Bangun pesan email.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Export Data Siswa')
                    ->view('admin.dash_admin') // View untuk isi email
                    ->attach($this->filePath, [
                        'as' => 'data_siswa.xlsx', // Nama file yang tampil di email
                        'mime' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    ]);
    }
}
