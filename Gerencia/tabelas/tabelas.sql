--------------------------------------------------------
--
-- Estrutura das tabelas`gerencia de materiais`
--

CREATE TABLE IF NOT EXISTS `pessoa`(
  `id_pessoa` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL, 
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` INT(11)  NOT NULL,
   CONSTRAINT fk_Categoria FOREIGN KEY (categoria) REFERENCES categoria (codigo),
   PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `categoria`(
  `codigo` INT(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,  
   PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;





