<h1 class="nombre-pagina">Password Olvidada</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form class="formulario" method="POST" action="/olvide">

    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
        />
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/">¿Ya tienes una cuenta? Iniciar sesión</a>
</div>