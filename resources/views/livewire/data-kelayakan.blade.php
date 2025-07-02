<div>
  <div class="pagetitle">
    <h1>Data Kelayakan Bantuan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active">Kelayakan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Formulir Data Kelayakan</h5>

            <form wire:submit.prevent="simpan">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" wire:model="nama">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Alamat Rumah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" wire:model="alamat">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis Rumah</label>
                <div class="col-sm-10">
                  <select class="form-select" wire:model="jenis_rumah">
                    <option value="">-- Pilih --</option>
                    <option value="Tempat Sendiri">Tempat Sendiri</option>
                    <option value="Kontrakan">Kontrakan</option>
                    <option value="Menumpang">Menumpang</option>
                  </select>
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Penghasilan Perbulan</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" wire:model="penghasilan">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" wire:model="tanggungan">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form><!-- End Form -->
          </div>
        </div>

      </div>
    </div>
  </section>
</div>
