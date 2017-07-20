# wp para pruebas
Me toca hacer un `chmod -R 777 wp` al inicio sino no me deja instalar

No me deja instalar con demo@localhost, asi que pongo mi email 

Me crea la base de datos wp.sql

Se instala correctamente, entro con demo, demo > ok

Quiero actuaizar y no me permte (1error.png)

Hago un `chmod -R 777 wp`  para intentar resolver este error, y me da 

chmod: changing permissions of 'wp/.htaccess': Operation not permitted
chmod: changing permissions of 'wp/wp-config.php': Operation not permitted

asi que debo hacerlo con sudo 

No funciona 

intento con esto 

```sudo chown -Rf apache.apache /var/www/html/wp```

!!!Funciona!!!!


