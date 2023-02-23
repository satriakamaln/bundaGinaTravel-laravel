@extends('layouts.appadmin')

@section('title')
Ubah Travel
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Travel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Ubah Travel</li>
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
                        <h3>Ubah</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.travel.update', $travel->id) }}">
                            <div class="modal-body">
                                @csrf
                                @method('put')
                                <div class="form-group ">
                                    <label>Pilih Mobil</label>
                                    <select name="mobil_id" class="form-control select2 select2-hidden-accessible"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">--Pilih Mobil--
                                        </option>
                                        @foreach ($mobil as $m)
                                       <option value="{{ $m->id }}" {{  $travel->mobil_id ? 'selected' : '' }} data-select2-id="34">{{ $m->merk }},  {{ $m->jenis }} {{ $m->tipe }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label>Pilih Sopir</label>
                                    <select name="user_id" class="form-control select2 select2-hidden-accessible"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">--Pilih Sopir--
                                        </option>
                                            @foreach ($driver as $s)
                                            <option value="{{ $s->id }}" {{  $travel->user_id ? 'selected' : '' }} data-select2-id="34">{{ $s->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_berangkat">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" value="{{ $travel->tanggal_berangkat }}"
                                        placeholder="Masukan Tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label for="jam">Jam Berangkat</label>
                                    <input type="text" class="form-control" id="jam" name="jam" value="{{ $travel->jam }}"
                                        placeholder="Masukan Jam Berangkat" required>
                                </div>
                                <div class="form-group">
                                    <label for="kota_asal">Kota Asal</label>
                                    <input type="text" class="form-control" id="kota_asal" name="kota_asal" value="{{ $travel->kota_asal }}"
                                        placeholder="Masukan Kota Asal" required>
                                </div>
                                <div class="form-group">
                                    <label for="tujuan">Tujuan</label>
                                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $travel->tujuan }}"
                                        placeholder="Masukan Tujuan" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="{{ $travel->harga }}"
                                        placeholder="Masukan Harga" required>
                                </div>
                                <div class="form-group ">
                                    <label>Status</label>
                                    <select name="status" class="form-control select2 select2-hidden-accessible"
                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">--Pilih Status--
                                        </option>
                                        <option value="Tersedia" {{ $travel->status == 'Tersedia' ? 'selected' : '' }} data-select2-id="34">Tersedia</option>
                                        <option value="Tidak Tersedia" {{ $travel->status == 'Tidak Tersedia' ? 'selected' : '' }} data-select2-id="35">Tidak Tersedia</option>
                                        <option value="Selesai" {{ $travel->status == 'Selesai' ? 'selected' : '' }} data-select2-id="35">Selesai</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <td>
                                    <a type="button" href="{{ route('admin.travel.index') }}"
                                        class="btn btn btn-danger">Kembali</a>
                                </td>
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
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
