<table border="1">
  <tr>
    <th>Judul</th>
    <th>Isi Berita</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  @foreach ($beritas as $berita)
  <tr>
    <td>{{ $berita->judul }}</td>
    <td>{{ $berita->isi_berita }}</td>
    <td>{{ $berita->status }}</td>
    <td>
      <form action="{{ route('berita.destroy', $berita->id) }}" method="post">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <a href="{{ route('berita.edit',$berita->id) }}" class=" btn btn-sm btn-primary">Edit</a>
      <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>