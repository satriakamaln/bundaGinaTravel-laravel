<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="edit-modal-label" style="padding-left: 10px;">Edit Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    {{ method_field('put') }}
                    @csrf
                    <div class=" modal-body">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label class="col-form-label" for="namaWisata">Nama Wisata</label>
                            <input type="text" class="form-control @error ('namaWisata') is-invalid @enderror"
                                placeholder="Masukkan Nama Barang" name="namaWisata" value="{{old('namaWisata')}}"
                                id="namaWisata" autofocus>
                            @error('namaWisata')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="hargaRegional">Harga Regional</label>
                            <input type="number" class="form-control @error ('hargaRegional') is-invalid @enderror"
                                placeholder="Masukkan Nama Barang" name="hargaRegional" value="{{old('hargaRegional')}}"
                                id="hargaRegional" autofocus>
                            @error('hargaRegional')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        
                        <br>

                    </div>
                    <div class="edit modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="edit btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
