<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Ambil data siswa yang ingin diekspor
        return Siswa::all();
    }

    public function headings(): array
    {
        return [
            'NIK',
            'Nama',
            'Gender',
            'Nama Orang Tua',
            'No. Telepon',
            'Tanggal Lahir',
            'Alamat',
        ];
    }
}
