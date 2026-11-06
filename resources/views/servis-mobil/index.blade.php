<x-app>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <a class="btn btn-danger mb-3" href="/servis-mobil/create" role="button">
        Tambah Servis Mobil
    </a>

    <table class="table table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">Nomor Polisi</th>
                <th scope="col">Merek Mobil</th>
                <th scope="col">Jenis Servis</th>
                <th scope="col">Tanggal Servis</th>
                <th scope="col">Biaya Servis</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Status Servis</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($servismobils as $servismobil)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $servismobil->nama_pelanggan }}</td>
                    <td>{{ $servismobil->no_polisi }}</td>
                    <td>{{ $servismobil->merek_mobil }}</td>
                    <td>{{ $servismobil->jenis_servis }}</td>
                    <td>{{ $servismobil->tanggal_servis }}</td>
                    <td>{{ $servismobil->biaya_servis }}</td>
                    <td>{{ $servismobil->keluhan }}</td>
                    <td>{{ $servismobil->status_servis }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app>
