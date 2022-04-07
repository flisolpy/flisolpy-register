<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            font-weight: lighter;
        }
        #countdown{
            font-weight: lighter;
            font-size: 42px;
        }
    </style>
    <title>{{ $title ? : "Flisol Alto Paraná - Flisol Alto Paraná" }}</title>
    <meta name="description" content="Festival Latinoamericano de Instalación de Software Libre (Flisol) en Alto Paraná - Paraguay. La edición 2022 será en Ciudad del Este." />
    <link rel="canonical" href="https://flisolpy.org/" />
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Flisol Alto Paraná - Flisol Alto Paraná" />
    <meta property="og:description" content="Festival Latinoamericano de Instalación de Software Libre (Flisol) en Alto Paraná - Paraguay. La edición 2022 será en Ciudad del Este." />
    <meta property="og:url" content="https://flisolpy.org/" />
    <meta property="og:site_name" content="Flisol Alto Paraná" />
    <meta property="article:publisher" content="https://www.facebook.com/flisolaltoparana" />
    <meta property="article:modified_time" content="2022-04-07T16:17:23+00:00" />
    <meta property="og:image" content="https://flisolpy.org/wp-content/uploads/2022/04/mini-web.png" />
    <meta property="og:image:width" content="590" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Tiempo de lectura" />
    <meta name="twitter:data1" content="12 minutos" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://flisolpy.org/#organization","name":"Flisol","url":"https://flisolpy.org/","sameAs":["https://www.facebook.com/flisolaltoparana"],"logo":{"@type":"ImageObject","@id":"https://flisolpy.org/#logo","inLanguage":"es","url":"https://flisolpy.org/wp-content/uploads/2022/04/FLISoL-2015.png","contentUrl":"https://flisolpy.org/wp-content/uploads/2022/04/FLISoL-2015.png","width":805,"height":360,"caption":"Flisol"},"image":{"@id":"https://flisolpy.org/#logo"}},{"@type":"WebSite","@id":"https://flisolpy.org/#website","url":"https://flisolpy.org/","name":"Flisol Alto Paraná","description":"Festival Latinoamericano de Instalación de Software Libre","publisher":{"@id":"https://flisolpy.org/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://flisolpy.org/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"es"},{"@type":"ImageObject","@id":"https://flisolpy.org/#primaryimage","inLanguage":"es","url":"https://flisolpy.org/wp-content/uploads/2022/04/mini-web.png","contentUrl":"https://flisolpy.org/wp-content/uploads/2022/04/mini-web.png","width":590,"height":300},{"@type":"WebPage","@id":"https://flisolpy.org/#webpage","url":"https://flisolpy.org/","name":"Flisol Alto Paraná - Flisol Alto Paraná","isPartOf":{"@id":"https://flisolpy.org/#website"},"about":{"@id":"https://flisolpy.org/#organization"},"primaryImageOfPage":{"@id":"https://flisolpy.org/#primaryimage"},"datePublished":"2022-04-04T15:12:31+00:00","dateModified":"2022-04-07T16:17:23+00:00","description":"Festival Latinoamericano de Instalación de Software Libre (Flisol) en Alto Paraná - Paraguay. La edición 2022 será en Ciudad del Este.","breadcrumb":{"@id":"https://flisolpy.org/#breadcrumb"},"inLanguage":"es","potentialAction":[{"@type":"ReadAction","target":["https://flisolpy.org/"]}]},{"@type":"BreadcrumbList","@id":"https://flisolpy.org/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Portada"}]}]}</script>
    <!-- / Yoast SEO plugin. -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-purple">
    <div class="container">
        <a class="navbar-brand" href="/"><img height="60px" src="https://flisolpy.org/wp-content/uploads/2022/04/FLISoL-2015-300x134.png.webp" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="https://flisolpy.org/">Acerca del Evento</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row text-center">
        {!!  displayAlert() !!}
    </div>
</div>
<div style="min-height: 500px;">
    @yield('content')
</div>

<!-- Footer-->
<footer class="py-5 bg-purple">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy;FlisolPy  {{ date('Y') }}</p></div>
</footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->

<script>



    // Set the date we're counting down to
    var countDownDate = new Date("Apr 23, 2022 08:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("countdown").innerHTML = days + " días " + hours + " horas "
            + minutes + " minutos " + seconds + " segundos ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>
</body>
</html>
