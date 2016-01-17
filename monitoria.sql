-- Banco de Dados do Sistema de Monitoria
-- version 0.2
-- Autor: Escritorio escola

DROP DATABASE IF EXISTS monitoria;
CREATE DATABASE monitoria DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE monitoria;

-- --------------------------------------------------------
-- Estrutura de Cursos
-- --------------------------------------------------------
DROP TABLE IF EXISTS tbl_cursos;
CREATE TABLE tbl_cursos (
  id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  descricao varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=28;

INSERT INTO tbl_cursos (id, descricao) VALUES
(1, 'ADMINISTRAÇÃO'),
(2, 'ARQUITETURA E URBANISMO'),
(3, 'CIÊNCIAS CONTÁBEIS'),
(4, 'CIÊNCIA DA COMPUTAÇÃO'),
(5, 'CST - GESTÃO COMERCIAL'),
(6, 'CST - GESTÃO FINANCEIRA'),
(7, 'CST - GESTÃO DE RH'),
(8, 'CST - LOGÍSTICA'),
(9, 'CST - REDE DE COMPUTADORES'),
(10, 'DIREITO'),
(11, 'EDUCAÇÃO FÍSICA - BACHARELADO'),
(12, 'EDUCAÇÃO FÍSICA - LICENCIATURA'),
(13, 'ENGENHARIA AMBIENTAL'),
(14, 'ENGENHARIA CIVIL'),
(15, 'ENGENHARIA DE CONTROLE E AUTOMAÇÃO'),
(16, 'ENGENHARIA DE PRODUÇÃO'),
(17, 'ENGENHARIA ELÉTRICA'),
(18, 'ENGENHARIA MECÂNICA'),
(19, 'ENGENHARIA QUÍMICA'),
(20, 'LETRAS'),
(21, 'PEDAGOGIA'),
(22, 'SERVIÇO SOCIAL'),
(23, 'ENFERMAGEM'),
(24, 'FARMÁCIA'),
(25, 'FISIOTERAPIA'),
(26, 'PSICOLOGIA'),
(27, 'SECRETARIADO EXECUTIVO BILINGUE');

-- --------------------------------------------------------
-- Estrutura de Usuarios
-- --------------------------------------------------------
DROP TABLE IF EXISTS tbl_usuarios;
CREATE TABLE tbl_usuarios (
  id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  nome  varchar(145) NOT NULL,
  cpf  varchar(11) NOT NULL,
  id_curso int(11) UNSIGNED NOT NULL,
  email  varchar(145) NOT NULL,
  telefone varchar(15) NULL,
  celular varchar(15) NULL,
  senha varchar(45) NOT NULL,
  reset_senha varchar(45) NULL,
  FOREIGN KEY (id_curso) REFERENCES tbl_cursos(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO tbl_usuarios (id, nome, cpf, id_curso, email, senha)
VALUES (1,'Rodrigo', '05065871345', 4, 'Rodrigo54mix@gmail.com', md5('123'));

-- --------------------------------------------------------
-- Estrutura de Monitores
-- --------------------------------------------------------
DROP TABLE IF EXISTS tbl_monitores;
CREATE TABLE tbl_monitores (
  id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  id_usuario int(11) UNSIGNED NOT NULL,
  descricao varchar(145) NOT NULL,
  turno varchar(145) NOT NULL,
  dia_semana varchar(145) NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES tbl_usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO tbl_monitores (id, id_usuario, descricao, turno, dia_semana)
VALUES (1, 1, 'Linguagem PHP', 'Matutino', 'Seg, Qua, Sex');

-- --------------------------------------------------------
-- Estrutura de Solicitações
-- --------------------------------------------------------
DROP TABLE IF EXISTS tbl_solicitacoes;
CREATE TABLE tbl_solicitacoes (
  id int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  id_aluno int(11) UNSIGNED NOT NULL,
  id_monitor int(11) UNSIGNED NOT NULL,
  mensagem text NOT NULL,
  data date NOT NULL,
  FOREIGN KEY (id_aluno) REFERENCES tbl_usuarios(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_monitor) REFERENCES tbl_monitores(id) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- --------------------------------------------------------
-- Estrutura do codeigniter
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS ci_sessions (
  id varchar(40) NOT NULL,
  ip_address varchar(45) NOT NULL,
  timestamp int(10) UNSIGNED DEFAULT 0 NOT NULL,
  data blob NOT NULL,
  PRIMARY KEY (id),
  KEY ci_sessions_timestamp (timestamp)
);

