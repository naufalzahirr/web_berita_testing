@extends ('includes.master')

@section('content')

<div class="card">
    <div class="card-header">
    <h4>Input Kategori</h4>
    </div>
    <div class="card-body">
    <form action="{{route('kategori.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Nama Kategori</label>
            <input name="nama_kategori" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    </div>
</div>

@endsection