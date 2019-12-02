CREATE TABLE items(
    itemid int(30) PRIMARY KEY AUTO_INCREMENT,
    price double(100,4) not null,
    imgpath varchar(100),
    item_name varchar(100) not null,
    item_desc text(500)
);