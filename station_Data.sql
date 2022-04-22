create database station;
grant all privileges on database station to admin;
exit;

create table admin(
    email_Admin varchar(50),
    mdp_Admin varchar(50)
);

insert into admin values('admin@gmail.com','admin')


create table pompiste(
    id_Pompiste serial primary key,
    nom_Pompiste varchar(50),
    cin varchar(50),
    email VARCHAR(50) not null,
    mdp VARCHAR(50) not null
) ;

insert into pompiste values(default,'Dolfus','2091615932','arnel@gmail.com','mdp');
insert into pompiste values(default,'Elize','2094543565','elize@gmail.com','mdp');
insert into pompiste values(default,'Momo','2091562035','momo@gmail.com','mdp');




Create table carburant(
    id_Carburant int not null primary key,
    nom_Carburant VARCHAR(50) not null,
    prix_Carburant float not null
);

insert into carburant values(1,'essence',4100);
insert into carburant values(2,'gasoil',3700);
insert into carburant values(3,'petrole',2500);


create table details_Carburant(
    id_Details_Carburant serial primary key,
    quantite float not null,
    id_Carburant int not null,
    id_Pompiste int not null,
    foreign key (id_Carburant) references carburant(id_Carburant),
    foreign key(id_Pompiste) references pompiste(id_Pompiste)
);

insert into details_Carburant values(default,50,2,3);
insert into details_Carburant values(default,10,1,2);
insert into details_Carburant values(default,5,3,3);
insert into details_Carburant values(default,20,1,1);


create view view_Station
as select
details_Carburant.id_Details_Carburant,
pompiste.nom_Pompiste,
pompiste.cin,
carburant.id_Carburant,
carburant.nom_Carburant,
carburant.Prix_Carburant,
details_Carburant.quantite
from carburant
join details_Carburant on carburant.id_Carburant = details_Carburant.id_Carburant
join pompiste on pompiste.id_Pompiste = details_Carburant.id_Pompiste;

create view view_Total_Carburant 
as select nom_Pompiste,nom_Carburant , prix_Carburant, quantite ,Sum(quantite * prix_Carburant) as total 
from view_Station group by nom_Pompiste,nom_Carburant,prix_carburant,quantite;