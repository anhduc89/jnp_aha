-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2019 at 06:55 AM
-- Server version: 5.6.37
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Economy', 'category-banner-1.jpg', 'Economy', '', ''),
(2, 'Insurance', 'category-banner-2.jpg', 'Insurance', '', ''),
(3, 'Residential', 'category-banner-3.jpg', 'Residential', '', ''),
(4, 'Commercial', 'category-banner-4.jpg', 'Commercial', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `url`, `photo`) VALUES
(1, 'FPT', '#', 'client-1.png'),
(2, 'Viettel', '#', 'client-2.jpg'),
(3, 'Thế giới di động', '#', 'client-3.png'),
(4, 'Điện máy xanh', '#', 'client-4.jpg'),
(5, 'Điện máy chợ lớn', '#', 'client-5.jpg'),
(6, 'News Zing', '', 'client-6.png'),
(7, 'Kenh 14', '', 'client-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id="fb-root"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, ''script'', ''facebook-jssdk''));</script>', '<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_content_short` text NOT NULL,
  `event_start_date` varchar(10) NOT NULL,
  `event_end_date` varchar(10) NOT NULL,
  `event_location` text NOT NULL,
  `event_map` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_content`, `event_content_short`, `event_start_date`, `event_end_date`, `event_location`, `event_map`, `photo`, `banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Lorem ipsum dolor sit amet vel cu habemus', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.<br></p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2019-02-22', '2029-07-12', 'Street #233, New York, USA', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'event-1.jpg', 'event-banner-1.jpg', 'Lorem ipsum dolor sit amet vel cu habemus', '', ''),
