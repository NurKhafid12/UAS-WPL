<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Penerima;

class PenerimaComponent extends Component
{
    public $penerimas, $nama, $nik, $alamat, $no_hp, $jenis_kelamin, $tanggal_lahir, $penerima_id;
    public $isEdit = false;

    public function render()
    {
        $this->penerimas = Penerima::all();
        return view('livewire.penerima-component');
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penerimas,nik',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        Penerima::create([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $this->resetForm();
    }

    public function edit($id)
    {
        $data = Penerima::findOrFail($id);
        $this->penerima_id = $data->id;
        $this->nama = $data->nama;
        $this->nik = $data->nik;
        $this->alamat = $data->alamat;
        $this->no_hp = $data->no_hp;
        $this->jenis_kelamin = $data->jenis_kelamin;
        $this->tanggal_lahir = $data->tanggal_lahir;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penerimas,nik,' . $this->penerima_id,
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        $data = Penerima::findOrFail($this->penerima_id);
        $data->update([
            'nama' => $this->nama,
            'nik' => $this->nik,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $this->resetForm();
    }

    public function delete($id)
    {
        Penerima::findOrFail($id)->delete();
    }

    public function resetForm()
    {
        $this->nama = '';
        $this->nik = '';
        $this->alamat = '';
        $this->no_hp = '';
        $this->jenis_kelamin = '';
        $this->tanggal_lahir = '';
        $this->penerima_id = null;
        $this->isEdit = false;
    }
}
