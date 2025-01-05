<?php

namespace App\Exports;

use App\Models\Teknisi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeknisiExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Teknisi::select('id', 'nik', 'nama', 'gender', 'no_telepon', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'NIK',
            'Nama',
            'Gender',
            'No. Telepon',
            'Tanggal Dibuat',
        ];
    }
}
