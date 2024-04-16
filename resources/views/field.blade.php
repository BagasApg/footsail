@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Lapangan</h1>
            @foreach ($classes as $class)
                <div class="row mb-4">
                    <div class="col-md">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">
                                    Lapangan {{ $class->name }}
                                </h4>
                                <div class="row">
                                    @foreach ($class->fields as $item)
                                        <div class="col-md-4 field-card">
                                            <a class="text-decoration-none" href="{{ route('field.book', ['id' => $item->id]) }}">
                                                <div class="card">
                                                    <svg height="135px" class="card-img-top">
                                                        <rect width="100%" height="100%" fill="#8d8d8d"></rect>
                                                    </svg>
                                                    <div class="card-body">
                                                        <p class="m-0">{{ $item->name }}</p>
                                                        <p class="m-0">Rp{{ number_format($item->price) }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="row mt-4">
                <div class="col-md">
                    <div class="card">
                        <div class="card-body">
                            <h4>
                                Lapangan Outdoor
                            </h4>
                            <div class="row">
                                @foreach ($fields as $field)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                {{ $field->name }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
