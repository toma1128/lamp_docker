CREATE DATABASE sample;

USE sample;

CREATE TABLE `sample_db` (
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `sample_db` VALUES(1, 'sample');