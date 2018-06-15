create database bd_dallas2
use bd_dallas2

create table cliente(
	id_cliente int not null auto_increment primary key,
    nom_cliente varchar(100) not null,
    email_cliente varchar(100) not null,
    movil_cliente varchar(9) not null
)

create table reservas(
	num_reserva int not null auto_increment primary key,
    nom_cliente varchar(100) not null,
    email_cliente varchar(100) not null,
    movil_cliente varchar(9) not null,
    fecha date,
    cant_mesas int,
    comentario varchar(500),
    estado varchar(20)
)

create table platos(
	cod_plato int not null auto_increment primary key,
    nom_plato varchar(100) not null,
    descripcion varchar(250) not null,
    id_categoria int,
    precio decimal(7,2) not null,
    foreign key(id_categoria) references categoria(id_categoria)
)

create table detallepedido(
	num_pedido int not null,
	cod_plato int not null,
    cant int,
    precio double,
    primary key(cod_plato,num_pedido),
	foreign key(num_pedido) references pedidos(num_pedido),
    foreign key(cod_plato) references platos(cod_plato)
)

create table pedidos(
	num_pedido int not null auto_increment primary key,
    fecha_emision date,
    forma_pago varchar(20),    
	id_cliente int,
    foreign key(id_cliente) references cliente(id_cliente)
)

create table categoria(
	id_categoria int not null primary key auto_increment,
    nom_categoria varchar(50) not null
)

create table noticias(
	id_correo int not null auto_increment primary key,
    correo_usuario varchar(100) not null    
)

create table contacto(
	id_contacto int not null auto_increment primary key,
    nom_contacto varchar(150) not null,
    correo_contacto varchar(150) not null,
    sms_contacto varchar(150) not null 
)

SET SQL_SAFE_UPDATES=0;


create view vista_platos as
select cod_plato,nom_plato,descripcion,nom_categoria,precio from platos 
inner join categoria
on platos.id_categoria = categoria.id_categoria


select * from contacto
select * from noticias
select * from platos
select * from categoria
select * from vista_platos

DELETE FROM categoria
delete from platos

select * from categoria

select nom_plato,descripcion,precio from vista_platos
where nom_categoria = 'carnes'

select nom_plato,descripcion,precio from vista_platos
where nom_categoria = 'pechugas'


