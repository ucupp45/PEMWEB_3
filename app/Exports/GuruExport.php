<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection, WithHeadings
{
    /**
     * Ambil koleksi data guru untuk diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Ambil data yang diinginkan untuk ekspor
        return Guru::select('id', 'nama', 'alamat', 'gender', 'pendidikan', 'tanggal_lahir')->get();
    }

    /**
     * Tambahkan header kolom di file Excel.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Alamat',
            'Gender',
            'Pendidikan',
            'Tanggal Lahir',
        ];
    }
}
