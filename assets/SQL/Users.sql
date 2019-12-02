CREATE TABLE users(
    email varchar(100) PRIMARY KEY,
    pswrd varchar(50) not null,
    date_added TIMESTAMP DEFAULT NOW()
);

CREATE TABLE users_cart(
    email varchar(100),
    itemid int,
    PRIMARY KEY (email,itemid),
    FOREIGN KEY (email) REFERENCES users(email),
    FOREIGN KEY (itemid) REFERENCES items(itemid)
);