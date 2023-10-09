@extends ('includes.master')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Data Berita</h1>
    </div>
</div>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Kreator</th>
            <th>Nama Kategori</th>
            <th>Judul Berita</th>
            <th>Isi Berita</th>
            <th>Slug</th>
            <th>Gambar Berita</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($berita as $berita)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{$berita->id}}</td>
            <td>{{$berita->kreator}} </td>
            <td>{{$berita->Kategori->nama_kategori}} </td>
            <td>{{$berita->judul_berita}} </td>
            <td>{{$berita->isi_berita}} </td>
            <td>{{$berita->slug}} </td>
            <td>{{$berita->gambar_berita}} </td>
            <td align="center"  width="200px">
                <div class="btn-group" role="group" aria-label="Action">
                    <form action="{{route('berita.destroy', $berita->id)}}" method="POST">
                        @csrf
                        <a href="{{route('berita.edit', $berita->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i><span class="ml-1">Edit</span></a>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i><span class="ml-1">Delete</span></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection