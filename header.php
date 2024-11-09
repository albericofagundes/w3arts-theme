<?php
    wp_head();
?>

<div class="header_section">
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-inverse">
         <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="Logo da W3arts">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
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
   </div>
   
   <div class="banner_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="taital_main">
                           <h4 class="banner_taital">W3Arts</h4>
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
                           <h4 class="banner_taital">Aplicativos Inteligentes</h4>
                           <p class="banner_text">Aplicativos seguros e escaláveis, desenvolvidos para alto desempenho e experiência única. Projetados para acompanhar a evolução do mercado e atender às necessidades da sua marca.</p>
                           <div class="read_bt"><a href="#">Saiba Mais</a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                     <div><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img-2.png'); ?>" class="image_1"></div>
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
                           <p class="banner_text">Criamos experiências digitais que encantam e conectam. Nossa equipe transforma ideias em projetos de alto impacto, focando tanto na estética quanto na funcionalidade para destacar sua marca no universo online.</p>
                           <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                     </div>
                     <div class="col-md-6">
                     <div><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img-3.png'); ?>" class="image_1"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> 
</div>

