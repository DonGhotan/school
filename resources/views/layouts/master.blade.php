<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>OWA | @yield('title','Bienvenue')</title>
</head>

<body>
    <header id="main-header">
        <!-- Navigation -->
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <svg width="100px" height="50px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="54.410009765625006 -16.01999511718749 391.17998046875 182.03999023437498"
                        style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;" preserveAspectRatio="xMidYMid">
                        <defs>
                            <filter id="editing-jagged" x="-100%" y="-100%" width="300%" height="300%">
                                <feTurbulence result="turb" baseFrequency="0" numOctaves="1" seed="1"></feTurbulence>
                                <feDisplacementMap in="SourceGraphic" in2="turb" scale="0"></feDisplacementMap>
                            </filter>
                        </defs>
                        <g filter="url(#editing-jagged)">
                            <g transform="translate(115.21618346869946, 112)">
                                <path
                                    d="M40.70-46.20L40.70-46.20L40.70-46.20Q42.20-49.20 42.20-52L42.20-52L42.20-52Q42.20-54.80 41.90-56.35L41.90-56.35L41.90-56.35Q41.60-57.90 40.90-59.10L40.90-59.10L40.90-59.10Q39.40-61.70 36.40-61.70L36.40-61.70L36.40-61.70Q32.70-61.70 29.70-59L29.70-59L29.70-59Q26.50-56.20 26.50-51.80L26.50-51.80L26.50-51.80Q26.50-49 28.45-46.85L28.45-46.85L28.45-46.85Q30.40-44.70 33.40-42.70L33.40-42.70L33.40-42.70Q36.40-40.70 39.80-38.70L39.80-38.70L39.80-38.70Q43.20-36.70 46.20-34.30L46.20-34.30L46.20-34.30Q53.10-28.80 53.10-21.40L53.10-21.40L53.10-21.40Q53.10-16.40 50.45-12.15L50.45-12.15L50.45-12.15Q47.80-7.90 43.40-4.80L43.40-4.80L43.40-4.80Q33.80 2 21.10 2L21.10 2L21.10 2Q10.80 2 5.50-1.35L5.50-1.35L5.50-1.35Q0.20-4.70 0.20-9.80L0.20-9.80L0.20-9.80Q0.20-18.90 7.30-21.20L7.30-21.20L7.30-21.20Q9.30-21.90 12.35-21.90L12.35-21.90L12.35-21.90Q15.40-21.90 18.90-20.60L18.90-20.60L18.90-20.60Q17.30-16.50 17.30-12.80L17.30-12.80L17.30-12.80Q17.30-4.80 23-4.80L23-4.80L23-4.80Q26.70-4.80 29.75-7.50L29.75-7.50L29.75-7.50Q32.80-10.20 32.80-13.25L32.80-13.25L32.80-13.25Q32.80-16.30 30.85-18.50L30.85-18.50L30.85-18.50Q28.90-20.70 26-22.45L26-22.45L26-22.45Q23.10-24.20 19.75-25.90L19.75-25.90L19.75-25.90Q16.40-27.60 13.50-30L13.50-30L13.50-30Q6.70-35.50 6.70-44.30L6.70-44.30L6.70-44.30Q6.70-50 9.50-54.45L9.50-54.45L9.50-54.45Q12.30-58.90 16.80-61.90L16.80-61.90L16.80-61.90Q25.80-68 36.85-68L36.85-68L36.85-68Q47.90-68 53.25-64.70L53.25-64.70L53.25-64.70Q58.60-61.40 58.60-55.80L58.60-55.80L58.60-55.80Q58.60-50.90 54.80-47.80L54.80-47.80L54.80-47.80Q51.50-45.20 47.50-45.20L47.50-45.20L47.50-45.20Q43.50-45.20 40.70-46.20ZM86.50-47.40L86.50-47.40L86.50-47.40Q91.90-53 103.30-53L103.30-53L103.30-53Q109.60-53 113.05-49.65L113.05-49.65L113.05-49.65Q116.50-46.30 116.50-40.15L116.50-40.15L116.50-40.15Q116.50-34 113.05-29.65L113.05-29.65L113.05-29.65Q109.60-25.30 103.20-23.50L103.20-23.50L103.20-23.50Q103.70-21.50 104.40-19.40L104.40-19.40L105.80-15.40L105.80-15.40Q107.70-10.30 109.20-8.50L109.20-8.50L109.20-8.50Q110.70-6.70 112.70-6.10L112.70-6.10L112.70-6.10Q111.60-2 107.60 0.20L107.60 0.20L107.60 0.20Q104.40 2 100 2L100 2L100 2Q87.10 2 85.40-17.90L85.40-17.90L85.40-17.90Q85.10-20.70 85.10-23.50L85.10-23.50L85.10-23.50Q90.10-24.90 93.60-29.60L93.60-29.60L93.60-29.60Q97.10-34.30 97.10-39.80L97.10-39.80L97.10-39.80Q97.10-45.30 93.20-45.30L93.20-45.30L93.20-45.30Q90.40-45.30 88.20-42.20L88.20-42.20L88.20-42.20Q86-39.10 85-33.80L85-33.80L78.40 0L58.20 2L72.20-70L92.30-72L90-60.10L90-60.10Q88.50-51.70 86.50-47.40ZM142.90 2L142.90 2L142.90 2Q120.90 2 120.90-18.70L120.90-18.70L120.90-18.70Q120.90-33.40 129-42.90L129-42.90L129-42.90Q137.60-53 152.50-53L152.50-53L152.50-53Q163.30-53 168.80-48L168.80-48L168.80-48Q174.30-43 174.30-32.50L174.30-32.50L174.30-32.50Q174.30-16.50 165.70-7.20L165.70-7.20L165.70-7.20Q157.30 2 142.90 2ZM145.50-41.50L145.50-41.50L145.50-41.50Q144.30-38.80 143.35-34.75L143.35-34.75L143.35-34.75Q142.40-30.70 141.20-24.30L141.20-24.30L141.20-24.30Q140-17.90 140-10L140-10L140-10Q140-7.40 140.85-5.70L140.85-5.70L140.85-5.70Q141.70-4 144-4L144-4L144-4Q146.30-4 147.75-5.10L147.75-5.10L147.75-5.10Q149.20-6.20 150.30-8.80L150.30-8.80L150.30-8.80Q152.30-13.40 153.90-21.95L153.90-21.95L153.90-21.95Q155.50-30.50 155.65-34.20L155.65-34.20L155.65-34.20Q155.80-37.90 155.80-40.65L155.80-40.65L155.80-40.65Q155.80-43.40 155-45.20L155-45.20L155-45.20Q154.20-47 151.95-47L151.95-47L151.95-47Q149.70-47 148.20-45.60L148.20-45.60L148.20-45.60Q146.70-44.20 145.50-41.50ZM202 2L202 2L202 2Q180 2 180-18.70L180-18.70L180-18.70Q180-33.40 188.10-42.90L188.10-42.90L188.10-42.90Q196.70-53 211.60-53L211.60-53L211.60-53Q222.40-53 227.90-48L227.90-48L227.90-48Q233.40-43 233.40-32.50L233.40-32.50L233.40-32.50Q233.40-16.50 224.80-7.20L224.80-7.20L224.80-7.20Q216.40 2 202 2ZM204.60-41.50L204.60-41.50L204.60-41.50Q203.40-38.80 202.45-34.75L202.45-34.75L202.45-34.75Q201.50-30.70 200.30-24.30L200.30-24.30L200.30-24.30Q199.10-17.90 199.10-10L199.10-10L199.10-10Q199.10-7.40 199.95-5.70L199.95-5.70L199.95-5.70Q200.80-4 203.10-4L203.10-4L203.10-4Q205.40-4 206.85-5.10L206.85-5.10L206.85-5.10Q208.30-6.20 209.40-8.80L209.40-8.80L209.40-8.80Q211.40-13.40 213-21.95L213-21.95L213-21.95Q214.60-30.50 214.75-34.20L214.75-34.20L214.75-34.20Q214.90-37.90 214.90-40.65L214.90-40.65L214.90-40.65Q214.90-43.40 214.10-45.20L214.10-45.20L214.10-45.20Q213.30-47 211.05-47L211.05-47L211.05-47Q208.80-47 207.30-45.60L207.30-45.60L207.30-45.60Q205.80-44.20 204.60-41.50ZM263.20-5.50L263.20-5.50L263.20-5.50Q260.10 2 250.20 2L250.20 2L250.20 2Q245.20 2 242-1.50L242-1.50L242-1.50Q239.40-4.40 239.40-7.70L239.40-7.70L239.40-7.70Q239.40-15.20 242.90-31.60L242.90-31.60L250.20-70L270.50-72L260.80-21.40L260.80-21.40Q259.10-14 259.10-11.40L259.10-11.40L259.10-11.40Q259.10-5.70 263.20-5.50Z"
                                    fill="yellow"></path>
                            </g>
                        </g>
                        <style>
                            text {
                                font-size: 64px;
                                font-family: Arial Black;
                                dominant-baseline: central;
                                text-anchor: middle;
                            }

                        </style>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Présentation
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Actualités</a>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Espace Etudiant
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="#">Consultation des notes</a>
                                <a class="dropdown-item" href="#">service 2</a>
                                <a class="dropdown-item" href="#">service 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Espace Enseignant
                            </a>
                            <div class="dropdown-menu sm-menu">
                                <a class="dropdown-item" href="#">Consultation des notes</a>
                                <a class="dropdown-item" href="#">service 2</a>
                                <a class="dropdown-item" href="#">service 3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('slider')
    </header>






    @yield('content')



    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right bo"></i>Home</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                        <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>Imprint</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                    class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
                        Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp,
                        Minneapolis, MN]</p>
                    <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
                            target="_blank">Sunlimetech</a></p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->
    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    @show
</body>

</html>
