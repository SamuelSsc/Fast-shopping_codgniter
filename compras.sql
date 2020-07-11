create database compras;
	use compras;

create table usuarios(
	idUser integer not null auto_increment primary key,
    user varchar(15) not null,
    senha varchar(15) not null,
    dtcria datetime default now(),
    statuss varchar(1) default ''
);

insert into usuarios(user, senha)
	values('admin','admin123');
    
select * from usuarios;

alter table usuarios add tipo varchar(13) default 'COMUM' after senha;

select * from usuarios;

update usuarios set senha = 'fefe', tipo = 'COMUM'
 			WHERE user = 'admin';
#drop database compras;