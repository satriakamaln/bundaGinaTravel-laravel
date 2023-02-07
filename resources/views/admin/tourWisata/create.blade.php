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
                        <label>Nama Wisata</label>
                        <div class="form-group">
                            <input type="text" name="namaWisata" id="namaWisata" placeholder="Masukkan Nama Wisata"
                                value="{{old('namaWisata')}}"
                                class="form-control  @error ('namaWisata') is-invalid @enderror">
                            @error('namaWisata')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <label>Harga Regional</label>
                        <div class="form-group">
                            <input type="number" name="hargaRegional" id="hargaRegional" placeholder="Masukkan hargaRegional"
                                value="{{old('hargaRegional')}}" class="form-control ">
                            @error('hargaRegional')<div class="invalid-feedback"> {{$message}} </div>@enderror
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
