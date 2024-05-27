@extends('layout.app')
@section('content')
    <div class="row g-4">
        @foreach ($articles as $item)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-home fa-2x"></i>
                    </div>
                    <h5 class="mb-3">{{ $item->title }}</h5>
                    <p>{{ $item->content }}</p>
                    <a class="btn px-3 mt-auto mx-auto" href="{{ $item->href }}">Read More</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
