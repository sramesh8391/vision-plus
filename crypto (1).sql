-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2023 at 05:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_file` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `active_status` enum('0','1') NOT NULL COMMENT '0= active , 1 = inactive',
  `usercreate` varchar(255) DEFAULT NULL,
  `userchange` varchar(255) DEFAULT NULL,
  `param` enum('0','1') NOT NULL COMMENT '0 = main_menu, 1= sub_menu',
  `m_param` varchar(255) DEFAULT NULL COMMENT 'main_menu id',
  `sub_status` varchar(255) NOT NULL COMMENT '1 = sub menu heading id',
  `staff_permission` varchar(255) NOT NULL COMMENT '0=yes 1= no',
  `crcdt` datetime NOT NULL,
  `chngdt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`menu_id`, `menu_name`, `menu_file`, `menu_icon`, `active_status`, `usercreate`, `userchange`, `param`, `m_param`, `sub_status`, `staff_permission`, `crcdt`, `chngdt`) VALUES
(1, 'Dashboard', 'dashboard.php', 'icon-dashboard', '1', 'admin', 'admin', '0', '0', '0', '1', '2017-10-11 15:04:20', 1564826907),
(2, 'Product Management', '', 'dropdown-toggle', '0', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:08:00', 0),
(4, 'Purchase History', 'productspurchase.php', '', '1', 'admin', '', '1', '2', '0', '1', '2017-10-11 15:08:54', 0),
(5, 'Stock Management', '', 'dropdown-toggle', '0', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:09:47', 0),
(6, 'Stock List', 'stock.php', '', '1', 'admin', '', '1', '5', '0', '1', '2017-10-11 15:10:09', 0),
(7, 'Sold Stock', 'sold.php', '', '1', 'admin', '', '1', '5', '0', '1', '2017-10-11 15:10:32', 0),
(8, 'Wastage Stock', 'wastage.php', '', '1', 'admin', '', '1', '5', '0', '1', '2017-10-11 15:10:53', 0),
(9, 'Menu Management', 'menu.php', 'icon-list', '0', 'admin', '', '0', '0', '0', '1', '2017-10-11 15:11:27', 0),
(10, 'Staff Management', 'staff.php', 'icon-list', '1', 'admin', '', '0', '0', '0', '1', '2017-10-11 15:11:53', 0),
(11, 'User Management', '', 'icon-list', '1', 'admin', 'admin', '0', '0', '1', '1', '2017-10-11 15:12:33', 1557525663),
(12, 'Reward Management', 'reward.php', 'icon-list', '0', 'admin', '', '0', '0', '0', '1', '2017-10-11 15:12:59', 0),
(13, 'Manage Membership', '', 'icon-list', '1', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:13:30', 0),
(14, 'Membership Package', 'membership.php', '', '1', 'admin', '', '1', '13', '0', '1', '2017-10-11 15:13:51', 0),
(15, 'Commission Management', '', 'icon-list', '1', 'admin', 'admin', '0', '0', '1', '1', '2017-10-11 15:14:26', 1508045376),
(16, 'Set Referral bonus', 'editrefaral.php', '', '0', 'admin', '', '1', '15', '0', '1', '2017-10-11 15:14:45', 0),
(17, 'Set Pair Commission', 'paircomission.php', '', '0', 'admin', '', '1', '15', '0', '1', '2017-10-11 15:15:10', 0),
(18, 'General Plan Details', 'general_plan.php', '', '1', 'admin', '', '1', '15', '0', '1', '2017-10-11 15:15:27', 0),
(19, 'Product Discount', '', 'icon-list', '0', 'admin', 'admin', '0', '0', '1', '1', '2017-10-11 15:15:59', 1508045532),
(20, 'Set Discount Plan', 'discountplan.php', '', '1', 'admin', '', '1', '19', '0', '1', '2017-10-11 15:16:27', 0),
(21, 'Site Setting Pages', '', 'icon-edit', '1', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:16:54', 0),
(24, 'Slider Settings', 'slider.php', '', '1', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:17:57', 0),
(25, 'Change Password', 'password.php', '', '1', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:18:17', 0),
(26, 'Change Address', 'address.php', '', '0', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:18:38', 0),
(27, 'General Settings', 'setting.php', '', '1', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:18:59', 0),
(28, 'FAQ', 'faq.php', '', '1', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:19:18', 0),
(29, 'Help', 'help.php', '', '1', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:19:38', 0),
(30, 'Upload Document', 'document.php', '', '0', 'admin', '', '1', '21', '0', '1', '2017-10-11 15:19:56', 0),
(31, 'Country Management', 'country.php', 'icon-list-alt', '1', 'admin', '', '0', '0', '0', '1', '2017-10-11 15:21:06', 0),
(32, 'Testimonial Management', 'testimonial.php', 'icon-calendar', '1', 'admin', '', '0', '0', '0', '1', '2017-10-11 15:21:34', 0),
(34, 'Payout Management', '', 'icon-eye-open', '1', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:22:35', 0),
(35, 'Referral Payout', 'payout.php', '', '1', 'admin', 'admin', '1', '34', '0', '1', '2017-10-11 15:22:54', 1560317737),
(37, 'Geanology', 'binary.php', '', '1', 'admin', 'admin', '1', '36', '0', '0', '2017-10-11 15:23:43', 1540228535),
(39, 'Active Members', 'active_user.php', '', '1', 'admin', '', '1', '38', '0', '1', '2017-10-11 15:24:37', 0),
(40, 'Inactive Members', 'inactive_user.php', '', '1', 'admin', '', '1', '38', '0', '1', '2017-10-11 15:24:54', 0),
(43, 'Transaction Settings', '', 'icon-double-angle-right', '1', 'admin', '', '0', '0', '1', '1', '2017-10-11 15:25:48', 0),
(49, 'Support Center', '', 'icon-tag', '1', 'admin', 'admin', '0', '0', '1', '1', '2017-10-11 15:28:06', 1543828466),
(50, 'Mail Statistics', 'mailstatistics.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:28:25', 0),
(51, 'Compose Mail', 'compose.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:28:44', 0),
(52, 'INBOX MAIL', 'inbox.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:29:05', 0),
(53, 'OUTBOX MAIL', 'outbox.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:29:25', 0),
(54, 'READ MAIL', 'read.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:29:44', 0),
(55, 'UNREAD MAIL', 'unread.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:30:01', 0),
(56, 'FORWARD MAIL', 'forward.php', '', '1', 'admin', '', '1', '49', '0', '1', '2017-10-11 15:30:19', 0),
(57, 'Withdraw Report', 'withdraw_report.php', '', '0', 'admin', '', '1', '43', '0', '1', '2017-10-11 16:47:14', 0),
(60, 'Wallet Statement', 'wallet.php', '', '1', 'admin', '', '1', '59', '0', '1', '2017-10-12 14:27:33', 0),
(61, 'Level Payout', 'level-payout.php', '', '1', 'admin', '', '1', '34', '0', '1', '2017-10-13 14:17:45', 0),
(64, 'Renewal Users', 'renewalusers.php', '', '1', 'admin', '', '1', '62', '0', '1', '2017-10-13 17:20:30', 0),
(66, 'Non Renewal Users', 'nonrenewalusers.php', '', '1', 'admin', '', '1', '62', '0', '1', '2017-10-14 13:06:47', 0),
(68, 'Purchase Bonus', 'purchase_bonus_list.php', '', '0', 'admin', '', '1', '34', '0', '1', '2018-06-30 08:43:08', 0),
(73, 'laa', 'ab', '', '1', 'admin', '', '1', '36', '0', '1', '2018-10-31 18:20:05', 0),
(76, 'Product management', 'products.php', '', '1', 'admin', '', '1', '2', '0', '1', '2019-01-02 07:52:57', 0),
(77, 'EPIN Management', '', '', '0', 'admin', '', '0', '0', '1', '1', '2019-05-10 07:57:42', 0),
(78, 'EPIN Generate', 'epin-generate.php', '', '1', 'admin', 'admin', '1', '77', '0', '1', '2019-05-10 07:58:07', 1557444699),
(79, 'EPIN List', 'epin-list.php', '', '1', 'admin', '', '1', '77', '0', '1', '2019-05-10 07:59:24', 0),
(80, 'Epin Approval', 'epin_approve.php', '', '1', 'admin', '', '1', '77', '0', '1', '2019-05-11 03:47:10', 0),
(81, 'Sponsor', 'sponsor-details.php', '', '1', 'admin', '', '1', '11', '0', '1', '2019-05-11 06:35:13', 0),
(83, 'Users', 'user.php', '', '1', 'admin', '', '1', '11', '0', '1', '2019-05-11 09:00:23', 0),
(84, 'Pair Capping Bonus', 'pair-capping.php', '', '0', 'admin', '', '1', '34', '0', '1', '2019-05-15 14:07:49', 0),
(85, 'Business Settings', '', 'icon-edit', '1', 'admin', 'admin', '0', '0', '1', '1', '2019-06-01 07:07:08', 1559372851),
(86, 'Email Settings', 'email-settings.php', '', '1', 'admin', '', '1', '85', '0', '1', '2019-06-01 07:08:21', 0),
(87, 'Advance Settings', 'advance-settings.php', '', '1', 'admin', '', '1', '85', '0', '1', '2019-06-03 10:40:21', 0),
(88, 'Advertisement', '', '', '0', 'admin', '', '0', '0', '1', '1', '2019-06-05 12:15:09', 0),
(89, 'Add Advertisement', 'advertisement-add.php', '', '1', 'admin', '', '1', '88', '0', '1', '2019-06-05 12:15:42', 0),
(90, 'Advertisement List', 'advertisement-list.php', '', '1', 'admin', '', '1', '88', '0', '1', '2019-06-05 12:16:11', 0),
(91, 'Set Level Commission', 'levelcommission.php', '', '1', 'admin', '', '1', '15', '0', '1', '2019-06-08 07:17:39', 0),
(93, 'Clear Database', 'clear-database.php', '', '0', 'admin', 'admin', '1', '85', '0', '1', '2019-06-11 05:44:08', 1560234459),
(94, 'Global Income', 'global_payout.php', '', '1', 'admin', '', '1', '34', '0', '1', '2019-06-12 05:34:39', 0),
(95, 'News Management', '', 'icon-list', '1', 'admin', '', '0', '0', '1', '1', '2019-07-06 07:53:50', 0),
(96, 'News', 'news.php', '', '1', 'admin', '', '1', '95', '0', '1', '2019-07-06 07:54:39', 0),
(97, 'Wallet Details', 'bank.php', '', '1', 'admin', '', '1', '21', '0', '1', '2019-07-06 07:58:11', 0),
(98, 'Event Management', 'events.php', 'icon-list', '1', 'admin', '', '0', '0', '0', '1', '2019-07-13 06:09:09', 0),
(99, 'Feedback', 'feedback.php', NULL, '1', 'admin', NULL, '1', '21', '0', '1', '2019-08-03 13:20:05', NULL),
(100, 'CMS Management', NULL, 'icon-list', '1', 'admin', NULL, '0', '0', '1', '1', '2019-10-21 10:10:38', NULL),
(101, 'Index', 'index-cms.php', NULL, '1', 'admin', NULL, '1', '100', '0', '1', '2019-10-21 10:11:24', NULL),
(103, 'About Us', 'about-cms.php', NULL, '1', 'admin', NULL, '1', '100', '0', '1', '2019-10-21 10:12:40', NULL),
(104, 'How it works', 'works-cms.php', NULL, '1', 'admin', NULL, '1', '100', '0', '1', '2019-10-21 10:13:36', NULL),
(105, 'Other CMS', 'cms.php', NULL, '1', 'admin', NULL, '1', '100', '0', '1', '2019-10-21 10:14:01', NULL),
(107, 'Subscribers', 'subscribers.php', NULL, '1', 'admin', NULL, '1', '21', '0', '1', '2019-11-04 07:01:55', NULL),
(108, 'Review Management', 'reviews.php', NULL, '0', 'admin', NULL, '1', '21', '0', '1', '2019-11-04 07:02:25', NULL),
(109, 'Pack Purchase', 'pack_purchase.php', NULL, '1', 'admin', NULL, '1', '11', '0', '1', '2022-07-29 06:30:25', NULL),
(110, 'Global Commission', 'global_com.php', NULL, '1', 'admin', NULL, '1', '15', '0', '1', '2022-08-01 06:06:22', NULL),
(111, 'Team Bonus Management', 'team_bonus.php', NULL, '1', 'admin', NULL, '1', '15', '0', '1', '2022-08-05 05:25:38', NULL),
(112, 'Team Bonus', 'team_payout.php', NULL, '1', 'admin', NULL, '1', '34', '0', '1', '2022-08-09 04:47:15', NULL),
(113, 'ROI Payout', 'roi_payout.php', NULL, '1', 'admin', NULL, '1', '34', '0', '1', '2022-08-09 05:04:10', NULL),
(115, 'Business Wallet Withdraw', 'wallet_withdraw.php', NULL, '1', 'admin', NULL, '1', '43', '0', '1', '2022-08-11 05:10:48', NULL),
(116, 'ROI Wallet Withdraw', 'withdraw_request.php', NULL, '1', 'admin', NULL, '1', '43', '0', '1', '2022-08-11 05:12:07', NULL),
(117, 'Cancel Withdraw', 'cancel_withdraw.php', NULL, '1', 'admin', NULL, '1', '43', '0', '1', '2022-08-11 05:13:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_31_124334_create_mlm_admins_table', 1),
(3, '2022_12_31_133501_create_mlm_staff_table', 2),
(8, '2023_01_02_124354_create_main_menus_table', 3),
(12, '2023_01_08_064800_create_mlm_registers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mlm_admin`
--

CREATE TABLE `mlm_admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mlm_admin`
--

INSERT INTO `mlm_admin` (`admin_id`, `admin_username`, `password`, `admin_status`) VALUES
(1, 'admin', '$2y$10$zs1ZnY472qLCkzHdc4eNEe7W6y0RnNLA4rzjce.ftHsQ8YL1etQc2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mlm_register`
--

CREATE TABLE `mlm_register` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_rank` int(11) DEFAULT NULL,
  `user_profileid` varchar(255) DEFAULT NULL,
  `epin` varchar(255) DEFAULT NULL,
  `user_fname` varchar(255) DEFAULT NULL,
  `user_lname` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_dpassword` varchar(255) DEFAULT NULL,
  `user_proid` int(11) DEFAULT NULL,
  `user_sponsername` varchar(255) DEFAULT NULL,
  `user_sponserid` varchar(255) DEFAULT NULL,
  `user_placementid` varchar(255) DEFAULT NULL,
  `user_position` enum('Left','Right') DEFAULT NULL,
  `user_placement` varchar(255) DEFAULT NULL,
  `user_pancard` varchar(255) DEFAULT NULL,
  `user_dob` varchar(255) DEFAULT NULL,
  `user_secondname` varchar(255) DEFAULT NULL,
  `user_commaddr1` longtext DEFAULT NULL,
  `user_commaddr2` longtext DEFAULT NULL,
  `user_city` int(11) DEFAULT NULL,
  `user_state` int(11) DEFAULT NULL,
  `user_country` int(11) DEFAULT NULL,
  `user_postalcode` int(11) DEFAULT NULL,
  `user_paddr1` longtext DEFAULT NULL,
  `user_paddr2` longtext DEFAULT NULL,
  `user_pcity` int(11) DEFAULT NULL,
  `user_pstate` int(11) DEFAULT NULL,
  `user_pcountry` int(11) DEFAULT NULL,
  `user_ppostalcode` int(11) DEFAULT NULL,
  `user_phone` bigint(20) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_bankname` varchar(255) DEFAULT NULL,
  `user_accno` bigint(20) DEFAULT NULL,
  `user_tronaddr` varchar(255) DEFAULT NULL,
  `user_accholdername` varchar(255) DEFAULT NULL,
  `user_branch` varchar(255) DEFAULT NULL,
  `user_ifsccode` varchar(255) DEFAULT NULL,
  `user_nomineename` varchar(255) DEFAULT NULL,
  `user_identifycardtype` varchar(255) DEFAULT NULL,
  `user_idnumber` varchar(255) DEFAULT NULL,
  `user_naddr1` longtext DEFAULT NULL,
  `user_naddr2` longtext DEFAULT NULL,
  `user_ncity` int(11) DEFAULT NULL,
  `user_nstate` int(11) DEFAULT NULL,
  `user_ncountry` int(11) DEFAULT NULL,
  `user_npostalcode` int(11) DEFAULT NULL,
  `user_nphone` varchar(255) DEFAULT NULL,
  `user_nemail` varchar(255) DEFAULT NULL,
  `user_shipname` varchar(255) DEFAULT NULL,
  `user_saddr1` longtext DEFAULT NULL,
  `user_saddr2` longtext DEFAULT NULL,
  `user_scity` int(11) DEFAULT NULL,
  `user_sstate` int(11) DEFAULT NULL,
  `user_scountry` int(11) DEFAULT NULL,
  `user_spostalcode` int(11) DEFAULT NULL,
  `user_paymenttype` int(11) DEFAULT NULL,
  `user_paymentstaus` int(11) DEFAULT NULL,
  `user_login` datetime DEFAULT NULL,
  `user_updatedlogin` datetime DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_poster` varchar(255) DEFAULT NULL,
  `user_date` datetime DEFAULT NULL,
  `user_membertype` int(11) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `user_status` varchar(255) DEFAULT NULL COMMENT '0=Active',
  `user_registered` tinyint(4) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `mem_package` int(11) DEFAULT NULL,
  `mempay_status` int(11) DEFAULT NULL,
  `mem_exp_stat` int(11) DEFAULT NULL,
  `authn_stat` int(11) DEFAULT NULL,
  `authr_key` varchar(255) DEFAULT NULL,
  `ref_stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mlm_register`
--

INSERT INTO `mlm_register` (`user_id`, `user_rank`, `user_profileid`, `epin`, `user_fname`, `user_lname`, `user_password`, `user_dpassword`, `user_proid`, `user_sponsername`, `user_sponserid`, `user_placementid`, `user_position`, `user_placement`, `user_pancard`, `user_dob`, `user_secondname`, `user_commaddr1`, `user_commaddr2`, `user_city`, `user_state`, `user_country`, `user_postalcode`, `user_paddr1`, `user_paddr2`, `user_pcity`, `user_pstate`, `user_pcountry`, `user_ppostalcode`, `user_phone`, `user_email`, `user_bankname`, `user_accno`, `user_tronaddr`, `user_accholdername`, `user_branch`, `user_ifsccode`, `user_nomineename`, `user_identifycardtype`, `user_idnumber`, `user_naddr1`, `user_naddr2`, `user_ncity`, `user_nstate`, `user_ncountry`, `user_npostalcode`, `user_nphone`, `user_nemail`, `user_shipname`, `user_saddr1`, `user_saddr2`, `user_scity`, `user_sstate`, `user_scountry`, `user_spostalcode`, `user_paymenttype`, `user_paymentstaus`, `user_login`, `user_updatedlogin`, `user_image`, `user_poster`, `user_date`, `user_membertype`, `user_ip`, `user_status`, `user_registered`, `level`, `mem_package`, `mempay_status`, `mem_exp_stat`, `authn_stat`, `authr_key`, `ref_stat`) VALUES
(1, 0, 'VP20190515', NULL, 'Rajesh', NULL, '$2y$10$eicq6NqItuWHQ5ACda/A5eIOJf9dLhUInjopHP5voVAsDPdtd7jCK', '123456', 0, NULL, NULL, NULL, 'Left', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ahmedmeeraninet1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'dhmpswiw', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2022-10-05 09:32:38', 0, NULL, '0', 0, 0, 22, 0, 2, 0, NULL, 1),
(5, NULL, 'VP6709370', NULL, 'Test Left', 'Left', '$2y$10$i7l6yKDj3FTienqyHecbue8n7dHAcw37/sugAeXuYwxSa2/2dErha', '1234', NULL, 'Rajesh', 'VP20190515', 'VP20190515', 'Left', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9876543210, 'left@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2023-01-10 14:21:51', NULL, '127.0.0.1', '0', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$GLLNbHlSKTwuBCwPacAFm.n9hdd2YcyfYCmGfraUarmRATqO1C1v.', NULL),
(6, NULL, 'VP6249167', NULL, 'Test Right', 'Right', '$2y$10$gUBPW5j0XSqcpmJmuCYXQ..Jh40hrHo20VeuMt40cM3HK8CvH0V7m', '1234', NULL, 'Rajesh', 'VP20190515', 'VP20190515', 'Right', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9876543210, 'right@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2023-01-10 14:22:28', NULL, '127.0.0.1', '0', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MbyToVFc/Yaarhd84qZV7exErPHdGQ3kD7D9K2TdTuaQ5Zafaauey', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mlm_staff`
--

CREATE TABLE `mlm_staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `staff_username` varchar(255) NOT NULL,
  `staff_email` varchar(255) NOT NULL,
  `staff_password` varchar(255) NOT NULL,
  `staff_Mob` varchar(255) NOT NULL,
  `menu_permission` varchar(255) NOT NULL,
  `active_status` int(11) NOT NULL,
  `crcdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mlm_staff`
--

INSERT INTO `mlm_staff` (`staff_id`, `staff_username`, `staff_email`, `staff_password`, `staff_Mob`, `menu_permission`, `active_status`, `crcdt`, `ip`) VALUES
(1, 'staff', 'staff@mail.com', 'India1947', '1232334333', '1,11', 1, '2023-01-08 08:29:56', '192.168.0.156');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mlm_admin`
--
ALTER TABLE `mlm_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `mlm_register`
--
ALTER TABLE `mlm_register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mlm_staff`
--
ALTER TABLE `mlm_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mlm_admin`
--
ALTER TABLE `mlm_admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mlm_register`
--
ALTER TABLE `mlm_register`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mlm_staff`
--
ALTER TABLE `mlm_staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
