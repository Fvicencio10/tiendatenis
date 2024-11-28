<?php include('header.php'); ?>
<?php include('social.php'); ?>
<style>
     body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f6f6f6, #e8e8e8); /* Fondo degradado suave */
            margin: 0;
            padding: 100px;
            color: #333;
        }

        h1 {
            text-align: center;
            color:#a05712; /* Un gris oscuro para el encabezado */
            font-size: 2.5em;
            margin-bottom: 40px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .question {
            display: none;
            margin-bottom: 25px;
            background-color:#5454;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .answers {
            margin-left: 20px;
            font-size: 1.1em;
        }

        label {
            font-size: 16px;
            margin-right: 10px;
            color: #555;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 15px 30px;
            font-size: 18px;
            background-color: #3498db; /* Azul vibrante */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #2980b9; /* Azul más oscuro al pasar el ratón */
            transform: scale(1.05); /* Efecto de aumento al pasar el ratón */
        }

        .message {
            text-align: center;
            font-size: 18px;
            color: #27ae60; /* Verde para el mensaje de éxito */
            display: none;
            padding: 35px;
            background-color: #ecf9ec;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin: 30px auto;
        }

        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1.1em;
            resize: vertical;
            box-sizing: border-box;
        }

        textarea:focus {
            border-color: #3498db;
        }
</style>

<form id="surveyForm">
        
        <!-- Pregunta 1 -->
        <div id="question1" class="question">
            <p>1. ¿Te gusto la calidad del tenis?</p>
            <div class="answers">
                <input type="radio" id="cafe_satisfecho" name="satisfaccion_cafe" value="satisfecho">
                <label for="cafe_satisfecho">Sí, me ha gustado</label><br>
                <input type="radio" id="cafe_no_satisfecho" name="satisfaccion_cafe" value="no_satisfecho">
                <label for="cafe_no_satisfecho">No, no me ha gustado</label><br>
            </div>
            <button type="button" onclick="nextQuestion(2)">Siguiente</button>
        </div>

        <!-- Pregunta 2 -->
        <div id="question2" class="question">
            <p>2. ¿Qué mejorarías en los tenis?</p>
            <div class="answers">
                <input type="checkbox" id="mas_fluidez" name="mejoras_cafe" value="mas_fluidez">
                <label for="mas_fluidez">que tenga una mejor planta</label><br>
                <input type="checkbox" id="menos_azucar" name="mejoras_cafe" value="menos_azucar">
                <label for="menos_azucar">Que sea mas suave</label><br>
                <input type="checkbox" id="mas_variedad" name="mejoras_cafe" value="mas_variedad">
                <label for="mas_variedad">Más variedad de tenis</label><br>
                <input type="checkbox" id="mas_temperatura" name="mejoras_cafe" value="mas_temperatura">
                <label for="mas_temperatura">Mas resintentes</label><br>
            </div>
            <button type="button" onclick="nextQuestion(3)">Siguiente</button>
        </div>

        <!-- Pregunta 3 -->
        <div id="question3" class="question">
            <p>3. ¿Que marca en especifico quisiera que tengamos?</p>
            <div class="answers">
                <input type="checkbox" id="vegan" name="comida_menu" value="vegan">
                <label for="vegan">ASICS</label><br>
                <input type="checkbox" id="desayuno" name="comida_menu" value="desayuno">
                <label for="desayuno">MIZUNO</label><br>
                <input type="checkbox" id="snacks" name="comida_menu" value="snacks">
                <label for="snacks">NIKE</label><br>
                <input type="checkbox" id="postres" name="comida_menu" value="postres">
                <label for="postres">JORDAN</label><br>
            </div>
            <button type="button" onclick="nextQuestion(4)">Siguiente</button>
        </div>

        <!-- Pregunta 4 -->
        <div id="question4" class="question">
            <p>4. ¿Te gustaría que tuviéramos ropa aperte de tenis?</p>
            <div class="answers">
                <input type="radio" id="musica_si" name="musica" value="si">
                <label for="musica_si">Sí, me gustaría</label><br>
                <input type="radio" id="musica_no" name="musica" value="no">
                <label for="musica_no">No, no me gustaría</label><br>
            </div>
            <button type="button" onclick="nextQuestion(5)">Siguiente</button>
        </div>

        <!-- Pregunta 5 -->
        <div id="question5" class="question">
            <p>5. ¿Cómo calificarías el ambiente de la cafetería?</p>
            <div class="answers">
                <input type="radio" id="ambiente_1" name="ambiente" value="1">
                <label for="ambiente_1">1 - Muy malo</label><br>
                <input type="radio" id="ambiente_2" name="ambiente" value="2">
                <label for="ambiente_2">2 - Malo</label><br>
                <input type="radio" id="ambiente_3" name="ambiente" value="3">
                <label for="ambiente_3">3 - Aceptable</label><br>
                <input type="radio" id="ambiente_4" name="ambiente" value="4">
                <label for="ambiente_4">4 - Bueno</label><br>
                <input type="radio" id="ambiente_5" name="ambiente" value="5">
                <label for="ambiente_5">5 - Excelente</label><br>
            </div>
            <button type="button" onclick="nextQuestion(6)">Siguiente</button>
        </div>

        <!-- Pregunta 6 -->
        <div id="question6" class="question">
            <p>6. ¿Tienes algún comentario adicional para mejorar la tienda?</p>
            <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br>
            <button type="submit">Enviar Encuesta</button>
        </div>

    </form>

    <div id="thankYouMessage" class="message">
        <p>¡Gracias por responder nuestra encuesta asi nos ayudas mucho para mejorar la tienda y asi tener una mejor atencion para los clientes. <br>
    ¡HASTA LUEGO!</p>
    </div>

    <script>
        // Función para mostrar la siguiente pregunta y ocultar la anterior
        function nextQuestion(questionNumber) {
            // Ocultar la pregunta actual
            document.getElementById('question' + (questionNumber - 1)).style.display = 'none';
            // Mostrar la siguiente pregunta
            document.getElementById('question' + questionNumber).style.display = 'block';
        }

        // Función para mostrar el mensaje final después de enviar la encuesta
        function showThankYouMessage(event) {
            event.preventDefault(); // Evita que el formulario se envíe realmente
            document.getElementById('surveyForm').style.display = 'none'; // Oculta el formulario
            document.getElementById('thankYouMessage').style.display = 'block'; // Muestra el mensaje de agradecimiento
        }

        // Asociar el evento de envío del formulario
        document.getElementById('surveyForm').addEventListener('submit', showThankYouMessage);

        // Mostrar la primera pregunta
        document.getElementById('question1').style.display = 'block';
    </script>
    
<?php include('footer.php'); ?>
