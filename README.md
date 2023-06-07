Nombre
Nombre que se explique por sí mismo para el proyecto.
Vida Agricola

Descripción
Mi proyecto consiste en una tienda de productos agricolas: tractores, cosechadoras
Tiene las siguientes funciones y caracteristicas:
-Inicio en la cual hay una breve descripcion y una serie de fotos. En la cabecera hay un menu el cual lleva al resto de paginas:
*Desplegable categorias: hay una sola categoria llamada Maquinaria en la cual hay dos paginas: tractores y cosechadoras
*Registro: Aqui introduces tus datos para darte de alta en la base de datos los cuales son validados con javascript(clase validar.js)
*Login: Aqui iniciaras sesion con el usuario registrado
*CerrarSesion: Este boton es para que cierres la sesion iniciada
\*Carrito: Aqui se mostrara la lista de productos que has añadido y se procedera al pago
-Pago: formulario para introducir datos de facturacion, una vez le des a pagar se mostrara un mensaje de su compra ha sido realizada con exito, los datos se validan con javascript(clase validarPagos.js),
ademas si introduces un numero de cuenta de menos de 16 digitos, introduces una fecha anterior a la de hoy o introduces un cvv menor o mayor que 3 digitos mostrara error
-Tractores: esta pagina muestra un listado de los tractores en venta y puedes añadirlos al carrito
-Cosechadoras: esta pagina muestra un listado de las cosechadoras en venta y puedes añadirlas al carrito
-Carrito: Aqui se mostraran los productos añadidos y se realizara el pago reenviando a otra pagina que pedira los datos de facturacion y al terminar enviara un listado con los productos comprados.

Instalación
Instrucciones de instalación y utilización (usuario de login,...)
Base de datos: vidaagricola
importa las tablas con el sql vidaagricola.sql se crearan automaticamente las tablas
Estan ya insertados dos usuarios. El usuario lau tiene contraseña 1111 y el usuario diego tiene contraseña 2222
Para iniciarlo la clase principal es index.php
los productos ya estan en la base de datos, los puse en el phpmyadmin manualmente. lo unico que si he usado insercion de datos con codigo php
ha sido la imagen de los productos.(la clase se llama insertarImgProductos.php)
El archivo config.php tiene los datos de la bbdd:
host->localhost
user->root
pass->""
bbdd->vidaagricola

Autores y reconocimiento
Agradecimiento a aquellos que han contribuido al proyecto.
Laura Garcia Martin

Licencia
Para proyectos de código abierto, especifica la licencia .

Estado del proyecto
Mejoras posibles, arreglos, ampliaciones,...
Mejoras:
*Insercion de mas productos como remolques, semillas, fertilizantes y quimicos
*Posibilidad de descargar factura
*Posibilidad de guardar o no los datos de facturacion en la base de datos
*Hacer que el boton cerrar sesion solo se muestre si la sesion esta iniciada
\*Validaciones como comprobar en la clase Pago que el titular sea el mismo que inicio sesion
*optimizacion del codigo en cuanto a las clases Tractores.php y Cosechadoras.php y el resto de productos
*Introducir clase productos y dentro todos y que puedas solo ver los que se desea mediante filtros
*Introducir pie de pagina
*Mejora en el diseño de la pagina index.php
\*Poder elegir pagar con tarjeta de credito o visa
\*en principio quiero meter empleados y que se asigne para la entrega del producto junto con la fecha random pero no se si al final lo hare
# VidaAgricola
# VidaAgricola
