/*

*/


-- Création de la table people
CREATE TABLE People(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nom varchar(50) NOT NULL,Prenom varchar(50) NOT NULL,Pseudo varchar(50) NOT NULL,Mail varchar(50) NOT NULL,N_Telephonne varchar(10) NOT NULL,Mot_De_Passe varchar(50) NOT NULL);



-- Création de la	 table Item
CREATE TABLE Item(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nom varchar(50) NOT NULL,Categorie varchar(50) NOT NULL,Prix INT NOT NULL,Description text(1000) NOT NULL,Quantite int NOT NULL,Marque varchar(50) NOT NULL);
-- Création de la sous-table vetements
CREATE TABLE Vetements(Taille varchar(50) NOT NULL, Couleur varchar(20) NOT NULL, Genre varchar(50) NOT NULL, Matiere varchar(50) NOT NULL, Type varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Livres
CREATE TABLE Livres(Auteur varchar(50) NOT NULL, Nb_Pages int NOT NULL, Date_Sortie DATE NOT NULL, Genre varchar(50) NOT NULL, Version varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Musique
CREATE TABLE Musique(Auteur varchar(50) NOT NULL, Type int NOT NULL, Durée TIME NOT NULL, Style varchar(50) NOT NULL, Version varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));

	