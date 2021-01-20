CREATE SCHEMA vemsegura;
USE vemsegura;

CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

CREATE TABLE  `tb_denuncia` (
  `id_denuncia` int(11) NOT NULL AUTO_INCREMENT,
  `id_cadastro` int(11),
  `nome` varchar(50),
  `localizacao` varchar(200) NOT NULL,
  `vagao` varchar(10) DEFAULT NULL,
  `descricao` varchar(500) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_denuncia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE `tb_cadastros` (
  `id_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

ALTER TABLE `tb_denuncia` ADD CONSTRAINT `fk_cadastro` FOREIGN KEY ( `id_cadastro` ) REFERENCES `tb_cadastros` ( `id_cadastro` ) ;

CREATE TABLE `tb_novidades` (
  `id` INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `email` VARCHAR(50) NOT NULL
);

CREATE TABLE `tb_delegacias` (
  `id` INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  `delegacia` VARCHAR(50) NOT NULL,
  `endereco` VARCHAR(200) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL
);

/* JOIN QUE ESTÁ NA PÁGINA:  resultado_consulta.php */
SELECT * FROM tb_cadastros INNER JOIN tb_denuncia ON tb_cadastros.id_cadastro = tb_denuncia.id_cadastro WHERE tb_denuncia.nome = '$nome'