-- Active: 1672704049509@@tecnoweb.org.bo@5432@db_grupo01cc
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  condo
 * Created: 07-nov-2022
 */

/**
 * CONEXION A UNA BASE DE DATOS CON PSQL
 * psql -U nombreusuario -d nombrebasedatos -h direccionhost
 * Contraseña para usuario nombreusuario: 
*/

create table persona(
    codigo varchar(12) primary key,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    sexo varchar(100) not null,
    telefono varchar(100) not null,
    correo varchar(100) not null,
    tipo varchar(3) not null
);

create table roles(
    id serial primary key,
    nombre varchar (30) not null
);

create table usuario(
    id serial PRIMARY KEY,
    username varchar(100) not null,
    password varchar(100) not null,
    id_persona varchar(12) not null,
    id_roles int not null,
    FOREIGN KEY (id_persona ) REFERENCES persona(codigo),
    FOREIGN KEY(id_roles)REFERENCES roles(id)
);

create table dato_carrera(
    id serial primary key,
    codigo varchar (20) not null,
    nombre varchar(100)not null,
    objetivo text not null,
    mision text not null,
    vision text not null,
    perfil_profesional text not null,
    campo_laboral text not null,
    programas_analiticos text not null,
    horario_actual text not null,
    malla_curricular text not null,
    plantel_academico text not null,
    id_persona varchar(12) not null,
    FOREIGN KEY (id_persona ) REFERENCES persona(codigo )
);

create table tipo_titulacion(
    id serial primary key,
    modalidad_titulacion text not null,
    descripcion text not null,
    id_persona varchar(12) not null,
    FOREIGN KEY (id_persona ) REFERENCES persona(codigo )
);

create table tesis(
    id serial primary key,
    codigo varchar(50) not null,
    nombre varchar(100) not null,
    fecha_defensa date default now(),
    autor varchar(100) not null,
    jurados varchar(100) not null,
    url varchar(200)not null,
    id_persona varchar(12) not null,
    foreign key(id_persona) references persona(codigo)
);

create table solicitud_reclamo(
    id serial primary key,
    codigo varchar(50) not null,
    solicitante varchar(100) not null,
    fecha date default now(),
    descripcion varchar(100) not null,
    url_archivo varchar(200)not null,
    id_persona varchar(12),
    foreign key(id_persona) references persona(codigo)
);

create table convenio(
    id serial primary key,
    descripcion varchar(100) not null,
    institucion varchar(100) not null,
    area varchar(100) not null,
    duracion varchar(100) not null,
    requisitos text not null,
    url varchar(200)not null,
    id_persona varchar(12) not null,
    foreign key(id_persona) references persona(codigo)
);

create table modulos(
    id serial primary key,
    nombre varchar(50) not null,
    ruta varchar(100) not null,
    id_roles int not null,
    foreign key(id_roles) references roles(id)
);

create table contador_visitas(
    id serial primary key,
    contador integer not null
);



-- REGISTRO DE ROLES
INSERT INTO roles (nombre) VALUES ('Directora'), ('Coordinador'), ('Secretaria');

-- REGISTRO DE PERSONAL PRUEBAS
INSERT INTO persona (codigo, nombre, apellido, sexo, telefono, correo, tipo) VALUES ('1234', 'Maria Elizabeth', 'Condori Mollo', 'F', '89734431', 'maria@gmail.com','S');

-- REGISTRO DE USUARIOS
INSERT INTO usuario (username, password, id_persona, id_roles) 
VALUES ('Maria', md5('Maria'), '1234', '3');