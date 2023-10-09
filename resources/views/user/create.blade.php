@extends ('includes.master')

@section('content')

<div class="card">
    <div class="card-header">
    <h4>Input User</h4>
    </div>
    <div class="card-body">
    <form action="{{route('user.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Nama</label>
            <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control">
        </div>
        <div class="form-group">
            <label>Confirmation Password</label>
            <input name="password_confirmation" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    </div>
</div>

@endsection