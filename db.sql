
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT NOT NULL ,
    `nome` VARCHAR(255) NOT NULL,
PRIMARY KEY (`id`) );

INSERT OR REPLACE INTO `usuarios` (`id`, `nome`) VALUES (1, 'Fernanda');
INSERT OR REPLACE INTO `usuarios` (`id`, `nome`) VALUES (2, 'Pedro');
INSERT OR REPLACE INTO `usuarios` (`id`, `nome`) VALUES (3, 'Antonio');
INSERT OR REPLACE INTO `usuarios` (`id`, `nome`) VALUES (4, 'Jose');
INSERT OR REPLACE INTO `usuarios` (`id`, `nome`) VALUES (5, 'Tamires');