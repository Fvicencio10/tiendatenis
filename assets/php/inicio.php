<?php include('header.php'); ?>

<!-- CARRUSEL -->
<div id="featured">
    <div class="content">
        <h1></h1>
        <h3></h3>
    </div>
    <a href=""><img src="../img/dummy-images/ondafinal.png" alt=""></a> 
    <img src="../img/dummy-images/captar.png" data-caption="#htmlCaption" />
    <img src="../img/dummy-images/feature.png" />
    <img src="../img/dummy-images/principal.jpg" /> <!-- LA PRIMERA IMAGEN QUE SE MUESTRA -->
</div>
<!-- FIN CARRUSEL -->
<!-- INICIO -->
<?php include('social.php'); ?>
<div id="inicio">
    
    <div class="grid-container">
        <!-- Caja 11: Introducción -->
        <section id="introduccion" class="grid-item">
            <h2>Bienvenidos a VICENCIO</h2>
            <p>En VICENCIO, nos especializamos en ofrecer una amplia variedad de tenis y artículos deportivos de las mejores marcas. Ya sea para correr, entrenar o disfrutar de tus actividades al aire libre, tenemos lo que necesitas.</p>
            <p>Contamos con productos de alta calidad y precios competitivos, para que puedas rendir al máximo en tu deporte favorito.</p>
            
            <!-- Video -->
            <div class="video-container">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rUjMn_4QFW0?si=T2SHZEDHfZT1Kvcb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        

        <!-- Caja 12: Productos Destacados -->
        <section id="productos-destacados" class="grid-item">
            <h3>Productos Destacados</h3>
            <div class="productos">
                <div class="producto">
                    <img src="../img/tenis/tenis1.png" alt="Tenis Deportivo" class="producto-img">
                    <p>Tenis para running - Marca X</p>
                </div>
                <div class="producto">
                    <img src="../img/tenis/tenis2.png" alt="Tenis para entrenamiento" class="producto-img">
                    <p>Tenis para entrenamiento - Marca Y</p>
                </div>
                
            </div>
            
        </section>
    </div>
</div>




<?php include('footer.php'); ?>

