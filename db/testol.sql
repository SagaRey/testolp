-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 31 日 20:34
-- 服务器版本: 5.6.13-log
-- PHP 版本: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `testol`
--

-- --------------------------------------------------------

--
-- 表的结构 `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cno` varchar(16) NOT NULL,
  `operate` varchar(16) NOT NULL,
  `tqno` int(11) NOT NULL,
  `optionA` varchar(255) DEFAULT NULL,
  `optionB` varchar(255) DEFAULT NULL,
  `optionC` varchar(255) DEFAULT NULL,
  `optionD` varchar(255) DEFAULT NULL,
  `optionE` varchar(255) DEFAULT NULL,
  `optionF` varchar(255) DEFAULT NULL,
  `optionG` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `eventcno` (`cno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `event`
--

INSERT INTO `event` (`id`, `date`, `cno`, `operate`, `tqno`, `optionA`, `optionB`, `optionC`, `optionD`, `optionE`, `optionF`, `optionG`, `score`) VALUES
(1, '2014-03-01 13:05:27', '13123100010101', 'create', 1, 'A', NULL, NULL, NULL, NULL, NULL, 1, 0),
(2, '2014-03-01 13:06:21', '13123100010101', 'create', 2, 'B', NULL, NULL, NULL, NULL, NULL, 1, 0),
(3, '2014-03-04 13:07:17', '13123100010101', 'create', 3, 'C', NULL, NULL, NULL, NULL, NULL, 1, 0),
(4, '2014-03-04 13:09:07', '13123100010101', 'create', 4, 'D', NULL, NULL, NULL, NULL, NULL, 1, 10),
(5, '2014-03-04 13:09:28', '13123100010101', 'create', 5, 'D', NULL, NULL, NULL, NULL, NULL, 1, 0),
(6, '2014-03-04 13:09:46', '13123100010101', 'create', 6, 'A', 'C', NULL, NULL, NULL, NULL, 2, 0),
(7, '2014-03-04 13:10:08', '13123100010101', 'create', 7, 'B', 'C', NULL, NULL, NULL, NULL, 2, 0),
(8, '2014-03-04 13:10:36', '13123100010101', 'craete', 8, 'B', 'C', 'D', NULL, NULL, NULL, 3, 0),
(9, '2014-03-04 13:10:54', '13123100010101', 'create', 9, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0),
(10, '2014-03-04 13:11:06', '13123100010101', 'create', 10, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0),
(12, '2014-03-04 16:26:18', '13123100010101', 'final', 1, 'A', NULL, NULL, NULL, NULL, NULL, 1, 0),
(13, '2014-03-04 16:37:46', '13123100010101', 'final', 2, 'B', NULL, NULL, NULL, NULL, NULL, 1, 0),
(14, '2014-03-04 16:38:30', '13123100010101', 'final', 3, 'C', NULL, NULL, NULL, NULL, NULL, 1, 0),
(15, '2014-03-04 16:38:45', '13123100010101', 'final', 4, 'D', NULL, NULL, NULL, NULL, NULL, 1, 10),
(16, '2014-03-04 16:39:16', '13123100010101', 'final', 5, 'D', NULL, NULL, NULL, NULL, NULL, 1, 0),
(17, '2014-03-04 16:39:33', '13123100010101', 'final', 6, 'A', 'C', NULL, NULL, NULL, NULL, 2, 0),
(18, '2014-03-04 16:39:54', '13123100010101', 'final', 7, 'B', 'C', NULL, NULL, NULL, NULL, 2, 0),
(19, '2014-03-04 16:40:43', '13123100010101', 'final', 8, 'B', 'C', 'D', NULL, NULL, NULL, 3, 0),
(20, '2014-03-04 16:41:01', '13123100010101', 'final', 9, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0),
(21, '2014-03-04 16:41:15', '13123100010101', 'final', 10, NULL, NULL, NULL, NULL, NULL, NULL, 3, 0);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `eventinfo`
--
CREATE TABLE IF NOT EXISTS `eventinfo` (
`id` int(11)
,`date` timestamp
,`cno` varchar(16)
,`operate` varchar(16)
,`type` varchar(16)
,`sid` varchar(16)
,`sname` varchar(16)
,`subject` varchar(64)
,`tno` varchar(16)
,`tqno` int(11)
,`qno` varchar(16)
,`chapter` varchar(255)
,`point` varchar(16)
,`score` int(11)
,`optionA` varchar(255)
,`optionB` varchar(255)
,`optionC` varchar(255)
,`optionD` varchar(255)
,`optionE` varchar(255)
,`optionF` varchar(255)
,`optionG` int(11)
,`optionH` varchar(255)
,`optionI` varchar(255)
,`optionJ` varchar(255)
,`optionK` varchar(255)
,`optionL` varchar(255)
,`optionM` varchar(255)
,`optionN` varchar(255)
);
-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `managermid` (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`id`, `mid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `qno` varchar(16) NOT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `chapter` varchar(255) DEFAULT NULL,
  `tid` varchar(16) DEFAULT NULL,
  `knowledge1` varchar(32) DEFAULT NULL,
  `knowledge2` varchar(32) DEFAULT NULL,
  `knowledge3` varchar(32) DEFAULT NULL,
  `keyword1` varchar(32) DEFAULT NULL,
  `keyword2` varchar(32) DEFAULT NULL,
  `keyword3` varchar(32) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  `difficulty` varchar(16) DEFAULT NULL,
  `point` varchar(16) DEFAULT NULL,
  `question` varchar(1024) DEFAULT NULL,
  `optionA` varchar(255) DEFAULT NULL,
  `optionB` varchar(255) DEFAULT NULL,
  `optionC` varchar(255) DEFAULT NULL,
  `optionD` varchar(255) DEFAULT NULL,
  `optionE` varchar(255) DEFAULT NULL,
  `optionF` varchar(255) DEFAULT NULL,
  `optionG` varchar(255) DEFAULT NULL,
  `optionH` varchar(255) DEFAULT NULL,
  `optionI` varchar(255) DEFAULT NULL,
  `optionJ` varchar(255) DEFAULT NULL,
  `optionK` varchar(255) DEFAULT NULL,
  `optionL` varchar(255) DEFAULT NULL,
  `optionM` varchar(255) DEFAULT NULL,
  `optionN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `qno` (`qno`),
  KEY `questiontid` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- 转存表中的数据 `question`
--

INSERT INTO `question` (`id`, `date`, `qno`, `subject`, `chapter`, `tid`, `knowledge1`, `knowledge2`, `knowledge3`, `keyword1`, `keyword2`, `keyword3`, `type`, `difficulty`, `point`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `optionE`, `optionF`, `optionG`, `optionH`, `optionI`, `optionJ`, `optionK`, `optionL`, `optionM`, `optionN`) VALUES
(1, '2014-03-06 02:12:25', '10130210', '马克思主义', '1', '11610001', '马克思主义', NULL, NULL, '理论品质', NULL, NULL, '单选', '8', '10', '马克思主义的理论品质是？', '与时俱进', '自我批判', '批判与继承的统一', '不迷信权威', '', NULL, '4', 'C', '', NULL, NULL, NULL, NULL, '1'),
(2, '2014-03-06 02:12:27', '10130411', '马克思主义', '2', '11610001', '马克思主义', NULL, NULL, '科学社会主义', NULL, NULL, '单选', '9', '10', '在马克思主义理论体系中，科学社会主义是其( )', '核心内容', '理论基础', '指导原则', '前提条件', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(3, '2014-03-06 02:12:29', '10142512', '马克思主义', '3', '11610001', '马克思主义', NULL, NULL, '哲学', NULL, NULL, '单选', '8', '10', '哲学的基本问题是( )', '物质和意识的关系问题', '物质和运动的关系问题', '物质和时空的关系问题', '理论和实践的关系问题 ', NULL, NULL, '4', 'B', NULL, NULL, NULL, NULL, NULL, '1'),
(4, '2014-03-06 02:12:32', '10052513', '马克思主义', '4', '11610001', '马克思主义', NULL, NULL, '哲学', NULL, NULL, '单选', '9', '10', '从哲学上看，运动和静止的关系属于( )', '现象和本质的关系', '一般和个别的关系', '绝对和相对的关系', '抽象和具体的关系', NULL, NULL, '4', 'D', NULL, NULL, NULL, NULL, NULL, '1'),
(5, '2014-03-06 02:12:40', '10102544', '马克思主义', '5', '11610001', '马克思主义', NULL, NULL, '实践含义', NULL, NULL, '单选', '9', '10', '下列选项中，正确表述了实践含义的是( )', '实践是主体纯主观的精神性活动', '实践是主观创造客观世界的活动 ', '实践是主体应付外部环境的活动', '实践是主体改造和探索客体的社会性物质活动', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(6, '2014-03-06 02:12:42', '10095515', '马克思主义', '1', '11610001', '马克思主义', NULL, NULL, '主观能动性', NULL, NULL, '多选', '8', '10', '在客观规律面前，人的主观能动性表现在( )', '人可以创造规律 ', '人可以消灭规律 ', '人可以改变规律', '人可以认识和利用规律', '概念、\r\n\r\n判断、推理', NULL, '5', 'A', 'B', NULL, NULL, NULL, NULL, '2'),
(7, '2014-03-06 02:12:44', '10204516', '马克思主义', '3', '11610001', '马克思主义', NULL, NULL, '金无足赤', NULL, NULL, '多选', '8', '10', '“金无足赤，人无完人”这是一种( )', '相对主义观点', '辩证法观点', '形而上学观点', '折衷主义观点', '人可以改变规律 ', NULL, '5', 'A', 'B', 'C', NULL, NULL, NULL, '3'),
(8, '2014-03-06 02:12:46', '10010207', '马克思主义', '5', '11610001', '马克思主义', NULL, NULL, '感性认识', NULL, NULL, '多选', '8', '10', '感性认识的形式是( )', '感觉、知觉、表象', '分析和综合', '概念、判断、推理', '总结和概括', '相对主义观点', NULL, '5', 'C', 'D', NULL, NULL, NULL, NULL, '2'),
(9, '2014-03-04 16:19:33', '10050628', '马克思主义', '2', '11610001', '马克思主义', NULL, NULL, '马克思主义哲学', NULL, NULL, '简答', '10', '10', '马克思主义哲学是马克思恩格斯将黑格尔的辩证法和费尔巴哈的唯物主义结合在一起的产物。', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '历史唯心主义观点', '唯意志论', '宿命论', '人际关系', '科学实验', NULL, '5'),
(10, '2014-03-04 16:19:35', '10102059', '马克思主义', '5', '11610001', '马克思主义', NULL, NULL, '马克思主义', NULL, NULL, '简答', '10', '10', '谈谈什么是马克思主义', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '全体和部分', '共性和个性', '本质和现象', '内容和形式', '主要\r\n\r\n矛盾和次要矛盾', NULL, '5'),
(11, '2014-03-06 02:12:48', '20054530', '思想道德修养', '5', '11610002', '思想道德修养', NULL, NULL, '十一届三中全会', NULL, NULL, '单选', '8', '10', '党的十一届三中全会明确作出了把党和国家的工作重点转移到（   ）上来的战略决策。', '经济建设', '政治建设', '文化建设', '社会建\r\n\r\n设', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(12, '2014-03-06 02:12:50', '20142521', '思想道德修养', '3', '11610002', '思想道德修养', NULL, NULL, '无产阶级政党', NULL, NULL, '单选', '9', '10', '是无产阶级政党的根本组织原则()', '民主集中制', '经济建设', '议会选举制', '多党合作制\r\n        ', NULL, NULL, '4', 'B', NULL, NULL, NULL, NULL, NULL, '1'),
(13, '2014-03-06 02:12:51', '20124512', '思想道德修养', '2', '11610002', '思想道德修养', NULL, NULL, '改革', NULL, NULL, '单选', '8', '10', '我国改革的性质是', '社会主义制度的自我完善和发展', '改变社会主义基本制度', '国家利益', '主张一切国家一律平等', NULL, NULL, '4', 'A', '', NULL, NULL, NULL, NULL, '1'),
(14, '2014-03-06 02:12:54', '20154553', '思想道德修养', '1', '11610002', '思想道德修养', NULL, NULL, '两岸三通', NULL, NULL, '单选', '7', '10', '实现两岸和平统一的前提是()', '实现两岸三通', '坚持一个中国原则', '促进两岸关系良性互动', '人民代表大会', NULL, NULL, '4', 'C', '', NULL, NULL, NULL, NULL, '1'),
(15, '2014-03-06 02:12:53', '20040504', '思想道德修养', '3', '11610002', '思想道德修养', NULL, NULL, '生产总值', NULL, NULL, '单选', '6', '10', '我国人均国内生产总值到2020年力争比()', '2000年翻一番', '2000年翻两番', '2010年翻两番', '2010年翻三番', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(16, '2014-03-06 02:12:57', '20124555', '思想道德修养', '5', '11610002', '思想道德修养', NULL, NULL, '邓小平理论', NULL, NULL, '多选', '10', '10', '邓小平理论的历史发展经历了', '党的八大到党的十一届三中全会前的酝酿产生阶段\r\n ', '党的十一届三中全会到十二大的基本命题的提出阶段\r\n\r\n', '党的十二大到十三大的逐步展开和形成理论轮廓的阶段', '党的十三大到十五大的科学体系形成并最终确立指导地位的阶段', '党的七大到党的十一届三中全会前的酝酿产生\r\n\r\n阶段', NULL, '5', 'A', 'C', 'D', NULL, NULL, NULL, '3'),
(17, '2014-03-06 02:12:58', '20125456', '思想道德修养', '2', '11610002', '思想道德修养', NULL, NULL, '科学发展观', NULL, NULL, '多选', '10', '10', '科学发展观的基本要求是', '全面发展', '协调发展', '高速发展', '可持续发展', '不可持续发展', NULL, '5', 'B', 'C', 'D', NULL, NULL, NULL, '3'),
(18, '2014-03-06 02:12:56', '20154627', '思想道德修养', '3', '11610002', '思想道德修养', NULL, NULL, '社会主义', NULL, NULL, '多选', '9', '10', '社会主义的根本任务是发展生产力。这是因为，发展生产力是（）', '发挥社会主义制度优越性的需要', '巩固社会主义制度的需要', '社会主义本\r\n\r\n质的内在要求', '为实现共产主义奠定物质基础', '可持续发展', NULL, '5', 'A', 'D', NULL, NULL, NULL, NULL, '2'),
(19, '2014-03-06 02:13:02', '20134528', '思想道德修养', '5', '11610002', '思想道德修养', NULL, NULL, '执政能力', NULL, NULL, '简答', '8', '10', '.为什么说执政能力建设是党执政后的一项根本建设？', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '城乡协调发展', '统筹区域协调发展', '统筹建设', '统筹发展', '统筹生产力', NULL, '5'),
(20, '2014-03-06 02:13:00', '20124539', '思想道德修养', '1', '11610002', '思想道德修养', NULL, NULL, '三个有利于', NULL, NULL, '简答', '7', '10', '简述“三个有利于标准。', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '三个有利于', '生活水平', '得失成败标准', NULL, NULL, NULL, '3'),
(21, '2014-03-06 02:13:03', '30000111', '毛泽东思想', '1', '11610003', '毛泽东思想', NULL, NULL, '主要创立者', NULL, NULL, '单选', '6', '10', '毛泽东思想的主要创立者是( )', '毛泽东', '陈晓杰', '周恩来', '邓小平', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(22, '2014-03-06 02:13:06', '30000222', '毛泽东思想', '2', '11610003', '毛泽东', NULL, NULL, '马克思主义在中国具体化', NULL, NULL, '单选', '7', '10', '毛泽东第一次明确提出 "使马克思主义在中国具体化" 科学命题的会议是( ) ', '古田会议 ', '遵义会议 ', '中共六届六中全会 ', '中\r\n\r\n共六届七中全会 ', NULL, NULL, '4', 'C', NULL, '', NULL, NULL, NULL, '1'),
(23, '2014-03-06 02:13:22', '30000333', '毛泽东思想', '3', '11610003', '实事求是', NULL, NULL, '前提', NULL, NULL, '单选', '7', '10', '做到实事求是的基本前提是( )', '一切一切从原则出发 \r\n', '一切从实际出发', '认识与实践相统一', '主观与客观相统一', NULL, NULL, '4', 'B', '', NULL, NULL, NULL, NULL, '1'),
(24, '2014-03-06 02:13:21', '30000444', '毛泽东思想', '4', '11610003', '官僚资本主义', NULL, NULL, '革命对象', NULL, NULL, '单选', '8', '10', '毛泽东明确把官僚资本主义列为革命对象之一的论著是( )', '《中国革命和中国共产党》', '《论人民民主专政》', '《论联合政府》 ', '《在\r\n\r\n晋绥干部会议上的讲话》', NULL, NULL, '4', 'D', NULL, NULL, '', NULL, NULL, '1'),
(25, '2014-03-06 02:13:20', '30000555', '毛泽东思想', '5', '11610003', '新民主主义', NULL, NULL, '内容', NULL, NULL, '单选', '9', '10', '新民主主义革命的中心内容是( )', '没收封建地主阶级的土地归农民所有', '没收四大家族的垄断资本归新民主主义国家所有', '没收帝国主义在华财产归\r\n\r\n人民所有', '没收一切私有财产归全民所有', NULL, NULL, '4', 'A', NULL, NULL, NULL, NULL, NULL, '1'),
(26, '2014-03-06 02:13:18', '30001116', '毛泽东思想', '3', '11610003', '毛泽东思想', NULL, NULL, '科学含义', NULL, NULL, '多选', '9', '10', '毛泽东思想的科学含义是( )', '毛泽东思想是马克思列宁主义在中国的运用和发展 ', '毛泽东思想是被实践证明了的关于中国革命和建设的正确的\r\n\r\n理论原则和经验总结', '毛泽东思想是中国共产党集体智慧的结晶', '毛泽东思想是夺取中国革命胜利的理论武器', '毛泽东思想是中华民族团结振兴的精神支柱 ', NULL, '5', 'A', 'B', 'C', NULL, NULL, NULL, '3'),
(27, '2014-03-06 02:13:16', '30001217', '毛泽东思想', '4', '11610003', '红色政权', NULL, NULL, '发展条件', NULL, NULL, '多选', '9', '10', '中国的红色政权存在和发展的条件是( )', '政治经济发展的不平衡', '良好的群众基础 ', '向前发展的革命形势 ', '相当力量的正式红军的存在 ', '\r\n\r\n共产党的正确领导 ', NULL, '5', 'A', 'B', 'C', 'D', 'E', NULL, '5'),
(28, '2014-03-29 12:17:52', '30001318', '毛泽东思想', '5', '11610003', '人民民主专政', NULL, NULL, '主要特点', NULL, NULL, '多选', '9', '10', '我国人民民主专政的主要特点是( )', '民主与专政的相互结合', '衔接民主革命和社会主义革命两个革命阶段', '扩大了人民民主的范围 ', '扩\r\n\r\n大了对敌人专政的范围', '概念表述准确鲜明', NULL, '5', 'B', 'C', 'E', NULL, '', NULL, '3'),
(29, '2014-03-06 02:13:14', '30001419', '毛泽东思想', '5', '11610003', '民族区域自治', NULL, NULL, '优越性', NULL, NULL, '简答', '9', '10', '我国民族区域自治制度的优越性是什么？', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '平等关系', '社会发展', '共同繁荣', NULL, NULL, NULL, '3'),
(30, '2014-03-06 02:13:12', '30001510', '毛泽东思想', '5', '11610003', '中国共产党', NULL, NULL, '历史意义', NULL, NULL, '简答', '9', '10', '中国共产党成立的伟大历史意义是什么？', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '胜利发展', '与中国实际相结合', '客观可能性', NULL, NULL, NULL, '3'),
(31, '2014-03-13 04:20:54', '20122323', '思想道德修养', '3', '11610002', '新文化运动', NULL, NULL, '新文化运动', NULL, NULL, '简答', '6', '10', '中国新文化运动期间的两面旗帜是？', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '民主', '科学', NULL, NULL, NULL, NULL, '2'),
(50, '2014-03-29 12:50:34', '96096510', '马克思主义', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '单选', '11', '22', '33', 'aa', 'bb', 'cc', 'dd', 'ee', 'ff', 'gg', 'hh', 'ii', 'jj', 'kk', 'll', 'mm', 'nn'),
(51, '0000-00-00 00:00:00', '96243741', '毛泽东思想', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '第三代', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `questioninfo`
--
CREATE TABLE IF NOT EXISTS `questioninfo` (
`id` int(11)
,`qno` varchar(16)
,`subject` varchar(64)
,`chapter` varchar(255)
,`tid` varchar(16)
,`tname` varchar(32)
,`question` varchar(1024)
,`difficulty` varchar(16)
,`point` varchar(16)
,`knowledge1` varchar(32)
,`knowledge2` varchar(32)
,`knowledge3` varchar(32)
,`keyword1` varchar(32)
,`keyword2` varchar(32)
,`keyword3` varchar(32)
,`type` varchar(16)
,`optionA` varchar(255)
,`optionB` varchar(255)
,`optionC` varchar(255)
,`optionD` varchar(255)
,`optionE` varchar(255)
,`optionF` varchar(255)
,`optionG` varchar(255)
,`optionH` varchar(255)
,`optionI` varchar(255)
,`optionJ` varchar(255)
,`optionK` varchar(255)
,`optionL` varchar(255)
,`optionM` varchar(255)
,`optionN` varchar(255)
,`date` timestamp
);
-- --------------------------------------------------------

--
-- 表的结构 `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cno` varchar(16) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reportcno` (`cno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `report`
--

INSERT INTO `report` (`id`, `cno`, `score`) VALUES
(1, '13123100010101', 89),
(2, '14020500020101', 77),
(3, '14022700030101', 87),
(4, '13123100010102', 67),
(5, '14020500020102', 87),
(6, '14022700030102', 98),
(7, '13123100010103', 63),
(8, '14020500020103', 81),
(9, '14022700030103', 70);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `reportinfo`
--
CREATE TABLE IF NOT EXISTS `reportinfo` (
`id` int(11)
,`cno` varchar(16)
,`sid` varchar(16)
,`sname` varchar(16)
,`date` timestamp
,`tno` varchar(16)
,`subject` varchar(64)
,`difficulty` float
,`score` int(11)
,`total` int(3)
);
-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(16) NOT NULL,
  `sname` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studentsid` (`sid`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `sid`, `sname`, `password`) VALUES
(1, '1111610101', '程天爽', '111111'),
(2, '1111610102', '叶小梅', '123456'),
(3, '1111610103', '程羽蒙', '242424'),
(4, '1111610204', '李嘉华', '456789'),
(5, '1111610105', '赫本', '456963'),
(6, '1111610201', '陈小雨', '456123'),
(7, '1111610202', '吴泽楷', '222222'),
(8, '1111610203', '朱莉', '456128'),
(9, '1111610205', '胡宇阳', '458755'),
(10, '1111610206', '孙雨萌', '488858'),
(11, '1111610301', '陈邵琨', '451266'),
(12, '1111610302', '卡门', '453554'),
(13, '1111610303', '马凯', '456123'),
(14, '1111610304', '吕小布', '458796'),
(15, '1111610305', '耿花花', '123456'),
(16, '1111610401', '日月循', '456987'),
(17, '1111610402', '卡夫卡', '254698'),
(18, '1111610403', '袁术', '487569'),
(19, '1111610404', '卡萨帝', '154662'),
(20, '1111610405', '席慕容', '756888'),
(21, '1111610505', '徐志摩', 'xuzhimo');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(16) NOT NULL,
  `tname` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `subject` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teachertid` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `tid`, `tname`, `password`, `subject`) VALUES
(1, '11610001', '蔡晋民', '111111', '马克思主义'),
(2, '11610002', '于丽', '111111', '思想道德修养'),
(3, '11610003', '宋梅秋', '111111', '毛泽东思想');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `teacherinfo`
--
CREATE TABLE IF NOT EXISTS `teacherinfo` (
`id` int(11)
,`tid` varchar(16)
,`tname` varchar(32)
,`tno` varchar(16)
,`subject` varchar(64)
,`qno` varchar(16)
,`type` varchar(16)
,`chapter` varchar(255)
,`difficulty` varchar(16)
);
-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tno` varchar(16) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `tid` varchar(16) NOT NULL,
  `quantity` int(11) NOT NULL,
  `duration` int(11) DEFAULT '6000',
  `difficulty` float NOT NULL,
  `total` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testtno` (`tno`),
  KEY `testtid` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `date`, `tno`, `subject`, `tid`, `quantity`, `duration`, `difficulty`, `total`) VALUES
(1, '2013-12-30 16:00:00', '1312310001', '马克思主义', '11610001', 10, 6000, 5, 100),
(2, '2014-02-04 16:00:00', '1402050002', '思想道德修养', '11610002', 10, 6000, 7, 100),
(3, '2014-02-26 16:00:00', '1402270003', '毛泽东思想', '11610003', 10, 6000, 6, 100),
(16, '2014-03-30 10:38:43', '9617591294', '马克思主义', '11610001', 5, 6000, 9, 62),
(17, '2014-03-30 12:51:20', '9618387219', '马克思主义', '11610001', 3, 6000, 8.33, 30),
(18, '2014-03-30 14:50:33', '9619103202', '思想道德修养', '11610002', 5, 6000, 8, 50),
(19, '2014-03-31 05:32:22', '9624394163', '马克思主义', '11610001', 5, 6000, 8.2, 50);

-- --------------------------------------------------------

--
-- 表的结构 `testcard`
--

CREATE TABLE IF NOT EXISTS `testcard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cno` varchar(16) NOT NULL,
  `sid` varchar(16) NOT NULL,
  `tno` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `testcardcno` (`cno`),
  KEY `testcardsid` (`sid`),
  KEY `testcardtno` (`tno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `testcard`
--

INSERT INTO `testcard` (`id`, `date`, `cno`, `sid`, `tno`) VALUES
(1, '2014-02-28 16:00:00', '13123100010101', '1111610101', '1312310001'),
(2, '2014-02-28 16:00:00', '14020500020101', '1111610101', '1402050002'),
(3, '2014-03-01 16:00:00', '14022700030101', '1111610101', '1402270003'),
(4, '2014-02-28 16:00:00', '13123100010102', '1111610102', '1312310001'),
(5, '2014-02-28 16:00:00', '14020500020102', '1111610102', '1402050002'),
(6, '2014-03-01 16:00:00', '14022700030102', '1111610102', '1402270003'),
(7, '2014-02-28 16:00:00', '13123100010103', '1111610103', '1312310001'),
(8, '2014-02-28 16:00:00', '14020500020103', '1111610103', '1402050002'),
(9, '2014-03-01 16:00:00', '14022700030103', '1111610103', '1402270003');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `testcardinfo`
--
CREATE TABLE IF NOT EXISTS `testcardinfo` (
`id` int(11)
,`cno` varchar(16)
,`sid` varchar(16)
,`sname` varchar(16)
,`tno` varchar(16)
,`subject` varchar(64)
,`difficulty` float
,`quantity` int(11)
,`duration` int(11)
,`total` int(3)
,`date` timestamp
);
-- --------------------------------------------------------

--
-- 替换视图以便查看 `testinfo`
--
CREATE TABLE IF NOT EXISTS `testinfo` (
`id` int(11)
,`tno` varchar(16)
,`tid` varchar(16)
,`tname` varchar(32)
,`subject` varchar(64)
,`difficulty` float
,`quantity` int(11)
,`duration` int(11)
,`total` int(3)
,`date` timestamp
);
-- --------------------------------------------------------

--
-- 表的结构 `ttoq`
--

CREATE TABLE IF NOT EXISTS `ttoq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tno` varchar(16) NOT NULL,
  `tqno` int(11) NOT NULL,
  `qno` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ttoqtno` (`tno`),
  KEY `ttoqqno_idx` (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- 转存表中的数据 `ttoq`
--

INSERT INTO `ttoq` (`id`, `tno`, `tqno`, `qno`) VALUES
(1, '1312310001', 1, '10130210'),
(2, '1312310001', 2, '10130411'),
(3, '1312310001', 3, '10142512'),
(4, '1312310001', 4, '10052513'),
(5, '1312310001', 5, '10102544'),
(6, '1312310001', 6, '10095515'),
(7, '1312310001', 7, '10204516'),
(8, '1312310001', 8, '10010207'),
(9, '1312310001', 9, '10050628'),
(10, '1312310001', 10, '10102059'),
(11, '1402050002', 1, '20054530'),
(12, '1402050002', 2, '20142521'),
(13, '1402050002', 3, '20124512'),
(14, '1402050002', 4, '20154553'),
(15, '1402050002', 5, '20040504'),
(16, '1402050002', 6, '20124555'),
(17, '1402050002', 7, '20125456'),
(18, '1402050002', 8, '20154627'),
(19, '1402050002', 9, '20134528'),
(20, '1402050002', 10, '20124539'),
(21, '1402270003', 1, '30000111'),
(22, '1402270003', 2, '30000222'),
(23, '1402270003', 3, '30000333'),
(24, '1402270003', 4, '30000444'),
(25, '1402270003', 5, '30000555'),
(26, '1402270003', 6, '30001116'),
(27, '1402270003', 7, '30001217'),
(28, '1402270003', 8, '30001318'),
(29, '1402270003', 9, '30001419'),
(30, '1402270003', 10, '30001510'),
(51, '9617591294', 1, '10130210'),
(52, '9617591294', 2, '10102544'),
(53, '9617591294', 3, '10052513'),
(54, '9617591294', 4, '96096510'),
(55, '9617591294', 5, '10204516'),
(56, '9618387219', 1, '10130210'),
(57, '9618387219', 2, '10102544'),
(58, '9618387219', 3, '10095515'),
(59, '9619103202', 1, '20124512'),
(60, '9619103202', 2, '20154553'),
(61, '9619103202', 3, '20125456'),
(62, '9619103202', 4, '20142521'),
(63, '9619103202', 5, '20122323'),
(64, '9624394163', 1, '10130210'),
(65, '9624394163', 2, '10102544'),
(66, '9624394163', 3, '10095515'),
(67, '9624394163', 4, '10204516'),
(68, '9624394163', 5, '10010207');

-- --------------------------------------------------------

--
-- 替换视图以便查看 `ttoqinfo`
--
CREATE TABLE IF NOT EXISTS `ttoqinfo` (
`id` int(11)
,`tno` varchar(16)
,`tqno` int(11)
,`qno` varchar(16)
,`tid` varchar(16)
,`question` varchar(1024)
,`subject` varchar(64)
,`chapter` varchar(255)
,`difficulty` varchar(16)
,`point` varchar(16)
,`knowledge1` varchar(32)
,`knowledge2` varchar(32)
,`knowledge3` varchar(32)
,`keyword1` varchar(32)
,`keyword2` varchar(32)
,`keyword3` varchar(32)
,`type` varchar(16)
,`optionA` varchar(255)
,`optionB` varchar(255)
,`optionC` varchar(255)
,`optionD` varchar(255)
,`optionE` varchar(255)
,`optionF` varchar(255)
,`optionG` varchar(255)
,`optionH` varchar(255)
,`optionI` varchar(255)
,`optionJ` varchar(255)
,`optionK` varchar(255)
,`optionL` varchar(255)
,`optionM` varchar(255)
,`optionN` varchar(255)
);
-- --------------------------------------------------------

--
-- 视图结构 `eventinfo`
--
DROP TABLE IF EXISTS `eventinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `eventinfo` AS select `event`.`id` AS `id`,`event`.`date` AS `date`,`event`.`cno` AS `cno`,`event`.`operate` AS `operate`,`question`.`type` AS `type`,`testcard`.`sid` AS `sid`,`student`.`sname` AS `sname`,`test`.`subject` AS `subject`,`testcard`.`tno` AS `tno`,`event`.`tqno` AS `tqno`,`ttoq`.`qno` AS `qno`,`question`.`chapter` AS `chapter`,`question`.`point` AS `point`,`event`.`score` AS `score`,`event`.`optionA` AS `optionA`,`event`.`optionB` AS `optionB`,`event`.`optionC` AS `optionC`,`event`.`optionD` AS `optionD`,`event`.`optionE` AS `optionE`,`event`.`optionF` AS `optionF`,`event`.`optionG` AS `optionG`,`question`.`optionH` AS `optionH`,`question`.`optionI` AS `optionI`,`question`.`optionJ` AS `optionJ`,`question`.`optionK` AS `optionK`,`question`.`optionL` AS `optionL`,`question`.`optionM` AS `optionM`,`question`.`optionN` AS `optionN` from (((((`event` join `testcard` on((`event`.`cno` = `testcard`.`cno`))) join `student` on((`testcard`.`sid` = `student`.`sid`))) join `test` on((`testcard`.`tno` = `test`.`tno`))) join `ttoq` on((`ttoq`.`tno` = `test`.`tno`))) join `question` on((`ttoq`.`qno` = `question`.`qno`)));

-- --------------------------------------------------------

--
-- 视图结构 `questioninfo`
--
DROP TABLE IF EXISTS `questioninfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `questioninfo` AS select `question`.`id` AS `id`,`question`.`qno` AS `qno`,`question`.`subject` AS `subject`,`question`.`chapter` AS `chapter`,`question`.`tid` AS `tid`,`teacher`.`tname` AS `tname`,`question`.`question` AS `question`,`question`.`difficulty` AS `difficulty`,`question`.`point` AS `point`,`question`.`knowledge1` AS `knowledge1`,`question`.`knowledge2` AS `knowledge2`,`question`.`knowledge3` AS `knowledge3`,`question`.`keyword1` AS `keyword1`,`question`.`keyword2` AS `keyword2`,`question`.`keyword3` AS `keyword3`,`question`.`type` AS `type`,`question`.`optionA` AS `optionA`,`question`.`optionB` AS `optionB`,`question`.`optionC` AS `optionC`,`question`.`optionD` AS `optionD`,`question`.`optionE` AS `optionE`,`question`.`optionF` AS `optionF`,`question`.`optionG` AS `optionG`,`question`.`optionH` AS `optionH`,`question`.`optionI` AS `optionI`,`question`.`optionJ` AS `optionJ`,`question`.`optionK` AS `optionK`,`question`.`optionL` AS `optionL`,`question`.`optionM` AS `optionM`,`question`.`optionN` AS `optionN`,`question`.`date` AS `date` from (`question` join `teacher` on((`question`.`tid` = `teacher`.`tid`)));

-- --------------------------------------------------------

--
-- 视图结构 `reportinfo`
--
DROP TABLE IF EXISTS `reportinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reportinfo` AS select `report`.`id` AS `id`,`report`.`cno` AS `cno`,`testcard`.`sid` AS `sid`,`student`.`sname` AS `sname`,`testcard`.`date` AS `date`,`testcard`.`tno` AS `tno`,`test`.`subject` AS `subject`,`test`.`difficulty` AS `difficulty`,`report`.`score` AS `score`,`test`.`total` AS `total` from (((`report` join `testcard` on((`report`.`cno` = `testcard`.`cno`))) join `student` on((`testcard`.`sid` = `student`.`sid`))) join `test` on((`testcard`.`tno` = `test`.`tno`)));

-- --------------------------------------------------------

--
-- 视图结构 `teacherinfo`
--
DROP TABLE IF EXISTS `teacherinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teacherinfo` AS select `teacher`.`id` AS `id`,`teacher`.`tid` AS `tid`,`teacher`.`tname` AS `tname`,`test`.`tno` AS `tno`,`teacher`.`subject` AS `subject`,`question`.`qno` AS `qno`,`question`.`type` AS `type`,`question`.`chapter` AS `chapter`,`question`.`difficulty` AS `difficulty` from ((`teacher` join `test` on((`test`.`tid` = `teacher`.`tid`))) join `question` on((`question`.`tid` = `teacher`.`tid`)));

-- --------------------------------------------------------

--
-- 视图结构 `testcardinfo`
--
DROP TABLE IF EXISTS `testcardinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `testcardinfo` AS select `testcard`.`id` AS `id`,`testcard`.`cno` AS `cno`,`testcard`.`sid` AS `sid`,`student`.`sname` AS `sname`,`testcard`.`tno` AS `tno`,`test`.`subject` AS `subject`,`test`.`difficulty` AS `difficulty`,`test`.`quantity` AS `quantity`,`test`.`duration` AS `duration`,`test`.`total` AS `total`,`testcard`.`date` AS `date` from ((`testcard` join `student` on((`testcard`.`sid` = `student`.`sid`))) join `test` on((`testcard`.`tno` = `test`.`tno`)));

-- --------------------------------------------------------

--
-- 视图结构 `testinfo`
--
DROP TABLE IF EXISTS `testinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `testinfo` AS select `test`.`id` AS `id`,`test`.`tno` AS `tno`,`test`.`tid` AS `tid`,`teacher`.`tname` AS `tname`,`test`.`subject` AS `subject`,`test`.`difficulty` AS `difficulty`,`test`.`quantity` AS `quantity`,`test`.`duration` AS `duration`,`test`.`total` AS `total`,`test`.`date` AS `date` from (`test` join `teacher` on((`test`.`tid` = `teacher`.`tid`)));

-- --------------------------------------------------------

--
-- 视图结构 `ttoqinfo`
--
DROP TABLE IF EXISTS `ttoqinfo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `ttoqinfo` AS select `ttoq`.`id` AS `id`,`ttoq`.`tno` AS `tno`,`ttoq`.`tqno` AS `tqno`,`ttoq`.`qno` AS `qno`,`question`.`tid` AS `tid`,`question`.`question` AS `question`,`question`.`subject` AS `subject`,`question`.`chapter` AS `chapter`,`question`.`difficulty` AS `difficulty`,`question`.`point` AS `point`,`question`.`knowledge1` AS `knowledge1`,`question`.`knowledge2` AS `knowledge2`,`question`.`knowledge3` AS `knowledge3`,`question`.`keyword1` AS `keyword1`,`question`.`keyword2` AS `keyword2`,`question`.`keyword3` AS `keyword3`,`question`.`type` AS `type`,`question`.`optionA` AS `optionA`,`question`.`optionB` AS `optionB`,`question`.`optionC` AS `optionC`,`question`.`optionD` AS `optionD`,`question`.`optionE` AS `optionE`,`question`.`optionF` AS `optionF`,`question`.`optionG` AS `optionG`,`question`.`optionH` AS `optionH`,`question`.`optionI` AS `optionI`,`question`.`optionJ` AS `optionJ`,`question`.`optionK` AS `optionK`,`question`.`optionL` AS `optionL`,`question`.`optionM` AS `optionM`,`question`.`optionN` AS `optionN` from (`ttoq` join `question` on((`ttoq`.`qno` = `question`.`qno`)));

--
-- 限制导出的表
--

--
-- 限制表 `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `eventcno` FOREIGN KEY (`cno`) REFERENCES `testcard` (`cno`);

--
-- 限制表 `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `questiontid` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- 限制表 `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `reportcno` FOREIGN KEY (`cno`) REFERENCES `testcard` (`cno`);

--
-- 限制表 `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `testtid` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- 限制表 `testcard`
--
ALTER TABLE `testcard`
  ADD CONSTRAINT `testcardsid` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `testcardtno` FOREIGN KEY (`tno`) REFERENCES `test` (`tno`);

--
-- 限制表 `ttoq`
--
ALTER TABLE `ttoq`
  ADD CONSTRAINT `ttoqqno` FOREIGN KEY (`qno`) REFERENCES `question` (`qno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ttoqtno` FOREIGN KEY (`tno`) REFERENCES `test` (`tno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
