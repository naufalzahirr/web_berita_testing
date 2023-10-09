@extends ('includes.master')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>Data Kategori</h1>
    </div>
</div>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategori as $kategori)
        <tr>
            <td>{{ $loop->index+1 }}</td>
            <td>{{$kategori->id}}</td>
            <td>{{$kategori->nama_kategori}} </td>
            <td align="center"  width="200px">
                <div class="btn-group" role="group" aria-label="Action">
                    <form action="{{route('kategori.destroy', $kategori->id)}}" method="POST">
                        @csrf
                        <a href="{{route('kategori.edit', $kategori->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i><span class="ml-1">Edit</span></a>
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