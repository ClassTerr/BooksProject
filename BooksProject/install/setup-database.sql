-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.7.23 - MySQL Community Server (GPL)
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных books_project
CREATE DATABASE IF NOT EXISTS `books_project` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `books_project`;

-- Дамп структуры для таблица books_project.book
CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы books_project.book: ~19 rows (приблизительно)
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` (`id`, `author`, `name`, `year`, `link`) VALUES
	(1, 'John Steinbeck', 'Of Mice and Men', 1937, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(2, 'J.D. Salinger', 'The Catcher in the Rye', 1951, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(3, 'George Orwell', '1984', 1949, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(4, 'William Golding', 'Lord of the Flies', 1954, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(5, 'F. Scott Fitzgerald', 'The Great Gatsby', 1925, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(6, 'Herman Melville', 'Moby Dick', 1851, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(7, 'Anthony Burgess', 'A Clockwork Orange', 1962, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(8, 'Hans Christian Andersen', 'The Princess and the Pea', 1835, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(9, 'L. Frank Baum', 'The Wonderful Wizard of Oz', 1900, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(10, 'P.L. Travers', 'Mary Poppins', 1934, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(11, 'Gabrielle-Suzanne Barbot de Villeneuve', 'Beauty and the Beast', 1740, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(12, 'Friedrich Schulz', 'Rapunzel', 1812, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(13, 'J.K. Rowling', 'Harry Potter and the Sorcerer\'s Stone', 1997, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(14, 'J.K. Rowling', 'Harry Potter and the Chamber of Secrets', 1998, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(15, 'J.K. Rowling', 'Harry Potter and the Prisoner of Azkaban', 1999, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(16, 'J.K. Rowling', 'Harry Potter and the Goblet of Fire', 2000, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(17, 'J.K. Rowling', 'Harry Potter and the Order of the Phoenix', 2003, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(18, 'J.K. Rowling', 'Harry Potter and the Half-Blood Prince', 2005, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155'),
	(19, 'J.K. Rowling', 'Harry Potter and the Deathly Hallows', 2007, 'https://www.amazon.com/books-used-books-textbooks/b?ie=UTF8&node=283155');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;

-- Дамп структуры для таблица books_project.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `registration_date` int(11) NOT NULL,
  `is_admin` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы books_project.user: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `email`, `password`, `name`, `birth_date`, `registration_date`, `is_admin`) VALUES
	(1, 'admin', 'admin@admin.com', '$2y$10$PfM00BvJ8jSaH.Bi1QfxnOw8oHH8Dn91t/Mgs0Dx3c4uEipsrM.Xi', 'admin', '1111-11-11', 1543967351, b'1');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
