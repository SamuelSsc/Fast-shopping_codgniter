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

update usuarios set statuss = '' where user = 'fefe';

update usuarios set senha = 'fefe', tipo = 'COMUM'
 			WHERE user = 'admin';
            

SELECT user, senha, tipo,
CASE statuss
when 'D' then
	'Desativado'
else 
	'Ativo'
end statuss
FROM usuarios;

select * from usuarios where user = 'admin' and tipo = 'comum';

insert into usuarios(user,senha,tipo)
	values('fefe','fefe','administrador');
#drop database compras;