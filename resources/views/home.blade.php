@extends('layouts.app')

@section('content')
<!-- banner start-->
<section class="hero-area content-left" id="home">
    <div class="banner-item" style="background-image: url(./images/hero_area/banner6.jpg)">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content-wrap">
                    <div class="countdown wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                        <div class="counter-item">
                            <i class="icon icon-ring-1Asset-1"></i>
                            <span class="days">00</span>
                            <div class="smalltext">Días</div>
                        </div>
                        <div class="counter-item">
                            <i class="icon icon-ring-4Asset-3"></i>
                            <span class="hours">00</span>
                            <div class="smalltext">Horas</div>
                        </div>
                        <div class="counter-item">
                            <i class="icon icon-ring-3Asset-2"></i>
                            <span class="minutes">00</span>
                            <div class="smalltext">Minutos</div>
                        </div>
                        <div class="counter-item">
                            <i class="icon icon-ring-4Asset-3"></i>
                            <span class="seconds">00</span>
                            <div class="smalltext">Segundos</div>
                        </div>
                    </div>
                    <!-- Countdown end -->
                    <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">ABC PARA EMPRENDEDORES</h1>

                    <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                        Empresarios exitosos de diferentes países, emprendedores como tú. <br><br>

                        El primer curso internacional online desde el 29 de Octubre al 01 de Noviembre.
                    </p>
                    
                    <div class="banner-btn wow fadeInUp text-center" data-wow-duration="1.5s" data-wow-delay="800ms">
                    <a href="https://wa.link/i9z9ym" class="btn">¡Reserva tu lugar!</a>
                    </div>

                </div>
                <!-- Banner content wrap end -->
            </div><!-- col end-->
        </div><!-- row end-->
        </div>
        <!-- Container end -->
    </div>
</section>
<!-- banner end-->


<!-- ts intro start -->
<section id="about" class="ts-intro event-intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title white">
                    <span>Esto es para ti...</span>
                    Al finalizar el curso serás capaz de
                </h2>
            </div><!-- col end-->
        </div><!-- row end-->
        <div class="row">
            <div class="col-lg-4">
                <div class="single-intro-text">
                    <img src="{{ asset('images/about1.png') }}" alt="About1" style="width: 160px; border-radius: 4px; display: inline-block; margin-bottom: 10px; max-width: 100%; height: auto;">
                    <p>
                        Mejorar la relación y conexión que tienes con tus clientes
                    </p>
                </div>
            </div><!-- col end-->
            <div class="col-lg-4">
                <div class="single-intro-text">
                    <img src="{{ asset('images/about2.png') }}" alt="About2" style="width: 300px; border-radius: 4px; display: inline-block; margin-bottom: 10px; max-width: 100%; height: auto;">
                    <p>
                        Planear estrategias personalizadas para la venta digital de tus productos
                    </p>
                </div>
            </div><!-- col end-->

            <div class="col-lg-4">
                <div class="single-intro-text">
                    <img src="{{ asset('images/about3.png') }}" alt="About3" style="width: 300px; border-radius: 4px; display: inline-block; margin-bottom: 10px; max-width: 100%; height: auto;">
                    <p>
                        Ejecutar un método exitoso para elaborar un modelo de negocio online rentable a largo plazo
                    </p>
                </div><!-- single intro text end-->
            </div>

        </div><!-- row end-->
    </div><!-- container end-->

</section>
<!-- ts intro end-->

