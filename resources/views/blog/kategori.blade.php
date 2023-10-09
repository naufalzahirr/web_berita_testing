@extends ('includes-blog.master')

@section('content-blog')

            <!-- Page Content-->
            
            <section class="py-5">
                <div class="container px-5">
                    <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                        <div class="h2 fw-bolder">{{$kategori_first->judul_berita}}</div>
                                        <p>{!! Illuminate\Support\Str::limit($kategori_first->isi_berita,20)!!}</p>
                                        <a class="stretched-link text-decoration-none" href="{{ route('blog.berita', ['id' => $kategori_first->id]) }}">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div class="bg-featured-blog" style="background-image: url('{{ asset('storage/'.$kategori_first->gambar_berita) }}')"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
               
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5">
                    <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
                    <div class="row gx-5">
                        @foreach($kategori as $ktgg)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('storage/'.$ktgg->gambar_berita) }}" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{$ktgg->id_kategori}}</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="{{ route('blog.berita', ['id' => $ktgg->id]) }}"><div class="h5 card-title mb-3">{{$ktgg->judul_berita}}</div></a>
                                    <p class="card-text mb-0">{!! Illuminate\Support\Str::limit($ktgg->isi_berita,20)!!}</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">{{$ktgg->kreator}}</div>
                                                <div class="text-muted">{{$ktgg->created_at}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-end mb-5 mb-xl-0">
                        <a class="text-decoration-none" href="#!">
                            More stories
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>
            {{--Pagination--}}
            <div class="d-flex justify-content-center">
                {{ $kategori->links() }}
            </div>

@endsection