<div class="container">
    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    @endif
    @if (session()->has('message'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h1>Data Siswa</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th class="col-md-1">No</th> --}}
                    <th class="col-md-1">User ID</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-2">Nama Orang Tua</th>
                    <th class="col-md-1">Gender</th>
                    <th class="col-md-2">Tanggal Lahir</th>
                    <th class="col-md-2">Alamat</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $key => $value)
                    <tr>
                        {{-- <td>{{$data_siswa->firstItem()+ $key}}</td> --}}
                        <td>{{ $value->user_id }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->nama_ortu }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->tanggal_lahir }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>
                            <a wire:click="edit({{ $value->id }})" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data_siswa->links() }}
    </div>
    <!-- AKHIR DATA -->
    <!-- START FORM -->
    <div class="my-3 p-3 bg-body rounded shadow-sm ">
        <form>
            <div class="mb-3 row mt-3">
                <label for="nama" class="col-sm-2 col-form-label">User ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="user_id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_ortu" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="nama_ortu">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select id="gender" name="gender" wire:model="gender">
                        <option>Pilih Gender</option>
                        <option value="P">P</option>
                        <option value="L">L</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" id="tanggal" name="tanggal" wire:model="tanggal_lahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    @if ($updateData == false)
                    <button type="button" class="btn btn-primary" name="submit" wire:click="store()">SIMPAN</button>

                    @else
                    <button type="button" class="btn btn-primary" name="submit" wire:click="update()">Update</button>
   
                    @endif
                </div>
            </div>
        </form>
    </div>
    <!-- AKHIR FORM -->
</div>
