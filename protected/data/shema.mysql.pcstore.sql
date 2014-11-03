CREATE DATABASE pcstore;

/* Справочник поставщиков */
CREATE TABLE tbl_contractor (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    phones VARCHAR(128),
    email VARCHAR(128),
    note VARCHAR(128)
);

/* Справочник отделов */
CREATE TABLE tbl_department (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL
);

/* Справочник материально-ответственных */
CREATE TABLE tbl_person (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,  
    phone VARCHAR(128),
    email VARCHAR(128),
    id_department INT NOT NULL,
    FOREIGN KEY (id_department) REFERENCES tbl_department (id)
);

/* Справочник типов номенклатур */
CREATE TABLE tbl_nomenclature (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL
);

/* Таблица оборудования (компьютеры, принтеры и т.п.) */
CREATE TABLE tbl_equipment (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_nomenclature INT NOT NULL,
    name VARCHAR(128) NOT NULL,
    feature VARCHAR(128) NOT NULL,
    inventory_no VARCHAR(128),
    serial_no VARCHAR(128),
    id_contractor INT NOT NULL,
    price DECIMAL(8,2),
    purchase_date DATE,
    warranty VARCHAR(128),
    warranty_date DATE,
    notes VARCHAR(128),
    FOREIGN KEY (id_nomenclature) REFERENCES tbl_nomenclature (id),
    FOREIGN KEY (id_contractor) REFERENCES tbl_contractor (id)
);

/* Таблица поступления (прихода) оборудования на склад */
CREATE TABLE tbl_arrival (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_equipment INT NOT NULL,
    arrival_date DATE,
    amount INT NOT NULL,
    id_person INT NOT NULL,
    notes VARCHAR(128),
    FOREIGN KEY (id_equipment) REFERENCES tbl_equipment (id),
    FOREIGN KEY (id_person) REFERENCES tbl_person (id)
);
                           
/* Таблица расхода оборудования со склада */
CREATE TABLE tbl_expense (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_equipment INT NOT NULL,
    expense_date DATE,
    amount INT NOT NULL,
    id_person INT NOT NULL,
    notes VARCHAR(128),
    FOREIGN KEY (id_equipment) REFERENCES tbl_equipment (id),
    FOREIGN KEY (id_person) REFERENCES tbl_person (id)
);
                           
