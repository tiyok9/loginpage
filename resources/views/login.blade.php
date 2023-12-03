<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
      data-assets-path="/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Internal JT Digitally</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('img/jt/jtfavicon.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{asset('css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('css/theme-default.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.css" />
    {{--    <link rel="stylesheet" href="/vendor/libs/node-waves/node-waves.css" />--}}
    <script src="{{asset('vendor/helpers.js')}}"></script>
    <script src="{{asset('vendor/template-customizer.js')}}"></script>
    <script src="{{asset('vendor/config.js')}}"></script>
</head>

<body>
<div class="d-flex align-items-center justify-content-center h-px-500">
    <form method="post" action="{{ route('login') }}" class="w-px-400 border rounded p-3 p-md-5">
        @csrf
        <h3 class="mb-4">Sign In</h3>
        @if (session()->has('message'))
            <div class="alert alert-danger" role="alert">
                {{session('message')}}
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label" for="form-alignment-username">Username</label>
            <input name="username" type="text" id="form-alignment-username" class="form-control" placeholder="john.doe" required/>
        </div>

        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="form-alignment-password">Password</label>
            <div class="input-group input-group-merge">
                <input
                    type="password"
                    name="password"
                    id="form-alignment-password"
                    class="form-control"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="form-alignment-password2"

                />
                <span class="input-group-text cursor-pointer" id="form-alignment-password2"
                ><i class="ti ti-eye-off"></i
                    ></span>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-check m-0">
                <input type="checkbox" class="form-check-input" />
                <span class="form-check-label">Remember me</span>
            </label>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/perfect-scrollbar.min.js"></script>

<script src="{{asset('vendor/main.js')}}"></script>

<script src="{{asset('vendor/menu.js')}}"></script>

<!-- Page JS -->


</body>
</html>