<!-- ts speaker start-->
<section id="ts-speakers" class="ts-speakers">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title white text-center">
                    Mentores
                </h2>
            </div><!-- col end-->
        </div><!-- row end-->
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="ts-speaker white-text">
                    <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/randhy1.jpg" alt="Randhy Balcázar">
                        <a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                            <i class="icon icon-plus"></i>
                        </a>
                    </div>
                    <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Randhy Balcázar</a></h3>
                        <p>"Arquitectura de tu modelo de negocio"</p>
                    </div>
                </div>
                <!-- popup start-->
                <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-img">
                                <img src="images/speakers/randhy1.jpg" alt="Randhy Balcázar">
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-content">
                                <h3 class="ts-title">Randhy Balcázar</h3>
                                <p>
                                    De nacionalidad peruana, cuenta con un MBA estudiado en Madrid, España y en Londres, Inglaterra. 
                                    Consultor experto con más de 7 años de experiencia desarrollando distintas empresas y emprendimientos a nivel internacional, particularmente en Perú y en Inglaterra. 
                                    Él te acompañará en el módulo de Arquitectura del Modelo de Negocio.
                                </p>
                                <h4 class="session-name">
                                    Módulo dictado por Randhy
                                </h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="speaker-session-info">
                                            <span>Jueves 29 de Octubre - 7:00 pm</span>
                                            <p>Arquitectura de tu modelo de negocio</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                    </div><!-- row end-->
                </div><!-- popup end-->
            </div> <!-- col end-->

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="ts-speaker white-text">
                    <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/roberto.jpg" alt="Roberto López">
                        <a href="#popup_2" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                            <i class="icon icon-plus"></i>
                        </a>
                    </div>
                    <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Roberto López</a></h3>
                        <p>"Marketing digital para negocios"</p>
                    </div>
                </div>
                <!-- popup start-->
                <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-img">
                                <img src="images/speakers/roberto.jpg" alt="Roberto López">
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-content">
                                <h3 class="ts-title">Roberto López</h3>
                                <p>
                                    De nacionalidad mexicana, cuenta con un MBA en Dirección de Empresas en España y está cursando una segunda en Marketing y Gerencia de Marcas. 
                                    Tiene más de 7 años de experiencia en Negocios y Empresas. Él te acompañará en el módulo de Marketing Digital para Negocios.
                                </p>
                                <h4 class="session-name">
                                    Módulo dictado por Roberto
                                </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="speaker-session-info">
                                            <span>Fecha: Sábado 30 de Octubre - 7:00 pm</span>
                                            <p>Marketing Digital para negocios</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                    </div><!-- row end-->
                </div><!-- popup end-->
            </div> <!-- col end-->

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                <div class="ts-speaker white-text">
                    <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/jessica.jpg" alt="Jessica Richards">
                        <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                            <i class="icon icon-plus"></i>
                        </a>
                    </div>
                    <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Jessica Richards</a></h3>
                        <p>"Gestión Comercial - la importancia de nuestros clientes"</p>
                    </div>
                </div>
                <!-- popup start-->
                <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-img">
                                <img src="images/speakers/jessica.jpg" alt="Jessica Richards">
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-content">
                                <h3 class="ts-title">Jessica Richards</h3>
                                <p>
                                    De nacionalidad francesa, cuenta con una maestría en Management con especialidad en Técnicas de negociación. 
                                    Es emprendedora y cuenta con más de 7 años en el mundo empresarial, y ha podido viajar capacitando a múltiples empresas en Latinoamérica. 
                                    Ella te acompañará en el módulo de Gestión Comercial.
                                </p>
                                <h4 class="session-name">
                                    Módulo dictado por Jessica
                                </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="speaker-session-info">
                                            <span>Fecha: Viernes 31 de octubre - 10:00 am</span>
                                            <p>Gestión Comercial - la importancia de nuestros clientes</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                    </div><!-- row end-->
                </div><!-- popup end-->
            </div> <!-- col end-->

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                <div class="ts-speaker white-text">
                    <div class="speaker-img">
                        <img class="img-fluid" src="images/speakers/rodrigo.jpg" alt="Rodrigo Ramírez">
                        <a href="#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                            <i class="icon icon-plus"></i>
                        </a>
                    </div>
                    <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Rodrigo Ramírez</a></h3>
                        <p>"Finanzas para no financieros"</p>
                    </div>
                </div>
                <!-- popup start-->
                <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-img">
                                <img src="images/speakers/rodrigo.jpg" alt="Rodrigo Ramírez">
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="ts-speaker-popup-content">
                                <h3 class="ts-title">Rodrigo Ramírez</h3>
                                <p>
                                    De nacionalidad mexicana, cuenta con una maestría en Dirección de Empresas por UNIR Business School y ha trabajado en Canadá, España y Perú. 
                                    Consultor experto en contabilidad y finanzas con más de 10 años de experiencia. 
                                    Él te acompañará en el Módulo de Finanzas para no Financieros.
                                </p>
                                <h4 class="session-name">
                                    Módulo dictado por Rodrigo
                                </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="speaker-session-info">
                                            <span>Domingo 1 de Noviembre - 10:00 am</span>
                                            <p>Finanzas para no financieros</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                    </div><!-- row end-->
                </div><!-- popup end-->
            </div> <!-- col end-->
        </div><!-- row end-->
    </div><!-- container end-->

    <!-- shap img-->
    <div class="speaker-shap">
        <img class="shap1" src="images/shap/home_speaker_memphis1.png" alt="">
        <img class="shap2" src="images/shap/home_speaker_memphis2.png" alt="">
    </div>
    <!-- shap img end-->
