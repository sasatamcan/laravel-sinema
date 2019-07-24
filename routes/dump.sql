CREATE TABLE category(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    url VARCHAR (255) DEFAULT NULL,
    short_content TEXT DEFAULT NULL,
    content TEXT DEFAULT NULL,
    image VARCHAR (255) DEFAULT NULL,
    images TEXT DEFAULT NULL,
    status INT (11) DEFAULT NULL,
    author INT (11) DEFAULT NULL,
    create_at INT (11) DEFAULT NULL,
    update_at INT (11) DEFAULT NULL,
    PRIMARY KEY (id)  
);

CREATE TABLE films(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    category_ids TEXT DEFAULT NULL,
    actor TEXT DEFAULT NULL,
    year INT (11) DEFAULT NULL,
    trailer INT (11) DEFAULT NULL,
    film TEXT DEFAULT NULL,
    url VARCHAR (255) DEFAULT NULL,
    short_content TEXT DEFAULT NULL,
    content TEXT DEFAULT NULL,
    image VARCHAR (255) DEFAULT NULL,
    images TEXT DEFAULT NULL,
    status INT (11) DEFAULT NULL,
    author INT (11) DEFAULT NULL,
    create_at INT (11) DEFAULT NULL,
    update_at INT (11) DEFAULT NULL,
    PRIMARY KEY (id)  
);

CREATE TABLE hall(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    url VARCHAR (255) DEFAULT NULL,
    status INT (11) DEFAULT NULL,
    create_at INT (11) DEFAULT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE place(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    url VARCHAR (255) DEFAULT NULL,
    holl_id INT (11) DEFAULT NULL,
    seat_place INT (11) DEFAULT NULL,
    places_type TEXT DEFAULT NULL,
    status INT (11) DEFAULT NULL,
    author INT (11) DEFAULT NULL,
    create_at INT (11) DEFAULT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE setting(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    value VARCHAR (255) DEFAULT NULL,
    PRIMARY KEY (id)
);