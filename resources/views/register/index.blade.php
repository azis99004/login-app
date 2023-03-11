@extends('layouts.header')
<body>
    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="my-5 display-3 fw-bold ls-tight">
              Yuk Bergabung Bersama Kamu <br />
              <span class="text-primary">Kenapa Harus Kami?</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Isi Disini bro gw juga bingung mau ngisi apaan
            </p>
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form action="/register" method="POST">
                  @csrf
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    
                  <!-- Full name -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" name="name" class="form-control"/ placeholder="Full Name" required autofocus>
                  </div>
  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form3Example3" placeholder="Email" required class="form-control" />
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example4" required placeholder="Password" class="form-control"/>
                  </div>
                  {{-- Mewebcaptcha --}}
                  <div class="form-group mt-4 mb-4">
                    <input type="hidden" name="_token" value="<?= csrf_token() ?>">
                  </div>
                  <div class="form-group mt-4 mb-4">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-danger" class="reload" id="reload">
                            &#x21bb;
                        </button>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                </div>
  
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
                  </button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Udah Punya Akun? kuy <a href="/login"
                    class="link-danger">Login</a></p>
@extends('layouts.footer')