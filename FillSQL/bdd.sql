/*
CREATION DES TABLES 	
*/
-- TABLES OUTILS
-- Création de la table media
CREATE TABLE Media(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, Path1 varchar(50) NOT NULL,Path2 varchar(50),Path3 varchar(50),Path4 varchar(50),Path5 varchar(50));
-- Création de la table avis client (note /5)
CREATE TABLE Avis_Client(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, Objet int NOT NULL, FOREIGN KEY(Objet) REFERENCES Item(Id), Client int NOT NULL, FOREIGN KEY(Client) REFERENCES people(Id), Note int NOT NULL);


-- TABLES PERSONNE
-- Création de la table people
CREATE TABLE People(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nom varchar(50) NOT NULL,Prenom varchar(50) NOT NULL,Pseudo varchar(50) NOT NULL,Mail varchar(50) NOT NULL,N_Telephonne varchar(10) NOT NULL,Mot_De_Passe varchar(50) NOT NULL,media int NOT NULL, FOREIGN KEY(media) REFERENCES media(Id));
-- Création de la table sous table Client
CREATE TABLE Client(Porte_Monnaie varchar(50) NOT NULL,Code_Carte varchar(50) NOT NULL,Date_Expiration_Carte DATE NOT NULL,Nom_Carte varchar(50) NOT NULL,Num_Carte varchar(50) NOT NULL,Type_Carte varchar(50) NOT NULL,Adresse_L1 varchar(50) NOT NULL,Adresse_L2 varchar(50) ,Ville varchar(50) NOT NULL,Code_Postal varchar(50) NOT NULL,Pays varchar(10) NOT NULL,people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));
-- Création de la table sous table Vendeur
CREATE TABLE Vendeur(Porte_Monnaie varchar(50) NOT NULL,people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));
-- Création de la table sous table Admin
CREATE TABLE Admin(people int NOT NULL, FOREIGN KEY(people) REFERENCES people(Id));

