drop database if exists login_system;
create database if not exists login_system;
use login_system;

create table if not exists user(
    email varchar(100) not null,
    password varchar(100) not null,
    name varchar(100) not null,
    primary key(email)
);

insert into user values ("test1@gmail.com", "Test123", "Test Test");