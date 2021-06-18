-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 07:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `sno` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `publickey` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sign` varchar(1000) NOT NULL,
  `blockhashes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`sno`, `fname`, `publickey`, `username`, `password`, `sign`, `blockhashes`) VALUES
(7, 'Mamta', '-----BEGIN PUBLIC KEY----- MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgF1zpRY2iqgYEUhwNx+eWj6UcbiQ tvtit8c+OsFB1gvjmZRfpogTOo3eFLhphPT9MqeCTxJNn0/x1ldJS5evjI/Prjw+ zKqhZihgz1hr8SIF/9dNgr1ZnABssgb1T+m4oHOEPUmtTt/PCESyG1JkV75ayx/t qlzIwSoZZW5eGcArAgMBAAE= -----END PUBLIC KEY-----', 'mamtadnr', 'mmt', '4174a3a0df6f428b9b1924fef6ff292bff07b2f775e45de56104de475215bc33\r\n02fd00112a54b730518b525e4b773bcbeb217dc51ec4657caa4a17f8e35ef3d7\r\n027f866c85d19e80f33c4632c48e1a88c1acf72a5ea8c01b0178e323c57806a7\r\n21919cc00f742eb272abc9d5553938ff4873b0d104a51d5ac05978214a7cf335', ''),
(8, 'admin', '-----BEGIN PUBLIC KEY----- MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgH/8OO/BAnalsz67SSZbg7vCuERu vNV4KBZscSgbP4CQj2wZwPtgPdxztRsHHBiPM7sb0Jt3EqpVJZq+CxJuaa9Ojw4C JuKfUSm6i/K7dpfN7wiZ9nEZ2yWU/8Zi/HL5jsizwyJxblxpquFV5dHc5OXsOxle EQx4Bo2Ood1No/Q9AgMBAAE= -----END PUBLIC KEY-----', 'admin', 'admin', 'default', ''),
(9, 'Kritika', '-----BEGIN PUBLIC KEY----- MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgH5v1fZKp0CiIcotc3qFmzba7Wng 1LmJZWp345djBiPrkr8p3u49bSdqx6Mvfkj71ZBdvFO4+yb2PzXHWuD3vzAoEZ4i XYIoA2IMceDqBKo6DKdocUhYS0ETqR73LV4gFb1h5SG+hCb/N9JyLA4G2k8R/HAN /p90SbZUNy+ehD8bAgMBAAE= -----END PUBLIC KEY-----', 'kritika', 'chandak', 'default', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
