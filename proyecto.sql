create database mibd;

use mibd;

create table usuarios(
	user varchar (20),
    pass varchar (20),
    rol varchar (10),
    id int auto_increment primary key
);

drop table usuarios;

create table personas(
	cedula int (8),
    nombre varchar (28),
    apellido varchar (28),
    direccion varchar (42)
);

SELECT * FROM mibd.personas;

DELETE FROM mibd.usuarios WHERE id = '2';

SELECT * FROM mibd.usuarios;		