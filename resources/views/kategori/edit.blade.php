@extends ('includes.master')

@section('content')

<div class="card">
    <div class="card-header">
    <h4>Edit Kategori</h4>
    </div>
    <div class="card-body">
    <form action="{{route('kategori.update',$kategori->id)}}" method="post">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label>Nama Kategori</label>
            <input value="{{$kategori->nama_kategori}}" name="nama_kategori" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    </div>
</div>

@endsection