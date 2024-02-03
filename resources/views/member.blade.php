@extends('layouts.main')

@section('container')
    <main>
        <!-- Team Start -->
        <div class="team-area section-padding30">
            <div class="container">
                <div class="row">
                    <!-- single Tem -->
                    @foreach ($members as $member)
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-7">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    @if ($member->image)
                                        <img src="{{ asset('storage/' . $member->image) }}" alt=""
                                            style="width: 330; height: 413;">
                                    @else
                                        <img src="https://source.unsplash.com/330x413/?" alt="">
                                    @endif
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">{{ $member->name }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
        <!-- banner-last Start -->
        <div class="banner-area gray-bg pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="banner-one">
                            <img src="assets/img/gallery/body_card3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner-last End -->
    </main>
@endsection
