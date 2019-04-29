create table experience(
	id int not null AUTO_INCREMENT,
	list_id int not null,
	title varchar(100),
	company varchar(100),
	company_sub varchar(300),
	region varchar(100),
	country varchar(100),
	country_icon varchar(200),
	pic varchar(200),
	use_lan varchar(200),
	start_date varchar(50),
	end_date varchar(50),
	primary key(id)
);