<?php
    wp_head();
?>

<div class="header_section">
         <div class="container">
         <nav class="navbar navbar-expand-lg navbar-inverse">
    <!-- Logo -->
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Logo da W3arts">
    </a>

    <!-- Toggle button for mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="services.html">Tecnologias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Sobre Nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="client.html">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contato</a>
            </li>
        </ul>
    </div>
</nav>





            <!-- <nav class="navbar navbar-dark bg-dark">
               <a class="logo" href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample01">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="client.html">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </nav> -->
         </div>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital">W3arts</h4>
                                 <!-- <h5>Elevamos Sua Presença Digital</h5> -->
                                 <p class="banner_text">Criação de landing pages, sites, identidades visuais e estratégias de marketing feitas sob medida para o sucesso da sua marca. Transformamos ideias em resultados com design estratégico e soluções digitais que encantam.</p>
                                 <div class="read_bt"><a href="#">Saiba Mais</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <!-- <div><img src="images/img-1.png" class="image_1"></div> -->
                              <div><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img-1.png'); ?>" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital">Web Agency</h4>
                                 <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem I</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/img-1.png" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="taital_main">
                                 <h4 class="banner_taital">Web Agency</h4>
                                 <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem I</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div><img src="images/img-1.png" class="image_1"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class=""><img src="images/left-icon.png"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class=""><img src="images/right-icon.png"></i>
               </a>
            </div>
         </div>
         <!--banner section end -->
      </div>