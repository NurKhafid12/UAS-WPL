<div>
    <h5 class="card-title">Data Penerima Bantuan</h5>

    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}">
        <div class="row mb-3">
            <div class="col">
                <input type="text" wire:model="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" wire:model="nik" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" wire:model="no_hp" class="form-control" placeholder="No HP">
            </div>
        </div>

        <div class="mb-3">
            <textarea wire:model="alamat" class="form-control" placeholder="Alamat"></textarea>
        </div>

        <div class="row mb-3">
            <div class="col">
                <select wire:model="jenis_kelamin" class="form-control">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col">
                <input type="date" wire:model="tanggal_lahir" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-{{ $isEdit ? 'warning' : 'primary' }}">
            {{ $isEdit ? 'Update' : 'Simpan' }}
        </button>
    </form>

    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penerimas as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>
                    <button wire:click="edit({{ $item->id }})" class="btn btn-sm btn-warning">Edit</button>
                    <button wire:click="delete({{ $item->id }})" class="btn btn-sm btn-danger"
                        onclick="return confirm('Yakin hapus data?')">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
