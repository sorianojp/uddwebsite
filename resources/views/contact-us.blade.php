@extends('layouts.app')
@section('content')
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row text-center w-100">
            <div class="col-sm-3 d-flex">
                <div class="bg-primary text-white p-5 w-100 h-100 d-flex flex-column justify-content-center">
                    <i class="bi bi-geo-alt-fill h3"></i>
                    <h5>Address</h5>
                    <p>Pantal, Arellano St., Dagupan City, Philippines, 2400</p>
                </div>
            </div>
            <div class="col-sm-3 d-flex">
                <div class="bg-primary text-white p-5 w-100 h-100 d-flex flex-column justify-content-center">
                    <i class="bi bi-telephone-fill h3"></i>
                    <h5>Phone</h5>
                    <p>(075) 522 2405</p>
                </div>
            </div>
            <div class="col-sm-3 d-flex">
                <div class="bg-primary text-white p-5 w-100 h-100 d-flex flex-column justify-content-center">
                    <i class="bi bi-envelope-at-fill h3"></i>
                    <h5>E-Mail</h5>
                    <p>info@cdd.edu.ph</p>
                </div>
            </div>
            <div class="col-sm-3 d-flex">
                <div class="bg-primary text-white p-5 w-100 h-100 d-flex flex-column justify-content-center">
                    <i class="bi bi-facebook h3"></i>
                    <h5>Facebook</h5>
                    <a class="text-white" href="https://www.facebook.com/uddinfoboard/">Visit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
