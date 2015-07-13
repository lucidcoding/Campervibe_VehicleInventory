DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `make`;
DROP TABLE IF EXISTS `model`;
DROP TABLE IF EXISTS `vehicle`;

CREATE TABLE `make` (
    `id` CHAR(36) NOT NULL,
    `name` text COLLATE utf8_unicode_ci NOT NULL,
    `createdBy` CHAR(36) NOT NULL,
    `createdOn` DATETIME NOT NULL,
    `lastModifiedBy` CHAR(36) NULL,
    `lastModifiedOn` DATETIME NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
);

INSERT INTO `make` (`id`, `name`, `createdBy`, `createdOn`, `lastModifiedBy`, `lastModifiedOn`) VALUES
('A9D687FB-F889-44F2-99FC-9A916418D0A6', 'Volkswagen', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null),
('9C6F8A90-C7B3-4EBA-B9E0-E2E14DCCB257', 'Barkas', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null);

CREATE TABLE `model` (
    `id` CHAR(36) NOT NULL,
    `makeId` CHAR(36) NOT NULL,
    `name` TEXT COLLATE utf8_unicode_ci NOT NULL,
    `createdBy` CHAR(36) NOT NULL,
    `createdOn` DATETIME NOT NULL,
    `lastModifiedBy` CHAR(36) NULL,
    `lastModifiedOn` DATETIME NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
);

INSERT INTO `model` (`id`, `makeId`, `name`, `createdBy`, `createdOn`, `lastModifiedBy`, `lastModifiedOn`) VALUES
('DBFD9572-46F4-4DA6-B877-02EC0F6A51CF', 'A9D687FB-F889-44F2-99FC-9A916418D0A6', 'Type 2', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null),
('B90DE5AB-3550-4913-B8F6-8E1D526CA934', '9C6F8A90-C7B3-4EBA-B9E0-E2E14DCCB257', 'B1000', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null);

CREATE TABLE `vehicle` (
    `id` CHAR(36) NOT NULL,
    `modelId` CHAR(36) NOT NULL,
    `name` TEXT COLLATE utf8_unicode_ci NOT NULL,
    `year` INT NOT NULL,
    `description` TEXT COLLATE utf8_unicode_ci NOT NULL,
    `createdBy` CHAR(36) NOT NULL,
    `createdOn` DATETIME NOT NULL,
    `lastModifiedBy` CHAR(36) NULL,
    `lastModifiedOn` DATETIME NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `id` (`id`)
);

INSERT INTO `vehicle` (`id`, `modelId`, `name`, `year`, `description`, `createdBy`, `createdOn`, `lastModifiedBy`, `lastModifiedOn`) VALUES
('911762e0-31ba-4c6c-83f8-3f2288904975', 'DBFD9572-46F4-4DA6-B877-02EC0F6A51CF', 'Andrew', 1965, 'Splitscreen Devon', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null),
('a50c62cd-b24a-4d0a-aada-9744fce7022c', 'DBFD9572-46F4-4DA6-B877-02EC0F6A51CF', 'Belinda', 1974, 'Late Bay Westfalia', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null),
('6850BF08-14D2-49A0-BC28-9285A69094BC', 'B90DE5AB-3550-4913-B8F6-8E1D526CA934', 'Charlie', 1982, 'Custom Barkas', '8106c4ec-124b-467b-b31a-51cf7f794bcf', '2015-03-26 19:00:00', null, null);

