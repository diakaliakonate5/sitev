create Database If Not Exists numeric_history;

use numeric_history;

create Table personnages
(
    personnageId Integer not null primary key auto_increment,
    nom_complet varchar(15) not null,
    nom_image varchar(30) not  null,
    historique text not null
);

-- insertion des données dans la base de données --
