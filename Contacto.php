
<!--==========================  Header  ============================-->

<?php include'header.php'; ?>

  <!--==========================
    Intro Section class="intro-info"
  ============================-->
  

    <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="align-self-center col-md-12 intro-info layer3 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
        <h1>Contac<span>tanos.</span></h1>
      </div>
    </div>
  </section><!-- #intro -->





  <main id="main">
    <!-- Area Bienvenida -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>BIENVENIDO A CORPORATIVO PEREZ ROBLES S.C</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Suscrive Area -->

    <!-- Area Contactos-->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contáctenos</h2>
                <p class="mb-5">Existen diversas Formas</p>
              </div>
            </div>
          </div>

          <div class="row">

            <!-- Llamada-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-mobile"></i>
                  <p>Llamada:  55746730 y 57898786<br>
                    <span>de lunes a viernes (9 am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>


            <!-- Email-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>Correo electrónico: corporativoperezrobless@gmail.com<br>
                    <span>Web: www.corporativoperezroblessc.com</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Ubicación -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p>Ubicación: Aluminio No. 214 Int. B-409, Col. Popular Rastro<br>
                    <span>Deleg. Venustiano Carranza México, CDMX.</span>
                  </p>
                </div>
              </div>
            </div>  

          </div>

        </div>
      </div>

    </div>

    
      <div class="row">

        <!--formulario-->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <section class="form_wrap">
            <div class="cantact_info">
              <div class="info_title suscribe-text ">
                <h2 >ENVIANOS UN<br>MENSAJE</h2>
                <img src="img/LOGOCONTACTO.png">
              </div>
            </div>
            <form action="enviar.php" method="post" class="form_contact">
              <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="phone">Telefono / Celular *</label>
                <input type="text" id="telefono" name="telefono">
                <label for="email">Correo electronico *</label>
                <input type="text" id="correo" name="correo" required>
                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                <br>
                <input type="submit" value="Enviar Mensaje" id="btnSend">
              </div>
            </form>
          </section>
        </div>

        <!-- Start Google Map -->
        <div class="col-md-12 col-sm-12 col-xs-12">

          <!-- Start Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.0751590206796!2d-99.12147138577352!3d19.452326086873057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9412f69be9b%3A0xb912601b46e93496!2sint.%20B-409%2C%20Calle%20Aluminio%20214%2C%20Popular%20Rastro%2C%2015220%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1567314366698!5m2!1ses-419!2smx" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

          <!-- End Map -->

        </div>
        <!-- End Google Map -->
      </div>
    

  </main>

   <!--Footer-->   
  <?php include'footer.php'; ?>