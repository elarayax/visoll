<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contacto</h2>
            <h3 class="section-subheading text-muted">Envíanos un Whatsapp, te lo responderemos a la brevedad</h3>
        </div>
        <form id="contactForm" method="post" novalidate="novalidate">
            <div class="row align-items-stretch align-self-center mb-5">
                <div class="col-md-8 align-self-center">
                    <div class="form-group">
                        <input autocomplete="off" class="form-control" id="name" name="nombre" type="text" placeholder="Nombre *" required="required" data-validation-required-message="Por favor ingrese su Nombre." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea autocomplete="off" class="form-control" name="mensaje" id="message" placeholder="Mensaje *" required="required" data-validation-required-message="Por favor ingrese un mensaje."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <input type="submit" class="btn btn-primary btn-xl text-uppercase" name="btnMensaje"  value="Enviar Mensaje">
                <!--<button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Mensaje</button>-->
            </div>
        </form>
    </div>
</section>
<?php
    if(isset($_POST['btnMensaje'])){
        $journalName = "Hola%20soy%20".$_POST['nombre'].",%20";
        $journalName .= str_replace(' ', '%20', $_POST['mensaje']);
        $URL="https://api.whatsapp.com/send?phone=56966482519&text=".$journalName."";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
    }
    
?>