(2, 'Ei qui possim abhor reant ei eam iudico disput', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.</p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2029-02-06', '2029-07-12', 'Street #233, New York, USA', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'event-2.jpg', 'event-banner-2.jpg', 'Ei qui possim abhor reant ei eam iudico disput', '', ''),
(3, 'Est ei unum illum mucius, nemore alterum', '<p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.</p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.</p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2019-02-01', '2019-02-07', 'Street #233, New York, USA', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.3833161665298!2d-118.03745848530627!3d33.85401093559897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2c6c97f8f3ed%3A0x47b1bde165dcc056!2sOak+Dr%2C+La+Palma%2C+CA+90623%2C+USA!5e0!3m2!1sen!2sbd!4v1544238752504" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 'event-3.jpg', 'event-banner-3.jpg', 'Est ei unum illum mucius, nemore alterum', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` text NOT NULL,
  `show_on_home` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `show_on_home`) VALUES
(1, 'When should I make the booking?', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p>', 'Yes'),
(2, 'How can I pay?', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p>', 'Yes'),
(3, 'Can I bring extra luggage?', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p>', 'Yes'),
(4, 'How many pieces of luggage I''m permitted? ', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p>', 'Yes'),
(5, 'What types of documents are required to travel?', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p>', 'No'),
(6, 'On International flights do I need to pay departure tax?', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p>', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE IF NOT EXISTS `tbl_feature` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`id`, `name`, `content`, `icon`) VALUES
(1, 'ECONOMIC POLICY', 'Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an in dolore.', 'fa fa-globe'),
(2, 'BUSINESS MODEL', 'Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno.', 'fa fa-file-text'),
(3, 'SECURITY PROTECTION', 'Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no.', 'fa fa-clock-o'),
(4, 'NICE COMMUNICATION', 'Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit.', 'fa fa-shield'),
(5, 'DIGITAL STRATEGY', 'Vis constituto complectitur an, modo falli eirmod ea has. Ex vis indoctum scriptorem appellantur.', 'fa fa-commenting'),
(6, 'INTERNAL CONSULTING', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam.', 'fa fa-bullhorn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `value`) VALUES
(1, 'HOME', 'Trang chủ'),
(2, 'ABOUT', 'Giới thiệu'),
(3, 'TEAM', 'Giảng viên'),
(4, 'PAGE', 'Thông tin'),
(5, 'EVENT', 'Event'),
(6, 'PHOTO_GALLERY', 'Photo Gallery'),
(7, 'TESTIMONIAL', 'Testimonial'),
(8, 'FAQ', 'FAQ'),
(9, 'PRICING_TABLE', 'Bảng giá'),
(10, 'SERVICE', 'Dịch vụ'),
(11, 'PORTFOLIO', 'Dự án'),
(12, 'NEWS', 'Tin tức'),
(13, 'CONTACT', 'Liên hệ'),
(14, 'SEARCH_FOR', 'Search for...'),
(15, 'READ_MORE', 'Read More'),
(16, 'SUBMIT', 'Submit'),
(17, 'FIRST_NAME', 'Họ'),
(18, 'LAST_NAME', 'Tên'),
(19, 'PHONE_NUMBER', 'Số điện thoại'),
(20, 'EMAIL_ADDRESS', 'Địa chỉ Email'),
(21, 'ADDRESS', 'Địa chỉ'),
(22, 'MESSAGE', 'Nội dung'),
(23, 'START_DATE', 'Start Date'),
(24, 'END_DATE', 'End Date'),
(25, 'EVENT_START_DATE', 'Event Start Date'),
(26, 'EVENT_END_DATE', 'Event End Date'),
(27, 'EVENT_LOCATION_MAP', 'Event Location Map'),
(28, 'SHARE_THIS_EVENT', 'Share This Event'),
(29, 'SHARE_THIS_NEWS', 'Share This News'),
(30, 'COMMENT', 'Bình luận'),
(31, 'NAME', 'Name'),
(32, 'ALL', 'Tất cả'),
(33, 'PROJECT_OVERVIEW', 'Project Overview'),
(34, 'CATEGORY', 'Chuyên mục'),
(35, 'CLIENT_NAME', 'Client Name'),
(36, 'CLIENT_COMPANY_NAME', 'Client Company Name'),
(37, 'PROJECT_START_DATE', 'Project Start Date'),
(38, 'PROJECT_END_DATE', 'Project End Date'),
(39, 'CLIENT_COMMENT', 'Client Comment'),
(40, 'NEWS_DATE', 'News Date'),
(41, 'RECENT_PORTFOLIO', 'Recent Portfolio'),
(42, 'RECENT_PORTFOLIO_SUBTITLE', 'See all our works that we do for our clients'),
(43, 'CONTACT_FORM', 'Form liên hệ'),
(44, 'SEND_MESSAGE', 'Send Message'),
(45, 'SUBJECT', 'Subject'),
(46, 'NO_RESULT_FOUND', 'No Result is Found');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE IF NOT EXISTS `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_content_short` text NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `comment` varchar(3) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_content`, `news_content_short`, `news_date`, `photo`, `banner`, `category_id`, `comment`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Vis nostro nominati electram ex aeterno voluptatum', '<p>Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut. Id illum tantas gloriatur duo. Vis ne prima cetero, erant iusto democritum at vim. Ne integre vivendum delicata eum, ei erat senserit qui.</p><p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.<br></p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.<br></p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2018-12-03', 'news-1.jpg', 'news-banner-1.jpg', 2, 'On', 'Vis nostro nominati electram ex aeterno voluptatum', '', ''),
(2, 'An usu natum aperiri accommodare hendrerit', '<p>Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut. Id illum tantas gloriatur duo. Vis ne prima cetero, erant iusto democritum at vim. Ne integre vivendum delicata eum, ei erat senserit qui.</p><p>Eu semper imperdiet duo, eos ut exerci sanctus impedit, sit ne legere maiorum gubergren. Putent accusamus te qui, vero forensibus ei ius. His nostrud singulis forensibus te, in possim gubergren his. Habemus officiis qui te, vix te meliore rationibus. No augue zril reformidans est. Pro ex unum vidit, no est noster discere neglegentur, et dictas tamquam his.<br></p><p>Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.<br></p><p>Dicit alterum est no, ea per tale possit, cum ad solum malorum offendit. Ea nam meis novum qualisque, pro alia delicata gubergren ad. Ea error eloquentiam vel, quo iusto iudico in. No mazim alterum dignissim nec. Te postea iisque aperiri eum. Eius inciderint at mel.<br></p>', 'Ex usu vero quaerendum, mei no falli denique. Purto consul voluptua eos cu, ludus option sensibus ne quo, nec tantas quodsi id. Posse nostro liberavisse eum ut id illum tantas.', '2018-12-03', 'news-2.jpg', 'news-banner-2.jpg', 1, 'On', 'An usu natum aperiri accommodare hendrerit', '', ''),
(3, 'Asus New Zenbook - laptop có touchpad thú vị', 'Sau một năm trình làng ScreenPad, tính năng này đã gần gũi với người \r\ndùng hơn trên model New Zenbook. Bàn di chuột cảm ứng giờ đây đã làm \r\nđược nhiều tác vụ và mượt mà hơn.', 'Sau một năm trình làng ScreenPad, tính năng này đã gần gũi với người dùng hơn trên model New Zenbook. Bàn di chuột cảm ứng giờ đây đã làm được nhiều tác vụ và mượt mà hơn.', '2018-12-03', 'news-3.jpg', 'news-banner-3.jpg', 3, 'On', 'Est ei unum illum mucius, nemore alterum', '', ''),
(4, 'Laptop 2 màn hình 4K, chip Core i9 đầu tiên trên thế giới', 'Zenbook Pro Duo trang bị cấu hình khủng với chip Core i9, Wi-Fi 6, GPU \r\nRTX 2060 vừa được ra mắt tại Computex 2019. Đây là laptop có 2 màn hình \r\n4K đầu tiên trên thế giới.', 'Zenbook Pro Duo trang bị cấu hình khủng với chip Core i9, Wi-Fi 6, GPU RTX 2060 vừa được ra mắt tại Computex 2019. Đây là laptop có 2 màn hình 4K đầu tiên trên thế giới.', '2018-12-03', 'news-4.jpg', 'news-banner-4.jpg', 4, 'On', 'Ei qui possim abhorreant ei eam iudico disputando', '', ''),
(5, 'Windows đã có bộ gõ tiếng Việt tích hợp', 'Bản cập nhật mới nhất của Windows 10 đã được cập nhật bộ gõ tiếng Việt chuẩn, giúp người dùng không cần cài thêm ứng dụng ngoài.', 'Bản cập nhật mới nhất của Windows 10 đã được cập nhật bộ gõ tiếng Việt chuẩn, giúp người dùng không cần cài thêm ứng dụng ngoài.', '2019-02-19', 'news-5.jpg', 'news-banner-5.jpg', 2, 'On', 'Lorem ipsum dolor sit amet vel cu habemus', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_about`
--

CREATE TABLE IF NOT EXISTS `tbl_page_about` (
  `id` int(11) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `mt_about` varchar(255) NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_about`
--

INSERT INTO `tbl_page_about` (`id`, `about_heading`, `about_content`, `mt_about`, `mk_about`, `md_about`) VALUES
(1, 'Giới thiệu', '<h3>Our Mission</h3><p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.<br></p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.<br></p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p><br></p><h3 style="color: rgb(0, 0, 0);">Our Vision</h3><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.<br></p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.<br></p><p><br></p>', 'About Us - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_page_contact` (
  `id` int(11) NOT NULL,
  `contact_heading` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_map` text NOT NULL,
  `mt_contact` varchar(255) NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_contact`
--

INSERT INTO `tbl_page_contact` (`id`, `contact_heading`, `contact_address`, `contact_email`, `contact_phone`, `contact_map`, `mt_contact`, `mk_contact`, `md_contact`) VALUES
(1, 'Liên hệ', '3153 Foley Street\r\nMiami, FL 33176', 'sales@yourwebsite.com\r\nsupport@yourwebsite.com', 'Office 1: 954-648-1802\r\nOffice 2: 963-612-1782', '', 'Contact - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_event`
--

CREATE TABLE IF NOT EXISTS `tbl_page_event` (
  `id` int(11) NOT NULL,
  `event_heading` varchar(255) NOT NULL,
  `mt_event` varchar(255) NOT NULL,
  `mk_event` text NOT NULL,
  `md_event` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_event`
--

INSERT INTO `tbl_page_event` (`id`, `event_heading`, `mt_event`, `mk_event`, `md_event`) VALUES
(1, 'EVENTS', 'Events - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_page_faq` (
  `id` int(11) NOT NULL,
  `faq_heading` varchar(255) NOT NULL,
  `mt_faq` varchar(255) NOT NULL,
  `mk_faq` text NOT NULL,
  `md_faq` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_faq`
--

INSERT INTO `tbl_page_faq` (`id`, `faq_heading`, `mt_faq`, `mk_faq`, `md_faq`) VALUES
(1, 'FAQ', 'FAQ - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_home`
--

CREATE TABLE IF NOT EXISTS `tbl_page_home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `home_welcome_title` varchar(255) NOT NULL,
  `home_welcome_subtitle` varchar(255) NOT NULL,
  `home_welcome_text` text NOT NULL,
  `home_welcome_video` text NOT NULL,
  `home_welcome_pbar1_text` varchar(255) NOT NULL,
  `home_welcome_pbar1_value` varchar(10) NOT NULL,
  `home_welcome_pbar2_text` varchar(255) NOT NULL,
  `home_welcome_pbar2_value` varchar(10) NOT NULL,
  `home_welcome_pbar3_text` varchar(255) NOT NULL,
  `home_welcome_pbar3_value` varchar(10) NOT NULL,
  `home_welcome_pbar4_text` varchar(255) NOT NULL,
  `home_welcome_pbar4_value` varchar(10) NOT NULL,
  `home_welcome_pbar5_text` varchar(255) NOT NULL,
  `home_welcome_pbar5_value` varchar(10) NOT NULL,
  `home_welcome_status` varchar(5) NOT NULL,
  `home_welcome_video_bg` varchar(255) NOT NULL,
  `home_why_choose_title` varchar(255) NOT NULL,
  `home_why_choose_subtitle` varchar(255) NOT NULL,
  `home_why_choose_status` varchar(5) NOT NULL,
  `home_feature_title` varchar(255) NOT NULL,
  `home_feature_subtitle` varchar(255) NOT NULL,
  `home_feature_status` varchar(5) NOT NULL,
  `home_service_title` varchar(255) NOT NULL,
  `home_service_subtitle` varchar(255) NOT NULL,
  `home_service_status` varchar(5) NOT NULL,
  `counter_1_title` varchar(255) NOT NULL,
  `counter_1_value` varchar(10) NOT NULL,
  `counter_1_icon` varchar(50) NOT NULL,
  `counter_2_title` varchar(255) NOT NULL,
  `counter_2_value` varchar(10) NOT NULL,
  `counter_2_icon` varchar(50) NOT NULL,
  `counter_3_title` varchar(255) NOT NULL,
  `counter_3_value` varchar(10) NOT NULL,
  `counter_3_icon` varchar(50) NOT NULL,
  `counter_4_title` varchar(255) NOT NULL,
  `counter_4_value` varchar(10) NOT NULL,
  `counter_4_icon` varchar(50) NOT NULL,
  `counter_photo` varchar(255) NOT NULL,
  `counter_status` varchar(10) NOT NULL,
  `home_portfolio_title` varchar(255) NOT NULL,
  `home_portfolio_subtitle` varchar(255) NOT NULL,
  `home_portfolio_status` varchar(5) NOT NULL,
  `home_booking_form_title` varchar(255) NOT NULL,
  `home_booking_faq_title` varchar(255) NOT NULL,
  `home_booking_status` varchar(5) NOT NULL,
  `home_booking_photo` varchar(255) NOT NULL,
  `home_team_title` varchar(255) NOT NULL,
  `home_team_subtitle` varchar(255) NOT NULL,
  `home_team_status` varchar(5) NOT NULL,
  `home_ptable_title` varchar(255) NOT NULL,
  `home_ptable_subtitle` varchar(255) NOT NULL,
  `home_ptable_status` varchar(5) NOT NULL,
  `home_testimonial_title` varchar(255) NOT NULL,
  `home_testimonial_subtitle` varchar(255) NOT NULL,
  `home_testimonial_photo` varchar(255) NOT NULL,
  `home_testimonial_status` varchar(5) NOT NULL,
  `home_blog_title` varchar(255) NOT NULL,
  `home_blog_subtitle` varchar(255) NOT NULL,
  `home_blog_item` varchar(5) NOT NULL,
  `home_blog_status` varchar(5) NOT NULL,
  `home_cta_text` text NOT NULL,
  `home_cta_button_text` varchar(255) NOT NULL,
  `home_cta_button_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_home`
--

INSERT INTO `tbl_page_home` (`id`, `title`, `meta_keyword`, `meta_description`, `home_welcome_title`, `home_welcome_subtitle`, `home_welcome_text`, `home_welcome_video`, `home_welcome_pbar1_text`, `home_welcome_pbar1_value`, `home_welcome_pbar2_text`, `home_welcome_pbar2_value`, `home_welcome_pbar3_text`, `home_welcome_pbar3_value`, `home_welcome_pbar4_text`, `home_welcome_pbar4_value`, `home_welcome_pbar5_text`, `home_welcome_pbar5_value`, `home_welcome_status`, `home_welcome_video_bg`, `home_why_choose_title`, `home_why_choose_subtitle`, `home_why_choose_status`, `home_feature_title`, `home_feature_subtitle`, `home_feature_status`, `home_service_title`, `home_service_subtitle`, `home_service_status`, `counter_1_title`, `counter_1_value`, `counter_1_icon`, `counter_2_title`, `counter_2_value`, `counter_2_icon`, `counter_3_title`, `counter_3_value`, `counter_3_icon`, `counter_4_title`, `counter_4_value`, `counter_4_icon`, `counter_photo`, `counter_status`, `home_portfolio_title`, `home_portfolio_subtitle`, `home_portfolio_status`, `home_booking_form_title`, `home_booking_faq_title`, `home_booking_status`, `home_booking_photo`, `home_team_title`, `home_team_subtitle`, `home_team_status`, `home_ptable_title`, `home_ptable_subtitle`, `home_ptable_status`, `home_testimonial_title`, `home_testimonial_subtitle`, `home_testimonial_photo`, `home_testimonial_status`, `home_blog_title`, `home_blog_subtitle`, `home_blog_item`, `home_blog_status`, `home_cta_text`, `home_cta_button_text`, `home_cta_button_url`) VALUES
(1, 'Blog Tech', 'Download best Themes & Templates, Scripts, Graphics & Vectors for Free. Daily updated premium content ! Download Free Nulled WordPress Theme,WordPress Plugin Nulled, Premium WordPress Theme Nulled, Free Premium ThemeForest Nulled. Collection of the best CMS, Nulled Scripts, Scripts PHP, Open Source, Theme website HTML, theme Wordpress, template Joomla, theme Opencart, Vdeo slideshow, best intro templates, Video intro HD , Video Motion HD !, free templates, powerpoint templates, website templates, printable, calendar printable', 'Download best Themes & Templates, Scripts, Graphics & Vectors for Free. Daily updated premium content ! Download Free Nulled WordPress Theme,WordPress Plugin Nulled, Premium WordPress Theme Nulled, Free Premium ThemeForest Nulled. Collection of the best CMS, Nulled Scripts, Scripts PHP, Open Source, Theme website HTML, theme Wordpress, template Joomla, theme Opencart, Vdeo slideshow, best intro templates, Video intro HD , Video Motion HD !, free templates, powerpoint templates, website templates, printable, calendar printable', 'Học lập trình theo đuổi đam mê', '', 'Chất lượng - Hiệu quả - Chuyên nghiệp. Nội dung học luôn luôn mới nhất và được cập nhật liên tục ngay cả quá \r\ntrình học, luôn đi đầu công nghệ ứng dụng và đào tạo: Bạn muốn\r\n học công nghệ mới, hãy tìm nó tại Khoa Phạm.', '<iframe src="https://player.vimeo.com/video/43982091" style="position:absolute;width:100%;height:100%;left:0" width="480" height="360" allowfullscreen></iframe>', 'Business Management', '95', 'Financial Management', '70', 'Project Management', '88', '', '', '', '', 'Show', 'home_welcome_video_bg.PNG', 'Tại sao chọn chúng tôi', 'Bạn chọn chúng tôi vì', 'Show', 'SPECIAL FEATURES', 'We offer some awesome features that will help you', 'Hide', 'Các khóa học đang có ', 'Tại KhoaPham', 'Show', 'Học viên', '500', 'fa fa-user', 'Hài lòng', '300', 'fa fa-bar-chart', 'Khách hàng', '750', 'fa fa-users', 'Giải thưởng', '120', 'fa fa-trophy', 'counter.jpg', 'Show', 'WORK PORTFOLIO', 'See what we do for our valuable clients', 'Hide', 'Tư vấn trực tuyến', 'Câu hỏi thường gặp', 'Show', 'home_booking_photo.jpg', 'Giảng viên', '100% giảng viên đều đáp ứng 02 tiêu chí sau: Kinh nghiệm thực tế tối thiểu 03 năm và đam mê giảng dạy', 'Show', 'Khuyến mãi', 'Các khóa học đang khuyễn mãi cực hót !', 'Show', 'KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI?', 'Với sự tin dùng của hơn 5,000 học viên trên khắp cả nước, BKHOST không ngừng hoàn thiện và nâng cao chất lượng dịch vụ nhằm đáp ứng nhu cầu ngày càng cao của khách hàng trong các hoạt động trên Internet. ', 'home_testimonial_photo.jpg', 'Show', 'Tin mới cập nhật', 'Tin tức về hoạt động của chúng tôi', '10', 'Show', 'Do you want to get our quality service for your business?', 'Contact Us', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_news`
--

CREATE TABLE IF NOT EXISTS `tbl_page_news` (
  `id` int(11) NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `mt_news` varchar(255) NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_news`
--

INSERT INTO `tbl_page_news` (`id`, `news_heading`, `mt_news`, `mk_news`, `md_news`) VALUES
(1, 'Tin  tức', 'News - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_photo_gallery`
--

CREATE TABLE IF NOT EXISTS `tbl_page_photo_gallery` (
  `id` int(11) NOT NULL,
  `photo_gallery_heading` varchar(255) NOT NULL,
  `mt_photo_gallery` varchar(255) NOT NULL,
  `mk_photo_gallery` text NOT NULL,
  `md_photo_gallery` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_photo_gallery`
--

INSERT INTO `tbl_page_photo_gallery` (`id`, `photo_gallery_heading`, `mt_photo_gallery`, `mk_photo_gallery`, `md_photo_gallery`) VALUES
(1, 'PHOTO GALLERY', 'Photo Gallery - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_page_portfolio` (
  `id` int(11) NOT NULL,
  `portfolio_heading` varchar(255) NOT NULL,
  `mt_portfolio` varchar(255) NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_portfolio`
--

INSERT INTO `tbl_page_portfolio` (`id`, `portfolio_heading`, `mt_portfolio`, `mk_portfolio`, `md_portfolio`) VALUES
(1, 'PORTFOLIO', 'Portfolio - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_pricing`
--

CREATE TABLE IF NOT EXISTS `tbl_page_pricing` (
  `id` int(11) NOT NULL,
  `pricing_heading` varchar(255) NOT NULL,
  `mt_pricing` varchar(255) NOT NULL,
  `mk_pricing` text NOT NULL,
  `md_pricing` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_pricing`
--

INSERT INTO `tbl_page_pricing` (`id`, `pricing_heading`, `mt_pricing`, `mk_pricing`, `md_pricing`) VALUES
(1, 'PRICING', 'Pricing - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_privacy`
--

CREATE TABLE IF NOT EXISTS `tbl_page_privacy` (
  `id` int(11) NOT NULL,
  `privacy_heading` varchar(255) NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` varchar(255) NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_privacy`
--

INSERT INTO `tbl_page_privacy` (`id`, `privacy_heading`, `privacy_content`, `mt_privacy`, `mk_privacy`, `md_privacy`) VALUES
(1, 'PRIVACY POLICY', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Privacy Policy - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_search`
--

CREATE TABLE IF NOT EXISTS `tbl_page_search` (
  `id` int(11) NOT NULL,
  `search_heading` varchar(255) NOT NULL,
  `mt_search` varchar(255) NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_search`
--

INSERT INTO `tbl_page_search` (`id`, `search_heading`, `mt_search`, `mk_search`, `md_search`) VALUES
(1, 'SEARCH BY:', 'Search - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_service`
--

CREATE TABLE IF NOT EXISTS `tbl_page_service` (
  `id` int(11) NOT NULL,
  `service_heading` varchar(255) NOT NULL,
  `mt_service` varchar(255) NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_service`
--

INSERT INTO `tbl_page_service` (`id`, `service_heading`, `mt_service`, `mk_service`, `md_service`) VALUES
(1, 'Dịch vụ', 'Our Services - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_team`
--

CREATE TABLE IF NOT EXISTS `tbl_page_team` (
  `id` int(11) NOT NULL,
  `team_heading` varchar(255) NOT NULL,
  `mt_team` varchar(255) NOT NULL,
  `mk_team` text NOT NULL,
  `md_team` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_team`
--

INSERT INTO `tbl_page_team` (`id`, `team_heading`, `mt_team`, `mk_team`, `md_team`) VALUES
(1, 'Our Team', 'Team - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_term`
--

CREATE TABLE IF NOT EXISTS `tbl_page_term` (
  `id` int(11) NOT NULL,
  `term_heading` varchar(255) NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` varchar(255) NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_term`
--

INSERT INTO `tbl_page_term` (`id`, `term_heading`, `term_content`, `mt_term`, `mk_term`, `md_term`) VALUES
(1, 'TERMS & CONDITIONS', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Terms and Conditions - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_testimonial`
--

CREATE TABLE IF NOT EXISTS `tbl_page_testimonial` (
  `id` int(11) NOT NULL,
  `testimonial_heading` varchar(255) NOT NULL,
  `mt_testimonial` varchar(255) NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_testimonial`
--

INSERT INTO `tbl_page_testimonial` (`id`, `testimonial_heading`, `mt_testimonial`, `mk_testimonial`, `md_testimonial`) VALUES
(1, 'Khách hàng nhận xét', 'Testimonial - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_name`) VALUES
(2, 'photo-2.jpg'),
(3, 'photo-3.jpg'),
(4, 'photo-4.jpg'),
(5, 'photo-5.jpg'),
(6, 'photo-6.jpg'),
(7, 'photo-7.jpg'),
(8, 'photo-8.jpg'),
(9, 'photo-9.jpg'),
(10, 'photo-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `client_comment` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Corporate Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '01-07-2018', '04-07-2018', 'http://www.abc.com', '$3000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-1.jpg', 'Corporate Work 1', '', ''),
(2, 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Richard R. Caldwell', 'Grey Fade', '29-08-2018', '07-09-2018', 'http://www.abc.com', '$2000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-2.jpg', 'Business Work 1', '', ''),
(3, 'Engineering Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Nicholas Y. Coleman', 'Baltimore Markets', '08-04-2018', '22-06-2018', 'http://www.abc.com', '$3400', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-3.jpg', 'Engineering Work 1', '', ''),
(4, 'Business Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'John A. Flesher', 'Magna Solution', '10-04-2018', '25-05-2018', 'http://www.abc.com', '$2300', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-4.jpg', 'Business Work 2', '', ''),
(5, 'Corporate Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Brandon J. Erwin', 'Custom Sound', '15-06-2018', '05-07-2018', 'http://www.abc.com', '$5000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-5.jpg', 'Corporate Work 2', '', ''),
(6, 'Engineering Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'George L. Perryman', 'The Own Hardware', '05-02-2018', '20-04-2018', 'http://www.abc.com', '$1900', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-6.jpg', 'Engineering Work 2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Corporate', 'Active'),
(2, 'Business', 'Active'),
(3, 'Engineering', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_photo`
--

CREATE TABLE IF NOT EXISTS `tbl_portfolio_photo` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_portfolio_photo`
--

INSERT INTO `tbl_portfolio_photo` (`id`, `portfolio_id`, `photo`) VALUES
(17, 7, '17.jpg'),
(18, 7, '18.jpg'),
(24, 1, '24.jpg'),
(26, 1, '26.jpg'),
(27, 2, '27.jpg'),
(28, 2, '28.jpg'),
(29, 3, '29.jpg'),
(30, 4, '30.jpg'),
(31, 4, '31.jpg'),
(32, 5, '32.jpg'),
(33, 5, '33.jpg'),
(34, 6, '34.jpg'),
(35, 6, '35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_table`
--

CREATE TABLE IF NOT EXISTS `tbl_pricing_table` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pricing_table`
--

INSERT INTO `tbl_pricing_table` (`id`, `icon`, `title`, `price`, `subtitle`, `text`, `button_text`, `button_url`) VALUES
(1, 'fa fa-shield', 'PHP & MYSQL', '$99', '02 tháng', '<ul><li><strong>Khai giảng:</strong> 18-06-2019</li><li><strong>Thời gian:</strong> Thứ ba, năm, bảy 19:45-21:45</li><li><strong>Thời lượng:</strong> 02 tháng</li><li><strong>Học phí:</strong> 4,000,000</li><li><strong>Địa điểm học:</strong> <a href="https://opensourcevn.com" target="_blank">Khoa Phạm TPHCM</a></li><li><strong>Học online từ xa:</strong> <span>Học trực tuyến qua teamviewer hoặc skype</span></li></ul>', 'Đăng ký học', '#'),
(2, 'fa fa-globe', 'KHOÁ HỌC FOREX NÂNG CAO', '$299', '05 tháng', '<ul><li><strong>Khai giảng:</strong> 09-06-2019</li><li><strong>Thời gian:</strong> <br>Chủ nhật: Sáng: 9:00-12:00 &amp; Chiều: 14:00-17:00\r\n<br></li><li><strong>Thời lượng:</strong> 4 buổi + 1 tuần trade live</li><li><strong>Học phí:</strong> 14,000,000</li><li><strong>Địa điểm học:</strong> <a href="https://opensourcevn.com/" target="_blank">Khoa Phạm TPHCM</a></li><li><strong>Học online từ xa:</strong> <span>Không</span></li></ul>', 'Đăng ký học', '#'),
(3, 'fa fa-diamond', 'KIẾM TIỀN VỚI FOREX', '$499', '03 tháng', '<ul><li><strong>Khai giảng:</strong> 02-06-2019</li><li><strong>Thời gian:</strong> <br>Ngày 2/6 Sáng 9:00 - 12:00, Chiều 14:00 - 17:00 <br></li><li><strong>Thời lượng:</strong> 02 ngày</li><li><strong>Học phí:</strong> 4,500,000</li><li><strong>Địa điểm học:</strong> <a href="https://opensourcevn.com/" target="_blank">Khoa Phạm TPHCM</a></li><li><strong>Học online từ xa:</strong> <span>Không</span></li></ul>', 'Đăng ký học', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `name`, `description`, `short_description`, `photo`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Lập trình NODEJS', 'NodeJS là một mã nguồn mở,\r\n                              được dùng để xây dựng các ứng dụng mạng,\r\n                              đặc biệt các ứng đòi hỏi real time\r\n                              (thời gian thực) &amp; khối lượng request lớn.', 'NodeJS là một mã nguồn mở, được dùng để xây dựng các ứng dụng mạng, đặc biệt các ứng đòi hỏi real time (thời gian thực) & khối lượng request lớn.', 'service-1.png', 'Lập trình NODEJS', 'Lập trình NODEJS', 'Lập trình NODEJS'),
(2, 'Lập trình REACTJS', 'React là một thư viện mã nguồn mở\r\n                              viết bằng javascript bởi chính Facebook, dùng để xây dựng giao diện\r\n                              người dùng(User Interface – UI).', 'React là một thư viện mã nguồn mở viết bằng javascript bởi chính Facebook, dùng để xây dựng giao diện người dùng(User Interface – UI).', 'service-2.png', 'Cost Management', '', ''),
(3, 'React Native (iOS & Android)', 'Viết ứng dụng Android/iOS chỉ với một lần code duy nhất,\r\n                              đặc biệt, người dùng vẫn trải nghiệm 100% so với ứng dụng viết kiểu truyền thống.', 'Viết ứng dụng Android/iOS chỉ với một lần code duy nhất, đặc biệt, người dùng vẫn trải nghiệm 100% so với ứng dụng viết kiểu truyền thống.', 'service-3.png', 'Training Program', '', ''),
(4, 'Lập trình Front-end', 'Thiết kế web luôn là một nghề hấp dẫn bất kì thời điểm nào, bạn thử \r\nGoogle từ khoá "Tuyển dụng Lập trình Front End" sẽ thấy ngay các nhà \r\ntuyển dụng đang săn đón <br>', 'Thiết kế web luôn là một nghề hấp dẫn bất kì thời điểm nào, bạn thử Google từ khoá "Tuyển dụng Lập trình Front End" sẽ thấy ngay các nhà tuyển dụng đang săn đón', 'service-4.jpg', 'Project Management', '', ''),
(5, 'Lập trình PHP & MySQL', 'Cung cấp các kiến thức Lập trình PHP từ cơ bản đến nâng cao. Đặc biệt,\r\n                              chỉ duy nhất khóa học PHP tại Khoa Phạm, chúng ta được học Laravel Framework <br>', 'Cung cấp các kiến thức Lập trình PHP từ cơ bản đến nâng cao. Đặc biệt, chỉ duy nhất khóa học PHP tại Khoa Phạm, chúng ta được học Laravel Framework', 'service-5.jpg', 'Quality Assurance', '', ''),
(6, 'FULL STACK JAVASCRIPT MEAN', 'Khoá học Full Stack JavaScript tại Khoa Phạm sẽ cung cấp cho bạn toàn bộ\r\n kĩ năng quan trọng nhất trong mảng thiết kế web, với 03 học phần chính:\r\n NODEJS, ANGULAR &amp; iOT', 'Khoá học Full Stack JavaScript tại Khoa Phạm sẽ cung cấp cho bạn toàn bộ kĩ năng quan trọng nhất trong mảng thiết kế web, với 03 học phần chính: NODEJS, ANGULAR & iOT', 'service-6.png', 'Reporting', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_col1_title` varchar(255) NOT NULL,
  `footer_col2_title` varchar(255) NOT NULL,
  `footer_col3_title` varchar(255) NOT NULL,
  `footer_col4_title` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_recent_news_item` varchar(5) NOT NULL,
  `footer_recent_portfolio_item` varchar(5) NOT NULL,
  `newsletter_text` text NOT NULL,
  `cta_text` text NOT NULL,
  `cta_button_text` varchar(255) NOT NULL,
  `cta_button_url` varchar(255) NOT NULL,
  `cta_background` varchar(255) NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `send_email_from` varchar(255) NOT NULL,
  `receive_email_to` varchar(255) NOT NULL,
  `banner_about` varchar(255) NOT NULL,
  `banner_faq` varchar(255) NOT NULL,
  `banner_service` varchar(255) NOT NULL,
  `banner_testimonial` varchar(255) NOT NULL,
  `banner_news` varchar(255) NOT NULL,
  `banner_event` varchar(255) NOT NULL,
  `banner_contact` varchar(255) NOT NULL,
  `banner_search` varchar(255) NOT NULL,
  `banner_terms` varchar(255) NOT NULL,
  `banner_privacy` varchar(255) NOT NULL,
  `banner_team` varchar(255) NOT NULL,
  `banner_portfolio` varchar(255) NOT NULL,
  `banner_verify_subscriber` varchar(255) NOT NULL,
  `banner_pricing` varchar(255) NOT NULL,
  `banner_photo_gallery` varchar(255) NOT NULL,
  `front_end_color` varchar(20) NOT NULL,
  `sidebar_total_recent_post` varchar(5) NOT NULL,
  `sidebar_total_upcoming_event` varchar(5) NOT NULL,
  `sidebar_total_past_event` varchar(5) NOT NULL,
  `sidebar_news_heading_category` varchar(255) NOT NULL,
  `sidebar_news_heading_recent_post` varchar(255) NOT NULL,
  `sidebar_event_heading_upcoming` varchar(255) NOT NULL,
  `sidebar_event_heading_past` varchar(255) NOT NULL,
  `sidebar_service_heading_service` varchar(255) NOT NULL,
  `sidebar_service_heading_quick_contact` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_project_detail` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_quick_contact` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_col1_title`, `footer_col2_title`, `footer_col3_title`, `footer_col4_title`, `footer_copyright`, `footer_address`, `footer_email`, `footer_phone`, `footer_recent_news_item`, `footer_recent_portfolio_item`, `newsletter_text`, `cta_text`, `cta_button_text`, `cta_button_url`, `cta_background`, `top_bar_email`, `top_bar_phone`, `send_email_from`, `receive_email_to`, `banner_about`, `banner_faq`, `banner_service`, `banner_testimonial`, `banner_news`, `banner_event`, `banner_contact`, `banner_search`, `banner_terms`, `banner_privacy`, `banner_team`, `banner_portfolio`, `banner_verify_subscriber`, `banner_pricing`, `banner_photo_gallery`, `front_end_color`, `sidebar_total_recent_post`, `sidebar_total_upcoming_event`, `sidebar_total_past_event`, `sidebar_news_heading_category`, `sidebar_news_heading_recent_post`, `sidebar_event_heading_upcoming`, `sidebar_event_heading_past`, `sidebar_service_heading_service`, `sidebar_service_heading_quick_contact`, `sidebar_portfolio_heading_project_detail`, `sidebar_portfolio_heading_quick_contact`) VALUES
(1, 'logo.png', 'favicon.png', 'Nhận tin tức mới', 'Tin nổi bật', 'Dự án', 'Địa chỉ liên hệ', 'Copyright © 2019 by opensourcevn. All Rights Reserved.', '38 Nguyễn Lâm, Phường 6, Quận 10, TP.HCM\r\n', 'sales@yourwebsite.com\r\nsupport@yourwebsite.com', 'Đăng ký: 123456789\r\nHỗ trợ: 123456789', '4', '9', 'Chúng tôi sẽ gửi những tin tức, sự kiện mới nhất cho các bạn qua email này. ', 'Bạn có nhu cầu tham gia, hãy liên hệ với chúng tôi ?', 'Liên hệ', '#', 'cta_background.jpg', 'info@yourwebsite.com', '954-648-1802', 'contact@gmail.com', 'info@yourwebsite.com', 'banner_about.jpg', 'banner_faq.jpg', 'banner_service.jpg', 'banner_testimonial.jpg', 'banner_news.jpg', 'banner_event.jpg', 'banner_contact.jpg', 'banner_search.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'banner_team.jpg', 'banner_portfolio.jpg', 'banner_verify_subscriber.jpg', 'banner_pricing.jpg', 'banner_photo_gallery.jpg', '3367C1', '3', '5', '5', 'Categories', 'Recent Posts', 'Upcoming Events', 'Past Events', 'OUR SERVICES', 'QUICK CONTACT', 'PROJECT DETAILS', 'QUICK CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  `position` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES
(1, 'slider-1.jpg', 'WE ARE NUMBER ONE CONSULTATION FIRM', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit.', 'Read More', '#', 'Contact Us', '#', 'Left'),
(2, 'slider-2.jpg', 'WE WORK FOR YOUR SUCCESS IN REAL', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit.', 'Read More', '#', 'Contact Us', '#', 'Right');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE IF NOT EXISTS `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', 'http://www.facebook.com/', 'fa fa-facebook'),
(2, 'Twitter', 'http://www.twitter.com', 'fa fa-twitter'),
(3, 'LinkedIn', 'http://www.linkedin.com', 'fa fa-linkedin'),
(4, 'Google Plus', '', 'fa fa-google-plus'),
(5, 'Pinterest', 'http://www.pinterest.com', 'fa fa-pinterest'),
(6, 'YouTube', 'http://www.youtube.com', 'fa fa-youtube'),
(7, 'Instagram', '', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', '', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Digg', '', 'fa fa-digg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE IF NOT EXISTS `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(1, 'demo@gmail.com', '2019-05-28', '2019-05-28 13:28:15', '64a497ef70c76d760316fd79f9dbc6bf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE IF NOT EXISTS `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `flickr` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `name`, `designation`, `photo`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `phone`, `email`, `website`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Danny Ashton', 'Chairman', 'team-member-1.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Danny Ashton', '', ''),
(2, 'Brent Grundy', 'Managing Director', 'team-member-2.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Brent Grundy', '', ''),
(3, 'Scott Ford', 'CEO', 'team-member-3.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Scott Ford', '', ''),
(4, 'Robert Krol', 'CTO', 'team-member-4.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Robert Krol', '', ''),
(5, 'Sal Harvey', 'Graphic Designer', 'team-member-5.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Sal Harvey', '', ''),
(7, 'Harold Hayes', 'Web Designer', 'team-member-7.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Harold Hayes', '', ''),
(8, 'Terry Spain', 'WordPress Developer', 'team-member-8.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Terry Spain', '', ''),
(9, 'Bryan Dolan', 'PHP Developer', 'team-member-9.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Bryan Dolan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE IF NOT EXISTS `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `photo`, `comment`) VALUES
(2, 'Robert Krol', 'CEO, ABC Company', 'testimonial-2.png', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(3, 'Sal Harvey', 'Director, DEF Company', 'testimonial-3.png', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(4, 'Terry Spain', 'Founder, XYZ Company', 'testimonial-4.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(5, 'John Hilton', 'CEO, AAA Company', 'testimonial-5.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(6, 'Arthur Cox', 'Chairman, RR Company', 'testimonial-6.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(7, 'David Moore', 'HR Manager, DSF Company', 'testimonial-7.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `photo`, `token`, `role`, `status`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user-.jpg', '', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_choose`
--

CREATE TABLE IF NOT EXISTS `tbl_why_choose` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_why_choose`
--

INSERT INTO `tbl_why_choose` (`id`, `name`, `content`, `icon`, `photo`) VALUES
(1, 'Phương pháp giảng dạy lập trình hiệu quả', 'Lập trình là một món ăn khô khan, nhưng chúng tôi biết cách biến nó thành món ăn ngon miệng cho bạn. Truyền cảm hứng cho học viên là những gì chúng tôi làm được tốt nhất.', 'fa fa-clock-o', 'why-choose-1.png'),
(7, 'Giảng viên là những người có kinh nghiệm thực tế.', '100% giảng viên tại Khoa Phạm đều đáp ứng 02 tiêu chí sau: Kinh nghiệm thực tế tối thiểu 03 năm và đam mê giảng dạy. Những giảng viên không đạt yêu cầu sẽ bị loại bỏ ngay.', 'fa fa-thumbs-up', 'why-choose-7.jpg'),
(8, 'Học phí thấp nhất thị trường', 'Bạn đừng ngạc nhiên, Trung Tâm Khoa Phạm ra đời dựa trên đam mê lập trình, được đứng lớp và truyền cảm hứng cho học viên là niềm vinh hạnh của chúng tôi.', 'fa fa-globe', 'why-choose-8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_contact`
--
ALTER TABLE `tbl_page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_event`
--
ALTER TABLE `tbl_page_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_faq`
--
ALTER TABLE `tbl_page_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_home`
--
ALTER TABLE `tbl_page_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_news`
--
ALTER TABLE `tbl_page_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_photo_gallery`
--
ALTER TABLE `tbl_page_photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_portfolio`
--
ALTER TABLE `tbl_page_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_pricing`
--
ALTER TABLE `tbl_page_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_privacy`
--
ALTER TABLE `tbl_page_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_search`
--
ALTER TABLE `tbl_page_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_service`
--
ALTER TABLE `tbl_page_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_team`
--
ALTER TABLE `tbl_page_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_term`
--
ALTER TABLE `tbl_page_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_testimonial`
--
ALTER TABLE `tbl_page_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pricing_table`
--
ALTER TABLE `tbl_pricing_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_contact`
--
ALTER TABLE `tbl_page_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_event`
--
ALTER TABLE `tbl_page_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_faq`
--
ALTER TABLE `tbl_page_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_home`
--
ALTER TABLE `tbl_page_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_news`
--
ALTER TABLE `tbl_page_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_photo_gallery`
--
ALTER TABLE `tbl_page_photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_portfolio`
--
ALTER TABLE `tbl_page_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_pricing`
--
ALTER TABLE `tbl_page_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_privacy`
--
ALTER TABLE `tbl_page_privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_search`
--
ALTER TABLE `tbl_page_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_service`
--
ALTER TABLE `tbl_page_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_team`
--
ALTER TABLE `tbl_page_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_term`
--
ALTER TABLE `tbl_page_term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page_testimonial`
--
ALTER TABLE `tbl_page_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_pricing_table`
--
ALTER TABLE `tbl_pricing_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
