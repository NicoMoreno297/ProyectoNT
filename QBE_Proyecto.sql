/*==============================================================/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2/5/2018 11:12:35                            */
/*==============================================================*/

create database proyectont;

use proyectont;

drop table if exists GENRES;

drop table if exists MOVIES;

drop table if exists POPCORNTIME;

drop table if exists PREFERENCES;

drop table if exists PERFILES;

drop table if exists USUARIOS;

/*==============================================================/
/* Table: GENRES                                                */
/*==============================================================*/
create table GENRES
(
   IDGENERO             int not null auto_increment,
   NOMBRE               char(30) not null,
   primary key (IDGENERO)
);

/*==============================================================/
/* Table: MOVIES                                                */
/*==============================================================*/
create table MOVIES
(
   IDPERFILES            int not null,
   IDPOP                int not null,
   primary key (IDPERFILES, IDPOP)
);

/*==============================================================/
/* Table: POPCORNTIME                                           */
/*==============================================================*/
create table POPCORNTIME
(
   IDPOP                int not null auto_increment,
   primary key (IDPOP)
);

/*==============================================================/
/* Table: PREFERENCES                                           */
/*==============================================================*/
create table PREFERENCES
(
   IDPERFILES            int not null,
   IDGENERO             int not null,
   primary key (IDPERFILES, IDGENERO)
);

/*==============================================================/
/* Table: PERFILES                                               */
/*==============================================================*/
create table PERFILES
(
   IDPERFILES            int not null auto_increment,
   NOMBRE               char(30) not null,
   EDAD                 int not null,
   ACTUAL               char(100) not null,
   primary key (IDPERFILES)
);

/*==============================================================/
/* Table: USUARIOS                                                 */
/*==============================================================*/
create table USUARIOS
(
   IDPERFILES            int not null,
   USUARIO              char(30) not null,
   CONTRASENA           char(30) not null,
   primary key (USUARIO, CONTRASENA)
);

alter table MOVIES add constraint FK_MOVIES foreign key (IDPERFILES)
      references PERFILES (IDPERFILES) on delete restrict on update restrict;

alter table MOVIES add constraint FK_MOVIES2 foreign key (IDPOP)
      references POPCORNTIME (IDPOP) on delete restrict on update restrict;

alter table PREFERENCES add constraint FK_PREFERENCES foreign key (IDPERFILES)
      references PERFILES (IDPERFILES) on delete restrict on update restrict;

alter table PREFERENCES add constraint FK_PREFERENCES2 foreign key (IDGENERO)
      references GENRES (IDGENERO) on delete restrict on update restrict;

alter table USUARIOS add constraint FK_TIENE2 foreign key (IDPERFILES)
      references PERFILES (IDPERFILES) on delete restrict on update restrict;