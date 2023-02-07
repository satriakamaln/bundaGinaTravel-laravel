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
                        <label>Nama Mobil</label>
                        <div class="form-group">
                            <input type="text" name="namaMobil" id="namaMobil" placeholder="Masukkan Nama Wisata"
                                value="{{old('namaMobil')}}"
                                class="form-control  @error ('namaMobil') is-invalid @enderror">
                            @error('namaMobil')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Nomor Polisi</label>
                        <div class="form-group">
                            <input type="text" name="noPolisi" id="noPolisi" placeholder="Masukkan Nama Wisata"
                                value="{{old('noPolisi')}}"
                                class="form-control  @error ('noPolisi') is-invalid @enderror">
                            @error('noPolisi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Harga Sewa</label>
                        <div class="form-group">
                            <input type="number" name="harga" id="harga" placeholder="Masukkan harga sewa"
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
