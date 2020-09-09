-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 04:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heliscare`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Orthopedic', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(2, 'Neuro Surgery', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(3, 'Cardiology', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(4, 'Surgery', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(5, 'General', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(6, 'Pharmacy', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(7, 'Finance', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(8, 'Social Work', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(9, 'Radiotherapy', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(10, 'Patient Services', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(11, 'Medical Records', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(12, 'Maternity', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(13, 'Intensive Care Unit (ICU)', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(14, 'Health & Safety', '2020-01-10 13:13:24', '2020-01-10 13:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `problem_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `specilization_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `receptionFee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `problem_description`, `ticket_number`, `patient_id`, `specilization_id`, `department_id`, `receptionFee`, `created_at`, `updated_at`) VALUES
(3, 'Naumwa na tumbo sana, hii ni wiki ya tatu sasa.', 'xfgX3lFR', 3, 2, 3, '2000', '2020-01-10 17:53:51', '2020-01-10 17:53:51'),
(4, 'Est accusamus expedi', 'Gzo7ApdY', 4, 3, 6, '2000', '2020-01-11 00:28:33', '2020-01-11 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `diagnoses`
--

CREATE TABLE `diagnoses` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rbg_fbg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `h_pyroli` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_grouping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stool_routine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hvs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urine_routine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urinalysis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_send_labs`
--

CREATE TABLE `doctor_send_labs` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `labtechnician_id` int(10) UNSIGNED NOT NULL,
  `disease_for_diagnosis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_solutions`
--

CREATE TABLE `doctor_solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `duty_id` int(10) UNSIGNED NOT NULL,
  `doctor_solutions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `drug_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `id` int(10) UNSIGNED NOT NULL,
  `detail_id` int(10) UNSIGNED NOT NULL,
  `time_allocated` date NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`id`, `detail_id`, `time_allocated`, `doctor_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 3, '2020-01-10', 1, 'Appointment', '2020-01-10 17:53:51', '2020-01-10 17:53:51'),
(4, 4, '2001-03-18', 1, 'Appointment', '2020-01-11 00:28:33', '2020-01-11 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender_name`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(2, 'Female', '2020-01-10 13:13:24', '2020-01-10 13:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `patient_id` int(10) UNSIGNED NOT NULL,
  `receptionfee_id` int(10) UNSIGNED NOT NULL,
  `diagnosis_id` int(10) UNSIGNED NOT NULL,
  `drug_id` int(10) UNSIGNED NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marital_statuses`
--

CREATE TABLE `marital_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `maritalstatus_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marital_statuses`
--

INSERT INTO `marital_statuses` (`id`, `maritalstatus_name`, `created_at`, `updated_at`) VALUES
(1, 'Married', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(2, 'Single', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(3, 'Divorced', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(4, 'Other', '2020-01-10 13:13:24', '2020-01-10 13:13:24');

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
(93, '2018_10_19_130326_create_roles_table', 1),
(94, '2018_10_19_130357_create_permissions_table', 1),
(95, '2018_10_19_130358_create_users_table', 1),
(96, '2018_10_19_130359_create_users_permissions_table', 1),
(97, '2018_10_19_130360_create_users_roles_table', 1),
(98, '2018_10_19_130361_create_roles_permissions_table', 1),
(99, '2018_11_08_124646_create_user_statuses_table', 1),
(100, '2018_12_03_094635_create_activity_logs_table', 1),
(101, '2019_12_09_074412_create_genders_table', 1),
(102, '2019_12_09_074654_create_specilizations_table', 1),
(103, '2019_12_09_075316_create_departments_table', 1),
(104, '2019_12_09_075650_create_marital_statuses_table', 1),
(105, '2019_12_09_080054_create_reception_fees_table', 1),
(106, '2020_01_07_205614_create_patients_table', 1),
(107, '2020_01_07_212152_create_details_table', 1),
(108, '2020_01_09_003651_create_duties_table', 1),
(109, '2020_01_09_004259_create_doctor_solutions_table', 1),
(110, '2020_01_09_005602_create_doctor_send_labs_table', 1),
(111, '2020_01_09_011312_create_diagnoses_table', 1),
(112, '2020_01_09_013842_create_drugs_table', 1),
(113, '2020_01_09_014847_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritalstatus_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `gender_id`, `location`, `age`, `maritalstatus_id`, `created_at`, `updated_at`) VALUES
(3, 'Zorita', 'Solomon', 'Gardner', 'zoritav.gardner@gmail.com', '+255684234567', 1, 'Tabata Kisukuru', '36', 1, '2020-01-10 17:53:51', '2020-01-10 17:53:51'),
(4, 'Leonard', 'Conan York', 'Klein', 'rupofylejo@mailinator.net', '+1 (356) 449-3601', 1, 'Asperiores accusanti', '4', 3, '2020-01-11 00:28:33', '2020-01-11 00:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'create', 'Create', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(2, 'edit', 'Edit', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(3, 'delete', 'Delete', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(4, 'update', 'Update', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(5, 'manage_users', 'manage users', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(6, 'manage_privileges', 'Manage Privileges', '2020-01-09 21:00:00', '2020-01-09 21:00:00'),
(7, 'create_reception', 'Create Reception', '2020-01-09 21:00:00', '2020-01-09 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reception_fees`
--

CREATE TABLE `reception_fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reception_fees`
--

INSERT INTO `reception_fees` (`id`, `fee_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Reception Fee', 2000, '2020-01-10 13:13:24', '2020-01-10 13:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'developer', 'Developer', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(2, 'doctor', 'Doctor', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(3, 'receptionist', 'Receptionist', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(4, 'lab technician', 'Lab Techinian', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(5, 'nurse', 'Nurse', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(6, 'finance', 'Finance', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(7, 'administrator', 'Administrator', '2020-01-10 13:13:23', '2020-01-10 13:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 6),
(1, 7),
(2, 2),
(3, 5),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specilizations`
--

CREATE TABLE `specilizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `specilization_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specilizations`
--

INSERT INTO `specilizations` (`id`, `specilization_name`, `created_at`, `updated_at`) VALUES
(1, 'Gynecologist/Obstetrician', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(2, 'General Physician', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(3, 'Dermatologist', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(4, 'Homeopath', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(5, 'Dentist', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(6, 'Ear-Nose-Throat(Ent) Specialist', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(7, 'Bones Specialist', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(8, 'Dermatologist', '2020-01-10 13:13:24', '2020-01-10 13:13:24'),
(9, 'Laboratory Technician', '2020-01-10 13:13:24', '2020-01-10 13:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `phone_number`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Feisal', 'Suleiman', 'Mombo', 'feisal.mombo@helis.co.tz', '+255684456287', '$2y$10$8UP1Ud2VgauxZvEAvdhgyulhLQsRxqa313jsWzz5quZjqQ61/mPbW', '7I1QrOgEuKTebZupIeHL9MoN3MmskgyYgWPlrH2zDdkpQbpXgGOwSRh7vvyq', '2020-01-10 13:13:23', '2020-01-10 13:13:23'),
(2, 'Michael', 'Peter', 'Charles', 'michael.peter@helis.co.tz', '+255654195687', '$2y$10$wIDmyM.2W8DsfI0PfLDPx.25ZPAEexgSo6FmwIM8IxL5pWsi/eqD.', NULL, '2020-01-10 13:13:23', '2020-01-10 13:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_permissions`
--

INSERT INTO `users_permissions` (`user_id`, `permission_id`) VALUES
(1, 1),
(1, 6),
(1, 7),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_statuses`
--

CREATE TABLE `user_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_statuses`
--

INSERT INTO `user_statuses` (`id`, `user_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-01-09 21:00:00', '2020-01-09 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `details_patient_id_foreign` (`patient_id`),
  ADD KEY `details_specilization_id_foreign` (`specilization_id`),
  ADD KEY `details_department_id_foreign` (`department_id`);

--
-- Indexes for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnoses_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `doctor_send_labs`
--
ALTER TABLE `doctor_send_labs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_send_labs_patient_id_foreign` (`patient_id`),
  ADD KEY `doctor_send_labs_labtechnician_id_foreign` (`labtechnician_id`);

--
-- Indexes for table `doctor_solutions`
--
ALTER TABLE `doctor_solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_solutions_duty_id_foreign` (`duty_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drugs_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `duties_detail_id_foreign` (`detail_id`),
  ADD KEY `duties_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_patient_id_foreign` (`patient_id`),
  ADD KEY `invoices_receptionfee_id_foreign` (`receptionfee_id`),
  ADD KEY `invoices_diagnosis_id_foreign` (`diagnosis_id`),
  ADD KEY `invoices_drug_id_foreign` (`drug_id`);

--
-- Indexes for table `marital_statuses`
--
ALTER TABLE `marital_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_gender_id_foreign` (`gender_id`),
  ADD KEY `patients_maritalstatus_id_foreign` (`maritalstatus_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reception_fees`
--
ALTER TABLE `reception_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `specilizations`
--
ALTER TABLE `specilizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_statuses`
--
ALTER TABLE `user_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_statuses_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diagnoses`
--
ALTER TABLE `diagnoses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_send_labs`
--
ALTER TABLE `doctor_send_labs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_solutions`
--
ALTER TABLE `doctor_solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marital_statuses`
--
ALTER TABLE `marital_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reception_fees`
--
ALTER TABLE `reception_fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specilizations`
--
ALTER TABLE `specilizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_statuses`
--
ALTER TABLE `user_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `details_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `details_specilization_id_foreign` FOREIGN KEY (`specilization_id`) REFERENCES `specilizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnoses`
--
ALTER TABLE `diagnoses`
  ADD CONSTRAINT `diagnoses_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_send_labs`
--
ALTER TABLE `doctor_send_labs`
  ADD CONSTRAINT `doctor_send_labs_labtechnician_id_foreign` FOREIGN KEY (`labtechnician_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_send_labs_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor_solutions`
--
ALTER TABLE `doctor_solutions`
  ADD CONSTRAINT `doctor_solutions_duty_id_foreign` FOREIGN KEY (`duty_id`) REFERENCES `duties` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `drugs_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `duties`
--
ALTER TABLE `duties`
  ADD CONSTRAINT `duties_detail_id_foreign` FOREIGN KEY (`detail_id`) REFERENCES `details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `duties_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_diagnosis_id_foreign` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnoses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_drug_id_foreign` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_receptionfee_id_foreign` FOREIGN KEY (`receptionfee_id`) REFERENCES `reception_fees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_gender_id_foreign` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patients_maritalstatus_id_foreign` FOREIGN KEY (`maritalstatus_id`) REFERENCES `marital_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_statuses`
--
ALTER TABLE `user_statuses`
  ADD CONSTRAINT `user_statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
