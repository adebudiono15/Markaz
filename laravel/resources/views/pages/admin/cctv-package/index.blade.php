@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket cctv</h1>
        <a href="{{ route('cctv-package.create') }}" class="btn sm btn-primary">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Paket Cctv</a>
    </div>


    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Paket Kamera</th>
                            <th>Merk Dvr</th>
                            <th>Unit Kamera</th>
                            <th>HDD</th>
                            <th>Kabel</th>
                            <th>Kapasitas PSU</th>
                            <th>Kabel Connector</th>
                            <th>Tombol WA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->photo}}</td>
                            <td>{{ $item->paket_kamera}}</td>
                            <td>{{ $item->merk_dvr}}</td>
                            <td>{{ $item->unit_kamera}}</td>
                            <td>{{ $item->hdd}}</td>
                            <td>{{ $item->kabel}}</td>
                            <td>{{ $item->kapasitas_psu}}</td>
                            <td>{{ $item->kabel_connector}}</td>
                            <td>{{ $item->tombol_wa}}</td>
                            <td>
                                <a href="{{ route('cctv-package.edit', $item->id) }}" class="btn btn-info"> <i
                                        class="fa fa-pencil-alt"></i> </a>
                                <form action="{{ route('cctv-package.edit', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    @empty
                    <tr>
                        <td colspan="10" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection