<input type="hidden" name="id" value="{{ encrypt($edit->id) }}">
<div class="form-group">
        <label for="about_icon"> Icon </label>
        <input type="text" class="form-control" name="about_icon" id="about_icon"
        placeholder="Masukkan Nama" value="{{ $edit->icon }}">
        </div>
        <div class="form-group">
            <label for="about_judul"> Judul </label>
                <input type="text" class="form-control" name="about_judul" id="about_judul"
             placeholder="Masukkan Nama" value="{{ $edit->judul }}">
        </div>
        <div class="form-group">
            <label for="about_deskripsi"> Deskripsi </label>
                <input type="text" class="form-control" name="about_deskripsi" id="about_deskripsi"
            placeholder="Masukkan Nama" value="{{ $edit->deskripsi }}">
</div>
