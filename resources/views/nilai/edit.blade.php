@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>
                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                        <option value="" selected disabled>--Pilih Nama--</option>
                                        @foreach ($mahasiswa as $mhs)
                                            <option value="{{ $mhs->user->id }}" {{ $nilai->mahasiswa_id == $mhs->user->id ? 'selected' : '' }}>{{ $mhs->user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nama Matakuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" selected disabled>--Pilih Makul--</option>
                                        @foreach ($makul as $mk)
                                            <option value="{{ $mk->id_makul }}" {{ $nilai->makul_id == $mk->id_makul ? 'selected' : '' }}>{{ $mk->nm_makul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan Nilai" value="{{ is_null($nilai) ? '' : $nilai->nilai }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                    <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
