@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Paket cctv</h1>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
            <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{ route('cctv-package.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Paket Kamera"></label>
                    <input type="paket_kamera" class="form-control" name="paket_kamera" placeholder="Paket Kamera"
                        value="{{ old('paket_kamera') }}">
                </div>

                <div class="form-group">
                    <label for="Merk DVR"></label>
                    <input type="merk_dvr" class="form-control" name="merk_dvr" placeholder="Merk DVR"
                        value="{{ old('merk_dvr') }}">
                </div>

                <div class="form-group">
                    <label for="HDD"></label>
                    <input type="hdd" class="form-control" name="hdd" placeholder="hdd" value="{{ old('hdd') }}">
                </div>

                <div class="form-group">
                    <label for="Kabel"></label>
                    <input type="kabel" class="form-control" name="kabel" placeholder="Kabel"
                        value="{{ old('kabel') }}">
                </div>

                <div class="form-group">
                    <label for="Kapasitas PSU"></label>
                    <input type="kapasitas_psu" class="form-control" placeholder="Kapasitas PSU" name="kapasitas_psu"
                        value="{{ old('kapasitas_psu') }}">
                </div>

                <div class="form-group">
                    <label for="Kabel Connector"></label>
                    <input type="kabel_connector" class="form-control" name="kabel_connector"
                        placeholder="Kabel Connector" value="{{ old('kabel_connector') }}">
                </div>

                <div class="form-group">
                    <label for="Tombol WA"></label>
                    <input type="tombol_wa" class="form-control" name="tombol_wa" placeholder="Tombol WA"
                        value="{{ old('tombol_wa') }}">
                </div>
                <button class="btn btn-primary btn-block" type="submit">SUBMIT</button>
            </form>
        </div>
    </div>






</div>
<!-- /.container-fluid -->

@endsection