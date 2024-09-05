@extends('includes.page_layout')
@php
  $active_nav = 'Dashboard';
  $page_title = [1, 'Dashboard'];
@endphp
@section('content')
<div class="container">
  <div class="my-3">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="{{ asset('assets/images/gate.jpeg') }}" class="d-block w-100" style="height: 75vh;" alt="Professional Team slide">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5 class="text-white">Unlock the power of knowledge – your journey to success starts here</h5>
            <p class="text-white-50">Our school believes in the transformative power of education. We strive to provide the tools and guidance students need to succeed and excel in their academic journey.
            </p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{ asset('assets/images/campus.jpeg') }}" class="d-block w-100" style="height: 75vh;" alt="Innovative Solutions slide">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5 class="text-white">Inspiring tomorrow's leaders through today's education.</h5>
            <p class="text-white-50">We aim to inspire and equip students with the skills, values, and confidence to become the leaders of tomorrow, making a positive impact on society.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{ asset('assets/images/campus1.jpeg') }}" class="d-block w-100" style="height: 75vh;" alt="Expert Guidance slide">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5 class="text-white">Nurturing minds, inspiring hearts, and building bright futures.</h5>
            <p class="text-white-50">Our school is committed to nurturing every aspect of a child's development, from academics to emotional well-being, ensuring a well-rounded and bright future.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{ asset('assets/images/prayer.jpeg') }}" class="d-block w-100" style="height: 75vh;" alt="Innovative Solutions slide">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5 class="text-white">Creating a community of lifelong learners and achievers.</h5>
            <p class="text-white-50">At our school, we foster a culture of curiosity and a love for learning that extends beyond the classroom, encouraging students to be lifelong learners and achievers.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{ asset('assets/images/prayer2.jpeg') }}" class="d-block w-100" style="height: 75vh;" alt="Innovative Solutions slide">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5 class="text-white">Education is not just preparation for life, it is life itself.</h5>
            <p class="text-white-50">We believe that education goes beyond academics. It is about shaping character, instilling values, and preparing students for all aspects of life.</p>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
@endsection
