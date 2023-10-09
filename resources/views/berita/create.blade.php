@extends ('includes.master')

@section('content')

<section class="section">
          <div class="section-header">
            <h1>Input</h1>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Input Data</h4>
                  </div>
                  <form action="{{route('berita.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kreator</label>
                        <div class="col-sm-12 col-md-7">
                          <input name="kreator" type="text" value="{{$user->name}}" class="form-control" readonly>
                        </div>
                      </div>
                      
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                          <select required id="kategori" name="id_kategori" class="form-control selectric">
                              <option value="" selected disabled>Pilih Kategori</option>
                              @foreach ($kategori as $data)
                                  <option value="{{ $data->id }}">{{ $data->nama_kategori}}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul Berita</label>
                        <div class="col-sm-12 col-md-7">
                          <input name="judul_berita" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi Berita</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea name="isi_berita" class="summernote"></textarea>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar Berita</label>
                        <div class="custom-file col-sm-12 col-md-7">
                          <input name="gambar_berita" type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button class="btn btn-primary">Publish</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </section>
@endsection

    
