<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <form method="POST" action="{{ route('servis-mobil.update', $servismobil->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan"
                name="nama_pelanggan" value="{{ old('nama_pelanggan', $servismobil->nama_pelanggan) }}">
            @error('nama_pelanggan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="no_polisi" class="form-label">Nomor Polisi</label>
            <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi"
                name="no_polisi" value="{{ old('no_polisi', $servismobil->no_polisi) }}">
            @error('no_polisi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="merek_mobil" class="form-label">Merek Mobil</label>
            <input type="text" class="form-control @error('merek_mobil') is-invalid @enderror" id="merek_mobil"
                name="merek_mobil" value="{{ old('merek_mobil', $servismobil->merek_mobil) }}">
            @error('merek_mobil')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jenis_servis" class="form-label">Jenis Servis</label>
            <input type="text" class="form-control @error('jenis_servis') is-invalid @enderror" id="jenis_servis"
                name="jenis_servis" value="{{ old('jenis_servis', $servismobil->jenis_servis) }}">
            @error('jenis_servis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_servis" class="form-label">Tanggal Servis</label>
            <input type="date" class="form-control @error('tanggal_servis') is-invalid @enderror" id="tanggal_servis"
                name="tanggal_servis" value="{{ old('tanggal_servis', $servismobil->tanggal_servis) }}">
            @error('tanggal_servis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="biaya_servis" class="form-label">Biaya Servis</label>
            <input type="number" class="form-control @error('biaya_servis') is-invalid @enderror" id="biaya_servis"
                name="biaya_servis" value="{{ old('biaya_servis', $servismobil->biaya_servis) }}">
            @error('biaya_servis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan</label>
            <textarea class="form-control @error('keluhan') is-invalid @enderror" id="keluhan" name="keluhan">{{ old('keluhan', $servismobil->keluhan) }}</textarea>
            @error('keluhan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status_servis" class="form-label">Status Servis</label>
            <input type="text" class="form-control @error('status_servis') is-invalid @enderror" id="status_servis"
                name="status_servis" value="{{ old('status_servis', $servismobil->status_servis) }}">
            @error('status_servis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-danger" href="{{ route('servis-mobil.index') }}">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</x-app>
