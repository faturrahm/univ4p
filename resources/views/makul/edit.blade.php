@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Makul</div>
                <div class="card-body">
                    <form action="{{ route('update.makul', $makul->id_makul) }}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Makul</label>
                                    <input type="text" value="{{ is_null($makul) ? '' : $makul->kd_makul }}" name="kd_makul" class="form-control" placeholder="Masukkan Kode Makul">
                                </div>
                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="text" value="{{ is_null($makul) ? '' : $makul->nm_makul }}" name="nm_makul" class="form-control" placeholder="Masukkan Nama Makul">
                                </div>
                                <div class="col">
                                    <label for="">Nama Makul</label>
                                    <input type="number" value="{{ is_null($makul) ? '' : $makul->sks }}" name="sks" class="form-control" placeholder="Masukkan Jumlah SKS">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
                                    <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>
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
