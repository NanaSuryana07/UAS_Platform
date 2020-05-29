<div class="form-grup">
  <form action="{{ route('berita.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="judul">Judul Berita:</label>
        <input type="text" class="form-control" id="judul" name="judul">
    </div>
    <div class="form-group">
        <label for="isi_berita">Isi Berita:</label>
        <textarea class="form-control" id="isi_berita" name="isi_berita"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
    </div>
</form>
</div>