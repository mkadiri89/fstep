**Setup**

Clone this repo on to an envrionment such as XAMPP where you have access to mysql and PHP

`git clone https://github.com/mkadiri89/fstep.git`

Run the following queries to create the tables and insert sample data

```
create database fstep;

create table citizen
(
	id int not null auto_increment,
	title varchar(64) not null,
	first_name varchar(255) not null,
	last_name varchar(255) not null,
	primary key(id)
);

create table queue
(
    id int not null auto_increment,
    customer_id int not null,
    datetime datetime,
    primary key(id)
);

create table service
(
	id int not null auto_increment,
	name varchar(255) not null,
	primary key(id)
);

insert into service (name) values("Housing"), ("Benefits"), ("Council Tax"), ("Fly-tipping"), ("Missed Bin");

insert into citizen (title, first_name, last_name) 
values('Mr', 'Jack', 'Robson'),
('Mrs', 'Jane', 'Murray'),
('Dr', 'Jill', 'Pepper'),
('Mr', 'Mohammed', 'Kadiri');
```

Configure your database credentials by copying and renaming `config.php.template` to `config.php` and editing the array parameters

**Running unit tests**

`/vendor/bin/phpunit test`

**Viewing the application**

Once everything has been setup visit `http://localhost/fstep/index.php?action=showQueue` to view the application

**Note**

Due to time constraints I was unable to complete this application, there is room for improvement.
