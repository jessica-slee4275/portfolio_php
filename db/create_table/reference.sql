create table reference(
	id int not null AUTO_INCREMENT,
	oid int, 
	cid int,
	title varchar(100),
	detail text,
	date timestamp default current_timestamp,
	primary key(id)
);