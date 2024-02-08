create database if not exists prueba_simj;
use prueba_simj;

create table if not exists usuarios(
id              int(255) auto_increment not null,
role            varchar(20),
name            varchar(50),
surname         varchar(100),
email           varchar(255),
password        varchar(255),
created_at      datetime,
updated_at      datetime,
remember_token  varchar(255),
constraint pk_usuarios primary key(id)
)engine=innodb;


insert into usuarios values(null, 'user','Pablo','Cabezuelo','pablo4494@gmail.com','pass',curtime(),curtime(),null);
insert into usuarios values(null, 'user','Juan','Garcia','juan4494@gmail.com','pass',curtime(),curtime(),null);
insert into usuarios values(null, 'user','Pepe','Gonzalez','pepe4494@gmail.com','pass',curtime(),curtime(),null);


create table if not exists eventos (
id              int(255) auto_increment not null,
user_id         int(255),
description     text,      
created_at      datetime,
updated_at      datetime,
constraint pk_eventos primary key(id),
constraint fk_eventos_usuarios foreign key(user_id) references usuarios(id)
)engine=innodb;


insert into eventos values(null, 1,'Evento de trabajo',curtime(),curtime());
insert into eventos values(null, 2,'Evento de trabajo',curtime(),curtime());
insert into eventos values(null, 1,'Evento de trabajo',curtime(),curtime());
insert into eventos values(null, 3,'Evento de trabajo',curtime(),curtime());
insert into eventos values(null, 2,'Evento de trabajo',curtime(),curtime());
insert into eventos values(null, 3,'Evento de trabajo',curtime(),curtime());