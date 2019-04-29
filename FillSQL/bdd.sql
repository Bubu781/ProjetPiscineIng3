/*

*/



-- Création de la table people
CREATE TABLE People(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nom varchar(50) NOT NULL,Prenom varchar(50) NOT NULL,Pseudo varchar(50) NOT NULL,Mail varchar(50) NOT NULL,N_Telephonne varchar(10) NOT NULL,Mot_De_Passe varchar(50) NOT NULL);
-- Création de la table sous table Client
CREATE TABLE Client(Porte_Monnaie varchar(50) NOT NULL,Code_Carte varchar(50) NOT NULL,Date_Expiration_Carte DATE NOT NULL,Nom_Carte varchar(50) NOT NULL,Num_Carte varchar(50) NOT NULL,Type_Carte varchar(50) NOT NULL,Adresse_L1 varchar(50) NOT NULL,Adresse_L2 varchar(50) NOT NULL,Ville varchar(50) NOT NULL,Code_Postal varchar(50) NOT NULL,Pays varchar(10) NOT NULL,people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));
-- Création de la table sous table Vendeur
CREATE TABLE Vendeur(Porte_Monnaie varchar(50) NOT NULL,people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));
-- Création de la table sous table Admin
CREATE TABLE Admin(people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));




-- Création de la	 table Item
CREATE TABLE Item(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nb_Click int NOT NULL, Nb_Ventes int NOT NULL, Nom varchar(50) NOT NULL,Categorie varchar(50) NOT NULL,Prix float NOT NULL,Description text(1000) NOT NULL,Marque varchar(50) NOT NULL);
-- Création de la sous-table vetements
CREATE TABLE Vetements(Taille varchar(50) NOT NULL, Couleur varchar(20) NOT NULL, Genre varchar(50) NOT NULL, Matiere varchar(50) NOT NULL, Type varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Livres
CREATE TABLE Livres(Auteur varchar(50) NOT NULL, Nb_Pages int NOT NULL, Date_Sortie DATE NOT NULL, Genre varchar(50) NOT NULL, Version varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Musique
CREATE TABLE Musiques(Auteur varchar(50) NOT NULL, Type varchar(50) NOT NULL, Duree TIME NOT NULL, Style varchar(50) NOT NULL, Version varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table sport et loisir
CREATE TABLE Sport_Et_Loisir(Code varchar(50) NOT NULL, Poids float NOT NULL, Taille float NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));



INSERT INTO Item(Nom, Categorie, Prix, Description, Marque, Nb_Click, Nb_Ventes) VALUES( 'teesirt simple', 'Vetements', 67, 'simple en bon etat','Levis',2,1)
INSERT INTO Item(Nom, Categorie, Prix, Description, Marque, Nb_Click, Nb_Ventes) VALUES( 'teesirt double', 'Vetements', 90, 'simple en mauvais etat','Ramon',0,0)
INSERT INTO Item(Nom, Categorie, Prix, Description, Marque, Nb_Click, Nb_Ventes) VALUES( "Harry Potter a l'ecole des sorciers", 'Livres', 10, 'Livre epique','Ombre blanche',19,12)
INSERT INTO Item(Nom, Categorie, Prix, Description, Marque, Nb_Click, Nb_Ventes) VALUES( "Hangover", 'Musiques', 1, "musique d'ambiance","disque d'or",6,3)
INSERT INTO Item(Nom, Categorie, Prix, Description, Marque, Nb_Click, Nb_Ventes) VALUES( "velo de course", 'Sport et Loisir', 652, "velo de course pour debutant","decatlon",2,0)
INSERT INTO Vetements(Taille, Couleur, Genre, Matiere, Type, item) VALUES( 'M', 'Rouge', 'M', 'Lin', 'teesirt',1)
INSERT INTO Vetements(Taille, Couleur, Genre, Matiere, Type, item) VALUES( 'XS', 'Bleu', 'M', 'Coton', 'teesirt',2)
INSERT INTO Livres(Auteur, Nb_Pages, Date_Sortie, Genre, Version, item) VALUES( 'JK Rolling', '203', '1997-06-26', 'Fantastique', 'Poche',3)
INSERT INTO Musiques(Auteur, Type, Duree, Style, Version, item) VALUES( "Taio Cruz", 'Morceau', '3:01', "Pop","Dematerialise",4)
INSERT INTO Sport_Et_Loisir(Code, Poids, Taille, item) VALUES( "Velo", 2.5, 1.03,5)