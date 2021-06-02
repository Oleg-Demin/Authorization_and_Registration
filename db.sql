-- create database at_rg;
-- drop database at_rg;


-- drop table users;


-- АВТОРЫ (AUTHORS)
create table users
(
    id_user serial primary key,
    login varchar(50) not null,
    password varchar(255) not null,
    name varchar(50) not null
);


-- ЗАПОЛНЕНИЕ ТАБЛИЦЫ (ПОЛЬЗОВАТЕЛЕЙ)
insert into users (login, password, name) values
( 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'Leonardo' ),
( 'user2', '7e58d63b60197ceb55a1c487989a3720', 'Raphael' ),
( 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'Donatello' ),
( 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', 'Michelangelo' );
-- password = MD5(login)


-- УДАЛЕНИЕ ВСЕХ ДАННЫХ ПОЛЬЗОВАТЕЛЕЙ
-- delete from users;


-- СОДЕРЖИМОЕ ТАБЛИЦЫ ПОЛЬЗОВАТЕЛЕЙ
-- select * from users;
