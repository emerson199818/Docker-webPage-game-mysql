# Docker-webPage-game-mysql
1 - Proyecto practico LAB docker, mysql, azure.

REQUERIMIENTOS:
     CONOCIMIENTOS:
       - Docker
       - Mysql
       - Azure
       - Linux basic Shell
     EQUIPOS:
       - Equipo fisico Windows / linux
       - Azure Acc
       - Ubuntu machine in AZURE
       - Docker Acc
       - visual code


USO:
1. Se inicia tendiendo todos los archivos necesarios en una carpeta dentro de nuestro equipo ya sea que estemos usando windows o alguna versión of linux.

2. En Azure portal creamos una maquina ubunto en la cual instalaremos servicios de mysql, instalamos phpmyadmin para gestionar la base de datos, y instalamos apache2.
   
3. Se crea y configura mysql. se crea un usuario con permisos root, se inicia secion en phpmyadmin con ese usuario y se crea una nueva base de datos, se crea una tabla con el cual para este fin contendra, 3 columnas, la primera será ID el cual será valor primario tipo int, segunda email tipo char = 200 o menos, la tercera password char = 200.

4. Una ves tenido eso listo procedemos a editar el archivo para la conexión con la base de datos se llama "database.php", agregan el usuario de mysql, la contraseña, el nombre de la base de datos y el puerto.

5. se crea y edita el archivo para nuestra imagen Docker, llamado Dockerfile, se agrega el nombre y versión de la imagen se manda los archivos para la página a su ruta del apache /var/www/html, y se expone el puerto 80, ('El puerto 80 por que es el puerto web, y es el único que Azure app service tiene como default)

6. Listo eso! se crea la imagen los comandos son los siguientes:
   BUILD:
   docker build -tag (nombre_tag) .
   ejemplo;
   docker build -tag portalweb .

7. Se prueba la imagen:
   RUN:
   docker run -name (nombre_nuevo) -d -p 80:80 portalweb
   ejemplo;
   docker run -name test -d -p 80:80 portalweb
   DETAILS:
   -d (correr en segundo plano)
   -p (puertos en los cuales correrá, el primero puerto es el de el host 80 y el segundo :80 es el de la imagen el cual se especifica en Dockerfile anterior.
   TEST: LAN
   Entrar al navegador buscar localhost
   debería abrir la página, si la conexión con la base de datos está bien y si tienen ip publica para hacer la conexión  con la maquina mysql de AZURE.
   
   
8. Si todo funciona bien se sube la imagen docker portalweb a Docker register,
   INFO: https://docs.oracle.com/es-ww/iaas/Content/Registry/Tasks/registrypushingimagesusingthedockercli.htm

9. Se crea un App service de Azure,
    se especifica contenedor una ves, docker registry y usuario/imagen:tag,
   se crea el App service y listo debería de funcionar.

   NOTA:
   El login y demás datos de la página hacen llamado al archivo database.php, es requerido para que la página habrá sin errores.



