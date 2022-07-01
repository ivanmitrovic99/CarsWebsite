-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Jul 01, 2022 at 10:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(13) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `age` int(5) NOT NULL,
  `mileage` int(15) NOT NULL,
  `doors_num` int(2) NOT NULL,
  `seats_num` int(2) NOT NULL,
  `motor` varchar(20) NOT NULL,
  `tank` int(10) NOT NULL,
  `body` varchar(30) NOT NULL,
  `power` int(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `pictures_id` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `manufacturer`, `price`, `age`, `mileage`, `doors_num`, `seats_num`, `motor`, `tank`, `body`, `power`, `color`, `state`, `picture`, `pictures_id`) VALUES
(1, 'A3', 'Audi', 21500, 2019, 21932, 5, 5, 'Dizel', 1598, 'Limuzina', 81, 'Crna', 'Polovan', 'https://serving.photos.photobox.com/0889485169688bbbfed629e682fb9b56f480e76718c0d59a97c8776dff60ad6cccaf47c9.jpg', 10),
(2, 'Focus', 'Ford', 6000, 2015, 19900, 5, 5, 'Benzin', 1400, 'Kupe', 69, 'Bela', 'Polovan', 'https://serving.photos.photobox.com/41629754f4cff5fcb80eed47b5f9348aed7d31550778a56a5f64262ddc428cdb0e6a84a7.jpg', 11),
(3, '520D', 'BMW', 7000, 2015, 199920, 5, 5, 'Euro Dizel', 1590, 'Limuzina', 140, 'Crna', 'Polovan', 'https://serving.photos.photobox.com/03889320fd5e299c4d1a0381f86acc48d496a5a255eb38752aee264eea8cb3fdb6cc860f.jpg', 12),
(4, 'Astra', 'Opel', 10990, 2022, 200102, 5, 5, 'Euro Dizel', 1498, 'Limuzina', 90, 'Bela', 'Polovan', 'https://serving.photos.photobox.com/93260012df722fd92c20918156475c928a264726c9c1a0cfd6c09444bc6ebc682dfe0e1a.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `car_id` int(13) NOT NULL,
  `pic1` varchar(200) DEFAULT NULL,
  `pic2` varchar(200) DEFAULT NULL,
  `pic3` varchar(200) DEFAULT NULL,
  `pic4` varchar(200) DEFAULT NULL,
  `pic5` varchar(200) DEFAULT NULL,
  `pic6` varchar(200) DEFAULT NULL,
  `pic7` varchar(200) DEFAULT NULL,
  `pic8` varchar(200) DEFAULT NULL,
  `pic9` varchar(200) DEFAULT NULL,
  `pic10` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`car_id`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `pic7`, `pic8`, `pic9`, `pic10`) VALUES
