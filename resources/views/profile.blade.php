@extends('layouts.main')

@section('container')
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                {{-- @foreach ($profiles as $profile) --}}
                <h3 class="mb-30">{{ $name }}</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20">
                        <p>{{ $profile->description }}</p>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
@endsection
