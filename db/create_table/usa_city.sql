create table usa_city(
	id int not null AUTO_INCREMENT,
	state_id varchar(30) not null,
	city_id varchar(30),
	city_title varchar(500),
	pic varchar(100),
	detail text,
	date timestamp default current_timestamp,
	primary key(id)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;