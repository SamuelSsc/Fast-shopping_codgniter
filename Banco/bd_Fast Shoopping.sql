drop database fast_shopping;
CREATE DATABASE Fast_shopping;

USE Fast_shopping;

 

CREATE table usuario(
    id_Usuario int not null auto_increment,
    Nome varchar(50) not null,
    email varchar(250)not null,
    Senha varchar(250)not null,
    logado boolean default false,
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
    contato int(11) not null,
    
    foreign key (FK_cep) references endereco (cep),
    foreign key (FK_id_produto) references produto (id_produto),
    foreign key (FK_id_usuario) references usuario (id_usuario),
    primary key (id_compra)
);


insert into detalhes(marca, ram, rom, gpu, processador, descricao)
values 
("samsung", "16","1 TB","Geforce gtx1050 4GB","intel core i7 4.2Ghz","Altura: 17.9 mm; Largura: 375,6 mm; Profundidade: 255 mm; Peso: 2,4 kg; 
Entradas e saídas: USB-C (1), USB 3.0 (2), USB 2.0 (1), HDMI e Ethernet; Sensores: Wi-Fi AC e Bluetooth"),
("Positivo","4","1 TB", "Intel®HD Graphics 62"," Intel® Core™ i3-7020U 2.30GHz","Slots de Memória: On-board, LPDDR3, Unidade Ótica: Não ,Leitor de Cartões: SD / MMC
Portas de Conexão: 1x USB 3.0, 1x USB 2.0, 1x HDMI, 1x RJ-45, 1x Áudio (para microfone e fone de ouvido), 1x DC-in (carregador),Teclado: Português-Brasil, 88 teclas
,Mouse: Tipo Touchpad, com toque múltiplo, 2 botões integrados, Carregador: 100~240V Automático, 65W ,Bateria: 2 células, 3000mAh (Integrada)
Cor: Cobalt Gray, Dimensões: 336 x 223 x 20 mm, Peso Líquido: 1,5 Kg, Peso Bruto: 2,1 Kg, Conteúdo da embalagem: Notebook, Adaptador CA com cabo padrão Inmetro e Guia Rápido 
de Instalação, Embalagem do Produto: 375 x 330 x 60 mm (L x P x A), Part Number | EAN: 3011572 / 7896904603378"),
("Samsung","4","64GB","Android 9.0","Octa-core (4x2.0 GHz & 4x1.5 GHz)","Tamanho: 6.2 polegadas, Resolução: 720 x 1520 pixels, Dimensões: 156.9 x 75.8 x 7.8 mm, Peso: 168 g
SIM Card: Single SIM ou Dual SIM (Nano SIM), Corpo: Vidro frontal, corpo de plástico, Sistema operacional: Android 9.0 (Pie), Wirelles: Wi-Fi n, Bluetooth: 5.0, GPS: GPS, GLONASS,
Rádio: Sim, USB: microUSB 2.0, Sensores: Leitor de digitais (traseiro), acelerômetro, proximidade, Recursos: Flash LED, HDR, Vídeo: 1080p@30fps"),
("Samsung","8","128GB","Android 9.0"," Octa-core (2x2.73 GHz Mongoose M4 & 2x2.31)","Peso: 157 g, SIM Card: Single SIM (Nano-SIM) ou Dual SIM (Nano-SIM)
Corpo: Vidro traseiro (Gorilla Glass 5), bordas de alumínio,Tipo: AMOLED Dinâmica, Tamanho: 6.1 polegadas Sensores: Sensor de impressão digital (sob a tela), acelerômetro,
giroscópio, proximidade, bússola, barômetro, batimento cardíaco, SpO2, Recursos: Flash LED, Vídeo: 2160p@60fps, 1080p@240fps, 720p@960fps, HDR, Tripla: 12 MP, f/1.5-2.4, 26mm 
(wide), 1/2.55, 1.4µm, PDAF Dual Pixel, estabilização óptica + 12 MP, f/2.4, 52mm (tele), 1/3.6, 1.0µm, estabilização óptica, zoom óptica 2x + 16 MP, f/2.2, 12mm (ultrawide),
1.0µm, Câmera Única: 10 MP, f/1.9, 26mm (wide), 1.22µm, PDAF Dual Pixel, Vídeo: 2160p@30fps, 1080p@30fps, Recursos: Auto-HDR")
;
 

insert into produto(FK_id_detalhes,nome, tipo, preco, qtde, img)
Values ("1","Notebook gamer samsung odyssey", "N", "7124.05", "534","https://http2.mlstatic.com/notebook-samsung-odyssey-nvidia-gtx-1050ti-8gb-1tb-preto-D_NQ_NP_996970-MLB41306069450_042020-F.webp"),
       ("2","Notebook positivo Motion I341TA","N", "1882.09", "707","https://www.extra-imagens.com.br/Informatica/Notebook/50001086/1145954639/notebook-positivo-core-i3-4gb-1tb-tela-14-windows-10-motion-cobalt-gray-i341ta-50001086.jpg"),
       ("3","Samsung galaxy A30s","C", "1329.00", "999","https://www.casasbahia-imagens.com.br/TelefoneseCelulares/Smartphones/Android/1501353634/1257418465/celular-samsung-galaxy-a30s-preto-64gb-camera-tripla-25mp-5mp-8mp-1501353634.jpg"),
       ("4","Samsung galaxy S10+","C", "3254.07", "908","https://a-static.mlcdn.com.br/618x463/title-reference/magazineluiza/222251600/fb26b962741125b699c4861c7ee79010.jpg");
       /*("5","Motorola Moto G8 PLUS", "1487.07", "1095"),
       ("6","Motorola Moto One Action", "1349.10", "1070"),
       ("7","Xiaomi Redmi Note 8 Pro", " 2139.00", "1018"),
       ("8","Xiaomi Mi 9", " 2826.36", "980"),
       ("9","Notebook Dell Inspiron", " 2469.00", "650"),
       ("10","Fone de ouvido sem fio JBL tune T500BT", "209.00", "1645"),
       ("11","Fone de ouvido Bluetooth xiaomi redmi Airdots", "106.90", "1534"),
       ("12","Samsung Smartwatch A1", "129.90", "1302");*/
       

       
select * from produto;

update usuario set logado = "false" where id_usuario=1;
update produto set preco = "700.00" where id_produto=1;
/*delete from produto where id_produto=2*/
       
