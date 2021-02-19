-- SQLite
create table mydb(

id integer, 
fnum varchar(50),
orign varchar(50),
dest varchar(50),
type varchar(50));


INSERT INTO mydb (id, fnum, orign, dest, type) 
VALUES ('70098', 'AHY175', 'UBBB', 'B752', 'LTFM');
INSERT INTO mydb (id, fnum, orign, dest, type) 
VALUES ('70010', 'AHY185', 'UBBB', 'B754', 'LTFM');



SELECT * FROM mydb;