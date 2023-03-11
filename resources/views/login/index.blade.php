@extends('layouts.header')
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="img/rimuru.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="/login" method="POST">
                  @csrf
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Masuk Disini</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                   name="email" placeholder="Enter a valid email address"/ autofocus required>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg" name="password"
                    placeholder="Enter password" / required>
                </div>
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
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button class="btn btn-primary" type="submit">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Ga Punya Akun? Yuk Buat!<a href="/register"
                      class="link-danger"> Daftar</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
</body>
@extends('layouts.footer')