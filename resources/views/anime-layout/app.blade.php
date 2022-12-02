<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gin</title>
    <link rel="shortcut icon" href="../assets/img/mugiwara.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="../sass/style.scss" type="text/css">
</head>


<body style="/position: relative">
    @include('anime-layout.navbar')

    @yield('content')

    @include('anime-layout.footer')
  
      
    <script>
        // Open the Modal
        function openModal() {
          document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
          document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
   <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/player.js')}}"></script>
<script src="{{asset('asset/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('asset/js/mixitup.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
<body style="/position: relative">

    @yield('js')
</body>
</html>
