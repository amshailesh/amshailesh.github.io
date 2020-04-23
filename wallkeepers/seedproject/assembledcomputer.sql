-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 09:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assembledcomputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `cabinetid` bigint(10) NOT NULL,
  `cabinetmodel` varchar(50) NOT NULL,
  `cabinetimage` varchar(50) NOT NULL,
  `cabinettype` varchar(50) NOT NULL,
  `externalbays` bigint(50) NOT NULL,
  `internalbays` bigint(50) NOT NULL,
  `cqty` bigint(50) NOT NULL,
  `cprice` bigint(50) NOT NULL,
  `relationname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`cabinetid`, `cabinetmodel`, `cabinetimage`, `cabinettype`, `externalbays`, `internalbays`, `cqty`, `cprice`, `relationname`) VALUES
(1, 'cabinet1', 'pimages/Photo0512.jpg', 'ATX', 3, 3, 10, 5000, 'cabinet1');

-- --------------------------------------------------------

--
-- Table structure for table `case1`
--

CREATE TABLE `case1` (
  `caseid` bigint(10) NOT NULL,
  `casebrand` varchar(50) NOT NULL,
  `casemodel` varchar(50) NOT NULL,
  `caseimage` varchar(50) NOT NULL,
  `casetype` varchar(50) NOT NULL,
  `caprice` bigint(50) NOT NULL,
  `caqty` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case1`
--

