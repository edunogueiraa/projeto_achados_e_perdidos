 -- drop database db_achados_perdidos;

CREATE DATABASE db_achados_perdidos;
USE db_achados_perdidos;

CREATE TABLE tb_tipo_usuario (
    tipo_id INT PRIMARY KEY AUTO_INCREMENT,
    tipo_descricao VARCHAR(50) NOT NULL
);

CREATE TABLE tb_usuario (
    usu_id INT PRIMARY KEY AUTO_INCREMENT,
    usu_matricula VARCHAR(30) NOT NULL,
    usu_senha VARCHAR(20) NOT NULL,
    usu_tipo_id INT,
    FOREIGN KEY (usu_tipo_id) REFERENCES tb_tipo_usuario(tipo_id)
);

CREATE TABLE tb_categoria (
    cat_id INT PRIMARY KEY AUTO_INCREMENT,
    cat_nome VARCHAR(30) NOT NULL
);

CREATE TABLE tb_objetos (
    obj_id INT PRIMARY KEY AUTO_INCREMENT,
    obj_nome VARCHAR(100) NOT NULL,
    obj_foto BLOB,
    obj_descricao TEXT,
    obj_data_encontrado DATE,
    obj_data_limite DATE,
    obj_entregue BOOLEAN,
    obj_usu_id INT,
    FOREIGN KEY (obj_usu_id) REFERENCES tb_usuario(usu_id)
);

CREATE TABLE tb_objeto_categoria (
    obj_id INT,
    cat_id INT,
    PRIMARY KEY (obj_id, cat_id),
    FOREIGN KEY (obj_id) REFERENCES tb_objetos(obj_id),
    FOREIGN KEY (cat_id) REFERENCES tb_categoria(cat_id)
);

CREATE TABLE tb_avisos (
    avi_id INT PRIMARY KEY AUTO_INCREMENT,
    avi_comunicado TEXT NOT NULL,
    avi_importante BOOLEAN,
    avi_usu_id INT,
    FOREIGN KEY (avi_usu_id) REFERENCES tb_usuario(usu_id)
);
