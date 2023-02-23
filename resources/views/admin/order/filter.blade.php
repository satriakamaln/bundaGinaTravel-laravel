@extends('layouts.appadmin')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Cetak Order </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3>Cetak</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.report.orderdate') }}" target="_blank">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label for="start">Tanggal Awal</label>
                                    <input type="date" class="form-control col-md-12" id="start" name="start"
                                        placeholder="Masukan Keperluan" required>
                                </div>
                                <div class="form-group">
                                    <label for="end">Tanggal Akhir</label>
                                    <input type="date" class="form-control col-md-12" id="end" name="end"
                                        placeholder="Masukan Keperluan" required>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <td>
                                    <a type="button" href="{{ route('admin.order.index') }}"
                                        class="btn btn btn-danger">Kembali</a>
                                </td>
                                <button type="submit" class="btn btn-primary">Cetak Data</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
