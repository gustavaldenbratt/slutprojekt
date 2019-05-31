create table customer(
id int(8) primary key auto_increment,
name varchar(32), 
adress varchar(32)
);

create table orders(
id int(8) primary key auto_increment,
customer_id int(8),
foreign key (customer_id) references customer(id),
created varchar(32), 
shipped varchar(32)
);

create table products(
id int(8) primary key auto_increment,
name varchar(32),
image varchar(32),
price decimal(18,4)
);

create table order_details(
order_id int(8),
foreign key (order_id) references orders(id),
product_id int(8),
foreign key (product_id) references products(id),
quantity int(8)
);

insert into products(name, image, price)
value ('adidas', 'image/adidas_p1.png', '500 SEK');

insert into products(name, image, price)
value ('blå jeans', 'image/blue_jeans.jpg', '600');

insert into products(name, image, price)
value ('blå jacka', 'image/bla_jacka.png', '799.9999');

insert into products(name, image, price)
value ('begie byxor', 'image/begie_byxor.jpg', '899.9000'); 

insert into products(name, image, price)
value ('begie jacka', 'image/begie_jacka.jpg', '999.9999');

insert into products(name, image, price)
value ('byxor tjej', 'image/byxor_tjej.jpg', '699');

insert into products(name, image, price)
value ('blå jeans', 'image/blue_jeans.jpg', '600');

insert into products(name, image, price)
value ('Croptop', 'image/croptop.jpg', '499');

insert into products(name, image, price)
value ('Croptop randig', 'image/croptop_randig.jpg', '499');

insert into products(name, image, price)
value ('Nike byxor', 'image/nike_byxor.png', '399');

insert into products(name, image, price)
value ('Nike jacka', 'image/nike_gul.jpeg', '1199');

insert into products(name, image, price)
value ('Skor tjej', 'image/skor_tjej.jpg', '899');

