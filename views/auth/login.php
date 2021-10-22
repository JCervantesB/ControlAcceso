<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesion con tus datos</p>

<form action="/" class="formulario" method="POST">
    <div class="campo">
        <label for="usuario">Usuario</label>
        <input 
            type="text"
            id="usuario"
            placeholder="Tu usuario"
            name="usuario"
        />

        <div class="campo">
            <label for="password">Password</label>
            <input type="password"
                type="password"
                id="password"
                placeholder="Tu Password"
                name="password"
            />
        </div>

        <input type="submit" class="boton" value="Iniciar Sesión">
    </div>
</form>

<div class="acciones">
    <p class="descripcion-pagina">¿Olvidaste tu password? Contacta con el administrador</p>
</div>