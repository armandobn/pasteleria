create database pasteleria;

use pasteleria;

drop table usuarios;
create table usuarios(
  id int not null auto_increment, primary key (id),
  usuario varchar(250),
  password varchar(250)
);

drop table pedidos;
create table pedidos(
  id int not null auto_increment, primary key (id),
  id_usuario varchar(250),
  pastel varchar(20),
  kilos double,
  fecha_pedido datetime default current_timestamp,
  fecha_entrega varchar(20)
);

alter table pedidos add foreign key (id_usuario) references usuarios(usuario);


CREATE TABLE pedidos (id_pedido INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id_pedido),
fecha DATE,
cantidad INT,
id_cliente INT,
id_producto INT,
FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
)