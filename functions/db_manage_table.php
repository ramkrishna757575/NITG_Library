<?php 
	$query = 'select 1 from books group by 1';
	$result = mysqli_query($db_server,$query);
	if(!$result)
	{
		$query = 'CREATE TABLE IF NOT EXISTS `books` (
													  `id` int(11) NOT NULL AUTO_INCREMENT,
													  `title` varchar(100) NOT NULL,
													  `author` varchar(100) NOT NULL,
													  `publication` varchar(100) NOT NULL,
													  `isbn` int(16) NOT NULL,
													  `image` varchar(100) NOT NULL,
													  `heading` varchar(50) NOT NULL,
													  `description` varchar(200) NOT NULL,
													  PRIMARY KEY (`id`),
													  UNIQUE KEY `isbn` (`isbn`)
													)';
		$result = mysqli_query($db_server,$query);

		$query = 'INSERT INTO `books`(`title`, `author`, `publication`, `isbn`, `image`, `heading`, `description`) 
					VALUES ("test title","test author","test publication",1234,"img3.jpg","test heading","test description")';

		$result = mysqli_query($db_server,$query);
	}
 ?>