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
 Ram varchar(30),
 rom varchar(30),
 gpu varchar(40),
 processador varchar(200),
 descricao text (100000),
 
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

create table carrinho(
Id_carrinho int not null auto_increment,
Fk_id_produto int not null,
Fk_id_usuario int not null,
estado boolean,

primary key (id_carrinho),
foreign key (Fk_id_produto) references produto (id_produto),
foreign key (Fk_id_usuario) references usuario (id_usuario)
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


insert into detalhes(marca, Ram, rom, gpu, processador, descricao)
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
1.0µm, Câmera Única: 10 MP, f/1.9, 26mm (wide), 1.22µm, PDAF Dual Pixel, Vídeo: 2160p@30fps, 1080p@30fps, Recursos: Auto-HDR"),
("Motorola","4","64GB","Android 9.0","Snapdragon 665 (octa-core de até 2 GHz","Aceita microSD: Sim, até 512 GB, Bateria: 4.000 mAh, Conectividade: 4G, 3G, Wi-Fi, Bluetooth 5.0
Dual chip: Sim, Sistema operacional: Android 9 Pie, Sensores e recursos extras: Impressão digital, reconhecimento facial, Dimensões: 158,4 x 75,8 x 9,1 mm, Peso: 188 g"),
("Motorola","4","128GB","Android 9.0","Octa-core 2.2 GHz","Wireless: Wi-Fi ac, Bluetooth: 5.0, GPS: GPS, GLONASS, GALILEO, BDS, Rádio: Sim, USB: 2.0, Tipo-C, NFC: Sim
Sensores: Leitor de digitais (traseiro), acelerômetro, giroscópio, proximidade, bússola,Recursos da câmera: LED duplo, flash em dois tons, HDR Vídeo: 2160p@30fps, 1080p@30/60fps
Tripla: 12 MP, f/1.8, (wide), 1.25µm, PDAF + 16 MP, f/2.2, 14mm (ultrawide), dedicada para vídeo + 5 MP, sensor de profundidade"),
("Xiaomi","6","128GB","Android 10 MIUI","Processador octa-core de 2.0GHz","Bandas 4G: Banda LTE 1(2100), 3(1800), 5(850), 7(2600), 8(900), 40(2300), 41(2500),
Dimensões: 161.3 x 76.4 x 8.8 mm, Peso: 199 g, SIM Card: Dual SIM (Nano SIM + Micro SIM), Corpo: Gorilla Glass 5 frontal e traseiro, Tipo: LCD IPS, Tamanho: 6.53 polegadas
Resolução: 1080 x 2340 pixels, Proteção: Gorilla Glass 5Wireless: Wi-Fi ac, Bluetooth: 5.0, GPS: GPS, GLONASS, BDS, Rádio: Sim, USB: 2.0 (Tipo-C 1.0), NFC: Sim
Infravermelho: Sim, Sensores: Leitor de digitais (traseiro), acelerômetro, giroscópio, proximidade, bússola, Recursos da câmera: Flash LED duplo, HDR"),
("Xiaomi","6","128GB","Android 9 Pie 10 MIUI"," Qualcomm SDM855 Snapdragon 855+ (7 nm)","Interna: 128/256 GB 8 GB RAM, 256/512 GB 12 GB RAM, Alto-Falantes: Sim
Saída 3.5mm: Não, Wireless: Wi-Fi ac, Bluetooth: 5.0, GPS: GPS, GLONASS, BDS, GALILEO, QZSS, Rádio: Não ,USB: 2.0, Tipo-C, NFC: Sim, Infravermelho: Sim
Sensores: Sensor de impressões digitais (sob o display, óptico), acelerômetro, giroscópio, proximidade, bússola,
Recursos da câmera: Flash LED duplo, HDRBandas 4G: Banda LTE 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 17(700), 41(2500), 
Dimensões: 157.2 x 74.6 x 8.5 mm,Peso: 196 g, SIM Card: Dual SIM (Nano SIM), Corpo: Vidro traseiro (Gorilla Glass 6), bordas de alumínio (7000 series), Tipo: Super AMOLED,
Tamanho: 6.39 polegadas, Resolução: 1080 x 2340 pixels, Proteção: Corning Gorilla Glass 6"),
("Dell","4","500GB","Sistema: Ubuntu linux 18.04","Intel Core i5 2.5 GHz","Capacidade Total: 1 TB, Tamanho15.6 Resolução: HD, Tipo de tela: LCD, Touchscreen: Não
Tipo de placa de vídeo: Integrada (On-Board), Modelo: HD Graphics 620, Teclado: Numérico, Português, Touchpad, USB Padrão: 3, Conexões Existentes: USB 3.0, USB-C, HDMI, Ethernet,
Cartão SD, Conexões sem fio: Wi-Fi, Bluetooth, Audio: Alto falantes integrados, Saída de Fone de Ouvido, Webcam: Integrada, Microfone Embutido, Profundidade: 26 cm, 
Altura (Tela Fechada): 2,4 cm, Largura: 38 cm, Peso: 1,9 Kg, Capacidade de bateria: Wh40 Wh"),
("JBL","Versão Bluetooth 4.1","Bateria de 300mAh","Cores: preto, branco, azul","Potência do transmissor Bluetooth: < 4 dBm","Tamanho do alto falante: 32 mm
Resposta de frequência: 20 Hz – 20 kHz, Potência do transmissor Bluetooth: < 4 dBm, Perfil do Bluetooth: 4.1, Bateria: Polímero de íons de lítio (3,7 V, 300 mAh),
Tempo de carregamento: 2 horas, Tempo de reprodução de músicas: 16 horas, Cores: preto, branco, azul, Peso: 115g"),
("Xiaomi","Isolamento de Ruído: Passivo","Frequência: 20 Hz - 20.000 Hz","Fone de Ouvido: Intra auricular","Driver: 7.2 mm","Resposta de Frequência: 20 Hz - 20.000 Hz,
Fone de Ouvido: Intra auricular, Controles no Cabo: Sim (no próprio fone), Driver: 7.2 mm, Impedância: 16 Ohms, Isolamento de Ruído: Passivo"),
("Samsung","Bluetooth: 3","Processador: MTK626A","Faz e recebe ligação","Sensível ao toque de 1,56 Polegadas","Processador: MTK626A, Bluetooth: 3, Faz e recebe ligação,
Controla seus movimentos diários, Sensível ao toque de 1,56 Polegadas")
;
 

insert into produto(FK_id_detalhes,nome, tipo, preco, qtde, img)
Values ("1","Notebook gamer samsung odyssey", "N", "7124.05", "534","https://http2.mlstatic.com/notebook-samsung-odyssey-nvidia-gtx-1050ti-8gb-1tb-preto-D_NQ_NP_996970-MLB41306069450_042020-F.webp"),
       ("2","Notebook positivo Motion I341TA","N", "1882.09", "707","https://www.extra-imagens.com.br/Informatica/Notebook/50001086/1145954639/notebook-positivo-core-i3-4gb-1tb-tela-14-windows-10-motion-cobalt-gray-i341ta-50001086.jpg"),
       ("3","Samsung galaxy A30s","C", "1329.00", "999","https://www.casasbahia-imagens.com.br/TelefoneseCelulares/Smartphones/Android/1501353634/1257418465/celular-samsung-galaxy-a30s-preto-64gb-camera-tripla-25mp-5mp-8mp-1501353634.jpg"),
       ("4","Samsung galaxy S10+","C", "3254.07", "908","https://a-static.mlcdn.com.br/618x463/title-reference/magazineluiza/222251600/fb26b962741125b699c4861c7ee79010.jpg"),
       ("5","Motorola Moto G8 PLUS","C", "1487.07", "1095","https://a-static.mlcdn.com.br/618x463/title-reference/magazineluiza/155567800/8ca6dc89844ee3abc39ab3bf7fb8a879.jpg"),
       ("6","Motorola Moto One Action","C", "1349.10", "1070","https://images-americanas.b2w.io/produtos/01/00/img7/01/00/item/134582/5/134582528SZ.jpg"),
       ("7","Xiaomi Redmi Note 8 Pro", "C" ," 2139.00", "1018" , "https://http2.mlstatic.com/xiaomi-redmi-note-8-64-4gb-cmera-48-mpx-verso-global-D_NQ_NP_792132-MLB32520166741_102019-F.webp"),
       ("8","Xiaomi Mi 9","C", "2826.36", "980","https://imgaz.staticbg.com/thumb/large/oaupload/banggood/images/5D/54/723852e3-ce91-4816-a6e0-f99a51a4d489.jpg"),
       ("9","Notebook Dell Inspiron", "N", " 2469.00", "650", "https://a-static.mlcdn.com.br/1500x1500/notebook-dell-inspiron-15-3000-3584ml1p-intel-core-i3-4gb-128gb-ssd-156-windows-10/magazineluiza/224931800/5052edadb4f5e74f1da227b8d5ae9b24.jpg"),
       ("10","Fone de ouvido sem fio JBL tune T500BT", "A", "209.00", "1645","https://static.carrefour.com.br/medias/sys_master/images/images/h4d/h2a/h00/h00/14328825544734.jpg"),
       ("11","Fone de ouvido Bluetooth xiaomi redmi Airdots","A", "106.90", "1534","https://static.carrefour.com.br/medias/sys_master/images/images/h82/h55/h00/h00/15476304281630.jpg"),
       ("12","Samsung Smartwatch A1","A", "129.90", "1302","https://images-na.ssl-images-amazon.com/images/I/61gpXYLLyBL._AC_SX425_.jpg");
       

       
select * from produto;

update usuario set logado = "false" where id_usuario=1;
update produto set preco = "00.50" where id_produto=1;
/*delete from produto where id_produto=2*/
       
