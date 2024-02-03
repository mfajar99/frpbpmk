@extends('layouts.main')

@section('container')
    <div class="section-top-border">
        @foreach ($agendas as $agenda)
            <section>
                <div class="row">
                    <div class="col-md-3 mb-5">
                        <img src="assets/img/elements/d.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 mt-sm-20 mb-4">
                        <div class="single-defination">
                            <h5>{{ $agenda->activity }}</h5>
                            <p>{{ $agenda->deskription }}</p>
                            <p>Waktu : {{ $agenda->date }} - {{ $agenda->start_time }} : {{ $agenda->end_time }}</p>
                            <p>Lokasi : {{ $agenda->location }}</p>
                        </div>

                        <ul class="blog-info-link">
                            <li><a href="#"><i class="fa fa-user"></i> {{ $agenda->author->username }}</a>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar"></i>
                                    {{ $agendas[0]->created_at->diffForHumans() }}</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        @endforeach
        <nav class="blog-pagination justify-content-center d-flex">
            <ul class="pagination">
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                        <i class="ti-angle-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    {{ $agendas->links() }}
                </li>
                <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                        <i class="ti-angle-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