(1, 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/26260262a2c58a05f0c8527a44d0f1f630b3fe2522142a10d0f7681df169eb54a2b6b825.jpg', 'https://serving.photos.photobox.com/40926807f9591ab27be370db0a99de82b0f4aab8a1030322050fac9063ffbc37b9a1d385.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/26260262a2c58a05f0c8527a44d0f1f630b3fe2522142a10d0f7681df169eb54a2b6b825.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/26260262a2c58a05f0c8527a44d0f1f630b3fe2522142a10d0f7681df169eb54a2b6b825.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/40926807f9591ab27be370db0a99de82b0f4aab8a1030322050fac9063ffbc37b9a1d385.jpg', 'https://serving.photos.photobox.com/26260262a2c58a05f0c8527a44d0f1f630b3fe2522142a10d0f7681df169eb54a2b6b825.jpg'),
(2, 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/41629754f4cff5fcb80eed47b5f9348aed7d31550778a56a5f64262ddc428cdb0e6a84a7.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/41629754f4cff5fcb80eed47b5f9348aed7d31550778a56a5f64262ddc428cdb0e6a84a7.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/41629754f4cff5fcb80eed47b5f9348aed7d31550778a56a5f64262ddc428cdb0e6a84a7.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg', 'https://serving.photos.photobox.com/147314306f3e38671b8189a6e3018a4abd88a1208cc5f2e354453e4b51f026af94a5c72d.jpg'),
(10, 'https://serving.photos.photobox.com/443773777c59e58584668b6e6f2695fd92fa7b79b1d48cbef6d355f3f8aaefdfb7105aad.jpg', 'https://serving.photos.photobox.com/2681288183c697a06afef96edbe2ece907a292770f691f547c552c84b2538f82e2953e72.jpg', 'https://serving.photos.photobox.com/9573657870d834931c432530c3a6b382d47ba1f0828a776785ed5f228e08ace10afd3aa4.jpg', 'https://serving.photos.photobox.com/51193698ed180f1154696490389b36604c29da7f9953f678a861a739aed074f420d8459c.jpg', 'https://serving.photos.photobox.com/5298774039210fcbeb94879c1cdd731d26206ac4daf1d01314dc1b308b2f477e91cc0d4f.jpg', 'https://serving.photos.photobox.com/090452417e1700e21b5f997b9b50f60ebd242d6a82111170e538b0061130dd8257dde360.jpg', 'https://serving.photos.photobox.com/252163837e69c3b52d03248de79dbe07e88988e8a16b2a40cd37f3aad4f6a4d11b53d91b.jpg', 'https://serving.photos.photobox.com/52818156a0c5e063cbca91aa2bed6ad5c5229af1bed0d335ff6389797b679fea53a0d8bd.jpg', 'https://serving.photos.photobox.com/63610089c3085989eb2e5039a98d5a96d860fc8f1799c65a0004f42fa6a434df16d5e408.jpg', 'https://serving.photos.photobox.com/1756191480bcfb5806b99392ec696b6d2f6f2cbb291db9926c737fd627eafa6b05ad2e05.jpg'),
(11, 'https://serving.photos.photobox.com/95727779adb2c7d1e08d57d6e6ca8337933243d062d77c19f8102fec65341c9150718da3.jpg', 'https://serving.photos.photobox.com/449117498dd7f68600ab613a6082b96a0bb443db51f52ff624078992d8f854400695f519.jpg', 'https://serving.photos.photobox.com/99810641d47eeb6292166ac94d89e92e9e96b7301567e3cea74af824fa0c04efa32482e8.jpg', 'https://serving.photos.photobox.com/33835642c2283f64ec488e1d2a2d836951ebd491a36667d65c48b72fa5d982c1bdb90a4e.jpg', 'https://serving.photos.photobox.com/691826229634ecb6566a7845121ab21cd7694ad7d63e72602a303ea76f638a1af2474ac1.jpg', 'https://serving.photos.photobox.com/199544789bd2865cd04fbc8fba60b1d40e02c114dc8ab460d6090ccdd4f3a84299f4771a.jpg', 'https://serving.photos.photobox.com/2224473847d8b8541a67b9f59841460163c319f12ce764e69812c0e5a92405cee0e8f394.jpg', 'https://serving.photos.photobox.com/00935932aedb476086cf39469a60e73a867c681510bc7e57c8c9bbc7db16593ac3c22dc0.jpg', 'https://serving.photos.photobox.com/41435167789226dfe790eb76956f21a6799eaa1c5e80d8e9304c8cf8dc388bdc52a90f66.jpg', 'https://serving.photos.photobox.com/62070144ef84257d6203cefbe73703f9040619b94be06d6c6175b74d880810aaaa245b6f.jpg'),
(12, 'https://serving.photos.photobox.com/03889320fd5e299c4d1a0381f86acc48d496a5a255eb38752aee264eea8cb3fdb6cc860f.jpg', 'https://serving.photos.photobox.com/11853097d8fbf34997c224ceba30ce3f7a9d32564964b2d456832dafbc358407da812ca8.jpg', 'https://serving.photos.photobox.com/330074829bb9faf602dd08398cac487d1be4a0540ec74df72https://serving.photos.photobox.com/330074829bb9faf602dd08398cac487d1be4a0540ec74df7296e6ea6a6a4d47668eb83bf.jpg96e', 'https://serving.photos.photobox.com/641746491e421e8fed9bf709128cdc26d6c268b99ce7f13382499ac28bce309ecf2460a9.jpg', 'https://serving.photos.photobox.com/31396935926c47c1daa993c602bf9f41bd7376298e795182eabd377e9173cd053d6641d0.jpg', 'https://serving.photos.photobox.com/69680147b9c414a99340a8b6b5ab1d6bb55c92cfcc3ae84c0563b04ece721efbbbd298f4.jpg', 'https://serving.photos.photobox.com/62048750dec101d1176bebcec781e347a5d8d570e44a695d07a40e55bba84be309d94b48.jpg', 'https://serving.photos.photobox.com/18514988264a5974ba15ab6b46e8b83f445740d156c2c2c3d014d3ab0966dafde3e16935.jpg', 'https://serving.photos.photobox.com/35749646357512e47ff73f6c611f5d80e7e6777320678a2ab8e02a4d4ae30ee4321f1c81.jpg', 'https://serving.photos.photobox.com/69680147b9c414a99340a8b6b5ab1d6bb55c92cfcc3ae84c0563b04ece721efbbbd298f4.jpg'),
(13, 'https://serving.photos.photobox.com/93260012df722fd92c20918156475c928a264726c9c1a0cfd6c09444bc6ebc682dfe0e1a.jpg', 'https://serving.photos.photobox.com/29193768687028afc9299882c8f540d8d22b98267078d8a6fb2d5e8293538cf693d5ea26.jpg', 'https://serving.photos.photobox.com/16034137da240f1671efa94b1367feb84e8f422d542b667bbf45817bd0b73f710065432d.jpg', 'https://serving.photos.photobox.com/110233004136895b5160d682ed2a58379d7dde5e299edeab6513828e97e66c272dad4d83.jpg', 'https://serving.photos.photobox.com/38266803c72196ecf7ada80c2218fce805ad48a9184fccd05018a934b437ff6292ffeb31.jpg', 'https://serving.photos.photobox.com/86279281911ecbd57cf3b689a9d9e9ffb10ec2bc54cc8793aab0b24d0e94d981b4fd8b45.jpg', 'https://serving.photos.photobox.com/56207467e035c4161915c293494ddd27ad32aa4e5852c898672444d89dc299a7dd4bb55b.jpg', 'https://serving.photos.photobox.com/436145192c1e8ce71e64027ae95ab726797d657abf86bd7b7eaaf7fc81c10701045fcc5b.jpg', 'https://serving.photos.photobox.com/957736425e031887bb9dc7c114e637570724746edc053d4e47c7644a4b64d25eabc3fe1e.jpg', 'https://serving.photos.photobox.com/65950417af1d231d88441b16391a32b9ad63ce4118bbf94929e4e3adef38e02be9029e5c.jpg'),
(69, 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg', 'https://serving.photos.photobox.com/791316430b4620776c8dfc18a2227f740f3e26ee3d9e3409e1fd36c79ac2da1c7846a164.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_id` (`pictures_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`car_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
