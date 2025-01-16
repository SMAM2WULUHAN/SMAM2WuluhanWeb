<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAM 2 WULUHAN</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .navbar {
            background-color: #1a237e !important;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
        }

        .nav-link.active {
            color: #2196f3 !important;
        }

        .hero {
            height: 80vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://tse2.mm.bing.net/th?id=OIP.xcd5M9f-yCPFlJpxKSAKHwHaFj&pid=Api&P=0&h=220');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-title {
            color: white;
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        footer {
            background-color: #1a237e;
        }
    </style>
</head>
@include('partials.header')

<div class="container mt-4">
    <div class="row d-flex">
        <!-- Konten utama -->
        <div class="col-12 col-lg-8">
            <div class="content p-4 border rounded bg-light">
                @yield('content')
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
            @include('partials.sidebar')
        </div>
    </div>
</div>

@include('partials.footer')






<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"><script>
    </body>
</html >