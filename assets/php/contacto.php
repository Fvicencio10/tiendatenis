<?php include('header.php'); ?>
<div id="contacto">
    <!-- Caja izquierda con el formulario -->
    <div id="caja-izquierda">
        <h2>Formulario de contacto</h2>
        <form action="enviar.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="web">Sitio Web:</label>
            <input type="url" id="web" name="web">
            
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono">
            
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
            
            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" required></textarea>
            
            <input type="submit" value="Enviar">
        </form>
    </div>

    <!-- Caja derecha, dividida en 3 secciones: mapa, información de contacto, iconos -->
    <div id="caja-derecha">
        <!-- Mapa -->
        <div id="mapa">
            <h3>Cómo llegar</h3>
            <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!-- Información de contacto -->
        <div id="informacion-contacto">
            <h2>Información de Contacto</h2>
            <p>Estamos disponibles para resolver cualquier duda que tengas. Puedes contactarnos a través de los siguientes medios:</p>
            <p>Teléfono: 70589652</p>
            <p>Email: vicencio_tenis@gmail.com</p>
            <p>Dirección: Calle Miraflores</p>
        </div>

        <!-- Iconos de contacto -->
        <div id="contacto-icons">
            <a href="tel:70589652" title="Llamar">
                <img src="../img/iconos/telefono.png" alt="Teléfono">
            </a>
            <a href="https://wa.me/70589652" target="_blank" title="WhatsApp">
                <img src="../img/iconos/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://t.me/vicencio_tenis" target="_blank" title="Telegram">
                <img src="../img/iconos/telegram.png" alt="Telegram">
            </a>
            <a href="fax:70589652" title="Fax">
                <img src="../img/iconos/fax.png" alt="Fax">
            </a>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
