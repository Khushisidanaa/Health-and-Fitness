SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('Khushi', '1234', 'Admin');

ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

  CREATE TABLE `foodily` (
  `Catid` int(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Calories` varchar(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Catname` varchar(1000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  `DivId` varchar(200) NOT NULL,
  `Counter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `foodily` (`Catid`, `Time`, `Type` , `Calories`, `Pic`, `Catname`, `Detail`, `DivId`, `Counter`)VALUES
(1, '25 mins', 'Begginer Friendly ', '456','food.png', 'Avocado Toast with Poached Eggs', 'It’s a simple healthy protein-packed breakfast, snack or light meal! Simple to make, tasty and satisfying...', 'calc1', 0),
(2, '35 mins', 'Begginer Friendly ', '600', 'RiceBowl.png','Rice Bowl with Broccoli', 'It’s a simple healthy protein-packed meal! Simple to make, tasty and satisfying...', 'calc2', 0),
(3, '55 mins', 'Begginer Friendly ', '316', 'QuinoaSalad.png','Quinoa Salad with Fresh Vegetables', 'It’s a simple healthy protein-packed light meal! Simple to make, tasty and satisfying...', 'calc3', 0),
(4, '45 mins', 'Begginer Friendly ', '286', 'bananapancake.png','Banana Pancakes using oat flour', 'It’s a simple healthy protein-packed breakfast Simple to make, tasty and satisfying...', 'calc4', 0),
(5, '65 mins', 'Begginer Friendly ', '126', 'grilledchicken.png','Grilled chicken with lettuce', 'It’s a simple healthy protein-packed meal! Simple to make, tasty and satisfying...', 'calc5', 0),
(6, '15 mins', 'Begginer Friendly ', '116', 'pumpcurry.png','Pumpkin curry with cherry tomatoes', 'It’s a simple healthy protein-packed meal! Simple to make, tasty and satisfying...', 'calc6',0);



  ALTER TABLE `foodily`
  ADD PRIMARY KEY (`Catid`);
  

ALTER TABLE `foodily`
  MODIFY `Catid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;



 CREATE TABLE `bodily` (
  `Catid` int(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Catname` varchar(1000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  `Counter` int(200) NOT NULL,
  `Value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `bodily` (`Catid`, `Time`, `Type` ,  `Pic`, `Catname`, `Detail`,  `Counter`, `Value`)VALUES
(1, '25 mins', 'Begginer Friendly ','workout1.png', 'Beginner Pilates At Home', 'Smash your fitness goals this year with our 12 go to exercises!',0,   'Pilates'),
(2, '25 mins', 'Begginer Friendly ','jumprope.png', 'Jump rope At Home', 'Smash your fitness goals this year with our 12 go to exercises!', 0, 'Running'),
(3, '25 mins', 'Begginer Friendly ', 'abwork.png', 'Abs workout At Home', 'Smash your fitness goals this year with our 12 go to exercises!',0,  'HIIT'),
(4, '25 mins', 'Begginer Friendly ', 'yoga.png', 'Beginner Yoga At Home', 'Smash your fitness goals this year with our 12 go to exercises!',0,  'Indoors'),
(5, '25 mins', 'Begginer Friendly ', 'fullbodymob.png', 'Beginner Pilates At Home', 'Smash your fitness goals this year with our 12 go to exercises!',0, 'Cardio'),
(6, '25 mins', 'Begginer Friendly ', 'Boxing.png', 'Boxing At Home', 'Smash your fitness goals this year with our 12 go to exercises!', 0, 'LIIT');



  ALTER TABLE `bodily`
  ADD PRIMARY KEY (`Catid`);
  

ALTER TABLE `bodily`
  MODIFY `Catid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;


  CREATE TABLE `workout` (
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Catname` varchar(1000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  `Counter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `workout` (`Catid`, `Pic`, `Catname`, `Detail`,  `Counter`)VALUES
(1,'https://www.youtube.com/embed/zr08J6wB53Y', 'Guided Running ', 'Pace yourself with this guided running training routine',  'Outdoors'),
(2,'https://www.youtube.com/embed/1BZM2Vre5oc', 'Jump Rope ', 'Pace yourself with this guided Jump Rope routine', 'Indoors'),
(3,'https://www.youtube.com/embed/Jg61m0DwURs', 'Leg Workout ', 'Pace yourself with this guided Leg training routine',  'Beginner'),
(4,'https://www.youtube.com/embed/0zhvUV1bAVQ', 'Upper Body ', 'Pace yourself with this guided Upper Body routine',  'Intermediate'),
(5,'https://www.youtube.com/embed/1f8yoFFdkcY', 'Abs Workout ', 'Pace yourself with this guided Abs routine', 'Advanced');



  ALTER TABLE `workout`
  ADD PRIMARY KEY (`Catid`);
  

ALTER TABLE `workout`
  MODIFY `Catid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;


  



CREATE TABLE `features` (
    `Featureid` int(200) NOT NULL,
    `Featureimg` varchar(8000) NOT NULL,
    `Featuretitle` varchar(200) NOT NULL,
    `Featuresubtitle` varchar(200) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `features` (`Featureid`, `Featureimg`, `Featuretitle`, `Featuresubtitle`)VALUES
(1, 'greek salad.png', 'Nourish your body', 'Here are 12 nutrient dense foods your body will thank you for!'),
(2, 'salmon.png', 'Nourish your body', 'Here are 12 nutrient dense foods your body will thank you for!'),
(3, 'Soup.png', 'Nourish your body', 'Here are 12 nutrient dense foods your body will thank you for!'),
(4, 'hbowl.png', 'Nourish your body', 'Here are 12 nutrient dense foods your body will thank you for!');

  ALTER TABLE `features`
  ADD PRIMARY KEY (`Featureid`);
  

ALTER TABLE `features`
  MODIFY `Featureid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;
