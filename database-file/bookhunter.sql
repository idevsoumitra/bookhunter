-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookhunter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(120) NOT NULL,
  `admin_username` varchar(120) NOT NULL,
  `admin_email` varchar(120) NOT NULL,
  `admin_phone` varchar(120) NOT NULL,
  `admin_password` varchar(120) NOT NULL,
  `admin_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_phone`, `admin_password`, `admin_image`) VALUES
(6, 'Soumitra', 'soumitra_jr', 'soumitra.jr@gmail.com', '01677017202', '112233', 'images/admin.jpeg'),
(13, 'admin', 'admin', 'admin@bd.com', '0170000000', 'admin', 'images/23938578fb8d88c02bc59906d12230f3.png');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`category_id`, `category_name`) VALUES
(1, 'Action and adventure'),
(2, 'Anthology'),
(3, 'Alternate history'),
(4, 'Autobiography'),
(5, 'Art/architecture'),
(6, 'Biography'),
(7, 'Business/economics'),
(8, 'Chick lit'),
(9, 'Children\'s'),
(10, 'Crafts/hobbies'),
(11, 'Classic'),
(12, 'Cookbook'),
(13, 'Comic book'),
(14, 'Diary'),
(15, 'Coming-of-age'),
(16, 'Crime'),
(17, 'Drama'),
(18, 'Dictionary'),
(19, 'Encyclopedia'),
(20, 'Fairytale'),
(21, 'Fantasy'),
(22, 'Graphic novel'),
(23, 'Guide'),
(24, 'Health/fitness'),
(25, 'History'),
(26, 'Home and garden'),
(27, 'Historical fiction'),
(28, 'Humor'),
(29, 'Horror'),
(30, 'Journal'),
(31, 'Mystery'),
(32, 'Math'),
(33, 'Memoir'),
(34, 'Paranormal romance'),
(35, 'Picture book'),
(36, 'Poetry'),
(37, 'Prayer'),
(38, 'Philosophy'),
(39, 'Political thriller'),
(40, 'Religion, spirituality, and new age'),
(41, 'Romance'),
(42, 'Satire'),
(43, 'Science'),
(44, 'Science fiction'),
(45, 'Self help'),
(46, 'Short story'),
(47, 'Suspense'),
(48, 'Sports and leisure'),
(49, 'Textbook'),
(50, 'True crime'),
(51, 'Thriller'),
(52, 'Travel'),
(53, 'Western'),
(54, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `book_title` varchar(120) CHARACTER SET utf8 NOT NULL,
  `book_type` varchar(11) CHARACTER SET utf8 NOT NULL,
  `book_author` varchar(120) CHARACTER SET utf8 NOT NULL,
  `book_cover_artist` varchar(255) CHARACTER SET utf8 NOT NULL,
  `book_publisher` varchar(80) CHARACTER SET utf8 NOT NULL,
  `book_publish_year` varchar(255) CHARACTER SET utf8 NOT NULL,
  `book_description` text CHARACTER SET utf8 NOT NULL,
  `book_media_type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `book_pages` varchar(50) CHARACTER SET utf8 NOT NULL,
  `book_cover` varchar(200) CHARACTER SET utf8 NOT NULL,
  `post_by_id` int(11) NOT NULL,
  `post_feedback` text CHARACTER SET utf8 NOT NULL,
  `create_at` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `status`, `book_title`, `book_type`, `book_author`, `book_cover_artist`, `book_publisher`, `book_publish_year`, `book_description`, `book_media_type`, `country`, `book_pages`, `book_cover`, `post_by_id`, `post_feedback`, `create_at`) VALUES
(32, 1, 'Deyal / দেয়াল', '27', 'Humayun Admed', 'Masum Rahman', 'Anyaprakash', 'February, 2013', 'History after Bangladesh\'s war of independence, the assassination of Sheikh Mujibur Rahman\'s family, Coup and rule of Ziaur Rahman.', 'Imprint', 'Bangladesh', '198 (1st edition)', 'images/upload_book_images/unnamed.png', 1, 'Deyal is a 2013 political/historical novel by Bangladeshi writer Humayun Ahmed, based on the socio-political crisis in the aftermath of the war of independence of Bangladesh. It was the last novel of the writer and was published one year after his death. The publication of the book was delayed by a High Court verdict.', '12020-12-24 01:36:05pm'),
(33, 1, 'Professor Shonku', '44', 'Satyajit Ray', 'Satyajit Ray', '', '1965', 'Professor Shonku is a short story collection by Satyajit Ray, featuring the eponymous character Professor Shonku. It was first published in India by NewScript Publications, Calcutta, in 1965.', '', 'Bengali', '', 'images/upload_book_images/220px-Punashcha_Professor_Shonku_Front_Cover.jpg', 1, 'Professor Shonku is a fictional scientist created by Satyajit Ray (1921–1992).\r\nThe book is awesome. I enjoyed it very much, it\'s full of adventures, mysteries.', '12020-12-24 05:44:38pm'),
(34, 1, 'Abol Tabol', '36', 'Sukumar Ray', '', '', 'September 19, 1923', 'Abol tabol is a collection of Bengali children\'s poems and rhymes composed by Sukumar Ray, first published on 19 September 1923 by U. Ray and Sons publishers. It consists of 46 titled and seven untitled short rhymes, all considered to be in the genre of nonsense literature', '', 'India', '', 'images/upload_book_images/fe472f4712d31015fa0889fad56957bc.jpg', 1, 'My most favorite book. Just think what imaginary thoughts he had. We can\'t imagine.It is an incredibl creation of the great laureate Sukumar Roy. Even though it appears to be a collection of poems for children but it has got very intense messages for elderly people. It will continue to entertain and educate people for ever and ever.', '12020-12-24 05:51:09pm'),
(35, 1, 'The Girl with All the Gifts', '51', 'Mike Carey', '', 'Orbit Books', 'January 14, 2014', 'The Girl with All the Gifts is a science-fiction novel by M. R. Carey, published in June 2014 by Orbit Books. It is based on his 2013 Edgar Award-nominated short story Iphigenia In Aulis and was written concurrently with the screenplay for the 2016 film\r\n\r\n<strong>Audie Award for Paranormal</strong>', '', '', '460', 'images/upload_book_images/images_(1).jpg', 58, '', '12020-12-24 05:59:18pm'),
(42, 1, 'Harry Potter and the Philosopher\'s Stone', '21', 'J. K. Rowling', '', '', 'June 26, 1997', 'Harry Potter and the Philosopher\'s Stone is a fantasy novel written by British author J. K. Rowling.', '', '', '', 'images/upload_book_images/images.jpg', 58, 'Followed by: Harry Potter and the Chamber of Secrets.\r\nAwards: Nestlé Smarties Book Prize for 9 to 11 years.', '12020-12-27 09:37:22pm'),
(43, 1, 'The Picture of Dorian Gray', '38', 'Oscar Wilde', '', '', '1890', 'The Picture of Dorian Gray is a Gothic and philosophical novel by Oscar Wilde, first published complete in the July 1890 issue of Lippincott\'s Monthly Magazine. Fearing the story was indecent, prior to publication the magazine\'s editor deleted roughly five hundred words without Wilde\'s knowledge.', '', '', '', 'images/upload_book_images/content.jpg', 58, 'Lovely imagery! Delightful message immaculately crafted and well-woven with the plot itself!!.. This is indeed the most brilliant work of fiction for multiple reasons however I must say read it at your own expense for it offers you in mere 200 pages a wide array of both idiotic and wise views of life and has the power to both CORRUPT or CORRECT you not to mention that it will shake you beliefs to an extent where you’d want to pull your hair and scratch your face (at least that is what I fancy) and I read 125 pages of it in single sitting and thenceforth I was unable to make sense of any word I read (even out loud) as Lord Henry’s wicked theories are appalling yet weirdly interesting and amusing. But overall the whole story is Wonderfully Entertaining.', '12020-12-28 12:02:17am'),
(44, 1, 'Animal Farm. 1984', '44', 'George Orwell', 'Michael Kennar', '', '', 'Nineteen Eighty-Four: A Novel, often published as 1984, is a dystopian social science fiction novel by English novelist George Orwell. It was published on 8 June 1949 by Secker & Warburg as Orwell\'s ninth and final book completed in his lifetime.', '', '', '328', 'images/upload_book_images/5e1b056eb6906.jpg', 58, '', '12020-12-28 12:05:39am'),
(45, 1, 'A Clergyman\'s Daughter', '44', 'George Orwell', '', '', '1935', 'A Clergyman\'s Daughter is a 1935 novel by English author George Orwell. It tells the story of Dorothy Hare, the clergyman\'s daughter of the title, whose life is turned upside down when she suffers an attack of amnesia.', '', '', '335', 'images/upload_book_images/319238.jpg', 58, '', '12020-12-28 12:09:48am'),
(46, 1, 'মেমসাহেব', '41', 'নিমাই ভট্টাচার্য', '', 'Anupom Prokashoni', '', '', '', 'Bangladesh', '160', 'images/upload_book_images/bb47ccb6a83a0de664f117c8b0c056b8.jpg', 57, '', '12020-12-28 12:14:48am'),
(47, 1, 'জলদস্যু', '11', 'Sunil Ganguli', 'Kamrujjaman Sagor', 'Nalonda', '2005', 'Dedicate to Moloy Sinha', '', 'Bangladesh', '64', 'images/upload_book_images/jolodossu-by-sunil-gangopadhyaya.jpg', 57, '', '12020-12-28 12:16:22am'),
(48, 1, 'The Tree Lady', '29', 'এইচ. জোসেফ হপকিন্স', '', '', '', 'The True Story of How One Tree‑Loving Woman', '', '', '', 'images/upload_book_images/81gkclyNngL.jpg', 57, '', '12020-12-28 12:41:54am'),
(49, 1, 'The Jungle Book', '9', 'Rudyard Kipling', '', '', '1894', 'The Jungle Book is a collection of stories by the English author Rudyard Kipling. Most of the characters are animals such as Shere Khan the tiger and Baloo the bear, though a principal character is the boy or \"man-cub\" Mowgli, who is raised in the jungle by wolves.', '', '', '', 'images/upload_book_images/prc-250-the-jungle-book-supercolor-puzzle_Oxes5RQ.jpg', 1, '', '12020-12-28 12:44:14am'),
(50, 1, 'Around the World in Eighty Days', '1', 'Jules Verne', '', '', '1872', 'Around the World in Eighty Days is an adventure novel by the French writer Jules Verne, first published in French in 1872. In the story, Phileas Fogg of London and his newly employed French valet Passepartout attempt to circumnavigate the world in 80 days on a £20,000 wager set by his friends at the Reform Club.', '', '', '', 'images/upload_book_images/91A6o3pCiEL.jpg', 1, '', '12020-12-28 12:46:30am'),
(51, 1, 'Drama', '17', 'Raina Telgemeier', '', '', '2012', '', '', '', '', 'images/upload_book_images/71hqWFOiFiL.jpg', 1, '', '12020-12-28 12:50:41am'),
(52, 1, 'The Unfinished Memoirs', '6', 'Sheikh Mujibur Rahman', ' Qayyum Chowdhury (the original Bengali version)', '', 'June 12, 2012', 'The Unfinished Memories is the autobiography by Sheikh Mujibur Rahman, founding father of Bangladesh.', '', 'Bangladesh', '323', 'images/upload_book_images/220px-The_Unfinished_Memoirs.jpg', 1, '', '12020-12-28 01:15:11am'),
(53, 1, 'Thakurmar Jhuli', '9', 'Dakshinaranjan Mitra Majumder', '', '', '', 'Thakurmar Jhuli is a collection of Bengali folk tales and fairy tales. The author Dakshinaranjan Mitra Majumder collected some folktales of Bengali and published some of them under the name of \"Thakurmar Jhuli\" in 1907. The Nobel-Laureate, Rabindranath Tagore wrote the introduction to the anthology.', '', '', '', 'images/upload_book_images/fe472f4712d31015fa0889fad56957bc1.jpg', 1, '', '12020-12-28 01:18:47am'),
(54, 1, 'Pather Panchali', '', 'Bibhutibhushan Bandyopadhyay', '', '', '1929', 'Pather Panchali is a 1929 novel written by Bibhutibhushan Bandyopadhyay and was later adapted into a 1955 film of the same name by Satyajit Ray.', '', '', '', 'images/upload_book_images/81voJKiZVQL.jpg', 1, '', '12020-12-28 01:21:53am'),
(55, 1, 'Gitanjali', '36', 'Rabindranath Tagore', '', '', '1912', 'Gitanjali is a collection of poems by the Bengali poet Rabindranath Tagore. Tagore received the Nobel Prize for Literature, largely for the English translation, Song Offerings. It is part of the UNESCO Collection of Representative Works. Its central theme is devotion, and its motto is \'I am here to sing thee songs\'.', '', '', '104', 'images/upload_book_images/gitanjali-song-offerings-by-rabindranath-tagore.jpg', 1, 'This book is about love and sheer love. Gitanjali is having many poems conceived with actual literary taste. Poems of this book will be a reliable source for extinguishing the fire lovers of Tagore are having in their hearts. I\'m damn sure that after reading first ten poems you\'ll fathom why he was given the prestigious Nobel Prize in Literature in 1913.', '12020-12-28 01:23:06am'),
(56, 1, 'Boatman of the Padma', '17', 'Manik Bandopadhyay', '', '', 'May 28, 1936', '', '', '', '', 'images/upload_book_images/519TRi-C+JL__SY264_BO1,204,203,200_QL40_ML2_.jpg', 1, '', '12020-12-28 01:26:07am'),
(57, 1, 'The Passage', '29', 'Justin Cronin', '', '', '2010', 'The Passage is a novel by Justin Cronin, published in 2010 by Ballantine Books, a division of Random House, Inc., New York. The Passage debuted at #3 on the New York Times hardcover fiction best seller list, and remained on the list for seven additional weeks.', '', '', '879', 'images/upload_book_images/7169581__SY475_.jpg', 1, '', '12020-12-28 01:38:59am');

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE `book_review` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `rating` float NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_review`
--

INSERT INTO `book_review` (`id`, `userid`, `bookid`, `rating`, `comment`, `time`) VALUES
(14, 1, 35, 4.7, 'Awesome Book', '2020-12-26 11:11:12am'),
(15, 57, 42, 5, '', '2020-12-28 12:22:19am'),
(16, 1, 46, 4, 'Good Book', '2020-12-28 12:51:32am'),
(17, 1, 48, 2.5, '', '2020-12-28 12:52:05am'),
(18, 1, 45, 2.3, '', '2020-12-28 12:52:39am'),
(19, 1, 49, 2.5, '', '2020-12-28 12:53:17am');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_sender` varchar(255) NOT NULL,
  `contact_sender_email` varchar(255) NOT NULL,
  `contact_sender_phone` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `post_time` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `contact_sender`, `contact_sender_email`, `contact_sender_phone`, `contact_message`, `post_time`) VALUES
(1, 'Soumitra', 'soumitra.jr@gmail.com', '01745696945', 'This site work done well.', '2020-12-26 17:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone_code` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_conf_password` varchar(255) NOT NULL,
  `user_dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_phone_code`, `user_phone`, `user_city`, `user_password`, `user_conf_password`, `user_dp`) VALUES
(1, 'Soumitra', 'soumitra.jr', 'soumitra.jr@gmail.com', '+88', '01745696945', 'Sylhet, Bangladesh', 'sc105165', 'sc105165', 'images/users/admin6.jpeg'),
(57, 'Mousumi Chakrabarteee', 'Mousumi', 'mousumi107416@gmail.com', '+88 ', '01742107416', 'Sibgonj, Sylhet', 'mou11', 'mou11', 'images/users/download.png'),
(58, 'Nolan Ryan', 'Nolan', 'n.ryan@hotmail.com', '', '', 'Houston Astros', 'nolan123', 'nolan123', 'images/users/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_review`
--
ALTER TABLE `book_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `book_review`
--
ALTER TABLE `book_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
