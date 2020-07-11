drop database fast_shopping;
CREATE DATABASE Fast_shopping;

USE Fast_shopping;

CREATE table usuario(
	id_Usuario int not null auto_increment,
    Nome varchar(50) not null,
    email varchar(250)not null,
    Senha varchar(250)not null,
    primary key (id_Usuario)
);


CREATE table produto(
	id_produto int not null auto_increment,
    nome varchar(100) not null,
    preço float (7,2) not null,
    qtde int (4) not null,
    primary key (id_produto)
);

create table endereco(
    cep int not null,
    logradouro varchar(100) not null,
    bairro varchar (50) not null,
    cidade varchar (30) not null,
    estado char(2) not null,
    
    primary key (cep)
);

create table compra(
	id_compra int not null auto_increment,
    FK_id_produto int not null,
    FK_id_usuario int not null,
    Fk_cep int not null,
    data_compra date not null,
    valor float (7,2) not null,
    
    foreign key (FK_cep) references endereco (cep),
    foreign key (FK_id_produto) references produto (id_produto),
    foreign key (FK_id_usuario) references usuario (id_usuario),
    primary key (id_compra)
);



insert into produto(nome, preço, qtde)
Values ("Notebook gamer sansung odyssey", "7124.05", "534"),
	   ("Notebook positivo Motion I341TA", "1882.09", "707"),
       ("Samsung galaxy A30s", "1329.00", "999"),
       ("Samsung galaxy S10+", "3254.07", "908"),
       ("Motorola Moto G8 PLUS", "1487.07", "1095"),
       ("Motorola Moto One Action", "1349.10", "1070"),
       ("Xiaomi Redmi Note 8 Pro", " 2139.00", "1018"),
       ("Xiaomi Mi 9", " 2826.36", "980"),
       ("Notebook Dell Inspiron", " 2469.00", "650"),
       ("Fone de ouvido sem fio JBL tune T500BT", "209.00", "1645"),
       ("Fone de ouvido Bluetooth xiaomi redmi Airdots", "106.90", "1534"),
       ("Samsung Smartwatch A1", "129.90", "1302");
       
	select * from usuario;
       