@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Booking Lapangan</h1>
        </div>
    </div>

    <div class="row mx-4">
        <div class="col-md-8">
            <h4 class="fw-bold">Booking</h4>
            <div class="d-flex justify-content-between">
                <p>{{ $field->name }}</p>
                <p>Rp{{ number_format($field->price) }}</p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Penyewa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Jam Sewa</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Lama Sewa</label>
                    <input type="number" name="duration" id="duration" class="form-control" min="0" class="w-25">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sewa Sepatu (Rp50.000/jam)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Sewa Kostum (Rp45.000/jam)
                    </label>
                </div>
            </div>


        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="fw-bold">Detail Booking</h6>
                    <div class="booking-details mb-3">

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <p style="margin-bottom: -5px">Lapangan</p>
                                <p class="text-secondary mb-0">(Rp{{ number_format($field->price) }} x 2 jam)</p>
                            </div>
                            <p>Rp{{ number_format($field->price) }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <p style="margin-bottom: -5px">Lapangan</p>
                                <p class="text-secondary mb-0">(2 jam)</p>
                            </div>
                            <p>Rp{{ number_format(25000) }}</p>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary w-100">Purchase</a>
                </div>
            </div>
        </div>
    </div>
@endsection
