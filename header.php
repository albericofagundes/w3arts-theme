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
      </div>
   </div> 
</div>

<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="image_2">
               <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img-2.png'); ?>" alt="img Sobre Nós">
            </div>     
         </div>
         <div class="col-md-6">
            <h1 class="about_taital">Sobre <span class="us_text">Nós</span></h1>
            <p class="about_text">Nossa equipe é especializada em criar landing pages, sites, identidades visuais e estratégias de marketing que realmente conectam marcas e públicos. Sabemos que uma presença digital estratégica é essencial para o sucesso do seu negócio, e estamos aqui para transformar suas ideias em soluções concretas que encantam e trazem resultados. </p>
            <div class="read_bt_1"><a href="#">Saiba Mais</a></div>
         </div>
      </div>
   </div>
</div>



<div class="services_section layout_padding">
   <div class="container">
      <h1 class="service_taital"><span class="our_text">Nossos</span> Serviços</h1>
      <p class="service_text">Soluções criativas e estratégicas para transformar ideias em resultados, fortalecendo a presença digital de marcas que buscam relevância e autenticidade. </p>
      <div class="services_section_2">
         <div class="row">
            <div class="col-sm-4">
               <div class="icon_1"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-1.png'); ?>" alt="icone design logotipo"></div>

               <h4 class="design_text">Design de Identidade Visual</h4>
               <p class="lorem_text">Elementos que capturam a essência da marca: logotipos autênticos e banners impactantes, fortalecendo a conexão com o público e garantindo uma presença visual duradoura. </p>
               <div class="icon_1"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-2.png'); ?>" alt="icone Web"></div>
               <h4 class="design_text">Desenvolvimento Web</h4>
               <p class="lorem_text">Aplicativos modernos e funcionais, projetados para alto desempenho, segurança e escalabilidade, sempre focados na experiência do usuário e nas necessidades de cada marca. </p>
            </div>
            <div class="col-sm-4">
               <div class="icon_3"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-3.png'); ?>" alt="icone Design"></div>
               <h4 class="design_text">Design de Sites</h4>
               <p class="lorem_text">Criamos layouts modernos e intuitivos que destacam a personalidade da sua marca e tornam a navegação uma experiência envolvente para os visitantes. </p>
               <div class="read_bt_2"><a href="#">Read More</a></div>
            </div>
            <div class="col-sm-4">
               <div class="icon_1"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-4.png'); ?>" alt="icone Design"></div>
               <h4 class="design_text">Soluções Digitais em Aplicativos</h4>
               <p class="lorem_text">Aplicativos modernos e funcionais, projetados para oferecer alto desempenho, segurança e escalabilidade. Desenvolvidos com foco na experiência do usuário e nas necessidades únicas de cada marca, proporcionando resultados que acompanham a evolução do mercado. </p>
               <div class="icon_1"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-5.png'); ?>" alt="icone Mídias"></div>
               <h4 class="design_text">Trabalho em Mídias Sociais</h4>
               <p class="lorem_text">Ajudamos sua marca a se destacar nas redes sociais com conteúdos criativos e estratégias que aumentam o engajamento e fortalecem sua presença online. </p>
            </div>
         </div>
      </div>
   </div>
</div>