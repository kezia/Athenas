--------------------------------------------------------
--
-- Estrutura das tabelas`gerencia de materiais`
--

CREATE TABLE IF NOT EXISTS `pessoa`(
  `id_pessoa` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL, 
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` INT(11)  NOT NULL
   PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `categoria`(
  `codigo` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,  
   PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `projeto` (
  `id_projeto` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_projeto`)
);

CREATE TABLE IF NOT EXISTS `materiais`(
  `id_material` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_projeto` INT(11) unsigned NOT NULL,
  `nome_arquivo` VARCHAR(100) NOT NULL,
  `descricao` TEXT,  
  `url` VARCHAR(100) NOT NULL, 
  CONSTRAINT FK_PROJETO FOREIGN KEY (id_projeto) REFERENCES projeto (id_projeto) ON DELETE CASCADE, 
  PRIMARY KEY (`id_material`)
);

CREATE TABLE IF NOT EXISTS `administrador` ( 
  `id_administrador` smallint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(60) COLLATE utf8_unicode_ci NOT NULL,      
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_administrador`)  
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `projetos_clientes`(
  `id_projetos_clientes` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` INT(11) unsigned NOT NULL, 
  `id_projeto` INT(11) unsigned NOT NULL,  
   CONSTRAINT FK_PROJETO_RELACAO FOREIGN KEY (id_projeto) REFERENCES projeto (id_projeto) ON DELETE CASCADE,
   CONSTRAINT FK_CLIENTE_RELACAO FOREIGN KEY (id_cliente) REFERENCES cliente (id_cliente) ON DELETE CASCADE,
  PRIMARY KEY (`id_projetos_clientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;



