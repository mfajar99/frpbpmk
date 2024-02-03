@extends('layouts.main')

@section('container')
    <main>
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <!-- single Tem -->
                    @foreach ($galleries as $gallery)
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-7">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    @if ($gallery->image)
                                        <a href="{{ asset('storage/' . $gallery->image) }}" class="img-pop-up">
                                            <div class="single-gallery-image"
                                                style="background: url({{ asset('storage/' . $gallery->image) }});"></div>
                                        </a>
                                        {{-- <img src="{{ asset('storage/' . $gallery->image) }}" alt=""> --}}
                                    @else
                                        <a href="https://source.unsplash.com/690x345/?" class="img-pop-up">
                                            <div class="single-gallery-image"
                                                style="background: url(https://source.unsplash.com/690x345/?);"></div>
                                        </a>
                                        {{-- <img src="https://source.unsplash.com/690x345/?" alt=""> --}}
                                    @endif
                                </div>
                                <div class="team-caption">
                                    <h5>{{ $gallery->description }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
    </main>

    <nav class="blog-pagination justify-content-center d-flex mb-3">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
            <li class="page-item">
                {{ $galleries->links() }}
            </li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav>
@endsection
