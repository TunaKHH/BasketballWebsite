-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-04-09 15:21:02
-- 伺服器版本: 10.1.25-MariaDB
-- PHP 版本： 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `basketball_game`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL COMMENT '主鍵',
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '標題',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '內容',
  `date` date NOT NULL COMMENT '發佈時間'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `date`) VALUES
(1, '測試標題', '測試內容\r\n高考滿分作文欣賞：《說尺子》\r\n\r\n從100分到98分，挨一頓揍；從55分到61分，得一個吻。\r\n\r\n這看似荒誕不經的故事，卻常常發生在我們身邊。\r\n\r\n許多人看來，前者退步了挨揍是天經地義，後者進步了得吻是理所當然。\r\n\r\n我們常說，要一把尺子量到底。\r\n\r\n在現實生活中，應當說尺子是最公平的，但拿在不同人的手裡，去度量不同的人，就會出現不同的結果。\r\n\r\n我們習慣了媽媽在廚房中的忙碌，一日三餐總是準時吃到可口的飯菜，可當有一天，我們回家面對著乾鍋冷灶的時候，卻首先想到的是無飯可吃，沮喪之餘，面露慍色，甚至開口責備，完全忽略了她累了病了，撐不住了，連燒口開水的力氣也沒有了；而我們的爸爸偶爾下一次廚房，煮一碗麵，卻能讓一家人感到萬分知足。\r\n\r\n慣性，使我們的尺子變得富有彈性，卻無法丈量出愛的深遠。\r\n\r\n每個單位都良莠不齊，有做的有看的，也有搗亂的，總有一些禿子混在和尚之中濫竽充數。\r\n\r\n奇怪的是做的永遠在做，看的一直在看，而做得越多失誤也越多，得到的批評也越多。\r\n\r\n而那些看客，偶爾偷機取巧做做樣子，就會名利雙收。\r\n\r\n甚至那些搗亂的，變得乖巧一些，就會讓領導和一席眾人皆大歡喜，心滿意足。\r\n\r\n惰性，使我們的尺子帶了偏見，就再也無法凝聚眾人的力量。\r\n\r\n大家還記得北方小城那位捨粥的大嫂嗎？\r\n\r\n每到冬天她就半夜起來，熬上滿滿的三鍋熱粥，免費送給寒風中瑟縮的清潔工、窮苦人和乞丐，數年如一日，不曾間斷。\r\n\r\n而當有一天，一位老漢從中吃出了一粒沙子，頓時將一碗熱粥潑在大嫂的身上，而領粥的人，也瞬間劃分為兩大陣營：有人說老漢不該撒野，也有人指責大嫂不該摻沙子。\r\n\r\n薄情，讓我們的尺子扭曲，冷了多少善良的心。\r\n\r\n開縣一輛滿載了19名乘客的中巴，突遇險情，一頭栽進深達五米的水塘。\r\n\r\n當地村民金有樹跳進冰冷刺骨的水中，砸開車窗將19名乘客全部救出，自己卻因長時間冷水的浸泡患上肺病，舉債治療數月，告借無門，不得不離開醫院，病死家中。\r\n\r\n19名倖存者無一人去醫院探視，更無人為他送行。\r\n\r\n金有樹臨死前寫下一封信，第一句話就是：「我救了19人的命，現在誰來救我的命。」\r\n\r\n冷漠，讓我們的尺子訇然寸斷，留下無盡的遺憾。\r\n\r\n每個人心裡都有一把尺子。\r\n\r\n我們用它來衡量別人，更要時常度量自己。\r\n\r\n這個世界，應當有這樣一把尺子，於情充滿溫暖，於理凸顯公平，於法彰顯正義，時時刻刻閃耀著人性的光輝。\r\n\r\n只要堅持從我做起，從一點一滴做起，苛責自我，寬厚待人，星星之火，勢必燎原，人間終會灑滿陽光，灑滿愛。', '2018-04-09');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主鍵', AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
