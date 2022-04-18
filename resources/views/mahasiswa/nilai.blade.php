@extends('mahasiswa.layout')

@section('content')
    {{-- @dump($Mahasiswa->matakuliah) --}}
    <div class="container text-center">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        <h1>KARTU HASIL STUDI (KHS)</h1>
        <div class="text-left">
            <p><b>Nama : </b>{{ $Mahasiswa->nama }}</p>
            <p><b>NIM : </b>{{ $Mahasiswa->nim }}</p>
            <p><b>Kelas : </b>{{ $Mahasiswa->kelas->nama_kelas }}</p>

        </div>
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
                {{-- <th width="280px">Action</th> --}}
            </tr>
            @foreach ($Mahasiswa->matakuliah as $mhs)
                <tr>

                    <td>{{ $mhs->nama_matkul }}</td>
                    <td>{{ $mhs->sks }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>{{ $mhs->pivot->nilai }}</td>
                    {{-- <td>
                    <form action="{{ route('mahasiswa.destroy', ['mahasiswa' => $mhs->id_mahasiswa]) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('mahasiswa.show', $mhs->nim) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $mhs->id_mahasiswa) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a class="btn btn-secondary" href="{{ route('mahasiswa.nilai', $mhs->nim) }}">Nilai</a>

                    </form>
                </td> --}}
                </tr>
            @endforeach
        </table>
    </div>
@endsection
