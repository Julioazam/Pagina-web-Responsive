
<?php include'header.php'; ?>
 <!--==========================
    Intro Section
  ============================-->
 <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="align-self-center col-md-12 intro-info layer3 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
        <h1>Servicios de <span>Asesorías.</span></h1>
      </div>
    </div>
  </section><!-- #intro -->

<div class="card text-center">
  <div class="card-header">Pago de Asesoría en PayPal</div>
  <div class="card-body layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
    <h5 class="card-title">Más Información</h5>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Pagar.</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">  
            <img class="img-modal" src="img/logo corporativotro.png" title="Index" >            
            <h5 class="modal-title" id="exampleModalLongTitle">Pago de Asesoría en PayPal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
              <p class="card-text">Para poder seguir en la asesoría por favor de pagar la asesoría.</p>

              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="C3D9XFFHGHNLJ">
                <table>
                  <tr>
                    <td>
                      <input class="card-title" type="hidden" name="on0" value="Asesoría en Línea">Asesoría en Línea
                    </td>
                  </tr>
                  <hr>
                  <tr>
                    <td>
                      <select name="os0">
                        <option value="Consulta">Consulta $500.00 MXN</option>
                      </select> 
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input type="hidden" name="on1" value="Categoría"><hr>Categoría
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <select name="os1">
                        <option value="Amparos Penales">Amparos Penales </option>
                        <option value="Derecho Administrativo">Derecho Administrativo </option>
                        <option value="Derecho Civil">Derecho Civil </option>
                        <option value="Derecho Familiar">Derecho Familiar </option>
                        <option value="Derecho Mercantil">Derecho Mercantil </option>
                        <option value="Derecho Penal">Derecho Penal </option>
                      </select> 
                    </td>
                  </tr>
                </table>
                <br><br>
                <input type="hidden" name="currency_code" value="MXN">
                <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <br><br>
                <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
              </form>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
  var _smartsupp = _smartsupp || {};
  _smartsupp.key = 'a2605af6962a94ac86f38f55a7365e4df2be5d6f';
  window.smartsupp||(function(d) 
  {
    var s,c,o=smartsupp=function(){ o._.push(arguments)
  };
  o._=[];
  s=d.getElementsByTagName('script')[0];
  c=d.createElement('script');
  c.type='text/javascript';
  c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';
  s.parentNode.insertBefore(c,s);
  })(document);
</script>
<?php include'footer.php'; ?>



