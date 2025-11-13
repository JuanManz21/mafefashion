# Mafe Fashion

Esta es una tienda online de ropa para mujer creada con HTML, CSS, PHP y SQL.

## Configuración

1.  **Importar la base de datos:**
    *   Abre phpMyAdmin en tu servidor XAMPP.
    *   Crea una nueva base de datos llamada `mafe_fashion`.
    *   Selecciona la base de datos `mafe_fashion` y ve a la pestaña "Importar".
    *   Selecciona el archivo `mafe_fashion.sql` y haz clic en "Importar".

2.  **Generar el hash de la contraseña del administrador:**
    *   Mueve el archivo `hasher.php` a la carpeta `htdocs` de tu servidor XAMPP.
    *   Abre tu navegador y ve a `http://localhost/hasher.php`.
    *   Introduce la contraseña que quieras para el administrador (la contraseña por defecto es `12345678`) y haz clic en "Generar Hash".
    *   Copia el hash generado.

3.  **Actualizar la base de datos:**
    *   Vuelve a phpMyAdmin y selecciona la base de datos `mafe_fashion`.
    *   Selecciona la tabla `usuarios` y edita el registro del administrador.
    *   Pega el hash que has copiado en el campo `password`.

4.  **¡Listo!**
    *   Mueve el resto de los archivos del proyecto a la carpeta `htdocs` de tu servidor XAMPP.
    *   Abre tu navegador y ve a `http://localhost/`.
    *   El correo del administrador es `admin@gmail.com` y la contraseña es la que has hasheado.