# konecta

## Crud Configuration

To configure the project for the first time

Enter the folder
```
cd konecta
```
Create a script with the following code and run it
```

DROP DATABASE IF EXISTS `konecta_dev`;

CREATE DATABASE konecta_dev;

use konecta_dev;

DROP TABLE IF EXISTS `product`;

CREATE TABLE product
(
    id         int(255) NOT NULL AUTO_INCREMENT,
    name       varchar(100) NOT NULL,
    reference  varchar(100) NOT NULL,
    price      int(20) NOT NULL,
    weight     int(100) NOT NULL,
    category   varchar(255) NOT NULL,
    stock      int(100) NOT NULL,
    created_at date NULL,
    last_sale  date NULL,
    PRIMARY KEY (`id`)

)ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
```
In the conection file you can find the credentials to connect to the database