INSERT INTO `case1` (`caseid`, `casebrand`, `casemodel`, `caseimage`, `casetype`, `caprice`, `caqty`) VALUES
(1, 'intel', 'intelcase', 'pimages/blog-author.jpg', 'atx', 8000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpucooler`
--

CREATE TABLE `cpucooler` (
  `cpucoolerid` bigint(10) NOT NULL,
  `cpucoolermodel` varchar(50) NOT NULL,
  `cpucoolerimage` varchar(50) NOT NULL,
  `fanrpm` varchar(50) NOT NULL,
  `noiselevel` varchar(50) NOT NULL,
  `cputdp` varchar(50) NOT NULL,
  `sizel` bigint(50) NOT NULL,
  `sizeb` bigint(50) NOT NULL,
  `sizeh` bigint(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `qty` bigint(50) NOT NULL,
  `relationname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cpucooler`
--

INSERT INTO `cpucooler` (`cpucoolerid`, `cpucoolermodel`, `cpucoolerimage`, `fanrpm`, `noiselevel`, `cputdp`, `sizel`, `sizeb`, `sizeh`, `price`, `qty`, `relationname`) VALUES
(2, 'CPUi3', 'pimages/pMR BALIGA3.png', '2000', '37', '185', 7, 7, 15, 8000, 1, 'cpucooler');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` bigint(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityanswer` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `username`, `password`, `securityanswer`, `address`) VALUES
(8, 'Shailesh Bhat', 'shailesh', '123', 'holy', 'dombivili'),
(9, 'honni m bhat', 'honni', '123', 'bhaskeri', 'dombivii');

-- --------------------------------------------------------

--
-- Table structure for table `customers1`
--

CREATE TABLE `customers1` (
  `cust_id` bigint(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `securityanswer` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers1`
--

INSERT INTO `customers1` (`cust_id`, `cust_name`, `username`, `password`, `securityanswer`, `address`) VALUES
(8, 'Shailesh Bhat', 'shailesh', '123', 'holy', 'dombivili'),
(9, 'honni m bhat', 'honni', '123', 'bhaskeri', 'dombivii'),
(13, 'sudhir', 'sudhir', '123', 'hotel', 'dombivii'),
(14, 'samidha madam', 'samidha', 'seed', 'seed', 'thane'),
(15, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpuid` bigint(10) NOT NULL,
  `gpubrand` varchar(50) NOT NULL,
  `gpumodel` varchar(50) NOT NULL,
  `gpuimage` varchar(50) NOT NULL,
  `gpumemory` bigint(10) NOT NULL,
  `coreclock` varchar(50) NOT NULL,
  `boostclock` varchar(50) NOT NULL,
  `gpuinterface` varchar(50) NOT NULL,
  `gprice` bigint(50) NOT NULL,
  `qty` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpuid`, `gpubrand`, `gpumodel`, `gpuimage`, `gpumemory`, `coreclock`, `boostclock`, `gpuinterface`, `gprice`, `qty`) VALUES
(1, 'intel', 'intelgpu', 'pimages/MR BALIGA6.png', 64, '2', '3', 'pci', 8900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hdd`
--

CREATE TABLE `hdd` (
  `hddid` bigint(20) NOT NULL,
  `hddbrand` varchar(50) NOT NULL,
  `hddmodel` varchar(50) NOT NULL,
  `hddimage` varchar(50) NOT NULL,
  `hddtype` varchar(50) NOT NULL,
  `hddcapacity` bigint(50) NOT NULL,
  `hprice` bigint(50) NOT NULL,
  `hqty` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hdd`
--

INSERT INTO `hdd` (`hddid`, `hddbrand`, `hddmodel`, `hddimage`, `hddtype`, `hddcapacity`, `hprice`, `hqty`) VALUES
(1, 'intel', 'intelhdd', 'pimages/3depoxy3.jpg', 'hdd', 1, 7800, 1);

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboardid` bigint(10) NOT NULL,
  `motherboardmodel` varchar(50) NOT NULL,
  `motherboardimage` varchar(50) NOT NULL,
  `motherboardtype` varchar(50) NOT NULL,
  `cpusocket` varchar(50) NOT NULL,
  `motherboardmemorymax` bigint(50) NOT NULL,
  `motherboardmemoryslots` bigint(50) NOT NULL,
  `motherboardpcislots` bigint(50) NOT NULL,
  `mprice` bigint(50) NOT NULL,
  `mqty` bigint(50) NOT NULL,
  `relationname` varchar(50) NOT NULL,
  `cpubrand` varchar(50) NOT NULL,
  `ramtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`motherboardid`, `motherboardmodel`, `motherboardimage`, `motherboardtype`, `cpusocket`, `motherboardmemorymax`, `motherboardmemoryslots`, `motherboardpcislots`, `mprice`, `mqty`, `relationname`, `cpubrand`, `ramtype`) VALUES
(10, 'motinteli3motherboard', 'pimages/MR BALIGA2.png', 'atx', 'lga', 64, 2, 2, 7800, 1, 'intelmotherboard', 'intel', 'ddr4');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `cpuid` bigint(10) NOT NULL,
  `cpumodel` varchar(50) NOT NULL,
  `cpuimage` varchar(50) NOT NULL,
  `cpusocket` varchar(50) NOT NULL,
  `corecount` varchar(50) NOT NULL,
  `coreclock` varchar(50) NOT NULL,
  `boostclock` varchar(50) NOT NULL,
  `tdp` varchar(50) NOT NULL,
  `sthreading` varchar(50) NOT NULL,
  `integratedgraphics` varchar(50) NOT NULL,
  `price` bigint(50) NOT NULL,
  `qty` bigint(50) NOT NULL,
  `relationname` varchar(50) NOT NULL,
  `cpubrand` varchar(50) NOT NULL,
  `ramtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`cpuid`, `cpumodel`, `cpuimage`, `cpusocket`, `corecount`, `coreclock`, `boostclock`, `tdp`, `sthreading`, `integratedgraphics`, `price`, `qty`, `relationname`, `cpubrand`, `ramtype`) VALUES
(17, 'proInteli3', 'pimages/pMR BALIGA4.png', 'lga', '2', '3', '4', '185', 'yes', 'yes', 8000, 1, 'intelcpu', 'intel', 'ddr4');

-- --------------------------------------------------------

--
-- Table structure for table `psu`
--

CREATE TABLE `psu` (
  `psuid` bigint(10) NOT NULL,
  `psubrand` varchar(50) NOT NULL,
  `psumodel` varchar(50) NOT NULL,
  `psuimage` varchar(50) NOT NULL,
  `psutdp` varchar(50) NOT NULL,
  `psuformfactor` varchar(50) NOT NULL,
  `pprice` bigint(50) NOT NULL,
  `pqty` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psu`
--

INSERT INTO `psu` (`psuid`, `psubrand`, `psumodel`, `psuimage`, `psutdp`, `psuformfactor`, `pprice`, `pqty`) VALUES
(1, 'intel', 'intelpsu', 'pimages/3depoxy1.jpg', '185', 'atx', 788, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ramid` bigint(50) NOT NULL,
  `rambrand` varchar(50) NOT NULL,
  `rammodel` varchar(50) NOT NULL,
  `ramimage` varchar(50) NOT NULL,
  `rammemory` bigint(50) NOT NULL,
  `ramtype` varchar(50) NOT NULL,
  `rprice` bigint(50) NOT NULL,
  `rqty` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ramid`, `rambrand`, `rammodel`, `ramimage`, `rammemory`, `ramtype`, `rprice`, `rqty`) VALUES
(3, 'intel', 'intelram', 'pimages/MR BALIGA10.png', 8, 'ddr4', 3500, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`cabinetid`);

--
-- Indexes for table `case1`
--
ALTER TABLE `case1`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `cpucooler`
--
ALTER TABLE `cpucooler`
  ADD PRIMARY KEY (`cpucoolerid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customers1`
--
ALTER TABLE `customers1`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpuid`);

--
-- Indexes for table `hdd`
--
ALTER TABLE `hdd`
  ADD PRIMARY KEY (`hddid`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`motherboardid`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`cpuid`);

--
-- Indexes for table `psu`
--
ALTER TABLE `psu`
  ADD PRIMARY KEY (`psuid`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ramid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabinet`
--
ALTER TABLE `cabinet`
  MODIFY `cabinetid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `case1`
--
ALTER TABLE `case1`
  MODIFY `caseid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cpucooler`
--
ALTER TABLE `cpucooler`
  MODIFY `cpucoolerid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers1`
--
ALTER TABLE `customers1`
  MODIFY `cust_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpuid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hdd`
--
ALTER TABLE `hdd`
  MODIFY `hddid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboardid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `cpuid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `psu`
--
ALTER TABLE `psu`
  MODIFY `psuid` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ramid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
