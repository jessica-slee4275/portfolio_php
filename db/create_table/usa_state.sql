create table usa_state(
	id int not null AUTO_INCREMENT,
	state_id varchar(10),
	state_title varchar(500),
	pic varchar(100),
	resource varchar(500),
	detail text,
	date timestamp default current_timestamp,
	primary key(id)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;