<!--
=========================================================
* Soft UI Dashboard - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/admin/assets/img/favicon.png">
  <title>
    Admin GPS Kirana
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ url('/') }}/public/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ url('/') }}/public/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ url('/') }}/public/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('/') }}/public/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-4">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Enter your username and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" action="{{url('login_proc')}}" method="POST">
                    {{ csrf_field() }}
                    @error('login_error')
                    <div class="card card-background shadow-none card-background-mask-warning" id="sidenavCard">
                      <div class="card-body text-start p-1 w-100">
                        <p style="margin-bottom: 0px;font-size: 12px;padding: 6px;"> {{ $message }} </p>
                      </div>
                    </div>
                    @enderror
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="username-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{ url('/') }}/public/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ url('/') }}/public/assets/js/core/popper.min.js"></script>
  <script src="{{ url('/') }}/public/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ url('/') }}/public/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ url('/') }}/public/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('/') }}/public/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>