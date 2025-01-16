<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\siswa as ModelSiswa;
use Livewire\WithPagination;

class Siswa extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user_id;
    public $nama;
    public $alamat;
    public $gender;
    public $nama_ortu;
    public $tanggal_lahir;
    // public $data_siswa;

    public $updateData = false;
    public $siswa_id;
    
    public function store()
    {
        $rules = [
            'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'nama_ortu' => 'required',
            'tanggal_lahir' => 'required',
        ];
        $pesan = [
            'user_id.required' => 'user_id tidak boleh kosong',
            'nama.required' => 'nama tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'gender.required' => 'gender tidak boleh kosong',
            'nama_ortu.required' => 'nama_ortu tidak boleh kosong',
            'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong',
        ];
        $validate=$this->validate($rules, $pesan);
        ModelSiswa::create($validate);
        session()->flash('message','Data berhasil ditambah');
        $this->clear();
    }

    public function edit($id)
    {
        
        $data = ModelSiswa::find($id);
        if (!$data) {
            session()->flash('error', 'Data siswa tidak ditemukan.');
            return;
        }
        $this->user_id = $data->user_id;
        $this->nama = $data->nama;
        $this->alamat = $data->alamat;
        $this->gender = $data->gender;
        $this->nama_ortu = $data->nama_ortu;
        $this->tanggal_lahir = $data->tanggal_lahir;

        $this->updateData = true;
        $this->siswa_id = $id;
    }

    public function update()
    {
        $rules = [
            // 'user_id' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'nama_ortu' => 'required',
            'tanggal_lahir' => 'required',
        ];
        $pesan = [
            // 'user_id.required' => 'user_id tidak boleh kosong',
            'nama.required' => 'nama tidak boleh kosong',
            'alamat.required' => 'alamat tidak boleh kosong',
            'gender.required' => 'gender tidak boleh kosong',
            'nama_ortu.required' => 'nama_ortu tidak boleh kosong',
            'tanggal_lahir.required' => 'tanggal_lahir tidak boleh kosong',
        ];
        $validate=$this->validate($rules, $pesan);
        $data = ModelSiswa::find($this->siswa_id);
        if (!$data) {
            session()->flash('error', 'Data siswa tidak ditemukan.');
            return;
        }
        $data->update($validate);
        session()->flash('message','Data berhasil update');

        $this->clear();

    }
    public  function clear()
    {
        $this->user_id = '';
        $this->nama = '';
        $this->alamat = '';
        $this->nama_ortu = '';
        $this->gender = '';
        $this->tanggal_lahir = '';

        $this->updateData = false;
        $this->siswa_id = '';
    }


    public function render()
    {
        $data= ModelSiswa::orderBy('nama','asc')->paginate(5);
        return view('livewire.siswa',['data_siswa'=>$data]);
    }
}
