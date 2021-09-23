-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 10:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '2021-08-08 00:20:25'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `views`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'Zero to One', 0, 'book.jpg', '&lt;p&gt;Peter Thiel encourages young people to put learning before university. it&amp;#39;s easier to copy a model than to make something new&lt;/p&gt;\r\n', '2021-08-12 18:20:59', '2021-08-12 18:20:59'),
(2, 3, 'Who say You can\'t? you do ', 0, 'book.jpg', '&lt;p&gt;In this book Daniel&amp;nbsp; studied the lives of great achievers, sought guidance from spiritual leaders, and discovered the secrets for shaping one&amp;#39;s own destiny.&amp;nbsp; He used his personal experience of changing his life to create this powerful experience of changing his life to create this powerful seven-step guide to discovering your true self.&lt;/p&gt;\r\n', '2021-08-12 18:24:48', '2021-08-12 18:24:48'),
(3, 2, 'The 5 am club', 0, 'book.jpg', '&lt;p&gt;The 5 am club concept over twenty years ago, based on a revolutionary morning routine that has helped his clients maximize their productivity, activate their best health, and bulletproof their life.&lt;/p&gt;\r\n', '2021-08-12 18:27:26', '2021-08-12 18:27:26'),
(4, 2, 'The new one minute manager', 0, 'book.jpg', '&lt;p&gt;Due to the One minute manager book. Today, organizations must respond faster, with fewer resources, to keep up with ever-changing technology and globalization.To help you lead, manage, and succeed in this changing world Ken Blanchard offer you The new one minute manager.&lt;/p&gt;\r\n', '2021-08-12 18:30:58', '2021-08-12 18:30:58'),
(5, 2, 'The Secret', 0, 'book.jpg', '&lt;p&gt;In this book, you&amp;rsquo;ll learn how to use The Secret in every aspect of your life&amp;mdash;money, health, relationships, happiness, and in every interaction you have in the world. You&amp;rsquo;ll begin to understand the hidden, untapped power that&amp;rsquo;s within you, and this revelation can bring joy to every aspect of your life.&lt;/p&gt;\r\n', '2021-08-12 18:32:34', '2021-08-12 18:32:34'),
(6, 3, 'The Power of Now', 0, 'book.jpg', '&lt;p&gt;Eckhart Tolle&amp;#39;s message is simple: living in the now is the truest path to happiness and enlightenment. And while this message may not seem stunningly original or fresh, Tolle&amp;#39;s clear writing, supportive voice and enthusiasm make this an excellent manual for anyone who&amp;#39;s ever wondered what exactly &amp;quot;living in the now&amp;quot; means. Foremost, Tolle is a world-class teacher, able to explain complicated concepts in concrete language.&lt;/p&gt;\r\n', '2021-08-12 18:34:38', '2021-08-12 18:34:38'),
(7, 8, 'Dr.A.P.J.Kalam', 0, 'A._P._J._Abdul_Kalam.jpg', '&lt;p&gt;Avul Pakir Jainulabdeen Abdul Kalam&amp;nbsp;(15 October 1931 &amp;ndash; 27 July 2015), 11th&amp;nbsp;President of India, People&amp;rsquo;s President, Missile Scientist, Bharat Ratna recipient, Inspiration to youth, is no more. Suffering a major cardiac arrest while giving a lecture at IIM Shillong on Monday evening (27.7.15), he passed away. He was 84. A 7 day state mourning has been declared. His last rites shall be performed in Rameswaram, Tamil Nadu, India.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;APJ Abdul Kalam narrowly missed becoming an Air Force fighter pilot. It could have been glory in the skies but the world would have had a very big loss of one destined to do big things.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Kalam was the son of a small and devout Muslim boat owner in Rameswaram, his mother being a housewife. Barely managing to keep the family going, it was a struggle to eke out a living. It was here that the studious Kalam did his bit of delivering newspapers after his school got over. His love for knowledge and passion for Maths and Physics then took him a long way.&lt;/li&gt;\r\n	&lt;li&gt;Even as President of India, for his soft but firm nature, he had to bear the discomfort of taking decisions that seemed controversial but ultimately the man&amp;rsquo;s reputation and luck saved the day.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;Dr.Kalam had a long list of achievements that also received its due recognition and in no time, he was showered with a lot many awards including the Padma Bhushan, Padma Vibhushan and Bharat Ratna. For a person like Dr.Kalam, who was a born achiever, his laurels rested very lightly on him and his energies were ever focused on the children and youth of the country, in all that he said and did after his term of president. He considered them as the future potential of a strong India.&lt;/p&gt;\r\n', '2021-09-12 11:53:24', '2021-09-12 11:53:24'),
(8, 8, 'The significance of MS Dhoni', 0, 'MS.Dhoni.jpg', '&lt;p&gt;MS Dhoni, perhaps the most inscrutable Indian Sportsperson and a revered personality all over the world, finally hang up his boots from international cricket last week. And he did it in his own inimitable way &amp;ndash; without any noise.&lt;/p&gt;\r\n\r\n&lt;p&gt;This element of his personality is what makes him special and unique &amp;ndash; no noise, no fuss. Even when he jolted the entire nation by an impromptu decision to retire from tests, he did that without any noise. His characteristic demeanor of calmness has virtually defined his entire cricketing career. He has received brickbats and applause in equal measure &amp;ndash; scathing criticism for his frequent crawling innings of late and attaining a virtual demigod status for winning almost every significant trophy under his belt &amp;ndash; but what has never changed is his measured cognizance towards them.&lt;/p&gt;\r\n\r\n&lt;p&gt;MSD scaled up to the zenith of his career through his sheer astuteness and brilliant leadership. He arrived on the international stage when veterans like Sachin, Rahul, and Saurav were in the wane, and Indian Cricket was undergoing a transition phase MSD had to handle the reigns and maintain the equilibrium &amp;ndash; in respect to the seniors but leading them as well.&amp;nbsp; Slowly but steadily he starting calling the shots from behind the wickets, and the captaincy mantle was soon rewarded to him because of his sharp reading of the game and his penchant for intuitive cricket.&lt;/p&gt;\r\n\r\n&lt;p&gt;What MS taught us was to believe in one&amp;rsquo;s own abilities, to dream, and soar high based on pure hard work. When he arrived on the crease, people had hope, that some miracle is going to happen, and he did create miracles umpteen number of times. Who can forget that one-handed run out against Bangladesh and sealing the victory for India from the jaws of defeat? In the 2019 semifinal world cup match against New Zealand,&amp;nbsp; wickets were tumbling on the other side but he was still there in the crease and our glimmer of hope.&amp;nbsp; His unfortunate run out dashed all our hopes and his dreary walk back to the pavilion was a pain to watch.&lt;/p&gt;\r\n', '2021-09-12 12:00:36', '2021-09-12 12:00:36'),
(9, 8, 'Viskhwas Nangre Patil', 0, 'Vishwas Nangare Patil.jpeg', '&lt;p&gt;Vishwas Patil, the recipient of the 1992 Sahitya Akadami Award for &amp;#39;Jhadajhadati&amp;#39;, is a prominent novelist and playwright in Marathi. Mr. Patil&amp;rsquo;s other social novels like &amp;lsquo;Lust for Lalbug&amp;rsquo; and his recent famous novel &amp;lsquo;Nagkeshar&amp;rsquo; have mesmerized readers in various languages. His historical novels like &amp;lsquo;Sambhaji&amp;rsquo; and &amp;lsquo;Panipat&amp;rsquo; have a huge mass appeal. &amp;#39;Panipat&amp;#39; is being published by Westland Eka in English by November 2019. Famous novel &amp;lsquo;Mahanayak&amp;rsquo; is a political and personal drama that records the the life of Subhash Chandra Bose and his great deeds in Burma campaign in World War II. &amp;#39;Mahanayak&amp;#39; has been translated in fourteen Indian and foreign languages. Recently &amp;lsquo;Mahanayak&amp;rsquo; got published by Westland Eka and is hitting stands everywhere.&lt;/p&gt;\r\n', '2021-09-12 12:05:23', '2021-09-12 12:05:23'),
(10, 9, 'Food Blogger Meaning', 0, 'food-bloggers.jpg', '&lt;p&gt;A food blogger is a food enthusiast who posts and shares his/ her knowledge of food in various aspects. This may range from recipes and the techniques to creative garnishing and reviews. A food blogger does not necessarily have to be an expert in the area. But a little passion for food might be enough in motivating someone to blog about food. After all, food is the basic necessity and first love for almost everybody. Many successful food bloggers use various means of expressing their ideas about food. Usually, they do it by sharing pictures of delicious dishes and trying unique combinations. But the idea is still plain and simple &amp;ndash; blogging about food.&lt;/p&gt;\r\n\r\n&lt;p&gt;There are different types of food blogging:&lt;/p&gt;\r\n\r\n&lt;ol&gt;\r\n	&lt;li&gt;&lt;strong&gt;Recipes&lt;/strong&gt;: In this type of blogging, one cooks and posts the recipes by the means of storytelling. These blogs feature authentic recipes or experimental food.&lt;/li&gt;\r\n	&lt;li&gt;&lt;strong&gt;Food/ Restaurant Review&lt;/strong&gt;: These bloggers are like critics who we can rely on to know about the quality, and prices of a restaurant. These blogs mostly focus on the details and the stories of food and the place. These act as a guide for foodies.&amp;nbsp;&lt;/li&gt;\r\n	&lt;li&gt;&lt;strong&gt;Food and Travel:&lt;/strong&gt; Food and travel is a particularly compelling type of food blogging. This is because it involves the engagement of different cultures. These bloggers travel around the globe in their quest for unique flavours. Simultaneously, they document their experience along with a lot of research, shooting, editing, etc.&lt;/li&gt;\r\n	&lt;li&gt;&lt;strong&gt;Food Photography&lt;/strong&gt;: Food photography aims towards showcasing food. Food bloggers post visually appealing photographs of luscious dishes to draw the interest of the audience.&amp;nbsp;&lt;/li&gt;\r\n&lt;/ol&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', '2021-09-12 13:48:17', '2021-09-12 13:48:17'),
(11, 9, 'About Lionel Messi', 0, 'leo_messi.jpg', '&lt;p&gt;Lionel Messi is the reason why I&amp;rsquo;m a football fan*. Why I bother to go out of my way to intently watch grown men kick a ball around for an hour and a half. Why I bother staying in fandom (so I can share and fawn over it with other people). To me, he is and will &lt;em&gt;always&lt;/em&gt; be the greatest. I thought so last year, three years ago, six years ago; and I will think so twenty years from now too. That my first ever football kit is Messi&amp;rsquo;s 07-08 one with the #19 on the back is a massive source of pride.&lt;/p&gt;\r\n\r\n&lt;p&gt;You could swear, you could scream, you could frantically text a friend/relative/significant other, you could just simply hold your head in your hands&amp;hellip; but somehow it still just isn&amp;rsquo;t &lt;em&gt;enough.&lt;/em&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;I truly wish I did, but it will remain just that &amp;ndash; a wish. As much as it depresses me I just can&amp;rsquo;t. I don&amp;rsquo;t hold any hope that I could do any kind of justice to the great man, so I won&amp;rsquo;t bother. I have a sneaky suspicion that even if I could, there are simply no words currently available in any language that could hope to accurately encompass the pure joy, wonder, excitement, &lt;em&gt;feelings&lt;/em&gt; of watching Leo Messi play football. Simply the best at what he does.&lt;/p&gt;\r\n', '2021-09-12 13:59:33', '2021-09-12 13:59:33'),
(12, 9, 'Bajirao the great', 0, 'bajirao.jpg', '&lt;p&gt;The Marathas were the Mongols of South Asia, always on horseback, and with no infantry and no giant camp behind. Even the scavengers who followed them around, the bargis, rode. When the monsoons ended, the Maratha army, about 40,000 men, rode across the Narmada and Tapi, the border that marked off the Deccan, and attacked &amp;lsquo;Hindustan&amp;rsquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Shivaji always organised this on a particular day: Dussehra (Bal Thackeray continued this tradition of declaring war on other Indians with his fiery Dussehra speeches). After the death of the peasant king, power passed to the Brahmin peshwas of whom the best was Bajirao. As the Mughal fighting ability and finances (the two being interchangeable) declined after Aurangzeb, the Marathas began penetrating increasingly into hitherto unknown territory in the north. It was the young Bajirao, then only in his teens, who determined, rightly, in one of these raids that the Mughals had gone soft and could no longer defend the realm.&lt;/p&gt;\r\n\r\n&lt;p&gt;From this point on, the Marathas began holding ground instead of just taking their horses back. It is why we see Marathi names like Holkar and Scindia and Gaekwad in parts of India they do not naturally belong. Everyone grabbed what they could and held onto it, there was no Hindu or Bharat angle to any of it.&lt;/p&gt;\r\n\r\n&lt;p&gt;Bajirao had one good battlefield victory, against Chin Qilich Khan, first Nizam of Hyderabad. It was a positional win, meaning the arrangement of Bajirao&amp;rsquo;s force gave no space for Khan and he gave up without much fighting. Like chess. A similar situation came in Panipat, when Abdali positioned the Marathas out. Bravely, the Marathas chose to fight and were slaughtered. Scindia (Jyotiraditya&amp;rsquo;s ancestor) and Holkar, it may interest the reader, fled the field, and the man who helped Abdali with supplies ensuring his win was Ala Singh. Abdali rewarded him by making him Maharaja of Patiala, Captain Amarinder Singh&amp;rsquo;s ancestor.&lt;/p&gt;\r\n', '2021-09-12 14:02:24', '2021-09-12 14:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobileno` bigint(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `firstname`, `lastname`, `mobileno`, `address`, `description`) VALUES
(4, 2, 'Akshay', 'Dalvi', 9975711148, 'H.no/Name: \'474/Jay Shree Ram\', Near Delhi gate, Ahmednagar', 'Drupal Intern in QED42.'),
(5, 8, 'Akshay', 'Dhake', 9850219176, 'B-201 Laukik Society, Magarpatta, pune.', 'Frontend Developer.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(2, 'AkshayDalvi123', 'akshayajitdalvi1502@gmail.com', 'Admin', 'f15ef0b1949e253e9e2358418cd274da', '2021-08-11 06:25:02', '2021-08-11 07:20:58'),
(3, 'amitdalvi', 'amitdalvi@tmail.com', 'Author', 'f15ef0b1949e253e9e2358418cd274da', '2021-08-11 07:00:05', '2021-08-11 07:22:58'),
(4, 'pravinG', 'pravinG@tmail.com', 'Author', 'c1533b9eb43a46071199feec131c5fde', '2021-08-11 07:14:58', '2021-08-11 07:14:58'),
(7, 'vipulsali', 'vipulsali@tmail.com', 'Admin', 'e405c1df83bd248a07fc9a912279aed6', '2021-08-12 05:52:41', '2021-08-12 05:52:41'),
(8, 'akshayd123', 'akshaydalvi212@gmail.com', 'Author', '2de1b2d6a6738df78c5f9733853bd170', '2021-09-08 06:16:22', '2021-09-08 06:16:22'),
(9, 'RaviMahajan', 'mahajan.ravi12345@gmail.com', 'Author', 'e12dfb6e161412d75ca371afbcd95374', '2021-09-12 13:30:21', '2021-09-12 13:30:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
