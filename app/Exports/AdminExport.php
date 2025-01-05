<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AdminExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Admin::select('id', 'nik', 'nama', 'gender', 'no_telepon', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'NIK',
            'Nama',
            'Gender',
            'Nomor Telepon',
            'Tanggal Dibuat',
        ];
    }
}
