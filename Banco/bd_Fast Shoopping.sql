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

 CREATE table detalhes(
 id_detalhes int not null auto_increment,
 marca varchar(30) not null,
 Ram int(2),
 rom varchar(10),
 gpu varchar(40),
 processador varchar(40),
 descricao varchar (1000),
 
 primary key (id_detalhes)
);



CREATE table produto(
    id_produto int not null auto_increment,
    FK_id_detalhes int not null,
    nome varchar(100) not null,
    tipo varchar(1) not null,
    preco float (7,2) not null,
    qtde int (4) not null,
    img varchar(500) not null 	,
    
	foreign key (Fk_id_detalhes) references detalhes (id_detalhes),
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
    cpf  int(11) not null,
    contato int(11) not null,
    
    foreign key (FK_cep) references endereco (cep),
    foreign key (FK_id_produto) references produto (id_produto),
    foreign key (FK_id_usuario) references usuario (id_usuario),
    primary key (id_compra)
);

 

 

insert into produto(FK_id_detalhes,nome, tipo, preco, qtde, img)
Values ("1","Notebook gamer sansung odyssey", "N", "7124.05", "534","https://http2.mlstatic.com/notebook-samsung-odyssey-nvidia-gtx-1050ti-8gb-1tb-preto-D_NQ_NP_996970-MLB41306069450_042020-F.webp");
       /*("2","Notebook positivo Motion I341TA", "1882.09", "707"),
       ("3","Samsung galaxy A30s", "1329.00", "999"),
       ("4","Samsung galaxy S10+", "3254.07", "908"),
       ("5","Motorola Moto G8 PLUS", "1487.07", "1095"),
       ("6","Motorola Moto One Action", "1349.10", "1070"),
       ("7","Xiaomi Redmi Note 8 Pro", " 2139.00", "1018"),
       ("8","Xiaomi Mi 9", " 2826.36", "980"),
       ("9","Notebook Dell Inspiron", " 2469.00", "650"),
       ("10","Fone de ouvido sem fio JBL tune T500BT", "209.00", "1645"),
       ("11","Fone de ouvido Bluetooth xiaomi redmi Airdots", "106.90", "1534"),
       ("12","Samsung Smartwatch A1", "129.90", "1302");*/
       

insert into detalhes(marca, ram, rom, gpu, processador, descricao)
values ("samsung", "16","1 TB","Geforce gtx1050 4GB","intel core i7 4.2Ghz","Altura: 17.9 mm; Largura: 375,6 mm; Profundidade: 255 mm; Peso: 2,4 kg; 
Entradas e saídas: USB-C (1), USB 3.0 (2), USB 2.0 (1), HDMI e Ethernet; Sensores: Wi-Fi AC e Bluetooth");
       
select * from produto;

select * from produto a join detalhes b on b.id_detalhes = a.FK_id_detalhes;
       
