-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 10:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmt&gc`
--

-- --------------------------------------------------------

--
-- Table structure for table `constructions`
--

CREATE TABLE `constructions` (
  `id` int(11) NOT NULL,
  `construction_category_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `tag_line` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `deleted_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constructions`
--

INSERT INTO `constructions` (`id`, `construction_category_id`, `title`, `tag_line`, `description`, `image`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Residential Construction', 'Craft your dream home with our residential construction services, where meticulous attention to detail meets your unique vision for the perfect living space.', 'Our residential construction services bring your dream home to life. From the initial concept to the final nail, we work closely with you to create a custom home that reflects your lifestyle, preferences, and unique needs. Our experienced team ensures quality craftsmanship, attention to detail, and timely delivery, making the home-building process a seamless and exciting journey.', '1708916803.jpg', '2024-02-25', '2024-02-26 03:06:43.724407', '2024-02-25 19:06:43.724407', NULL),
(2, 2, 'Commercial Renovations', 'Elevate your business environment with our expert commercial renovation services, seamlessly blending innovative design and functionality to transform your workplace.', 'Transform your commercial space into a modern and functional environment with our expert commercial renovation services. Whether you are looking to revamp your office, retail store, or restaurant, our team excels in creating innovative designs and executing renovations that enhance both aesthetics and functionality. We understand the importance of minimizing disruptions to your business, and our efficient process ensures a smooth transition from concept to completion.', '1708918020.jpg', '2024-02-25', '2024-02-26 03:27:00.091789', '2024-02-25 19:27:00.091789', NULL),
(3, 3, 'Structural Repairs', 'Ensure the longevity of your property through our specialized structural repair services, addressing foundation cracks and weaknesses with precision and quality materials.', 'Safeguard the integrity of your property with our specialized structural repair services. Our team of skilled professionals addresses issues such as foundation cracks, settling problems, and structural weaknesses. Using advanced techniques and high-quality materials, we provide lasting solutions to ensure the stability and longevity of your building. Trust us to assess, repair, and strengthen your structure effectively.', '1708919280.jpeg', '2024-02-25', '2024-02-26 03:48:00.107281', '2024-02-25 19:48:00.107281', NULL),
(4, 4, 'Smart Home Construction', 'Experience the future of living with our smart home construction services, integrating advanced technology and automation for unparalleled convenience, energy efficiency, and security.', 'Embrace the future of living with our smart home construction services. We integrate cutting-edge technology and automation into the design and construction of your home, providing unparalleled convenience, energy efficiency, and security. Imagine controlling lighting, climate, security, and entertainment systems at the touch of a button. Experience a modern lifestyle with our expertise in building intelligent and connected homes.', '1708919613.jpg', '2024-02-25', '2024-02-26 03:53:33.297434', '2024-02-25 19:53:33.297434', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `constructions_categories`
--

CREATE TABLE `constructions_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constructions_categories`
--

INSERT INTO `constructions_categories` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Constructions', 'Craft your dream home with our residential construction services, where meticulous attention to detail meets your unique vision for the perfect living space.', '2024-02-20 02:23:13', '2024-02-19 18:23:13', NULL),
(2, 'Renovations', 'Elevate your business environment with our expert commercial renovation services, seamlessly blending innovative design and functionality to transform your workplace.', '2024-02-20 02:23:13', '2024-02-19 18:23:13', NULL),
(3, 'Repairs', 'Ensure the longevity of your property through our specialized structural repair services, addressing foundation cracks and weaknesses with precision and quality materials', '2024-02-20 02:24:25', '2024-02-19 18:24:25', NULL),
(4, 'Remodeling', 'Experience the future of living with our smart home construction services, integrating advanced technology and automation for unparalleled convenience, energy efficiency, and security.', '2024-02-20 02:24:25', '2024-02-19 18:24:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_category_id` int(255) NOT NULL,
  `title` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `client` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_category_id`, `title`, `description`, `client`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Residential Construction', 'Welcome to The Middle Mountain Transport and General Contracting s Residential Construction division, where we transform dreams into homes. With a commitment to precision, craftsmanship, and personalized service, we specialize in custom home construction, renovations, additions, and sustainable building practices. From concept to completion, our experienced team collaborates closely with clients, architects, and subcontractors to ensure that every project reflects individual preferences and lifestyle needs. At The Middle Mountain, we go beyond building structures; we create living spaces that resonate with comfort, functionality, and timeless design. Let us be your trusted partner in turning your vision into a reality.', 'ABC Client', '2024-02-25', '2024-02-28 03:07:59', '2024-02-27 19:07:59', NULL),
(2, 1, 'Commercial Renovations', 'Welcome to The Middle Mountain Transport and General Contracting s Commercial Renovations division, where we redefine and elevate commercial spaces. With a focus on innovation, efficiency, and attention to detail, our experienced team specializes in transforming businesses through strategic renovations. Whether you are looking to revamp your office, retail space, or commercial facility, we tailor our services to meet your unique requirements. From concept development to project completion, we prioritize minimal disruption to your operations while delivering a refreshed, modern, and functional environment. Partner with us for a seamless and professional commercial renovation experience, where your business objectives align seamlessly with our commitment to quality craftsmanship and client satisfaction. Let The Middle Mountain be your trusted choice for revitalizing commercial spaces.', 'DEF Client', '2024-02-25', '2024-02-28 03:13:56', '2024-02-27 19:13:56', NULL),
(3, 3, 'Structural Repairs', 'Welcome to The Middle Mountain Transport and General Contracting s Structural Repairs division, where we take pride in restoring the integrity and safety of your buildings. With a focus on precision, expertise, and a commitment to quality, our skilled team specializes in addressing structural issues with thorough repairs. Whether your property requires foundation reinforcement, masonry restoration, or structural enhancements, we bring a wealth of experience to ensure the longevity and stability of your structures. Our comprehensive approach involves detailed assessments, transparent communication, and timely solutions to meet your specific needs. Trust The Middle Mountain for reliable and professional structural repairs, safeguarding the longevity and resilience of your buildings. Your safety and peace of mind are our top priorities.', 'GHI Client', '2024-02-25', '2024-02-28 03:17:44', '2024-02-27 19:17:44', NULL),
(4, 4, 'Smart Home Construction', 'Welcome to The Middle Mountain Transport and General Contracting s Smart Home Construction division, where we blend cutting-edge technology with superior craftsmanship to create intelligent and connected living spaces. Our expert team specializes in integrating smart home solutions seamlessly into the construction process, offering a range of services from custom designs to retrofitting existing homes. Whether you desire automated lighting, climate control, security systems, or complete home automation, we tailor our services to meet your specific needs. With a commitment to innovation and efficiency, we transform traditional homes into modern, technologically advanced dwellings. Partner with us to experience the convenience, energy efficiency, and security that smart home construction brings. The Middle Mountain is your trusted partner in building homes that not only stand the test of time but also keep pace with the future.', 'JKL Client', '2024-02-25', '2024-02-28 03:24:54', '2024-02-27 19:24:54', NULL),
(5, 5, 'House Relocation Services​', 'Welcome to The Middle Mountain Transport and General Contracting s House Relocation Services, where we specialize in seamlessly moving your home to new horizons. Our dedicated team is equipped with the expertise and state-of-the-art equipment necessary to handle the intricate process of relocating houses with precision and care. Whether you are moving within the neighborhood or across town, our comprehensive services cover every aspect, from initial planning to the safe and efficient transportation of your home. We prioritize safety, efficiency, and open communication throughout the relocation process. Trust The Middle Mountain to make your house move a smooth and stress-free experience, ensuring your home arrives at its new location intact and ready for a fresh chapter. Choose us for a reliable partner in turning the challenge of house relocation into a well-coordinated and successful endeavor.', 'MNO Client', '2024-02-26', '2024-02-28 03:27:38', '2024-02-27 19:27:38', NULL),
(6, 7, 'Commercial Relocation Services', 'Welcome to The Middle Mountain Transport and General Contracting s Commercial Relocation Services, where we excel in orchestrating seamless moves for businesses. Our dedicated team understands the unique challenges of relocating commercial spaces and is committed to delivering a stress-free and efficient transition. Whether you are moving offices, retail outlets, or entire facilities, our comprehensive services cover meticulous planning, expert packing, secure transportation, and timely setup at the new location. We prioritize minimizing downtime and disruption to your operations while ensuring the safety and integrity of your assets during the move. Trust The Middle Mountain for a strategic and reliable partner in commercial relocation, where your business continuity and satisfaction are our top priorities. Let us handle the logistics, so you can focus on what matters most – the continued success of your business in its new space.', 'PQR', '2024-02-27', '2024-02-28 03:46:44', '2024-02-27 19:46:44', NULL),
(7, 6, 'Cargo Packing Services', 'Welcome to The Middle Mountain Transport and General Contracting s Cargo Packing Services, where we redefine the standards of secure and efficient cargo handling. Our dedicated team specializes in providing meticulous packing solutions for a diverse range of cargo, ensuring safe transportation and delivery to your destination. Whether its fragile goods, heavy equipment, or specialized cargo, our experts employ industry-best practices and high-quality materials to secure your items during transit. We understand the importance of timely and damage-free delivery, and our packing services are tailored to meet the unique requirements of each shipment. Trust The Middle Mountain for professional cargo packing services that prioritize the safety and integrity of your goods, ensuring they reach their destination in optimal condition. Partner with us for a reliable and secure packing solution that exceeds your expectations.', 'STU Client', '2024-02-27', '2024-02-28 04:05:55', '2024-02-27 20:05:55', NULL),
(8, 8, 'Local Transport Shifting Services', 'Welcome to The Middle Mountain Transport and General Contracting s Local Transport Shifting Services, where we excel in providing seamless and efficient relocation solutions for your local moves. Whether you are shifting your residence or office within the neighborhood or across town, our dedicated team is here to ensure a stress-free and smooth transition. We specialize in careful packing, secure transportation, and timely delivery, prioritizing the safety and integrity of your belongings. Our local transport shifting services are designed to minimize downtime and disruption, allowing you to settle into your new space with ease. Trust The Middle Mountain for reliable and professional local shifting services that prioritize your convenience and satisfaction. Let us handle the logistics, so you can focus on the excitement of your new beginning.', 'VWX', '2024-02-27', '2024-02-28 04:10:37', '2024-02-27 20:10:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Constructions', '2024-02-26 00:35:09', '2024-02-25 16:35:09', NULL),
(2, 'Renovations', '2024-02-26 00:35:09', '2024-02-25 16:35:09', NULL),
(3, 'Repairs', '2024-02-26 00:35:09', '2024-02-25 16:35:09', NULL),
(4, 'Remodeling', '2024-02-26 07:23:38', '2024-02-25 23:23:38', NULL),
(5, 'House Relocation', '2024-02-26 07:25:22', '2024-02-25 23:25:22', NULL),
(6, 'Cargo Packing', '2024-02-26 07:25:22', '2024-02-25 23:25:22', NULL),
(7, 'Comm. Relocation', '2024-02-26 07:26:04', '2024-02-25 23:26:04', NULL),
(8, 'L.T. Shifting', '2024-02-26 07:26:04', '2024-02-25 23:26:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(255) NOT NULL,
  `title` varchar(5000) DEFAULT NULL,
  `file` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `title`, `file`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '65dea38f30a44-1709089679.jpg', '65dea38f30a44-1709089679.jpg', '2024-02-28 03:07:59', NULL, NULL),
(2, 1, '65dea38f319bf-1709089679.jpg', '65dea38f319bf-1709089679.jpg', '2024-02-28 03:07:59', NULL, NULL),
(3, 1, '65dea38f326b5-1709089679.jpg', '65dea38f326b5-1709089679.jpg', '2024-02-28 03:07:59', NULL, NULL),
(4, 2, '65dea4f4efc66-1709090036.jpg', '65dea4f4efc66-1709090036.jpg', '2024-02-28 03:13:56', NULL, NULL),
(5, 2, '65dea4f4f0c9b-1709090036.jpg', '65dea4f4f0c9b-1709090036.jpg', '2024-02-28 03:13:56', NULL, NULL),
(6, 2, '65dea4f4f1808-1709090036.jpg', '65dea4f4f1808-1709090036.jpg', '2024-02-28 03:13:56', NULL, NULL),
(7, 2, '65dea4f4f2269-1709090036.jpg', '65dea4f4f2269-1709090036.jpg', '2024-02-28 03:13:56', NULL, NULL),
(8, 3, '65dea5d87729f-1709090264.jpg', '65dea5d87729f-1709090264.jpg', '2024-02-28 03:17:44', NULL, NULL),
(9, 4, '65dea78685652-1709090694.jpg', '65dea78685652-1709090694.jpg', '2024-02-28 03:24:54', NULL, NULL),
(10, 5, '65dea82a75f2a-1709090858.jpg', '65dea82a75f2a-1709090858.jpg', '2024-02-28 03:27:38', NULL, NULL),
(11, 5, '65dea82a76986-1709090858.jpg', '65dea82a76986-1709090858.jpg', '2024-02-28 03:27:38', NULL, NULL),
(12, 6, '65deaca446ece-1709092004.jpg', '65deaca446ece-1709092004.jpg', '2024-02-28 03:46:44', NULL, NULL),
(13, 6, '65deaca447a20-1709092004.jpg', '65deaca447a20-1709092004.jpg', '2024-02-28 03:46:44', NULL, NULL),
(14, 7, '65deb123b9301-1709093155.jpg', '65deb123b9301-1709093155.jpg', '2024-02-28 04:05:55', NULL, NULL),
(15, 7, '65deb123bab38-1709093155.jpg', '65deb123bab38-1709093155.jpg', '2024-02-28 04:05:55', NULL, NULL),
(16, 7, '65deb123bbaca-1709093155.jpg', '65deb123bbaca-1709093155.jpg', '2024-02-28 04:05:55', NULL, NULL),
(17, 8, '65deb23dbfa52-1709093437.jpg', '65deb23dbfa52-1709093437.jpg', '2024-02-28 04:10:37', NULL, NULL),
(18, 8, '65deb23dc07bc-1709093437.jpg', '65deb23dc07bc-1709093437.jpg', '2024-02-28 04:10:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shehzad', 'Office Manager', '', '2024-02-28 04:34:47', '2024-02-27 20:34:47', NULL),
(2, 'Munawar Khan', 'Office Manager', '', '2024-02-28 04:35:04', '2024-02-27 20:35:04', NULL),
(3, 'Mir Wali', 'General Manager', '', '2024-02-28 04:35:46', '2024-02-27 20:35:46', NULL),
(4, 'Talha Dilawar', 'Accountant', '', '2024-02-28 04:36:56', '2024-02-27 20:36:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(11) NOT NULL,
  `transport_category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `tag_line` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `transport_category_id`, `title`, `tag_line`, `description`, `image`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'House Relocation Services​', 'Moving Made Effortless. Your Journey to a New Home Begins with House Relocation Services.', 'Welcome to our House Relocation Services. your trusted partner in seamless transitions. Whether you are moving across town or to an entirely new city, we understand that the process of relocating can be both exciting and challenging. Our dedicated team is here to make your move a breeze, offering a comprehensive range of services to cater to your unique needs. From expert packing and secure transportation to efficient unpacking and settling-in support, we prioritize the safety of your belongings and the comfort of your move. Trust us to turn your relocation into a smooth and stress-free experience. Welcome to a new chapter with House Relocation Services.', '1708923002.png', '2024-02-25', '2024-02-26 04:50:02', '2024-02-25 20:50:02', NULL),
(2, 2, 'Commercial Relocation Services', 'Seamless Transitions, Strategic Moves: Elevate Your Business with Commercial Relocation Services.', 'Welcome to our Commercial Relocation Services, where efficiency meets precision in every move. We understand that relocating your business is not just a change of address but a strategic step towards growth. Our dedicated team specializes in seamless commercial moves, providing tailored solutions to minimize downtime and ensure a smooth transition. From meticulous planning and secure packing to timely transportation and setup, we are committed to preserving the integrity of your business operations. Choose confidence, choose Commercial Relocation Services, and elevate your business with a stress-free move. Your success, our commitment.', '1708923259.jpg', '2024-02-25', '2024-02-26 04:54:19', '2024-02-25 20:54:19', NULL),
(3, 3, 'Loading/Unloading Services', 'Heavy on Service, Light on Stress: Elevate Your Load with Loading/Unloading Services.', 'Welcome to Loading/Unloading Services, where we redefine the ease of moving heavy burdens. Our expert team is dedicated to taking the weight off your shoulders – literally. Whether you are loading up for a move or unloading a shipment, we specialize in the efficient and secure handling of your belongings. With precision and care, we ensure that every item is treated with the utmost respect, making your loading and unloading experience hassle-free. Trust us to handle the heavy lifting, leaving you with the peace of mind you deserve. Welcome to a smoother, stress-free loading and unloading process with Loading/Unloading Services.', '1708923466.jpg', '2024-02-25', '2024-02-26 04:57:46', '2024-02-25 20:57:46', NULL),
(4, 4, 'Cargo Packing Services', 'Secure Shipments, Seamless Solutions: Elevate Your Cargo Experience with Cargo Packing Services.', 'Welcome to Cargo Packing Services, where precision meets protection in every package. We specialize in securing your cargo for the journey ahead, ensuring that it reaches its destination intact and on time. Our expert team employs top-notch packing techniques and materials to safeguard your valuable goods during transit. From fragile items to bulky equipment, we handle it all with care and proficiency. Trust Cargo Packing Services for a worry-free shipping experience – because your cargo deserves the best protection. Ship with confidence, ship with us.', '1708923786.jpg', '2024-02-25', '2024-02-26 05:03:06', '2024-02-25 21:03:06', NULL),
(5, 5, 'Local Transport Shifting Services', 'Swift Shifts, Seamless Solutions: Your Local Move, Elevated with Local Transport Shifting Services.', 'Welcome to Local Transport Shifting Services, your partner in hassle-free relocations across town. Our dedicated team understands the importance of a smooth transition, and we are here to make your local move stress-free. Whether you are shifting your home or office, we offer reliable and efficient transport services tailored to your needs. From careful packing to timely delivery, we prioritize the safety of your belongings. Choose Local Transport Shifting Services for a seamless and swift relocation experience within your community. Your move, our commitment.', '1708924173.jpg', '2024-02-25', '2024-02-26 05:09:33', '2024-02-25 21:09:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transport_categories`
--

CREATE TABLE `transport_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport_categories`
--

INSERT INTO `transport_categories` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'House Relocation Services​', 'Moving Made Effortless: Your Journey to a New Home Begins with House Relocation Services.', '2024-02-26 04:31:06', '2024-02-26 05:30:24', '2024-02-26 05:30:24'),
(2, 'Commercial Relocation Services', 'Seamless Transitions, Strategic Moves: Elevate Your Business with Commercial Relocation Services.', '2024-02-26 04:33:20', '2024-02-26 05:32:46', '2024-02-26 05:32:46'),
(3, 'Loading/Unloading Services', 'Welcome to Loading/Unloading Services, where we redefine the ease of moving heavy burdens. Our expert team is dedicated to taking the weight off your shoulders – literally! Whether you\'re loading up for a move or unloading a shipment, we specialize in the efficient and secure handling of your belongings. With precision and care, we ensure that every item is treated with the utmost respect, making your loading and unloading experience hassle-free. Trust us to handle the heavy lifting, leaving you with the peace of mind you deserve. Welcome to a smoother, stress-free loading and unloading process with Loading/Unloading Services.\r\n\r\n\r\n\r\n\r\n', '2024-02-26 04:52:54', '2024-02-26 05:33:36', '2024-02-26 05:33:36'),
(4, 'Cargo Packing Services', 'Welcome to Cargo Packing Services, where precision meets protection in every package. We specialize in securing your cargo for the journey ahead, ensuring that it reaches its destination intact and on time. Our expert team employs top-notch packing techniques and materials to safeguard your valuable goods during transit. From fragile items to bulky equipment, we handle it all with care and proficiency. Trust Cargo Packing Services for a worry-free shipping experience – because your cargo deserves the best protection. Ship with confidence, ship with us.', '2024-02-26 04:59:15', '2024-02-26 05:58:25', '2024-02-26 05:58:25'),
(5, 'Local Transport Shifting Services', 'Welcome to Local Transport Shifting Services, your partner in hassle-free relocations across town. Our dedicated team understands the importance of a smooth transition, and we\'re here to make your local move stress-free. Whether you\'re shifting your home or office, we offer reliable and efficient transport services tailored to your needs. From careful packing to timely delivery, we prioritize the safety of your belongings. Choose Local Transport Shifting Services for a seamless and swift relocation experience within your community. Your move, our commitment.', '2024-02-26 05:03:54', '2024-02-26 06:01:11', '2024-02-26 06:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `username` varchar(5000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `username`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web Developer', 'Saddam ', 'Saddam@#$%123', 'saddamakbar777@gmail.com', '2024-02-28 02:46:08', NULL, NULL),
(4, 'saddam', 'saddam', 'Saddam@#$%123', 'saddamakbar669@gmail.com', '2024-05-01 20:52:11', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constructions`
--
ALTER TABLE `constructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constructions_categories`
--
ALTER TABLE `constructions_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport_categories`
--
ALTER TABLE `transport_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constructions`
--
ALTER TABLE `constructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `constructions_categories`
--
ALTER TABLE `constructions_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transport_categories`
--
ALTER TABLE `transport_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