</section>
<!-- ts speaker end-->



<!-- ts pricing start-->
<section class="ts-pricing p-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title white">
                    <span>¡Cupos limitados!</span>
                    INVERSIÓN
                </h2>
            </div><!-- section title end-->
        </div><!-- col end-->
        <!-- row end-->
        <div class="row pricing-wrap">
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="pricing-item">
                    <img class="pricing-dot " src="images/pricing/dot2.png" alt="">
                    <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">Pre Venta</h2>
                            <h3 class="ts-pricing-price">
                                <span class="currency">S/</span>99
                            </h3>
                        </div>
                        <div class="promotional-code">
                            <p class="promo-code-text">Vacantes disponibles hasta el 16 de Octubre</p>
                            @if (now() < '2020-10-17')
                                <a href="https://wa.link/i9z9ym" class="btn pricing-btn">¡Reservar ahora!</a>
                            @else
                                <a href="#" class="btn pricing-btn disabled">¡No disponible!</a>
                            @endif
                        </div>
                    </div><!-- ts pricing box-->
                    <img class="pricing-dot1 " src="images/pricing/dot2.png" alt="">
                </div>
            </div><!-- col end-->
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="pricing-item">
                    <img class="pricing-dot " src="images/pricing/dot2.png" alt="">
                    <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">Regular</h2>
                            <h3 class="ts-pricing-price">
                                <span class="currency">S/</span>129
                            </h3>
                        </div>
                        <div class="promotional-code">
                            <p class="promo-code-text">Vacantes disponibles del 17 al 25 de Octubre</p>
                            @if (now() > '2020-10-16' & now() < '2020-10-25')
                                <a href="https://wa.link/i9z9ym" class="btn pricing-btn">¡Reservar ahora!</a>
                            @else
                                <a href="#" class="btn pricing-btn disabled">¡No disponible!</a>
                            @endif
                        </div>
                    </div><!-- ts pricing box-->
                    <img class="pricing-dot1 " src="images/pricing/dot2.png" alt="">
                </div>
            </div><!-- col end-->
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                <div class="pricing-item">
                    <img class="pricing-dot " src="images/pricing/dot2.png" alt="">
                    <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                            <h2 class="ts-pricing-name">TARDIO</h2>
                            <h3 class="ts-pricing-price">
                                <span class="currency">S/</span>149
                            </h3>
                        </div>
                        <div class="promotional-code">
                            <p class="promo-code-text">Vacantes disponibles del 26 el 29 de Octubre</p>
                            @if (now() > '2020-10-25')
                                <a href="https://wa.link/i9z9ym" class="btn pricing-btn">¡Reservar ahora!</a>
                            @else
                                <a href="#" class="btn pricing-btn disabled">¡No disponible!</a>
                            @endif
                        </div>
                    </div><!-- ts pricing box-->
                    <img class="pricing-dot1 " src="images/pricing/dot2.png" alt="">
                </div>
            </div><!-- col end-->
        </div>
    </div><!-- container end-->
    <div class="speaker-shap wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
        <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
    </div>
</section>
<!-- ts pricing end-->

