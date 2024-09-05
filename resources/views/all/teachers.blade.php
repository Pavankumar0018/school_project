@extends('includes.page_layout')

@php
    $active_nav = 'Dashboard';
    $page_title = [1, 'Dashboard'];
@endphp

@section('content')

<div class="container">
    <h1 class="mb-5 text-start">Teachers Details</h1>

    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/Ramprakash_Kushwaha.JPEG') }}" class="card-img-top" alt="Ramprakash Kushwaha">
                <div class="card-body text-center">
                    <h5 class="card-title">Ramprakash Kushwaha</h5>
                    <p class="card-text">Email: ramprakash858062@gamil.com </p>
                    <p class="card-text">Mobile: 9771827060</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/Ganesh_Prasad.jpg') }}" class="card-img-top" alt="Ganesh Prasad">
                <div class="card-body text-center">
                    <h5 class="card-title">Ganesh Prasad</h5>
                    <p class="card-text">Email: prasadganesh024@gamil.com</p>
                     <p class="card-text">Mobile: 9507195327</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/pratap_Kushwaha.jpg') }}" class="card-img-top" alt="Pratap Kushwaha">
                <div class="card-body text-center">
                    <h5 class="card-title">Pratap Kushwaha</h5>
                    <p class="card-text">Email: </p>
                    <p class="card-text">Mobile: 9801012703</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/Mohan_Prashad.jpg') }}" class="card-img-top" alt="Mohan Prasad">
                <div class="card-body text-center">
                    <h5 class="card-title">Mohan Prasad</h5>
                    <p class="card-text">Email: mohanpr0571@gamil.com</p>
                    <p class="card-text">Mobile: 7370082623</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/pooja_bharti.jpg') }}" class="card-img-top" alt="Pooja Bharti">
                <div class="card-body text-center">
                    <h5 class="card-title">Pooja Bharti</h5>
                    <p class="card-text">Email: pb9343781@gamil.com</p>
                    <p class="card-text">Mobile: 8207504981</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <img src="{{ asset('assets/images/Hewanti_devi.jpg') }}" class="card-img-top" alt="Hewanti Devi">
                <div class="card-body text-center">
                    <h5 class="card-title">Hewanti Devi</h5>
                    <p class="card-text">Email: arav31890@gamil.com </p>
                    <p class="card-text">Mobile: 9006390981</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

<style>
    .card-text{
        text-align: start;
    }
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 10px;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
        object-fit: cover;
        height: 300px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-top: 10px;
    }
</style>


{{-- <div class="d">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/Ramprakash_Kushwaha.JPEG') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Ramprakash Kushwaha</h5>
          <p class="card-text">Email: ramprakash858062@gamil.com </p>
          <p class="card-text">Mobile: 9771827060</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/Ganesh_Prasad.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ganesh Prasad</h5>
          <p class="card-text">Email: prasadganesh024@gamil.com</p>
          <p class="card-text">Mobile: 9507195327</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/pratap_Kushwaha.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pratap Kushwaha</h5>
          <p class="card-text">Email: </p>
          <p class="card-text">Mobile: 9801012703</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/Mohan_Prashad.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mohan Prasad </h5>
          <p class="card-text">Email: mohanpr0571@gamil.com</p>
          <p class="card-text">Mobile: 7370082623</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/pooja_bharti.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pooja Bharti </h5>
          <p class="card-text">Email: pb9343781@gamil.com</p>
          <p class="card-text">Mobile: 8207504981</p>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="{{ asset('assets/images/Hewanti_devi.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Hewanti Devi</h5>
          <p class="card-text">Email: arav31890@gamil.com </p>
          <p class="card-text">Mobile: 9006390981</p>
        </div>
      </div>
</div> --}}