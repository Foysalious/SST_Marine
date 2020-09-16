-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 09:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marine`
--

-- --------------------------------------------------------

--
-- Table structure for table `anchors`
--

CREATE TABLE `anchors` (
  `id` int(10) UNSIGNED NOT NULL,
  `anchor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anchors`
--

INSERT INTO `anchors` (`id`, `anchor`) VALUES
(1, 'Seismic vessel'),
(2, 'Anchor Handling Tug'),
(3, 'Carousel Combi Tug'),
(4, 'Offshore Support & Supply Vessel'),
(5, 'Diving Support Vessel'),
(6, 'Buoy Laying Vessel'),
(7, 'Utility Vessel'),
(8, 'Cement Carrier / Cargo Vessel'),
(9, 'Oil Tanker'),
(10, 'Multi Purpose Service vessel'),
(11, 'Floating Dock etc');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`) VALUES
(3, '1599385517Kq0ZzUlHEZqv.jpg'),
(4, '159938552487bUWna2uFlV.png'),
(5, '1599385531Zww8P2hQrQh7.png'),
(6, '1599385540t7bJhKKIUQNa.png'),
(7, '1599385546e6tMowIj1btg.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `number`, `email`, `address`, `facebook`, `twitter`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '+880-029561044\r\n', 'info@sstmarinebd.com\r\n', 'Printers Building (13th Floor), 05 Rajuk Avenue,Motijheel C/A, Dhaka-1000, Bangladesh\r\n\r\n', 'foysalrahman.com', 'foysalrahman.com', 'foysalrahman.com', 'foysalrahman.com', 'foysalrahman.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(8, 'asda', 'dasd', 'foysalrahman112@gmail.com', '01855570816', 'adsasdadasd', '2020-09-13 18:00:00', '2020-09-25 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countdowns`
--

CREATE TABLE `countdowns` (
  `id` int(10) UNSIGNED NOT NULL,
  `projects_done` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offshore_projects` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expert_engineers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `man_power` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countdowns`
--

INSERT INTO `countdowns` (`id`, `projects_done`, `offshore_projects`, `expert_engineers`, `man_power`, `created_at`, `updated_at`) VALUES
(1, '40', '10', '17', '40', '2020-09-06 03:14:02', '2020-09-06 03:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `des1s`
--

CREATE TABLE `des1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `description_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `des1s`
--

INSERT INTO `des1s` (`id`, `description_1`, `description_2`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>SST MARINE</strong>&nbsp;has started its journey on December 2010 with 3(Three) Class Projects of Karnafuly Ship Builders Ltd under BV (Bureau Veritas) class. Before starting this firm, the directors of this company (Muhammad Sirajul Islam &amp; Golam Sharwar) worked in a well-reputed ship design firm of Singapore &ldquo;SeaTech Solutions International (S) Pte Ltd&rdquo; for more than 5(five) years both in Bangladesh &amp; Singapore. During this working period in SeaTech they were engaged in projects under different classes like LRS, ABS, DNV, BV, GL, NKK, IRS.</p>', '<p><strong>SST MARINE</strong>&nbsp;is a consultancy organization established with the major objective of providing highly professional services in the field of Naval Architects, Ship Design, Ship Construction, and related Engineering Projects.</p>\r\n\r\n<p>The office and design set up are fully computerized and this facility is utilized for all design, drawings and mathematical calculations through the use of the latest design software.<br />\r\n<br />\r\n<strong>SST MARINE</strong>&nbsp;is well equipped with a wide range of data, which enables the designers to undertake design and computation work efficiently and the latest techniques currently being utilized by the industry. The company is well versed with the latest rules and regulations of all major Classification society and the International Maritime Organization.<br />\r\n<br />\r\nThe main objective of this company is to develop the organization as a client-oriented entity and success can be attributed to the problem-solving approach, which the company has always adopted.<br />\r\n<br />\r\n<strong>SST MARINE</strong>&nbsp;understands the needs of Owners and always endeavors to complete projects from start to a successful, timely finish at a very attractive cost.</p>', '2020-09-06 04:24:14', '2020-09-06 04:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `description_anchors`
--

CREATE TABLE `description_anchors` (
  `id` int(10) UNSIGNED NOT NULL,
  `anchor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `title`, `paragraph`, `icon_image`, `created_at`, `updated_at`) VALUES
(1, '100% Quality Design', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Ut Elit Tellus, Luctus Nec Ullamcorper.', NULL, '2020-09-06 04:50:40', '2020-09-06 04:50:40'),
(2, 'We\'re Certified', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.', NULL, '2020-09-06 04:54:04', '2020-09-06 04:54:04'),
(3, 'Technology Based', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.', NULL, '2020-09-06 04:54:36', '2020-09-06 04:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_28_154953_create_sliders_table', 1),
(5, '2020_08_29_060409_create_services_table', 1),
(6, '2020_08_29_071910_create_anchors_table', 1),
(7, '2020_08_29_082033_create_countdowns_table', 1),
(8, '2020_08_29_104028_create_clients_table', 1),
(9, '2020_08_30_045514_create_solutions_table', 1),
(10, '2020_08_30_062516_create_projects_table', 1),
(12, '2020_08_31_042651_create_testimonials_table', 1),
(14, '2020_08_31_104808_create_description_anchors_table', 1),
(15, '2020_09_02_044946_create_teams_table', 1),
(16, '2020_09_02_071523_create_technos_table', 1),
(17, '2020_09_02_104455_create_contacts_table', 1),
(18, '2020_09_03_053428_create_service_pages_table', 1),
(19, '2020_09_03_082416_create_ships_table', 1),
(20, '2020_08_31_073421_create_des1s_table', 2),
(21, '2020_08_30_102755_create_designs_table', 3),
(22, '2020_09_07_080403_create_contact_forms_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_image`, `created_at`, `updated_at`) VALUES
(1, '1599386035asqkSlhfCrhf.jpeg', '2020-09-06 03:53:55', '2020-09-06 03:53:55'),
(2, '1599386041uW5rmSXUkrTw.jpg', '2020-09-06 03:54:01', '2020-09-06 03:54:01'),
(3, '15993860489u1t9SbJpcci.png', '2020-09-06 03:54:08', '2020-09-06 03:54:08'),
(4, '1599386054IyPCIQCFY4IW.png', '2020-09-06 03:54:14', '2020-09-06 03:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `paragraph` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `paragraph`) VALUES
(2, 'SST MARINE has started their journey on December, 2010 with 3(Three) Class Projects of Karnafuly Ship Builders Ltd under BV (Bureau Veritas) class. Before starting this firm, the directors of this company (Muhammad Sirajul Islam & Golam Sharwar) worked in a well reputed ship design firm of Singapore “SeaTech Solutions International (S) Pte Ltd” for more than 5(five) years both in Bangladesh & Singapore. During this working period in SeaTech they were engaged in the projects under different class like LRS,ABS, DNV,BV,GL,NKK,IRS.');

-- --------------------------------------------------------

--
-- Table structure for table `service_pages`
--

CREATE TABLE `service_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_pages`
--

INSERT INTO `service_pages` (`id`, `title`, `services`, `created_at`, `updated_at`) VALUES
(1, 'Conceptual Design & Feasibility Study.', 'Ship Design', '2020-09-06 23:15:42', '2020-09-06 23:15:42'),
(2, 'General Arrangement (GA) & Specifications.', 'Ship Design', '2020-09-06 23:16:02', '2020-09-06 23:16:02'),
(3, 'Optimized Hull Form Design.', 'Ship Design', '2020-09-06 23:16:13', '2020-09-06 23:16:13'),
(4, 'Hull Structures & Outfitting.', 'Ship Design', '2020-09-06 23:16:21', '2020-09-06 23:16:21'),
(5, 'Interior Design.', 'Ship Design', '2020-09-06 23:16:31', '2020-09-06 23:16:31'),
(6, 'Mechanical /Piping/Machinery.', 'Ship Design', '2020-09-06 23:16:40', '2020-09-06 23:16:40'),
(7, 'Electrical', 'Ship Design', '2020-09-06 23:16:49', '2020-09-06 23:16:49'),
(8, 'Shipyard Production Dwg.', 'Ship Design', '2020-09-06 23:16:58', '2020-09-06 23:16:58'),
(9, 'Model Test & CFD.', 'Engineering Services', '2020-09-06 23:18:05', '2020-09-06 23:18:05'),
(10, 'Stability Analysis/Inclining.', 'Engineering Services', '2020-09-06 23:18:19', '2020-09-06 23:18:19'),
(11, 'Structural Analysis (FEM).', 'Engineering Services', '2020-09-06 23:18:28', '2020-09-06 23:18:28'),
(12, 'Hydrodynamic Analysis.', 'Engineering Services', '2020-09-06 23:18:38', '2020-09-06 23:18:38'),
(13, 'Propeller Design & Powering.', 'Engineering Services', '2020-09-06 23:18:47', '2020-09-06 23:18:47'),
(14, 'Operation Manuals.', 'Engineering Services', '2020-09-06 23:18:56', '2020-09-06 23:18:56'),
(15, 'Shipyard Evaluations.', 'Consultancy', '2020-09-06 23:19:25', '2020-09-06 23:19:25'),
(16, 'Assistance In Tenders, Enquires &Estimates.', 'Consultancy', '2020-09-06 23:20:02', '2020-09-06 23:20:02'),
(17, 'Constructability Studies.', 'Consultancy', '2020-09-06 23:20:12', '2020-09-06 23:20:12'),
(18, 'Third Party Investigations.', 'Consultancy', '2020-09-06 23:20:22', '2020-09-06 23:20:22'),
(19, 'Shipyard Layout.', 'Consultancy', '2020-09-06 23:20:32', '2020-09-06 23:20:32'),
(20, 'Supervision Of Construction.', 'Consultancy', '2020-09-06 23:20:43', '2020-09-06 23:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `ships`
--

CREATE TABLE `ships` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vessel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `builder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `build_date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ships`
--

INSERT INTO `ships` (`id`, `name`, `category`, `vessel_name`, `owner`, `builder`, `class`, `build_date`, `description`, `features`, `image`, `created_at`, `updated_at`) VALUES
(1, 'adsad', 'asdasd', 'asddasd', 'sadad', 'asdads', 'asdad', '2222-02-05', '<p>asdasdasd</p>', '<p>asdadsad</p>', '1599460305YRR4kzNieGiZ.jpg', '2020-09-07 00:31:45', '2020-09-07 00:31:45'),
(2, 'asdads', 'asdasdad', 'dasdasd', 'dasdasd', 'asdads', 'asdasd', '5555-02-05', '<p>dasdasdsad</p>', '<p>asdadsasdasd</p>', '15994642391gNJg92VJNTW.jpg', '2020-09-07 01:37:19', '2020-09-07 01:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backGround_Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `backGround_Image`, `created_at`, `updated_at`) VALUES
(1, 'High-Speed Passenger Ferry', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk', '1599381905w7C1WxxEa48E.jpg', '2020-09-06 02:45:05', '2020-09-06 02:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `title`, `paragraph`, `icon_image`, `created_at`, `updated_at`) VALUES
(1, 'Ship & Offshore Design', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '1599383787a8D8pkKJewbx.png', '2020-09-06 03:16:27', '2020-09-06 03:16:27'),
(2, 'Engineering Services', 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '1599383944P0MpEu77CqJL.png', '2020-09-06 03:19:04', '2020-09-06 03:19:04'),
(3, 'Project Management', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised', '1599383993ArQTk1607vFK.png', '2020-09-06 03:19:53', '2020-09-06 03:19:53'),
(4, 'Structure Analysis', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.', '159938405448bGDD4G0nE7.png', '2020-09-06 03:20:54', '2020-09-06 03:20:54'),
(5, 'Structure Analysis', 'the directors of this company (Muhammad Sirajul Islam & Golam Sharwar) worked in a well reputed ship design firm of Singapore “SeaTech S', '1599384148iitiofc11nza.png', '2020-09-06 03:22:28', '2020-09-06 03:22:28'),
(6, 'Integrated Support', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '1599384194Er9f4XwQJ0v0.png', '2020-09-06 03:23:14', '2020-09-06 03:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `facebook`, `linkedin`, `twitter`, `team`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Foysal Rahman', 'CEO', 'facebook.com/foysalious', 'facebook.com/foysalious', 'facebook.com/foysalious', 'Engineers', '1599392480.jpg', '2020-09-06 05:33:39', '2020-09-06 05:45:58'),
(2, 'Imran Hossain', 'Managing Director', 'facebook.com/foysalious', 'facebook.com/foysalious', 'facebook.com/foysalious', 'Management', '1599392707l5GvCyNvgmve.jpg', '2020-09-06 05:45:07', '2020-09-06 05:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `technos`
--

CREATE TABLE `technos` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technos`
--

INSERT INTO `technos` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '1599394495zzLDQfQgBIXU.jpg', 'GHS (General Hydrostatic)', 'All hydrostatic calculations, Intact Stability, Grain Stability, Damage Stability (Probabilistic & Deterministic), Longitudinal Strength Calculations can be done precisely & accurately by this Software.', '2020-09-06 06:14:55', '2020-09-06 06:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Petromax LPG', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset', '159939018729nUX4TA0lYo.png', '2020-09-06 05:03:07', '2020-09-06 05:03:07'),
(2, 'Bashundhara', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset', '1599390298Jt4YqCD1JVvK.png', '2020-09-06 05:04:58', '2020-09-06 05:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Foysal Rahman', 'foysalrahman112@gmail.com', NULL, '$2y$10$QRlHASuKpZF6jcPJa0f4xe.dcwOLfpd.43vCHxon.3h3htpGVAw7O', NULL, '2020-09-11 23:31:16', '2020-09-11 23:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anchors`
--
ALTER TABLE `anchors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countdowns`
--
ALTER TABLE `countdowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `des1s`
--
ALTER TABLE `des1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description_anchors`
--
ALTER TABLE `description_anchors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_pages`
--
ALTER TABLE `service_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ships`
--
ALTER TABLE `ships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technos`
--
ALTER TABLE `technos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anchors`
--
ALTER TABLE `anchors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countdowns`
--
ALTER TABLE `countdowns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `des1s`
--
ALTER TABLE `des1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `description_anchors`
--
ALTER TABLE `description_anchors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_pages`
--
ALTER TABLE `service_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ships`
--
ALTER TABLE `ships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `technos`
--
ALTER TABLE `technos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
