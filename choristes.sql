create database choristes; 
use choristes;

create table bureau(Numbur int not null,
                                   nometu char (30) not null,
					grade varchar(30) not null,
                                   fonction varchar(35) not null,
                                   ancien int not null,
                                   contact int(9) not null,
                                   primary key (Numbur));


create table choristes( Numch int not null,
                                   nomens char(30) not null,
                                   datnais date not null,
                                   grade varchar(30) not null,
                                    fonction varchar(35) not null,
                                   ancien int not null,
                                   contact int (9) not null,
                                   primary key (Numch));


create table commentaire(nom varchar(60) not null,
                         prenom varchar(70) not null,
                         mail varchar(100) not null,
                         com varchar(250) not null,
                         primary key(com));


insert into bureau values (1, "Anatole AGBOTON", "Suprême S. Ev.", "Maître de choeur", "10", "064857569");
insert into bureau values ("2", "IRENE KLOMEGAN", "Supérieur Seig. Ev.",  "Maître de choeur", "10", "064855569");
insert into bureau values ("3", "Raoul AMOUSSOU", "EVANG2LISTE",  "Président", "10", "077458999");
insert into bureau values ("4", "Omer DITENGOU", "Ass. L",  "Secrétaire", "10", "074635494");
insert into bureau values ("5", "Daniel AMOUSSOU", "Déhoto",  "Chef d'orchestre", "10", "066548759");
insert into bureau values ("6", "Isabelle TOFFA", "Vénérable sup.",  "Trésorière", "10", "066458952");
insert into bureau values ("7", "Christian Ilengo", "Déhoto",  "Conseiller", "10", "065458952");
    

insert into choristes values ("001", "Anatole", "1997/05/27", "Suprême S. Ev.","Maître de choeur", "30", "065557744");
insert into choristes values ("002", "Salomon", "1997/05/27","Vénérable Seig. Ev.","Surveillant G", "30", "012548855");
insert into choristes values ("003", "Loïc", "1996/07/12", "Ass. L","Surveillant A", "13", "077385064");
insert into choristes values ("004", "Omer", "1996/06/11", "Ass. L", "Secrétaire", "13", "074635494");
insert into choristes values ("005", "Olivier", "1996/03/19","Ass. L","Conseiller", "12", "065014145");
insert into choristes values ("006", "Hurmine", "1997/01/30", "Dehoto","Choriste","13", "077235157");
insert into choristes values ("007", "Dorcas Esther", "1995/08/11", "Dehoto","Choristes","20", "052287776");
insert into choristes values ("008", "Agnes", "1994/10/03","Fidèle","Choristes" "5", "025545888");
insert into choristes values ("009", "Gloria", "1995/07/11", "Fidèle","Choristes", "18", "065110141");
insert into choristes values ("010", "Myklo", "1998/10/29", "Fidèle","Choristes", "15", "054488869");
