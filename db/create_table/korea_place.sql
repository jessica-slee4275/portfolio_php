create table korea_place(
	id int not null AUTO_INCREMENT,
	city_id nvarchar(50),
	place_title nvarchar(500),
	pic nvarchar(100),
	detail text,
        resource nvarchar(500),
	date timestamp default current_timestamp,
	primary key(id)
)CHARACTER SET utf8 COLLATE utf8_unicode_ci;