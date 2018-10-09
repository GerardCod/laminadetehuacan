create database TH;
use TH;
create table categoria(
id_categoria int(6) auto_increment not null,
descripcion varchar(100),
primary key (id_categoria)
)ENGINE=INNODB;

create table producto(
id_producto int(6) auto_increment not null,
categoria int(6) not null,
nombre text,
descripcion text,
primary key(id_producto)
)ENGINE= INNODB;

create table imagen(
id_imagen int(6) auto_increment not null,
producto int(6),
nombre text,
primary key(id_imagen)
)ENGINE=INNODB;

alter table producto add constraint fk_id_categoria_producto
foreign key (categoria) references categoria(id_categoria)
on delete no action
on update cascade;

alter table imagen add constraint fk_id_producto_imagen
foreign key (producto) references producto(id_producto)
on delete no action
on update cascade;