<!-- ts experience start-->
<section id="schedules" class="ts-schedule ts-schedule-white">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2 class="section-title white">
                AGENDA, TEMARIO & CONTENIDO
            </h2>
            <div class="ts-schedule-nav">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                            <h3>29 de Octubre</h3>
                            <span>Jueves</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">
                            <h3>30 de Ocubre</h3>
                            <span>Viernes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                            <h3>31 de Octubre</h3>
                            <span>Sábado</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="#date4" title="Click Me" role="tab" data-toggle="tab">
                            <h3>01 de Noviembre</h3>
                            <span>Domingo</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
            </div>
        </div><!-- col end-->

        </div><!-- row end-->
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content schedule-tabs">
                    <div role="tabpanel" class="tab-pane active" id="date1">
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>Módulo 1</span>
                            </div>
                            <div class="schedule-slot-info">
                                <a href="#">
                                    <img class="schedule-slot-speakers" src="images/speakers/randhy1.jpg" alt="Randhy Balcázar">
                                </a>
                                <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title text-center">Arquitectura del Modelo de Negocio</h3>
                                    <p>
                                        Es muy fácil desorganizarse cuando comenzamos a desarrollar nuestro negocio, es por esto que te enseñaremos a utilizar el Business Model Canvas, 
                                        herramienta con la cual podrás establecer las bases y estructura fundamentales de tu modelo de negocio.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Para quién está dirigido?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p>
                                        Si tienes una idea de negocio y no sabes por dónde empezar o tienes un emprendimiento en marcha y sientes
                                        que la organización puede volverse caótica o tediosa, estás en el lugar correcto.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Con qué te irás?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p class="mb-3">* Conocerás cómo utilizar el Business Model Canvas para que puedas desarrollar y visualizar tu modelo de negocio con tu equipo de trabajo y enfocarte en los 9 bloques esenciales.</p>
                                    <p>* Plantilla de Business Model Canvas.</p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing launce">
                            <div class="schedule-slot-time">
                                <span>Contenido</span>
                            </div>
                            <div class="schedule-slot-info">

                                <div class="schedule-slot-info-content">
                                    <div class="schedule-slot-info-content">
                                        <p>- ¿Por qué Business Model Canvas?</p>
                                        <p>- Explicación de cada Bloque</p>
                                        <p style="text-indent: 25px;">1. Segmentos de Clientes </p>
                                        <p style="text-indent: 25px;">2. Propuesta de Valor </p>
                                        <p style="text-indent: 25px;">3. Canales </p>
                                        <p style="text-indent: 25px;">4. Relaciones con los clientes </p>
                                        <p style="text-indent: 25px;">5. Fuentes de Ingresos </p>
                                        <p style="text-indent: 25px;">6. Actividades Clave </p>
                                        <p style="text-indent: 25px;">7. Recursos Clave </p>
                                        <p style="text-indent: 25px;">8. Aliados Clave </p>
                                        <p style="text-indent: 25px;">9. Estructura de Costos </p>
                                    </div>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                    </div>

                    <div role="tabpanel" class="tab-pane" id="date2">
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>Módulo 2</span>
                            </div>
                            <div class="schedule-slot-info">
                                <a href="#">
                                    <img class="schedule-slot-speakers" src="images/speakers/roberto.jpg" alt="Roberto López">
                                </a>
                                <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title text-center">Marketing Digital para negocios</h3>
                                    <p>
                                        Recibirás una introducción al marketing digital y a diferentes conceptos como la segmentación de clientes y fidelización, 
                                        con lo que podrás comenzar a desarrollar una estrategia de marketing digital integral que te permita llegar a tu consumidor final.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Para quién está dirigido?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p>
                                        Para emprendedores y negocios que quieran posicionarse mejor en redes sociales, entender cómo hacer segmentaciones más efectivas y que quieran acercarse más a sus clientes. 
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Con qué te irás?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p class="mb-3">* Conocimientos básicos y vitales que te permitirán segmentar mejor a tus clientes para poder gestionar mejor a tus clientes.</p>
                                    <p class="mb-3">* Principios de estrategias de marketing.</p>
                                    <p>* Tips para realizar una segmentación eficiente y directa.</p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing launce">
                            <div class="schedule-slot-time">
                                <span>Contenido</span>
                            </div>
                            <div class="schedule-slot-info">

                                <div class="schedule-slot-info-content">
                                    <div class="schedule-slot-info-content">
                                        <p>- Principios de Estrategias de Marketing</p>
                                        <p>- Cómo hacer una buena segmentación de clientes</p>
                                        <p style="text-indent: 25px;">* Definir grupo de segmentación</p>
                                        <p style="text-indent: 25px;">* Cómo hacer segmentación en publicidad en redes sociales</p>
                                        <p style="text-indent: 25px;">* ¿Qué indicadores analizamos en las redes sociales?</p>
                                        <p>- Por qué es importante fidelizar nuestra marca en los clientes</p>
                                        <p style="text-indent: 25px;">* Cómo fidelizar nuestra marca</p>
                                    </div>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                    </div>

                    <div role="tabpanel" class="tab-pane" id="date3">
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>Módulo 3</span>
                            </div>
                            <div class="schedule-slot-info">
                                <a href="#">
                                    <img class="schedule-slot-speakers" src="images/speakers/jessica.jpg" alt="Jessica Richards">
                                </a>
                                <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title text-center">Gestión Comercial - la importancia de nuestros clientes</h3>
                                    <p>
                                        ¿Sabías que tu organización debe estar completamente enfocada en sus clientes? <br>
                                        Hoy en día, los mejores negocios, son aquellos que mejor conocen a sus clientes y saben cómo fidelizarlos, y tú conocerás estas herramientas.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Para quién está dirigido?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p>
                                        Para aquellos emprendedores que quieren mejorar sus conexiones y relaciones con sus clientes, que no logran identificar las necesidades de sus clientes y sienten que es complicado mantener clientes recurrentes.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Con qué te irás?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p class="mb-3">* Conocimiento de los principios de Estrategias Comerciales.</p>
                                    <p class="mb-3">* Comprensión de la importancia del cliente en mi negocio.</p>
                                    <p>* Técnicas de comunicación y fidelización de clientes en ambientes de incertidumbre.</p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing launce">
                            <div class="schedule-slot-time">
                                <span>Contenido</span>
                            </div>
                            <div class="schedule-slot-info">

                                <div class="schedule-slot-info-content">
                                    <div class="schedule-slot-info-content">
                                        <p>- ¿Qué es la Estrategia Comercial y por qué es vital para todo negocio?</p>
                                        <p>- No es acerca de mi producto, es acerca del cliente</p>
                                        <p style="text-indent: 25px;">* ¿Cómo dar valor a los clientes?</p>
                                        <p style="text-indent: 25px;">* ¿Cómo construir o fortalecer mi oferta según las expectativas de mis clientes?</p>
                                        <p style="text-indent: 25px;">* ¿Cómo fidelizar a nuestros clientes durante el aislamiento social?</p>
                                        <p style="text-indent: 25px;">* ¿Cómo mantener el contacto cliente a distancia, desde casa?</p>
                                    </div>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                    </div>

                    <div role="tabpanel" class="tab-pane" id="date4">
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>Módulo 4</span>
                            </div>
                            <div class="schedule-slot-info">
                                <a href="#">
                                    <img class="schedule-slot-speakers" src="images/speakers/rodrigo.jpg" alt="Rodrigo Ramírez">
                                </a>
                                <div class="schedule-slot-info-content">
                                    <h3 class="schedule-slot-title text-center">Finanzas para no financieros</h3>
                                    <p>
                                        EEn este módulo final podrás conocer diferentes herramientas financieras que te permitirán manejar y desarrollar tu modelo de negocio de forma mucho más saludable.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Para quién está dirigido?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p>
                                        Emprendedores que deseen conocer sobre la gestión financiera, con interés en conocer cómo se maneja el dinero dentro de su negocio, y que quieran conocer qué tan eficiente es su capital.
                                    </p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing">
                            <div class="schedule-slot-time">
                                <span>¿Con qué te irás?</span>
                            </div>
                            <div class="schedule-slot-info">
                                <div class="schedule-slot-info-content">
                                    <p class="mb-3">* Conocimientos contables relacionados al Estado de Resultados.</p>
                                    <p>* Principios básicos para monitorear y controlar financieramente tu negocio.</p>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                        <div class="schedule-listing launce">
                            <div class="schedule-slot-time">
                                <span>Contenido</span>
                            </div>
                            <div class="schedule-slot-info">

                                <div class="schedule-slot-info-content">
                                    <div class="schedule-slot-info-content">
                                        <p>- ¿Por qué no debo ser “autoempleado”?</p>
                                        <p>- Leer un estado de Resultados</p>
                                        <p style="text-indent: 25px;">* Leer un estado de Resultados</p>
                                        <p style="text-indent: 25px;">* Principios y conceptos importantes</p>
                                        <p>- Impuestos</p>
                                        <p>- ¿Qué son indicadores financieros? ¿Para qué sirven?</p>
                                        <p style="text-indent: 25px;">* Indicadores más importantes:</p>
                                        <p style="text-indent: 45px;">° ROI</p>
                                        <p style="text-indent: 45px;">° EBITDA</p>
                                        <p style="text-indent: 45px;">° Margen de Contribución </p>
                                        <p style="text-indent: 75px;">* Cómo calcular costos de mis productos</p>
                                        <p>- Costo del capital:</p>
                                        <p style="text-indent: 25px;">* Flujos de Caja</p>
                                    </div>
                                </div>
                                <!--Info content end -->
                            </div><!-- Slot info end -->
                        </div>
                        <!--schedule-listing end -->
                    </div>

                </div>
            </div>
        </div>
    </div><!-- container end-->
