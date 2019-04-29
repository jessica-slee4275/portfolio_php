create table education (
	id int not null AUTO_INCREMENT,
	list_id varchar(50),
	title varchar(100),
	sub_title varchar(100),
	pic varchar(200),
	detail text,
	fin_date varchar(50),
	date timestamp default current_timestamp,
	primary key(id)
);