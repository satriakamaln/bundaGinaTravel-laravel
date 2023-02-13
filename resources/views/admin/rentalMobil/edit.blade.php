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
                            <label class="col-form-label" for="namaMobil">Nama Mobil</label>
                            <input type="text" class="form-control @error ('namaMobil') is-invalid @enderror"
                                placeholder="" name="namaMobil" value="{{old('namaMobil')}}"
                                id="namaMobil" autofocus>
                            @error('namaMobil')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="noPolisi">Nomor Polisi</label>
                            <input type="text" class="form-control @error ('noPolisi') is-invalid @enderror"
                                placeholder="" name="noPolisi" value="{{old('noPolisi')}}"
                                id="noPolisi" autofocus>
                            @error('noPolisi')<div class="invalid-feedback"> {{$message}} </div>@enderror
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="harga">Harga</label>
                            <input type="number" class="form-control @error ('harga') is-invalid @enderror"
                                placeholder="" name="harga" value="{{old('harga')}}"
                                id="harga" autofocus>
                            @error('harga')<div class="invalid-feedback"> {{$message}} </div>@enderror
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
