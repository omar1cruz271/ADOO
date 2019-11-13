
<body>
 
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading" style="padding-top: 140px;">
                    <h2 class="text-info">EMPRESAS</h2>
                    <p>Elige la empresa que más te agrade para obtener información sobre ella y sobre sus trabajos</p>
                </div>
                
               
                <div class="row">
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="<?php base_url(); ?>enviarPostales"><img  class="img-thumbnail img-fluid image" id="img1" src="assets/img/factureras/em/aeromexico.jpg"  ></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/factureras/em/volkswagen.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/factureras/em/volkswagen.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/factureras/em/volaris.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/factureras/em/volaris.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/servicios/banco.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/servicios/banco.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/servicios/santander.png"><img class="img-thumbnail img-fluid image" src="assets/img/servicios/santander.png"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/servicios/bancomer.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/servicios/bancomer.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/mercado/sams.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/mercado/sams.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/mercado/costco.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/mercado/costco.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/banco.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/banco.jpg"></a></div>
                </div>
            </div>
        </section>
    </main>
    <script>$(document).ready(function(){
           
           $("#hola").click(function(){
               //  $("p:not(#arbol)").hide(10000);
               $( "#img1" ).fadeOut();
           });
       });
   
   </script>
