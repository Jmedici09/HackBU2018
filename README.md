# HackBU2018
Online budget organizer using MySQL, PHP, HTML, and CSS.


Requires a running MySQL server that has the database Budgetime with a table called 'Budget' that has the following columns. 
Below is the code necessary to create in MySQL


CREATE DATABASE Budgetime;
USE Budgetime;
CREATE TABLE Budget( 
ID int(8) not null auto_increment primary key, 
Date date not null,
Description varchar(200),
Amount decimal(15,2) not null,
Account varchar(30),
Category varchar(50));
