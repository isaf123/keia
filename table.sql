create table if not exists user(
	id int auto_increment primary key,
	name varchar(255) not null,
  email varchar(255) not null,
  password varchar(255) not null
);

create table if not exists contact_form(
	id int auto_increment primary key,
  first_name varchar(255) not null,
	last_name varchar(255) not null,
	email varchar(255) not null,
  phone varchar(255) not null,
  subject varchar(255) not null,
  message text not null
);
