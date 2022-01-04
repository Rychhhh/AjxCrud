{{-- Nama, Harga, Stok, Produsen, Perusahaan, Tanggal Tambah / Created_at --}}
<div class="form-group">
    <label for="name">Nama Product</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $edit->nama }}">
</div>
 
<div class="form-group">
    <label for="name">Harga</label>
    <input type="text" class="form-control " id="harga" name="harga" value="{{ $edit->harga }}">
    <small id="hargaHelp" class="form-text text-muted">Gunakan <b>Rp</b> Dan Tidak Usah Pakai ( . )</small>
</div>

<div class="form-group">
    <label for="name">Stok</label>
    <input type="text" class="form-control " id="stok" name="stok" value="{{ $edit->stok }}">
</div>

<div class="form-group">
    <label for="desc">Desc</label>
    <textarea class="form-control"  id="desc"  name="desc" rows="3" >{{ $edit->desc }}</textarea>
  </div>


<div class="form-group">
    <label for="produsen">Produsen</label>
    <select multiple class="form-control" id="produsen" name="produsen" >
      <option selected>1</option>
    </select>
  </div>

<div class="form-group">
    <label for="perusahaan">Perusahaan</label>
    <select class="form-control" id="perusahaan" name="perusahaan">
        <option selected>Default select</option>
      </select>
  </div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button  class="btn btn-primary" onClick="update({{ $edit->id }})">Save</button>
</div>