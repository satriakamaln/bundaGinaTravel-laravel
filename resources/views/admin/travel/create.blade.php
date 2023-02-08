<div class="modal fade text-left" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1" style="padding-left: 10px;">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="body">
                        @csrf
                        <label>Tanggal</label>
                        <div class="form-group">
                            <input type="date" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal"
                                value="{{old('tanggal')}}"
                                class="form-control  @error ('tanggal') is-invalid @enderror">
                            @error('tanggal')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Nama</label>
                        <div class="form-group">
                            <input type="text" name="nama" id="nama" placeholder="Masukkan nama"
                                value="{{old('nama')}}" class="form-control ">
                            @error('nama')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Jumlah</label>
                        <div class="form-group">
                            <input type="text" name="jumlah" id="jumlah" placeholder="Masukkan jumlah"
                                value="{{old('jumlah')}}" class="form-control ">
                            @error('jumlah')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Harga</label>
                        <div class="form-group">
                            <input type="number" name="harga" id="harga" placeholder="Masukkan harga"
                                value="{{old('harga')}}" class="form-control ">
                            @error('harga')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
