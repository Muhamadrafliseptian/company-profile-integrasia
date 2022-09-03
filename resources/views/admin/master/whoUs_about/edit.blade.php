<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
        <div class="form-group">
            <label for="about_judul"> Judul </label>
                <input type="text" class="form-control" name="WhoUsAbout_judul" id="WhoUsAbout_judul"
             placeholder="Masukkan Nama" value="{{ $edit->judul }}">
        </div>
        <div class="form-group">
            <label for="about_deskripsi"> Deskripsi </label>
                <input type="text" class="form-control" name="WhoUsAbout_deskripsi" id="WhoUsAbout_deskripsi"
            placeholder="Masukkan Nama" value="{{ $edit->deskripsi }}">
</div>
