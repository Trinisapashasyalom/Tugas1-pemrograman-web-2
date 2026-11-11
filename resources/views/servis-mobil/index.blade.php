<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-danger mb-3" href="{{ route('servis-mobil.create') }}" role="button">
        Tambah Servis Mobil
    </a>

    <table class="table table-bordered border-danger table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Pelanggan</th>
                <th>Nomor Polisi</th>
                <th>Merek Mobil</th>
                <th>Jenis Servis</th>
                <th>Tanggal Servis</th>
                <th>Biaya Servis</th>
                <th>Keluhan</th>
                <th>Status Servis</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($servismobils as $servismobil)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $servismobil->nama_pelanggan }}</td>
                    <td>{{ $servismobil->no_polisi }}</td>
                    <td>{{ $servismobil->merek_mobil }}</td>
                    <td>{{ $servismobil->jenis_servis }}</td>
                    <td>{{ $servismobil->tanggal_servis }}</td>
                    <td>{{ $servismobil->biaya_servis }}</td>
                    <td>{{ $servismobil->keluhan }}</td>
                    <td>{{ $servismobil->status_servis }}</td>

                    <td>
                        <a class="btn btn-warning btn-sm mb-1" href="{{ route('servis-mobil.edit', $servismobil) }}">
                            Edit
                        </a>

                        <form action="/servis-mobil/{{ $servismobil->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