</section>
<!-- ts experience end-->


<!-- FAQ start -->
<section class="ts-faq p-60 mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title white">
                    <span>FAQ's</span>
                    Preguntas Frecuentes
                </h2>
            </div><!-- col end-->
        </div><!-- row end-->
        <div class="row">
            <div class="col-12">
                <div class="panel-group faq-item" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel faq-list panel-default">
                       <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed text-white">
                                    1. ¿Cómo reservo mi vacante en el curso?
                                </a>
                            </h4>
                       </div>
                       <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body pt-3">
                            ¡Es muy simple! Haz click en el botón rosado "¡Reservar ahora!" en la esquina superior derecha, te conectará con nuestro representante en WhatsApp que te dará toda la información que necesitas para la transferencia y reservación de vacante.
                          </div>
                       </div>
                    </div>

                    <div class="panel faq-list panel-default">
                       <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed text-white" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    2. ¿Por qué medio se dictará el taller?
                                </a>
                            </h4>
                       </div>
                       <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body pt-3">
                            Todos los módulos serán presentados en vivo por Zoom, una vez registrado te enviaremos todo lo que necesites por correo.
                          </div>
                       </div>
                    </div>

                    <div class="panel faq-list panel-default">
                       <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed text-white" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    3. ¿Es posible obtener una factura del curso?
                                </a>
                            </h4>
                       </div>
                       <div id="collapseThree" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body pt-3">
                                Sí, escríbenos a <a href="mailto:contabilidad@monithor.com.pe" class="text-primary text-bold">contabilidad@monithor.com.pe</a> una vez comprado el curso, indicándonos tus datos fiscales y nosotros nos encargamos de hacértela llegar.
                            </div>
                       </div>
                    </div>
                    <div class="panel faq-list panel-default">
                          <div class="panel-heading" role="tab" id="headingFour">
                             <h4 class="panel-title">
                                <a class="collapsed text-white" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    4. Tengo más preguntas, ¿cómo puedo contactar con vosotros?
                                </a>
                             </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFour" style="">
                                <div class="panel-body pt-3">
                                    Puedes enviarnos un mensaje por WhatsApp al <a href="https://wa.link/i9z9ym" class="text-bold text-primary"><i class="fab fa-whatsapp"></i>+51980629612</a> haciendo click en la opción "¡Reservar ahora!"
                                </div>
                          </div>
                       </div>

                </div>
            </div>
        </div><!-- row end-->
    </div><!-- container end-->
</section>
<!-- FAQ end -->

@endsection