-- TABLES OBJETS
-- Création de la	 table Item
CREATE TABLE Item(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Nb_Click int NOT NULL, Nb_Ventes int NOT NULL, Nom varchar(50) NOT NULL, Prix float NOT NULL,Description text(1000) NOT NULL,Marque varchar(50) NOT NULL,media int NOT NULL, FOREIGN KEY(media) REFERENCES media(Id));
-- Création de la sous-table vetements
CREATE TABLE Vetements(Genre varchar(50) NOT NULL, Matiere varchar(50) NOT NULL, Type varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Livres
CREATE TABLE Livres(Auteur varchar(50) NOT NULL, Nb_Pages int NOT NULL,	 Date_Sortie DATE NOT NULL, Genre varchar(50) NOT NULL, Format varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table Musique
CREATE TABLE Musiques(Auteur varchar(50) NOT NULL, Type varchar(50) NOT NULL, Duree TIME NOT NULL, Style varchar(50) NOT NULL, Format varchar(50) NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));
-- Création de la table sport et loisir
CREATE TABLE Sport_Et_Loisir(Code varchar(50) NOT NULL, Poids float NOT NULL, Taille float NOT NULL, item int NOT NULL, FOREIGN KEY(item) REFERENCES item(Id));

-- TABLES DE COMMANDES 
-- Création de la table panier
CREATE TABLE Panier(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Couleur varchar(50), Taille varchar(10), Objet int NOT NULL, FOREIGN KEY(Objet) REFERENCES Item(Id), Client int NOT NULL, FOREIGN KEY(Client) REFERENCES people(Id), Quantite int NOT NULL);
-- Création de la table de commandes
CREATE TABLE Commandes(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Couleur varchar(50), Taille varchar(10), Objet int NOT NULL, FOREIGN KEY(Objet) REFERENCES Item(Id), Client int NOT NULL, FOREIGN KEY(Client) REFERENCES people(Id), Quantite int NOT NULL, Date_Livraison Date NOT NULL);
-- Création de la table des Produits
CREATE TABLE Produits(Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,Couleur varchar(50), Taille varchar(10), Objet int NOT NULL, FOREIGN KEY(Objet) REFERENCES Item(Id), Vendeur int NOT NULL, FOREIGN KEY(Vendeur) REFERENCES people(Id), Quantite int NOT NULL);


/*
REMPLISSAGE DES TABLES
*/

-- TABLES OUTILS
-- Remplissage de la table media
INSERT INTO Media(Path1,Path2) VALUES( "Media/img.jpeg","Media/suisse.jpg");
INSERT INTO Media(Path1) VALUES( "Media/1.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/2.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/3.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/4.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/5.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/6.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/7.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/8.jpeg");
INSERT INTO Media(Path1) VALUES( "Media/9.jpeg");
-- Remplissage de la table Avis client
INSERT INTO Avis_Client(Objet, Client, Note) VALUES( 5,1,4);

-- TABLES PERSONNE
-- Remplissage de la table People
INSERT INTO People(Nom, Prenom, Pseudo, Mail, N_Telephonne, Mot_De_Passe,media) VALUES( 'Tordjman', 'Ilana', 'Nana', 'ilana.tordjman@edu.ece.fr','0678549871','motdepasse',1);
INSERT INTO People(Nom, Prenom, Pseudo, Mail, N_Telephonne, Mot_De_Passe,media) VALUES( 'Adrien', 'Buot', 'bubu', 'adrien.buot@edu.ece.fr','0636548167','petimac',1);
INSERT INTO People(Nom, Prenom, Pseudo, Mail, N_Telephonne, Mot_De_Passe,media) VALUES( 'Guicharnaud', 'Leo', 'Lightman', 'leo.guicharnaud@edu.ece.fr','0675848197','pclgiflceplcifla',1);
-- Remplissage de la table Client
INSERT INTO Client(Porte_Monnaie, Code_Carte, Date_Expiration_Carte, Nom_Carte, Num_Carte, Type_Carte,Adresse_L1,Adresse_L2,Ville,Code_Postal,Pays,people) VALUES( 1692, '632', '2021-05-31', 'Tordjman','5483265493150001','Visa', '1 rue de la paix', '', 'Paris', 75015, 'France', 1);
-- Remplissage de la table Vendeur
INSERT INTO Vendeur(Porte_Monnaie,people) VALUES( 17072, 3);
-- Remplissage de la table Administrateur
INSERT INTO Admin(people) VALUES( 2);

-- TABLES OBJETS
-- Remplissage de la table item
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( 'teeshirt simple', 67, 'simple en bon etat','Levis',2,1,4);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( 'teeshirt double', 90, 'simple en mauvais etat','Ramon',0,0,4);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Harry Potter a l'ecole des sorciers",  10, 'Livre epique','Ombre blanche',19,12,2);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Hangover",  1, "musique d'ambiance","disque d'or",6,3,5);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "velo de course",   652, "velo de course pour debutant","decatlon",2,0,3);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Billie Jean", 1, "musique d'ambiance","Jackson record",24,9,6);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "La vie en rose",  1, "musique romatique","foule record",6,3,9);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Waka Waka",  1, "musique d'ambiance","disque d'or",16,1,7);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Bloero de Ravel", 1, "musique classique pour orchestre","cher d'orchestre",12,4,10);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( "Bangarang", 1, "son clulte du compositeur skrillex","Diplo",51,6,8);
INSERT INTO Item(Nom, Prix, Description, Marque, Nb_Click, Nb_Ventes,media) VALUES( 'teeshirt triple', 90, 'simple en mauvais etat','Ramon',0,0,4);
-- Remplissage de la table Vetements
INSERT INTO Vetements(Genre, Matiere, Type, item) VALUES( 'M', 'Lin', 'teesirt',1);
INSERT INTO Vetements(Genre, Matiere, Type, item) VALUES( 'M', 'Coton', 'teesirt',2);
INSERT INTO Vetements(Genre, Matiere, Type, item) VALUES( 'M', 'Coton', 'teesirt',11);
-- Remplissage de la table Livres
INSERT INTO Livres(Auteur, Nb_Pages, Date_Sortie, Genre, Format, item) VALUES( 'JK Rolling', '203', '1997-06-26', 'Fantastique', 'Poche',3);
-- Remplissage de la table Musiques
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Taio Cruz", 'Morceau', '3:01', "Pop","Dematerialise",4);
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Michael Jackson", 'Morceau', '2:01', "Pop","Dematerialise",6);
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Edith Piaf", 'Morceau', '3:35', "Pop","disque",7);
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Shakira", 'Morceau', '3:22', "Pop","Dematerialise",8);
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Ravel", 'Morceau', '6:45', "Classique","Dematerialise",9);
INSERT INTO Musiques(Auteur, Type, Duree, Style, Format, item) VALUES( "Skrillex", 'Morceau', '4:58', "Dupstep","Dematerialise",10);
-- Remplissage de la table sport et loisirs
INSERT INTO Sport_Et_Loisir(Code, Poids, Taille, item) VALUES( "Velo", 2.5, 1.03,5);

-- TABLES DE COMMANDES 
--Remplissage de la table panier
INSERT INTO Panier(Objet, Client, Quantite, Couleur, Taille) VALUES( 1,1,3,"Bleu", "XS");
INSERT INTO Panier(Objet, Client, Quantite, Couleur, Taille) VALUES( 1,3,1,"Bleu", "XS");
--Remplissage de la table de commandes 
INSERT INTO Commandes(Objet, Client, Quantite, Date_Livraison, Couleur, Taille) VALUES( 1,1,1, "2019-05-06", "Bleu", "XS");
--Remplissage de la table des produits
INSERT INTO Produits(Objet, Vendeur, Quantite, Couleur, Taille) VALUES( 1,3,1, "Bleu", "XS");
INSERT INTO Produits(Objet, Vendeur, Quantite, Couleur, Taille) VALUES( 2,3,7, "Rouge", "L");
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 3,3,2);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 4,3,16);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 5,3,4);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 6,3,24);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 7,3,14);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 8,3,5);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 9,3,70);
INSERT INTO Produits(Objet, Vendeur, Quantite) VALUES( 10,3,150);