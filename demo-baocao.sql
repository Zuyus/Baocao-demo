-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 01:48 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zairito`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_pages`
--

CREATE TABLE `about_us_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Icon_One` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Icon_Two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Icon_Three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Icon_Four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Title_One` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Title_Two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Title_Three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Title_Four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Description_One` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Description_Two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Description_Three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Description_Four` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Title_One` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Title_Two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Title_Three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Title_Four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Description_One` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Description_Two` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Description_Three` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Description_Four` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_pages`
--

INSERT INTO `about_us_pages` (`id`, `Location`, `en_Title`, `en_Subtitle`, `Image`, `Icon_One`, `Icon_Two`, `Icon_Three`, `Icon_Four`, `en_Title_One`, `en_Title_Two`, `en_Title_Three`, `en_Title_Four`, `en_Description_One`, `en_Description_Two`, `en_Description_Three`, `en_Description_Four`, `fr_Title_One`, `fr_Title_Two`, `fr_Title_Three`, `fr_Title_Four`, `fr_Subtitle`, `fr_Description_One`, `fr_Description_Two`, `fr_Description_Three`, `fr_Description_Four`, `created_at`, `updated_at`) VALUES
(1, 'about_us', NULL, 'About Us', 'aboutus-image.png', NULL, NULL, NULL, NULL, 'Innovative solutions <br /> to boost your projects', NULL, NULL, NULL, '<p class=\"about-us-text\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet </p>\r\n                        <p class=\"about-us-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, </p>', NULL, NULL, NULL, 'ديس ابتكار الحلول <br/> صب الداعم لك المشاريع', NULL, NULL, NULL, 'معلومات عنا', '<p class=\"about-us-text\">عند مدخل مدخل العفاريت ، كان الألم والانتقام يكمن في الوادي الرئيسي ولكن الوادي عند الأرض. حتى يحتاج الأسد إلى التوحيد. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. الدهليوم&nbsp;</p><p class=\"about-us-text\">كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. لكن العبارة اختارت الكرة. لا توجد طبقة مبتكرة لإيقافها. باسم هذا شركة مصفاة نفط عمان إنها كتلة من الحكماء</p>', NULL, NULL, NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'comfort', NULL, NULL, 'blog-5.jpg', 'service-icon-1.png', 'service-icon-2.png', 'service-icon-3.png', 'service-icon-4.png', 'All Day Comfort', 'All Day Comfort', 'All Day Comfort', 'All Day Comfort', 'We believe getting dressed should be the easiest part of your day.', 'We believe getting dressed should be the easiest part of your day.', 'We believe getting dressed should be the easiest part of your day.', 'We believe getting dressed should be the easiest part of your day.', 'راحة طوال اليوم', 'راحة طوال اليوم', 'راحة طوال اليوم', 'راحة طوال اليوم', NULL, 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'features', 'Our Features', 'Why Choose Us', NULL, 'features-icon-1.png', 'features-icon-2.png', 'features-icon-3.png', NULL, 'Why Choose Us', 'Men\'s Collection', 'Innovative Solutions', NULL, 'We believe getting dressed should be the easiest part of your day.', 'We believe getting dressed should be the easiest part of your day.', 'We believe getting dressed should be the easiest part of your day.', NULL, 'لماذا أخترتنا', 'مجموعة الرجال', 'حلول مبتكرة', NULL, NULL, 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', 'نعتقد أن ارتداء الملابس يجب أن يكون أسهل جزء من يومك.', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'profile.png', 1, NULL, '$2y$10$XTTKqipCiXMAoRrarl8A6.tsYoSKAnZncLzSND4YUiCERaLYElM.S', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image_One` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image_Two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertises`
--

INSERT INTO `advertises` (`id`, `Image_One`, `Image_Two`, `created_at`, `updated_at`) VALUES
(1, 'product-banner-1.jpg', 'product-banner-2.jpg', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `en_title`, `en_summary`, `fr_title`, `fr_summary`, `url`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'home-banner.png', 'Exclusive Summer Sale Is Going On Zairito The Shopify', 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. porttitor lectus nibh. Curabitur arcu erat, accu msan id imperdiet et, porttitor at. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue eget malesuaa. Lorem', 'التخفيضات الصيفية الحصرية مستمرة في Zairito The Shopify', 'Curabitur non nulla sit amet nisl tempus convallis quis lectus. porttitor lectus nibh. Curabitur arcu erat, accu msan id imperdiet et, porttitor at. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue eget malesuaa. Lorem            ', '#', 'home-top', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Small_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Big_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description_One` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description_Two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description_One` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description_Two` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'blog-1.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'blog-2.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11');
INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'blog-3.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'blog-4.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11');
INSERT INTO `blogs` (`id`, `Small_Image`, `Big_Image`, `en_Title`, `en_Description_One`, `en_Description_Two`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'blog-5.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(6, 'blog-6.jpg', 'blog-single-image.png', 'New line of office products', 'In Look Designed Her Best Friend, Vera Farmiga Lit Up The Many Saints Of Newark Premiere Pro Shorts To All', '<p class=\"blog-content has-dropcap\">\r\n                            Donec  utrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretiu    ut lacin ia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vesti bulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tem pus convallis quis ac lectus. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta </p>\r\n                        <div class=\"blockquote-area\">\r\n                            <p class=\"blockquote-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, lacinia eget </p>\r\n                        </div>\r\n                        <p class=\"blog-content\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.\r\n                        </p>\r\n                        <p class=\"blog-content\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Nulla porttitor accuan sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.\r\n                        </p>', 'مجموعة جديدة من المنتجات المكتبية', 'في نظرة على صديقتها المقربة ، أضاءت فيرا فارميجا العديد من قديسي شورت نيوارك بريمير برو للجميع', '<p class=\"blog-content has-dropcap\">حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.حتى ذلك الحين ، يجب أن يتحد الأسد. المركبات عنصر ، لكنها مهمة للجمهور. إذا رغب الجميع في ذلك ، فإن السعر الذي سيتحتم عليه ، هذا هو العنصر.<br></p>', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Blog_Id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Parent_Id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_BrandName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_BrandName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_BrandSlug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_BrandSlug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `en_BrandName`, `fr_BrandName`, `en_BrandSlug`, `fr_BrandSlug`, `BrandImage`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Circle', 'Cercle', 'circle', 'cercle', 'circle.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'CodeLab', 'CodeLab', 'codelab', 'codelab', 'code-lab.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'HEXLAB', 'HEXLAB', 'hexlab', 'hexlab', 'hex-lab.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'Kanba', 'Kanba', 'kanba', 'kanba', 'kanba.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(5, 'treva', 'treva', 'treva', 'treva', 'treva.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(6, 'Zootv', 'Zootv', 'zootv', 'zootv', 'zoo-tv.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(7, 'BanCi', 'BanCi', 'banci', 'banci', 'circle.png', '1', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_Category_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Category_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Category_Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Category_Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_Icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `en_Category_Name`, `fr_Category_Name`, `en_Category_Slug`, `fr_Category_Slug`, `Category_Icon`, `en_Description`, `fr_Description`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Health Category', 'فئة الصحة', 'health-category', 'n-a', NULL, NULL, NULL, 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'Women Fashion', 'أزياء نسائية', 'women-fashion', 'n-a', NULL, NULL, NULL, 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'Men Fashion', 'لكن الموضة', 'men-fashion', 'n-a', NULL, NULL, NULL, 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'Electronic', 'إلكتروني', 'electronic', 'n-a', NULL, NULL, NULL, 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(5, 'Sports', 'رياضات', 'sports', 'n-a', 'icon flaticon-blazer', 'Sports products', 'رياضات', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(6, 'Blazers Collection', 'مجموعة بليزر', 'blazers-collection', 'n-a', 'icon flaticon-blazer', 'Dress For Man And Women', 'فستان للرجال والنساء', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(7, 'Hoodie Collection', 'مجموعة هوديي', 'hoodie-collection', 'n-a', 'icon flaticon-hoodie', 'Dress For Man And Women', 'فستان للرجال والنساء', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(8, 'Long Sleeve Wear', 'ملابس طويلة سليف', 'long-sleeve-wear', 'n-a', 'icon flaticon-long-sleeve', 'Dress For Man And Women', 'فستان للرجال والنساء', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(9, 'Waistcoart Collection', 'ملابس طويلة سليف', 'waistcoart-collection', 'n-a', 'icon flaticon-waistcoat', 'Dress For Man And Women', 'فستان للرجال والنساء', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(10, 'Long Sleeve Wear', 'ملابس طويلة سليف', 'long-sleeve-wear-1', 'n-a', 'icon flaticon-long-sleeve', 'Dress For Man And Women', 'فستان للرجال والنساء', 1, '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ColorCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `Name`, `ColorCode`, `created_at`, `updated_at`) VALUES
(1, 'Red', '#FF0000', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'Black', '#000000', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'Gray', '#808080', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'Silver', '#C0C0C0', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `Product_Id` bigint(20) UNSIGNED NOT NULL,
  `Color_Id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`Product_Id`, `Color_Id`) VALUES
(6, 1),
(4, 1),
(4, 3),
(3, 1),
(3, 4),
(2, 3),
(2, 4),
(1, 1),
(1, 2),
(7, 1),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_stories`
--

CREATE TABLE `company_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Year` int(11) NOT NULL,
  `en_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_stories`
--

INSERT INTO `company_stories` (`id`, `Year`, `en_Description`, `fr_Description`, `created_at`, `updated_at`) VALUES
(1, 2016, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 2017, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 2018, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 2019, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 2020, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 2021, 'Quisque velit nisi, pretium ut lacinia in, elementum id elementum id enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew susada. Cras ultricies ligula sed magna dictum', 'الكل يريد أن يدخر ، حتى يكون سعر الأمهات ، العنصر الذي يمثل العنصر. ليس هناك فرصة للبدء. حتى ماكياج الأسد يحتاج مالو سوسادا.قول مأثور', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `compare_lists`
--

CREATE TABLE `compare_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Product_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CouponCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` double(8,2) NOT NULL,
  `Min_Expenses` double(8,2) NOT NULL,
  `ExpireDate` date NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'before' COMMENT 'after, before',
  `convert_from_usd` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `currency`, `iso`, `symbol`, `position`, `convert_from_usd`, `created_at`, `updated_at`) VALUES
(1, 'USD', 'usd', '$', 'before', 1.00, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'EUR', 'eur', '€', 'before', 0.88, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'INR', 'inr', '₹', 'before', 74.39, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'BDT', 'bdt', '৳', 'before', 85.88, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'GBP', 'gbp', '£', 'before', 1.36, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `cutomer_services`
--

CREATE TABLE `cutomer_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cutomer_services`
--

INSERT INTO `cutomer_services` (`id`, `location`, `en_description`, `fr_description`, `created_at`, `updated_at`) VALUES
(1, 'terms_conditions', '<div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">OVERVIEW</h3>\r\n                                <p class=\"term-condition-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. sem. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.</p>\r\n                                <p class=\"term-condition-text\">Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. </p>\r\n                                <p class=\"term-condition-text\">Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget </p>\r\n                            </div>\r\n                            <div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">ONLINE STORE TERMS</h3>\r\n                                <p class=\"term-condition-text\">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>\r\n                                <p class=\"term-condition-text\">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectuseget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>\r\n                                <p class=\"term-condition-text\">Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.</p>\r\n                            </div>\r\n                            <div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">COMPLETENESS AND TIMELINESS OF INFORMATION</h3>\r\n                                <p class=\"term-condition-text\">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit.</p>\r\n                                <p class=\"term-condition-text\">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus. Curabitur aliquet quam id dui </p>\r\n                                <p class=\"term-condition-text\">Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus magna justo, elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, </p>\r\n                            </div>\r\n                            <div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">GENERAL CONDITIONS</h3>\r\n                                <p class=\"term-condition-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur aliquet quam id dui posuere blandit.</p>\r\n                                <p class=\"term-condition-text\">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat.</p>\r\n                            </div>\r\n                            <div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">CHANGES TO TERMS OF SERVICE</h3>\r\n                                <p class=\"term-condition-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>\r\n                                <p class=\"term-condition-text\">Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>\r\n                                <p class=\"term-condition-text\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.</p>\r\n                            </div>\r\n                            <div class=\"single-term-condition\">\r\n                                <h3 class=\"term-conditions-title\">DISCLAIMER LIMITATION OF LIABILITY</h3>\r\n                                <p class=\"term-condition-text\">Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur.</p>\r\n                            </div>', '<div class=\"single-term-condition\">\r\n                                <h3 class=\"privacy-policy-title\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 1.75rem;\">جمع المعلومات الشخصية</h3><h3 class=\"term-conditions-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li></ul></div></h3><h3 class=\"privacy-policy-title\">جمع المعلومات الشخصية</h3><h3 class=\"privacy-policy-title-small\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\" style=\"font-size: 16px;\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></h3><h3 class=\"term-conditions-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"></ul></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"term-conditions-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"privacy-policy-title\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></h3><h3 class=\"term-conditions-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"><li class=\"feature-item\">ستمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></div></h3></div><div class=\"single-term-condition\">\r\n                            </div>', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'privacy_policy', '<div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title\">Collecting Personal Information</h3>\r\n                                <p class=\"privacy-policy-text\">Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue  eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula .</p>\r\n                                <ul class=\"privacy-feature\">\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Examples of Personal Information collected:</strong> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. <a href=\"#\" class=\"feature-link\">https://policies.google.com/privacy?hl=en</a> consectetur adipiscing rutrum congue</li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Purpose of collection:</strong> Vivamus suscipit tortor eget felis volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\"> Source of collection: </strong>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet</li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Disclosure for a business purpose:</strong>  Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, leo eget malesuada. <a href=\"#\" class=\"feature-link\">http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work</a>. non nulla sit amet nisl tempus quis ac lectus.</li>\r\n                                </ul>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title-small\">Using Personal Information</h3>\r\n                                <p class=\"privacy-policy-text\">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.</p>\r\n                                <ul class=\"privacy-feature\">\r\n                                    <li class=\"feature-item\">Dolor amet consectetur adipiscing elit eiusmod tempor incididunt labore magna</li>\r\n                                    <li class=\"feature-item\">With years of experience in the website design and development industry ThemeZaa pride</li>\r\n                                    <li class=\"feature-item\">The background of several of  the company was the ground for a versatile collection.</li>\r\n                                    <li class=\"feature-item\">Staffy founder creative director had the idea to design where comfort fashion</li>\r\n                                    <li class=\"feature-item\">Generations of shoemaking within the company was the ground versatile</li>\r\n                                </ul>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title-small\">Automatic decision-making</h3>\r\n                                <p class=\"privacy-policy-text\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitorullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh.</p>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title\">Necessary for the Functioning the Store</h3>\r\n                                <p class=\"privacy-policy-text\">Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue  eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula .</p>\r\n                                <ul class=\"privacy-feature\">\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Sharing Personal Information:</strong>  Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. <a href=\"#\" class=\"feature-link\">https://policies.google.com/privacy?hl=en</a>  consectetur adipiscing rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur</li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Automatic decision-making:</strong> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, leo eget malesuada. <a href=\"#\" class=\"feature-link\">http://www.networkadvertising.org/understanding-online-advertising/how-does-it-work.</a> non nulla sit amet nisl </li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Customer support information:</strong> Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada Vestibulum </li>\r\n                                    <li class=\"feature-item\"><strong class=\"feature-title\">Source of collection:</strong> Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>\r\n                                </ul>\r\n                            </div>', '<div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title\">جمع المعلومات الشخصية</h3>\r\n                                <p class=\"privacy-policy-text\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p>\r\n                                <ul class=\"privacy-feature\">\r\n                                    <li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li>\r\n                                    <li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li>\r\n                                    <li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li>\r\n                                    <li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li>\r\n                                </ul>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title\">جمع المعلومات الشخصية</h3><h3 class=\"privacy-policy-title-small\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\" style=\"font-size: 16px;\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></h3><ul class=\"privacy-feature\">\r\n                                </ul>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3>\r\n                                <p class=\"privacy-policy-text\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p>\r\n                            </div>\r\n                            <div class=\"single-privacy-policy\">\r\n                                <h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"privacy-policy-title\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></h3>\r\n                                <ul class=\"privacy-feature\">\r\n                                    <li class=\"feature-item\">ستمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li>\r\n                                </ul>\r\n                            </div>', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'return_policy', '<div class=\"single-refund-policy\">\r\n                                <h3 class=\"refund-policy-title\">Our Refund policy</h3>\r\n                                <p class=\"refund-policy-text\">We have a 30-day return policy, which means you have 30 days after receiving your item to request a return. To be eligible for a return, your item must be in the same condition that you received it, unworn or unused, with tags, and in its original packaging. You’ll also need the receipt or proof of purchase.  To start a return, you can contact us at <a class=\"refund-policy-link\" href=\"#\">hi@zainikcom.com</a> If your return is accepted, we’ll send you a return shipping label, as well as instructions on how and where to send your package. Items sent back to us without first requesting a return will not be accepted. You can always contact us for any return question at <a class=\"refund-policy-link\" href=\"#\">hi@zainikcom.com</a></p>\r\n                            </div>\r\n                            <div class=\"single-refund-policy\">\r\n                                <h3 class=\"refund-policy-title\">Exceptions / Non-returnable items</h3>\r\n                                <p class=\"refund-policy-text\">Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin </p>\r\n                                <p class=\"refund-policy-text\">Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat.</p>\r\n                            </div>\r\n                            <div class=\"single-refund-policy\">\r\n                                <h3 class=\"refund-policy-title\">Exchanges</h3>\r\n                                <p class=\"refund-policy-text\">Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>\r\n                            </div>\r\n                            <div class=\"single-refund-policy\">\r\n                                <h3 class=\"refund-policy-title\">Damages and issues</h3>\r\n                                <p class=\"refund-policy-text\">Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>\r\n                            </div>\r\n                            <div class=\"single-refund-policy\">\r\n                                <h3 class=\"refund-policy-title\">Refunds</h3>\r\n                                <p class=\"refund-policy-text\">Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                            </div>', '<div class=\"single-refund-policy\">\r\n                                <h3 class=\"privacy-policy-title\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 1.75rem;\">جمع المعلومات الشخصية</h3><h3 class=\"refund-policy-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li></ul></div></h3><h3 class=\"privacy-policy-title\">جمع المعلومات الشخصية</h3><h3 class=\"privacy-policy-title-small\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\" style=\"font-size: 16px;\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></h3><h3 class=\"refund-policy-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"></ul></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"refund-policy-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"privacy-policy-title\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></h3><h3 class=\"refund-policy-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"><li class=\"feature-item\">ستمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></div></h3></div><div class=\"single-refund-policy\">\r\n                            </div>', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'shipping_return', '<div class=\"single-shipping-return\">\r\n                                <h3 class=\"shipping-return-title\">Returns</h3>\r\n                                <p class=\"shipping-return-text\">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>\r\n                            </div>\r\n                            <div class=\"single-shipping-return\">\r\n                                <h3 class=\"shipping-return-title\">Exchanges</h3>\r\n                                <p class=\"shipping-return-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec,amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada.</p>\r\n                            </div>\r\n                            <div class=\"single-shipping-return\">\r\n                                <h3 class=\"shipping-return-title\">Exchanges (if applicable)</h3>\r\n                                <p class=\"shipping-return-text\">Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>\r\n                            </div>\r\n                            <div class=\"single-shipping-return\">\r\n                                <h3 class=\"shipping-return-title\">Refunds</h3>\r\n                                <p class=\"shipping-return-text\">Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Donec rutrum </p>\r\n                            </div>', '<div class=\"single-shipping-return\">\r\n                                <h3 class=\"privacy-policy-title\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 400; line-height: 1.2; font-size: 1.75rem;\">جمع المعلومات الشخصية</h3><h3 class=\"shipping-return-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li></ul></div></h3><h3 class=\"privacy-policy-title\">جمع المعلومات الشخصية</h3><h3 class=\"privacy-policy-title-small\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">ولذا فهو بحاجة إلى ابتسامة بديلة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. حتى يتم توحيد شكل القرض. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. حتى يحتاج الأسد إلى التوحيد. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</p><ul class=\"privacy-feature\" style=\"font-size: 16px;\"><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></h3><h3 class=\"shipping-return-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"></ul></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"shipping-return-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><p class=\"privacy-policy-text\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></div></h3><h3 class=\"privacy-policy-title-small\">اتخاذ القرار التلقائي</h3><h3 class=\"privacy-policy-title\"><p class=\"privacy-policy-text\" style=\"font-size: 16px;\">لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. لكن العبارة اختارت الكرة. ليس هناك وقت للاعبين للجلوس في حب الوادي والسرير. ولذا فهو بحاجة إلى ابتسامة بديلة. حتى الفايكنج يعيش لرفع الجلاد يحتاج عطلة نهاية الأسبوع عبارة غاز. ولذا فهو بحاجة إلى ابتسامة بديلة. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. قبل الطبقة الأولى من الحداد وألم الانتقام كان يكمن في السرير ؛ طالما أن المؤلف لا يرغب في أن يحب شخص ما أو شيء ما ، يمكن أن يُحب الدببة في جميع أنحاء العالم. لا توجد طبقة مبتكرة لإيقافها. الألم نفسه هو الحب ، نظام التخزين الرئيسي. لقد كان قوسًا ، وطبقة من هذا التمويل ، وعبارة في سيم. كان القوس ، طبقة هذا التمويل حتى يحتاج الأسد إلى التوحيد. باسم هذا شركة مصفاة نفط عمان لا توجد طبقة مبتكرة لإيقافها. لكن العبارة اختارت الكرة.</p></h3><h3 class=\"shipping-return-title\"><div class=\"single-privacy-policy\" style=\"font-size: 16px;\"><ul class=\"privacy-feature\"><li class=\"feature-item\">ستمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض<br></li><li class=\"feature-item\">استمرار السعر ، هذا هو العنصر. نحن نعيش بسحر عظيم ، لكن الشيء الرئيسي هو حاجة التنورة ، الوادي على الأرض</li></ul></div></h3></div><div class=\"single-shipping-return\">\r\n                            </div>', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_fr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `question_fr`, `answer`, `answer_fr`, `created_at`, `updated_at`) VALUES
(1, 'What shipping methods are availbale?', 'هل تشحن دوليا؟', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi', 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'How long will it take to get my package to recive?', 'هل تشحن دوليا؟', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi', 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'Do you ship internationally?', 'هل تشحن دوليا؟', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi', 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'What payment methods are accepted?', 'هل تشحن دوليا؟', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi', 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'Is buying on-line safe?', 'هل تشحن دوليا؟', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc  nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi', 'الألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتةالألم نفسه هو الحب ، نظام التخزين الرئيسي. أنت تحب الابتسامة الأكثر إثارة. وحتى ذلك الحين ، لا تنجم نعومة الأرض عما هو نقي من فكي الشوكولاتة', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `footer_information`
--

CREATE TABLE `footer_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Street_Address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `News_Letter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accepts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Design_Developed` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_information`
--

INSERT INTO `footer_information` (`id`, `Logo`, `Street_Address`, `Contact`, `Email`, `News_Letter`, `Accepts`, `Design_Developed`, `created_at`, `updated_at`) VALUES
(1, 'footer-logo.png', '<p class=\"address-text\">685 Market Street <br /> San Francisco, CA 94105, <br />United States</p>', ' <p class=\"contact\">Call us: 1.800.000.6690</p>', ' <p class=\"contact\">Email: support@zainikthemes.com</p>', '<p class=\"newsletter-text\">Receive our latest updates about our <br /> products and promotions.</p>', 'accepts-image.png', '<p class=\"copyright-text\">Designed And Developed By Team <a class=\"brand-name\" href=\"#\">Zainiktheme</a> Digital Agency @2021</p>', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MetaDescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MetaKeywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MetaAuthor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `Title`, `Logo`, `Favicon`, `MetaDescription`, `MetaKeywords`, `MetaAuthor`, `created_at`, `updated_at`) VALUES
(1, 'Zairito - Ecommerce', 'zairito.png', 'favicon.png', 'Zairito - Ecommerce', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', 'Zairito', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description_One` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description_Two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description_One` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description_Two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `Location`, `en_Title`, `en_Description_One`, `en_Description_Two`, `image`, `fr_Title`, `fr_Description_One`, `fr_Description_Two`, `created_at`, `updated_at`) VALUES
(1, 'many_goods', 'Many Goods', 'Popular Categories', NULL, NULL, 'العديد من السلع', 'الفئات الشعبية', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'products', 'New Products', 'Products', NULL, NULL, 'منتجات جديدة', 'منتجات', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'about_us', 'About Us', 'The Story Of Borning <br /> Company Zairito', NULL, 'about-home.jpg', 'معلومات عنا', '<div>قصة بورنينج</div><div>شركة زايريتو</div>', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'popular_products', 'Popular Products', 'Trending Products', NULL, NULL, 'المنتجات الشعبية', 'تتجه المنتجات', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'blogspot', 'Blogspot', 'TNews From Our Blog', NULL, NULL, 'بلوغسبوت', 'أخبار من مدونتنا', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 'image_gallery', 'image gallery', 'Image Gallery To Zairito For Making Better Online Shopping Experience', NULL, NULL, 'معرض الصور', 'معرض الصور لتقديم تجربة تسوق أفضل عبر الإنترنت', NULL, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(7, 'testimonial', 'Testimonial', 'What People Are <br />Saying About Oursalve', '<p>Praesent sapien massa, convallis a pellentesque nec, egestas\r\n                    Vivamus magna justo, lacinia eget consectetur sed</p>', NULL, 'شهادة', '<div>من هم الناس</div><div>نقول عن أنفسنا</div>', '<p>كتلة الحاضر حكيمة وليست من وادي القناص</p>', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `Image`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'gallery-one-1.jpg', 1, '2023-01-02 06:34:11', NULL),
(2, 'gallery-one-2.jpg', 1, '2023-01-02 06:34:11', NULL),
(3, 'gallery-one-3.jpg', 1, '2023-01-02 06:34:11', NULL),
(4, 'gallery-one-4.jpg', 1, '2023-01-02 06:34:11', NULL),
(5, 'gallery-one-5.jpg', 1, '2023-01-02 06:34:11', NULL),
(6, 'gallery-one-6.jpg', 1, '2023-01-02 06:34:11', NULL),
(7, 'gallery-one-7.jpg', 1, '2023-01-02 06:34:11', NULL),
(8, 'gallery-two-1.jpg', 2, '2023-01-02 06:34:11', NULL),
(9, 'gallery-two-2.jpg', 2, '2023-01-02 06:34:11', NULL),
(10, 'gallery-two-3.jpg', 2, '2023-01-02 06:34:11', NULL),
(11, 'gallery-two-4.jpg', 2, '2023-01-02 06:34:11', NULL),
(12, 'gallery-two-5.jpg', 2, '2023-01-02 06:34:11', NULL),
(13, 'gallery-two-6.jpg', 2, '2023-01-02 06:34:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_tags`
--

CREATE TABLE `item_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_tags`
--

INSERT INTO `item_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'NEW', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'HOT', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `direction`, `locale`, `file`, `thumb`, `status`, `created_at`, `updated_at`) VALUES
(1, 'English', 'ltr', 'en', 'en.json', 'en.png', 1, '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(2, 'Arabic', 'rtl', 'fr', 'fr.json', 'fr.png', 1, '2023-01-02 06:34:10', '2023-01-02 06:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_static` tinyint(4) NOT NULL DEFAULT 0,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `en_name`, `fr_name`, `slug`, `is_static`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'ميزون', 'home', 1, 'http://localhost/Zairito/public', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'About Us', 'يقترح', 'about-us', 1, 'http://localhost/Zairito/public/about-us', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'Blog', 'مقالات', 'blog', 1, 'http://localhost/Zairito/public/blog', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'Contact', 'اتصل', 'contact', 1, 'http://localhost/Zairito/public/contact-us', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'Shop', 'محل', 'shop', 1, '#', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 'Overview', 'ملخص', NULL, 0, 'http://localhost/Zairito/public/page/overview', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_09_121846_create_sliders_table', 1),
(6, '2021_12_10_093039_create_advertises_table', 1),
(7, '2021_12_10_115419_create_subscribes_table', 1),
(8, '2021_12_10_130647_create_contactuses_table', 1),
(9, '2021_12_11_044026_create_general_settings_table', 1),
(10, '2021_12_11_055316_create_blogs_table', 1),
(11, '2021_12_11_064014_create_tags_table', 1),
(12, '2021_12_11_085814_create_categories_table', 1),
(13, '2021_12_13_053434_create_brands_table', 1),
(14, '2021_12_14_054525_create_image_galleries_table', 1),
(15, '2021_12_17_162217_create_blog_comments_table', 1),
(16, '2021_12_18_114630_create_products_table', 1),
(17, '2021_12_21_063547_create_sizes_table', 1),
(18, '2021_12_21_063604_create_colors_table', 1),
(19, '2021_12_21_112441_create_size_product_table', 1),
(20, '2021_12_21_112607_create_color_product_table', 1),
(21, '2021_12_22_055720_create_product_tags_table', 1),
(22, '2021_12_28_064913_create_cutomer_services_table', 1),
(23, '2021_12_28_093443_create_company_stories_table', 1),
(24, '2021_12_28_112636_create_testimonials_table', 1),
(25, '2021_12_29_095224_create_admins_table', 1),
(26, '2021_12_29_121919_create_wishlists_table', 1),
(27, '2021_12_30_053914_create_compare_lists_table', 1),
(28, '2021_12_31_135900_create_coupons_table', 1),
(29, '2022_01_02_093244_create_billings_table', 1),
(30, '2022_01_02_093245_create_shippings_table', 1),
(31, '2022_01_02_093501_create_orders_table', 1),
(32, '2022_01_02_093503_create_order_details_table', 1),
(33, '2022_01_12_062951_create_homepages_table', 1),
(34, '2022_01_12_075047_create_about_us_pages_table', 1),
(35, '2022_01_12_131110_create_social_links_table', 1),
(36, '2022_01_13_062857_create_footer_information_table', 1),
(37, '2022_01_15_071424_create_settings_table', 1),
(38, '2022_01_15_100153_create_currencies_table', 1),
(39, '2022_01_18_135821_create_payment_platforms_table', 1),
(40, '2022_02_02_105940_create_product_reviews_table', 1),
(41, '2022_02_07_132905_create_faqs_table', 1),
(42, '2022_02_11_104412_create_product_tag_lists_table', 1),
(43, '2022_02_12_053228_create_item_tags_table', 1),
(44, '2022_03_23_103714_add_digital_link_to_products', 1),
(45, '2022_03_25_110037_add_slug_to_payment_platforms', 1),
(46, '2022_03_28_073649_add_txn_to_orders', 1),
(47, '2022_03_29_085050_add_biil_shipp_to_orders', 1),
(48, '2022_03_30_054051_create_pages_table', 1),
(49, '2022_03_30_092448_create_menus_table', 1),
(50, '2022_03_30_093035_create_sub_menus_table', 1),
(51, '2022_03_31_111150_create_languages_table', 1),
(52, '2022_04_02_104941_create_taxes_table', 1),
(53, '2022_04_04_063654_create_delivery_charges_table', 1),
(54, '2022_04_05_085525_add_google_id_to_users', 1),
(55, '2022_04_09_045107_create_seo_settings_table', 1),
(56, '2022_04_14_071517_create_permission_tables', 1),
(57, '2022_04_20_070253_create_sitemaps_table', 1),
(58, '2022_04_20_101813_add_question_fr_and_answer_fr_to_faqs', 1),
(59, '2022_04_21_103242_add_status_to_users', 1),
(60, '2022_05_19_072147_create_special_offers_table', 1),
(61, '2022_06_20_110213_add_position_to_currencies', 1),
(62, '2022_06_27_063650_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Order_Number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Billing_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Shipping_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Coupon_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Coupon_Amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Delivery_Charge` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Sub_Total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Tax` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Grand_Total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Is_Free_Delivery` tinyint(4) NOT NULL DEFAULT 0,
  `Is_Order_Successful` tinyint(4) NOT NULL DEFAULT 0,
  `Is_Order_Completed` tinyint(4) NOT NULL DEFAULT 0,
  `Payment_Method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `Payment_Status` tinyint(4) NOT NULL DEFAULT 5,
  `Order_Status` tinyint(4) NOT NULL DEFAULT 1,
  `txn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Delivery_At` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Order_Id` bigint(20) UNSIGNED NOT NULL,
  `Product_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Product_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Quantity` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Total_Price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `en_title`, `en_description`, `fr_title`, `fr_description`, `slug`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Overview', '<p><span style=\"color: rgb(119, 119, 119); font-family: Jost, sans-serif;\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh. sem. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada.</span><br></p>', 'ملخص', '<p><font color=\"#777777\" face=\"Jost, sans-serif\">الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ.&nbsp; القول المأثور بورتا. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. حتى يحتاج الأسد إلى التوحيد. لا يوجد وقت للوادي ليكون محبوبًا من قبل اللاعبين الذين سيتم اختيارهم. الجميع يريد أن يدخر ، مع استمرار السعر ، هذا هو العنصر. لكن العبارة اختارت الكرة. القول المأثور بورتا. في اللعبة ، هذا هو متوسط ​​بوابة الوجبة. الدهليوم . دونيك&nbsp;</font><br></p>', 'overview', 'Overview of the app', 'overview', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_platforms`
--

CREATE TABLE `payment_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_platforms`
--

INSERT INTO `payment_platforms` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PayPal', 'paypal', 'paypal.png', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'Stripe', 'stripe', 'payment-method.png', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'Razorpay', 'razorpay', 'razorpay.png', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'Bank', 'bank', 'bank.png', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'Sslcommerz', 'sslcommerz', 'sslcommerz.png', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'category-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(2, 'category-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(3, 'category-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(4, 'category-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(5, 'brand-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(6, 'brand-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(7, 'brand-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(8, 'brand-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(9, 'product-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(10, 'product-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(11, 'product-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(12, 'product-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(13, 'order-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(14, 'order-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(15, 'order-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(16, 'order-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(17, 'transaction-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(18, 'transaction-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(19, 'transaction-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(20, 'transaction-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(21, 'tax-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(22, 'tax-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(23, 'tax-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(24, 'tax-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(25, 'delivery-charge-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(26, 'delivery-charge-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(27, 'delivery-charge-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(28, 'delivery-charge-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(29, 'currency-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(30, 'currency-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(31, 'currency-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(32, 'currency-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(33, 'coupon-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(34, 'coupon-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(35, 'coupon-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(36, 'coupon-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(37, 'slider-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(38, 'slider-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(39, 'slider-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(40, 'slider-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(41, 'banner-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(42, 'banner-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(43, 'banner-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(44, 'banner-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(45, 'advertise-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(46, 'advertise-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(47, 'advertise-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(48, 'advertise-delete', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(49, 'blog-list', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(50, 'blog-create', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(51, 'blog-edit', 'web', '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(52, 'blog-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(53, 'crm-list', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(54, 'crm-create', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(55, 'crm-edit', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(56, 'crm-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(57, 'user-list', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(58, 'user-create', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(59, 'user-edit', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(60, 'user-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(61, 'cms-list', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(62, 'cms-create', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(63, 'cms-edit', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(64, 'cms-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(65, 'menu-list', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(66, 'menu-create', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(67, 'menu-edit', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(68, 'menu-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(69, 'payment-gateway-list', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(70, 'payment-gateway-create', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(71, 'payment-gateway-edit', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(72, 'payment-gateway-delete', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Brand_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `en_Product_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Product_Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Product_Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Product_Slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_About` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_About` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ItemTag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` decimal(8,2) NOT NULL,
  `Discount` decimal(8,2) NOT NULL,
  `Discount_Price` decimal(8,2) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 0,
  `Sold` decimal(8,2) NOT NULL DEFAULT 0.00,
  `Primary_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digital_type` enum('file','link') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digital_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digital_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affiliate_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `Featured_Product` tinyint(1) NOT NULL DEFAULT 0,
  `Best_Selling` tinyint(1) NOT NULL DEFAULT 0,
  `New_Arrival` tinyint(1) NOT NULL DEFAULT 0,
  `On_Sale` tinyint(1) NOT NULL DEFAULT 1,
  `Status` tinyint(1) NOT NULL DEFAULT 1,
  `en_Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_ShippingReturn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_ShippingReturn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_AdditionalInformation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_AdditionalInformation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Voucher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Category_Id`, `Brand_Id`, `en_Product_Name`, `fr_Product_Name`, `en_Product_Slug`, `fr_Product_Slug`, `en_About`, `fr_About`, `ItemTag`, `Price`, `Discount`, `Discount_Price`, `Quantity`, `Sold`, `Primary_Image`, `Image2`, `Image3`, `Image4`, `Image5`, `digital_type`, `digital_link`, `digital_file`, `license_name`, `license_key`, `affiliate_link`, `type`, `Featured_Product`, `Best_Selling`, `New_Arrival`, `On_Sale`, `Status`, `en_Description`, `fr_Description`, `en_ShippingReturn`, `fr_ShippingReturn`, `en_AdditionalInformation`, `fr_AdditionalInformation`, `Voucher`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Plaid Cotton Shirt', 'قميص قطني منقوش', 'plaid-cotton-shirt', 'chemise-oxford-en-a-carreaux', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '100.00', '10.00', '90.00', 44, '0.00', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'HlDpoX', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 2, 2, 'Black T-Shirt', 'قميص قطني منقوش', 'black-t-shirt', 't-shirt-noir-pour-femme', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'HOT', '150.00', '10.00', '135.00', 12, '0.00', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', '3ymslU', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 3, 3, 'Fit-Flare Dress', 'قميص قطني منقوش', 'fit-flare-dress', 'robe-ajustee-evasee', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '200.00', '10.00', '180.00', 40, '0.00', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', '9jHB5z', '2023-01-02 06:34:11', '2023-01-02 06:34:11');
INSERT INTO `products` (`id`, `Category_Id`, `Brand_Id`, `en_Product_Name`, `fr_Product_Name`, `en_Product_Slug`, `fr_Product_Slug`, `en_About`, `fr_About`, `ItemTag`, `Price`, `Discount`, `Discount_Price`, `Quantity`, `Sold`, `Primary_Image`, `Image2`, `Image3`, `Image4`, `Image5`, `digital_type`, `digital_link`, `digital_file`, `license_name`, `license_key`, `affiliate_link`, `type`, `Featured_Product`, `Best_Selling`, `New_Arrival`, `On_Sale`, `Status`, `en_Description`, `fr_Description`, `en_ShippingReturn`, `fr_ShippingReturn`, `en_AdditionalInformation`, `fr_AdditionalInformation`, `Voucher`, `created_at`, `updated_at`) VALUES
(4, 3, 3, 'Fit-Flare Dress', 'قميص قطني منقوش', 'fit-flare-dress-2', 'robe-ajustee-evasee-2', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '200.00', '10.00', '180.00', 40, '0.00', 'product-image-4.png', 'product-image-4.png', 'product-image-4.png', 'product-image-4.png', 'product-image-4.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'un86s3', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(5, 1, 1, 'Rosmo Namino', 'قميص قطني منقوش', 'rosmo-namino', 'chemise-oxford-en-à-carreaux', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '500.00', '10.00', '450.00', 10, '0.00', 'product-image-5.png', 'product-image-5.png', 'product-image-5.png', 'product-image-5.png', 'product-image-5.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'r943nr', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(6, 1, 1, 'Plaid Cotton Shirt', 'قميص قطني منقوش', 'plaid-cotton-shirt-2', 'chemise-oxford-en-à-carreaux', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '500.00', '10.00', '450.00', 10, '0.00', 'product-image-6.png', 'product-image-6.png', 'product-image-6.png', 'product-image-6.png', 'product-image-6.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'HRGoVv', '2023-01-02 06:34:11', '2023-01-02 06:34:11');
INSERT INTO `products` (`id`, `Category_Id`, `Brand_Id`, `en_Product_Name`, `fr_Product_Name`, `en_Product_Slug`, `fr_Product_Slug`, `en_About`, `fr_About`, `ItemTag`, `Price`, `Discount`, `Discount_Price`, `Quantity`, `Sold`, `Primary_Image`, `Image2`, `Image3`, `Image4`, `Image5`, `digital_type`, `digital_link`, `digital_file`, `license_name`, `license_key`, `affiliate_link`, `type`, `Featured_Product`, `Best_Selling`, `New_Arrival`, `On_Sale`, `Status`, `en_Description`, `fr_Description`, `en_ShippingReturn`, `fr_ShippingReturn`, `en_AdditionalInformation`, `fr_AdditionalInformation`, `Voucher`, `created_at`, `updated_at`) VALUES
(7, 2, 2, 'Tailored Fit Mesh-Panel', 'قميص قطني منقوش', 'tailored-fit-mesh-panel', 'demo-physical', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'HOT', '500.00', '10.00', '450.00', 9, '0.00', 'product-image-7.png', 'product-image-7.png', 'product-image-7.png', 'product-image-7.png', 'product-image-7.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'FXZfan', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(8, 3, 2, 'Rosmo Namino', 'قميص قطني منقوش', 'rosmo-namino-2', 'demo-digital', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'HOT', '500.00', '10.00', '450.00', 10000, '0.00', 'product-image-8.png', 'product-image-8.png', 'product-image-8.png', 'product-image-8.png', 'product-image-8.png', 'file', NULL, '623c619be751f1648124315.jpg', NULL, NULL, NULL, 2, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 's74Qkd', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(9, 3, 1, 'Best T-Shirt for Male', 'قميص قطني منقوش', 'Best-t-Shirt-for-male', 'demo-affiliate', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '500.00', '10.00', '450.00', 10000, '0.00', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', 'product-image-1.png', NULL, NULL, NULL, NULL, NULL, 'http://www.zainiklab.com', 4, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'WSm04k', '2023-01-02 06:34:12', '2023-01-02 06:34:12');
INSERT INTO `products` (`id`, `Category_Id`, `Brand_Id`, `en_Product_Name`, `fr_Product_Name`, `en_Product_Slug`, `fr_Product_Slug`, `en_About`, `fr_About`, `ItemTag`, `Price`, `Discount`, `Discount_Price`, `Quantity`, `Sold`, `Primary_Image`, `Image2`, `Image3`, `Image4`, `Image5`, `digital_type`, `digital_link`, `digital_file`, `license_name`, `license_key`, `affiliate_link`, `type`, `Featured_Product`, `Best_Selling`, `New_Arrival`, `On_Sale`, `Status`, `en_Description`, `fr_Description`, `en_ShippingReturn`, `fr_ShippingReturn`, `en_AdditionalInformation`, `fr_AdditionalInformation`, `Voucher`, `created_at`, `updated_at`) VALUES
(10, 3, 1, 'Rosmo Namino', 'قميص قطني منقوش', 'rosmo-namino-3', 'men-shirt-custom-shirts-hot-sale-men-women-polyester-cotton-long-sleeve-casual-pro', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '1894.00', '29.00', '1344.74', 8, '0.00', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', 'product-image-2.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'tjzKSe', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(11, 3, 3, 'Fit-Flare Dress', 'قميص قطني منقوش', 'fit-flare-dress-2', 'robe-ajustee-evasee', 'Please note: We have this product in United States warehouse. If destination means you can receive the parcel faster and earlier than expected.', 'يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في', 'NEW', '200.00', '10.00', '180.00', 40, '0.00', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', 'product-image-3.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, '<p class=\"description-text\">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>\r\n                                <p class=\"description-text\">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac  egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>\r\n                                <p class=\"description-text\">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"return-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>\r\n                                    <p class=\"return-text\">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n                                    <p class=\"return-text\">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p>', '<p class=\"additional-information-text\">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>\r\n                        <ul class=\"additional-feature\">\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Comodous:</h3>\r\n                                <p class=\"feature-text\">Comodous in tempor ullamcorper miaculis</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Mattis laoreet:</h3>\r\n                                <p class=\"feature-text\">Pellentesque vitae neque mollis urna mattis laoreet.</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Divamus de ametos:</h3>\r\n                                <p class=\"feature-text\">Divamus sit amet purus justo</p>\r\n                            </li>\r\n                            <li class=\"single-feature\">\r\n                                <h3 class=\"feature-title\">Molestie:</h3>\r\n                                <p class=\"feature-text\">Proin molestie egestas orci ac suscipit risus posuere loremous</p>\r\n                            </li>\r\n                        </ul>', '<p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><p class=\"description-text\">يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.يرجى ملاحظة: لدينا هذا المنتج في مستودع الولايات المتحدة. إذا كانت الوجهة تعني أنه يمكنك استلام الطرد بشكل أسرع وفي وقت أبكر من المتوقع.</p><ul class=\"additional-feature\"><li class=\"single-feature\">\r\n                            </li>\r\n                        </ul>', 'LI4MOB', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 6, 'HOT - COLLECTION', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 4, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 3, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 2, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 1, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 7, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(7, 10, 'HOT - COLLECTION', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(8, 11, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(9, 5, 'HOT - COLLECTION', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(10, 8, 'ELLA - HALOTHEMES', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(11, 9, 'HOT - COLLECTION', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_lists`
--

CREATE TABLE `product_tag_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag_lists`
--

INSERT INTO `product_tag_lists` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ELLA - HALOTHEMES', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'HOT - COLLECTION', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'NEW - COLLECTION', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'ELLA - CALTOUS', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `slug`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'about-us', 'About Us | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'blog', 'Blogs | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'contact', 'Contact Us| Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'all-products', 'All Products| Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 'cart', 'Cart | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(7, 'checkout', 'Checkout | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(8, 'wishlist', 'Wishlist | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(9, 'compare', 'Compare | Zairito - Laravel Ecommerce Application', 'Zairito - Laravel Ecommerce Application', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(10, 'sign-in', 'Sign In', 'Sign In', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(11, 'sign-up', 'Sign Up', 'Sign Up', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(12, 'forget-password', 'Forget Password', 'Forget Password', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(13, 'reset-password', 'Reset Password', 'Reset Password', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(14, 'terms-conditions', 'Terms Conditions', 'Terms Conditions', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(15, 'privacy-policy', 'Privacy Policy', 'Privacy Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(16, 'shipping-return', 'Shipping Return Policy', 'Shipping Return Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(17, 'faq', 'FAQ', 'FAQ', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(18, 'refund-policy', 'Refund Policy', 'Refund Policy', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `value`, `created_at`, `updated_at`) VALUES
(1, 'app_title', 'Zairito', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'tax_percentage', '15', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'shipping_charge', '60', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'estimating_delivery', '7 days', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'title', 'Zairito - Ecommerce', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 'main_logo', 'logo.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(7, 'footer_logo', 'footer-logo.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(8, 'footer_title', 'Designed & Developed By Zainiktheme', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(9, 'favicon', 'favicon.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(10, 'version', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(11, 'meta_author', 'zainiktheme', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(12, 'meta_description', 'Zairito - Ecommerce App', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(13, 'meta_keywords', 'business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(14, 'call_us', '+777 2345 7886', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(15, 'email', 'support@zainikthemes.com', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(16, 'address', '685 Market Street', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(17, 'state', 'San Francisco, CA 94106,', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(18, 'country', 'United States', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(19, 'news_letter', 'Receive our latest updates about our <br /> products and promotions.', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(20, 'preloader', 'preloader.svg', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(21, 'popup_image', 'popup-image.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(22, 'menu_thumb', 'menu-thumb.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(23, 'menu_link', 'javascript:void(0)', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(24, 'home_products_page', '4', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(25, 'home_trending_page', '4', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(26, 'new_arrival', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(27, 'best_selling', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(28, 'on_sale', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(29, 'featured_items', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(30, 'default_currency', 'USD', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(31, 'default_language', 'en', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(32, 'theme', 'one', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(33, 'news_letter_img', 'accepts-image.png', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(34, 'news_letter_title', 'Guarantee safe & secure checkout', '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(35, 'news_letter_status', '1', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `State` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sitemaps`
--

CREATE TABLE `sitemaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitemap_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Size` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `Size`, `created_at`, `updated_at`) VALUES
(1, 'S', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'M', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'L', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 'XL', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(5, 'XXL', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `Product_Id` bigint(20) UNSIGNED NOT NULL,
  `Size_Id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`Product_Id`, `Size_Id`) VALUES
(6, 1),
(4, 1),
(4, 3),
(3, 1),
(3, 4),
(2, 3),
(2, 4),
(1, 1),
(1, 2),
(7, 1),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(10, 5),
(11, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Background_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Sub_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Button_Text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Sub_Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Button_Text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `Background_Image`, `Thumbnail`, `en_Title`, `en_Sub_Title`, `en_Description`, `en_Button_Text`, `fr_Title`, `fr_Sub_Title`, `fr_Description`, `fr_Button_Text`, `created_at`, `updated_at`) VALUES
(1, 'hero-banner-bg.png', 'hero-banner-image-1.png', 'The New autmn', 'New Collection', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed', 'See Colections', 'الخريف الجديد', 'مجموعة نوفيل', 'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن', 'انظر المجموعات', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 'hero-banner-bg-2.png', 'hero-banner-image-2.png', 'The Summer!!', 'Summer Sale', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed', 'See Colections', 'الصيف!!', 'تخفيضات الصيف', 'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن', 'انظر المجموعات', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 'hero-banner-bg-3.png', 'hero-banner-image-3.png', 'The Winter!!', 'New Collection', 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed', 'See Colections', 'ليفيفر', 'مجموعة نوفيل', 'كتلة الحاضر حكيمة وليست من وادي القناص ، لكنها ليست من العوز. نحن نعيش بسحر عظيم ، لكن', 'انظر المجموعات', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `Facebook`, `Skype`, `Twitter`, `Linkedin`, `Instagram`, `created_at`, `updated_at`) VALUES
(1, 'www.facebook.com', 'www.skype.com', 'www.twitter.com', 'www.linkedin.com', 'www.instagram.com', '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fr_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`id`, `image`, `en_title`, `fr_title`, `category_id`, `discount`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'offer-image.png', 'SPECTIAL OFFER', 'SPECTIAL OFFER', 1, '50', 'www.sadekurrahman.com', 1, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subscribe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `blog_id`, `Tag`, `created_at`, `updated_at`) VALUES
(1, 1, '[\"Cloths\",\"Interview\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(2, 2, '[\"Bags\",\"New Collection\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(3, 3, '[\"Product\",\"Hot Collection\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(4, 4, '[\"Cloths\",\"Interview\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(5, 5, '[\"Bags\",\"New Collection\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11'),
(6, 6, '[\"Product\",\"Hot Collection\"]', '2023-01-02 06:34:11', '2023-01-02 06:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fr_Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Image`, `Name`, `en_Description`, `fr_Description`, `star`, `created_at`, `updated_at`) VALUES
(1, 'testimonal-image-1.png', 'Andrew Jaimond', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(2, 'testimonial-v2-image-3.png', 'Jhon Cena', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(3, 'testimonal-image-1.png', 'Mike Clark', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(4, 'testimonal-image-2.png', 'Rey mysterio', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(5, 'testimonal-image-3.png', 'Big Show', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(6, 'testimonial-v2-image-1.png', 'Michael Beven', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(7, 'testimonial-v2-image-2.png', 'Randy orton', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12'),
(8, 'testimonial-v2-image-3.png', 'Sheymas', 'Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Proin eget tortor risus. Proin eget tortor risus. Curabitur arcu', 'لا توجد طبقة مبتكرة لإيقافها. موريس بلانديت أليكت إيليت ، إيجيت تينكيدونت نيبه بولفينار أ. لكن العبارة اختارت الكرة. ولذا فهو بحاجة إلى ابتسامة بديلة. ولذا فهو بحاجة إلى ابتسامة بديلة.', 5, '2023-01-02 06:34:12', '2023-01-02 06:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `About` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `facebook_id`, `image`, `Number`, `Gender`, `DOB`, `street_address`, `About`, `is_admin`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'admin@gmail.com', NULL, NULL, 'profile.png', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '$2y$10$LGfe97e73l6hZSKQPmAGPedvw9vc.lCiQJVt5RKwr.PkgHOV2bxdq', NULL, '2023-01-02 06:34:10', '2023-01-02 06:34:10'),
(2, 'William Smith', 'user1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, '$2y$10$qqTKsBCMD7fVQXtoJdb37O4zb9UcYDQjDU6fimNYrYZcAnEytKS3y', NULL, '2023-01-02 06:34:10', '2023-01-02 06:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `Product_Id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_user_id_foreign` (`User_Id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_index` (`user_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`Blog_Id`),
  ADD KEY `blog_comments_user_id_foreign` (`User_Id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD KEY `color_product_product_id_foreign` (`Product_Id`),
  ADD KEY `color_product_color_id_foreign` (`Color_Id`);

--
-- Indexes for table `company_stories`
--
ALTER TABLE `company_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_lists`
--
ALTER TABLE `compare_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compare_lists_user_id_foreign` (`User_Id`),
  ADD KEY `compare_lists_product_id_foreign` (`Product_Id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutomer_services`
--
ALTER TABLE `cutomer_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_information`
--
ALTER TABLE `footer_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_tags`
--
ALTER TABLE `item_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`User_Id`),
  ADD KEY `orders_billing_id_foreign` (`Billing_Id`),
  ADD KEY `orders_shipping_id_foreign` (`Shipping_Id`),
  ADD KEY `orders_coupon_id_foreign` (`Coupon_Id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`Order_Id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_platforms`
--
ALTER TABLE `payment_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`Category_Id`),
  ADD KEY `products_brand_id_index` (`Brand_Id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tags_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_tag_lists`
--
ALTER TABLE `product_tag_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_user_id_foreign` (`User_Id`);

--
-- Indexes for table `sitemaps`
--
ALTER TABLE `sitemaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD KEY `size_product_product_id_foreign` (`Product_Id`),
  ADD KEY `size_product_size_id_foreign` (`Size_Id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `special_offers_category_id_foreign` (`category_id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_menus_menu_id_index` (`menu_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_blog_id_index` (`blog_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
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
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`User_Id`),
  ADD KEY `wishlists_product_id_foreign` (`Product_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_pages`
--
ALTER TABLE `about_us_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_stories`
--
ALTER TABLE `company_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `compare_lists`
--
ALTER TABLE `compare_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cutomer_services`
--
ALTER TABLE `cutomer_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_information`
--
ALTER TABLE `footer_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item_tags`
--
ALTER TABLE `item_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_platforms`
--
ALTER TABLE `payment_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tag_lists`
--
ALTER TABLE `product_tag_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sitemaps`
--
ALTER TABLE `sitemaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `special_offers`
--
ALTER TABLE `special_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billings`
--
ALTER TABLE `billings`
  ADD CONSTRAINT `billings_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`Blog_Id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_comments_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`Color_Id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `compare_lists`
--
ALTER TABLE `compare_lists`
  ADD CONSTRAINT `compare_lists_product_id_foreign` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `compare_lists_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_billing_id_foreign` FOREIGN KEY (`Billing_Id`) REFERENCES `billings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_coupon_id_foreign` FOREIGN KEY (`Coupon_Id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`Shipping_Id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`Brand_Id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`Category_Id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `size_product`
--
ALTER TABLE `size_product`
  ADD CONSTRAINT `size_product_product_id_foreign` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `size_product_size_id_foreign` FOREIGN KEY (`Size_Id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD CONSTRAINT `special_offers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD CONSTRAINT `sub_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`User_Id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
