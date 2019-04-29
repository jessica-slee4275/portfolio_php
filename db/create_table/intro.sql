create table intro (
	id int not null AUTO_INCREMENT,
	title varchar(500),
	pic varchar(100),
	detail text,
	date timestamp default current_timestamp,
	primary key(id)
);