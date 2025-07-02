<?php

namespace App\Livewire;

use Livewire\Component;

class DataKelayakan extends Component
{
    public $nama, $alamat, $jenis_rumah, $penghasilan, $tanggungan;

    public function simpan()
    {
        // Validasi sederhana
        $this->validate([
            'nama' => 'required|string',
            'alamat' => 'required',
            'jenis_rumah' => 'required',
            'penghasilan' => 'required|numeric',
            'tanggungan' => 'required|numeric',
        ]);

        // Simpan ke database atau lakukan aksi
        // Contoh: Model::create([...])

        session()->flash('message', 'Data kelayakan berhasil disimpan.');

        // Reset form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.data-kelayakan');
    }
}
