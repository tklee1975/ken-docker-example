USE `my_db`;


CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `tbl_user` (`userID`, `username`, `email`) 
VALUES (1, 'kencoder', 'admin@kencoder.com\r\n');

ALTER TABLE `tbl_user` ADD PRIMARY KEY (`userID`);

ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2