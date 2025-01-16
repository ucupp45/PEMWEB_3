<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
     * Ambil koleksi data siswa untuk diekspor.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Ambil data yang diinginkan untuk diekspor
        return Siswa::select('id', 'nama', 'alamat', 'gender', 'nama_ortu', 'tanggal_lahir')->get();
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
            'Nama Orang Tua',
            'Tanggal Lahir',
        ];
    }
}
