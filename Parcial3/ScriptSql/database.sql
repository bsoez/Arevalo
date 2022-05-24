create database n19100144;
use n19100144;

--
create table `n19100144` . `Videojuegos` (
    `idJuego`  INT NOT NULL AUTO_INCREMENT,
    `nomJuego` VARCHAR(45) NOT NULL,
    `Categoria` VARCHAR(45) NOT NULL,
    `anioJuego` INT NOT NULL,
    `nomComp` VARCHAR(45) NOT NULL,
    `precioJuego` VARCHAR(45) NOT NULL,
    `Descripcion` VARCHAR(45) NOT NULL,
    `ultimaVersion` VARCHAR(45) NOT NULL,
    PRIMARY KEY(`idJuego`));

    insert into n19100144.Videojuegos values(01,'Red dead redemtion 2', 'Supervivencia', '2020', 'Red b','$60', 'Mundo abierto, armas y vaqueros.', '3.1');
    insert into n19100144.Videojuegos values(02,'Rainbow six', 'Shooter', '2018', 'Ubisoft','$60', 'Matar a tus oponentes en equipos 5vs5.', '4.1');
    insert into n19100144.Videojuegos values(03,'Minecraft', 'Supervivencia', '2010', 'Mojag','$10', 'Mundo abierto, supervivencia.', '5.1');
    insert into n19100144.Videojuegos values(04,'Call of duty warzone', 'Shooter', '2019', 'Activision','$60', 'Lucha por subrevivir en un campo de guerra', '6.1');


