-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2023 at 09:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28
CREATE DATABASE "multiple_choice_test";

USE "multiple_choice_test";

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiple_choice_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `introduce` text DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `fullname`, `avatar`, `email`, `address`, `tel`, `introduce`, `role_id`) VALUES
(1, 'quandohong28', '$2y$10$192QgdCAxxIM9j2/m6oHAu352KuPlMh8fJF73KaLm5ISh0lWeXlku', 'Đỗ Hồng Quân', 'quandohong28.jpg', 'quandohong28@gmail.com', NULL, NULL, NULL, 1),
(2, 'admin', '$2y$10$Bh3aDHnMSO.kmmkeOnM9ceSmgLWgHPK8Y4jFRnjMNJny7gmUq7Duu', NULL, 'quandohong28.jpg', 'admin@gmail.com', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `content`, `image`, `question_id`, `is_correct`) VALUES
(1, 'Phần mềm mà người dùng có thể xem, sửa đổi và phân phối mã nguồn.', NULL, 1, 1),
(2, 'Phần mềm chỉ có thể chạy trên máy tính có kết nối internet.', NULL, 1, 0),
(3, 'Phần mềm chỉ có thể chạy trên hệ điều hành Windows.', NULL, 1, 0),
(4, 'Phần mềm chỉ có thể sử dụng cho mục đích cá nhân.', NULL, 1, 0),
(5, 'Một phương pháp quản lý dự án linh hoạt và tương tác.', NULL, 2, 1),
(6, 'Một phương pháp nghiên cứu khoa học.', NULL, 2, 0),
(7, 'Một loại ngôn ngữ lập trình.', NULL, 2, 0),
(8, 'Một hệ điều hành mã nguồn mở.', NULL, 2, 0),
(9, 'Cả hai đều là phương pháp quản lý dự án Agile.', NULL, 3, 1),
(10, 'Cả hai đều là ngôn ngữ lập trình.', NULL, 3, 0),
(11, 'Cả hai chỉ được sử dụng trong kiểm thử phần mềm.', NULL, 3, 0),
(12, 'Cả hai chỉ được sử dụng trong phát triển phần mềm mã nguồn mở.', NULL, 3, 0),
(13, 'Kiểm tra xem các thành phần phần mềm hoạt động đúng cách không.', NULL, 4, 1),
(14, 'Kiểm tra toàn bộ hệ thống phần mềm.', NULL, 4, 0),
(15, 'Kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', NULL, 4, 0),
(16, 'Kiểm tra xem phần mềm có tương thích với các hệ thống khác không.', NULL, 4, 0),
(17, 'Kết hợp phát triển và vận hành để tối ưu hóa quy trình phát triển và triển khai phần mềm.', NULL, 5, 1),
(18, 'Quản lý phiên bản phần mềm.', NULL, 5, 0),
(19, 'Kiểm tra chất lượng phần mềm.', NULL, 5, 0),
(20, 'Thiết kế giao diện người dùng.', NULL, 5, 0),
(21, 'Khả năng thích ứng nhanh chóng với thay đổi và tương tác tích cực với khách hàng.', NULL, 6, 1),
(22, 'Sử dụng một số lượng lớn công cụ kiểm thử tự động.', NULL, 6, 0),
(23, 'Tuân thủ chặt chẽ theo kế hoạch ban đầu mà không cần điều chỉnh.', NULL, 6, 0),
(24, 'Giữ nguyên trạng thái và không thay đổi trong suốt quá trình phát triển.', NULL, 6, 0),
(25, 'Thực hiện kiểm thử đơn vị, kiểm thử tích hợp và kiểm thử hệ thống thường xuyên.', NULL, 7, 1),
(26, 'Tăng cường việc kiểm tra và sửa lỗi ở cuối quá trình phát triển.', NULL, 7, 0),
(27, 'Tạo ra một tài liệu chi tiết mô tả chức năng của phần mềm.', NULL, 7, 0),
(28, 'Giảm bớt thời gian dành cho quy trình kiểm thử để tăng tốc độ phát triển.', NULL, 7, 0),
(29, 'Continuous Integration/Continuous Deployment, tức là tích hợp liên tục và triển khai liên tục, là một phương pháp tự động hóa việc tích hợp mã nguồn và triển khai phiên bản mới.', NULL, 8, 1),
(30, 'Một phương pháp lập kế hoạch dự án phát triển phần mềm.', NULL, 8, 0),
(31, 'Kỹ thuật quản lý phiên bản mã nguồn.', NULL, 8, 0),
(32, 'Application Programming Interface.', NULL, 8, 0),
(33, 'Quy trình tối ưu hóa cấu trúc và mã nguồn của phần mềm mà không làm thay đổi hành vi bên ngoài.', NULL, 9, 1),
(34, 'Quy trình làm mới lại hệ thống phần mềm từ đầu.', NULL, 9, 0),
(35, 'Quy trình giảm bớt chức năng của phần mềm để làm cho mã nguồn ngắn gọn hơn.', NULL, 9, 0),
(36, 'Quy trình tăng cường chức năng của phần mềm.', NULL, 9, 0),
(37, 'Khả năng của hệ thống để xử lý một lượng lớn dữ liệu và người dùng mà không làm giảm đi hiệu suất.', NULL, 10, 1),
(38, 'Khả năng của phần mềm để chạy trên nhiều hệ thống khác nhau.', NULL, 10, 0),
(39, 'Khả năng của ngôn ngữ lập trình để tạo ra các ứng dụng đa nhiệm.', NULL, 10, 0),
(40, 'Khả năng của phần mềm để tương thích với các phiên bản mới của hệ điều hành.', NULL, 10, 0),
(41, 'Application Programming Interface.', NULL, 11, 1),
(42, 'Advanced Programming Interface.', NULL, 11, 0),
(43, 'Automated Programming Interface.', NULL, 11, 0),
(44, 'Application Process Interface.', NULL, 11, 0),
(45, 'Kiểm tra xem các thay đổi gần đây có ảnh hưởng đến các chức năng hiện tại không.', NULL, 12, 1),
(46, 'Kiểm tra lại tất cả các chức năng của phần mềm.', NULL, 12, 0),
(47, 'Kiểm tra tích hợp của phần mềm với các hệ thống khác.', NULL, 12, 0),
(48, 'Kiểm tra chất lượng giao diện người dùng.', NULL, 12, 0),
(49, 'Một phương pháp phát triển phần mềm tuần tự với các giai đoạn nhất định.', NULL, 13, 1),
(50, 'Một phương pháp phát triển phần mềm linh hoạt.', NULL, 13, 0),
(51, 'Một loại ngôn ngữ lập trình.', NULL, 13, 0),
(52, 'Một phương pháp phát triển phần mềm không yêu cầu kế hoạch trước.', NULL, 13, 0),
(53, 'Một bản tuyên bố mô tả các giá trị và nguyên tắc của phương pháp Agile.', NULL, 14, 1),
(54, 'Một tài liệu hướng dẫn về cách viết mã nguồn.', NULL, 14, 0),
(55, 'Một chuỗi các câu lệnh lập trình.', NULL, 14, 0),
(56, 'Một công cụ kiểm thử tự động.', NULL, 14, 0),
(57, 'Người giữ cho quy trình Scrum được tuân thủ và giúp giải quyết các vấn đề phát sinh.', NULL, 15, 1),
(58, 'Người viết mã nguồn chính của dự án.', NULL, 15, 0),
(59, 'Người thiết kế giao diện người dùng.', NULL, 15, 0),
(60, 'Người kiểm tra chất lượng của sản phẩm.', NULL, 15, 0),
(61, 'Kiểm tra các thành phần riêng lẻ của mã nguồn để đảm bảo chúng hoạt động đúng cách.', NULL, 16, 1),
(62, 'Kiểm tra chất lượng giao diện người dùng.', NULL, 16, 0),
(63, 'Kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', NULL, 16, 0),
(64, 'Kiểm tra tích hợp của phần mềm với các hệ thống khác.', NULL, 16, 0),
(65, 'Một quy trình kiểm tra chất lượng mã nguồn bằng cách xem xét mã nguồn của người khác.', NULL, 17, 1),
(66, 'Một quy trình kiểm tra chất lượng giao diện người dùng.', NULL, 17, 0),
(67, 'Một phương pháp kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', NULL, 17, 0),
(68, 'Một phương pháp kiểm tra tích hợp của phần mềm với các hệ thống khác.', NULL, 17, 0),
(69, 'Quá trình triển khai phiên bản mới của phần mềm vào môi trường sản xuất hoặc khách hàng cuối.', NULL, 18, 1),
(70, 'Quá trình viết mã nguồn.', NULL, 18, 0),
(71, 'Quá trình thiết kế giao diện người dùng.', NULL, 18, 0),
(72, 'Quá trình kiểm thử tự động.', NULL, 18, 0),
(73, 'Minimum Viable Product.', NULL, 19, 1),
(74, 'Most Valuable Player.', NULL, 19, 0),
(75, 'Maximum Value Proposition.', NULL, 19, 0),
(76, 'Most Valued Project.', NULL, 19, 0),
(77, 'Kiểm tra toàn bộ quy trình hoạt động của phần mềm từ đầu đến cuối.', NULL, 20, 1),
(78, 'Kiểm tra từng thành phần của phần mềm một cách riêng lẻ.', NULL, 20, 0),
(79, 'Kiểm tra chất lượng giao diện người dùng.', NULL, 20, 0),
(80, 'Kiểm tra tích hợp của phần mềm với các hệ thống khác.', NULL, 20, 0),
(81, 'Phần mềm chỉ dành cho người dùng cuối', NULL, 21, 0),
(82, 'Phần mềm có mã nguồn được công khai và có thể sửa đổi', NULL, 21, 1),
(83, 'Phần mềm chỉ chạy trên máy Mac', NULL, 21, 0),
(84, 'Phần mềm chỉ chạy trên máy Windows', NULL, 21, 0),
(85, 'Java', NULL, 22, 0),
(86, 'Python', NULL, 22, 0),
(87, 'HTML/CSS/JavaScript', NULL, 22, 1),
(88, 'C++', NULL, 22, 0),
(89, 'Kế thừa', NULL, 23, 1),
(90, 'Đa hình', NULL, 23, 0),
(91, 'Đóng gói', NULL, 23, 0),
(92, 'Trừu tượng', NULL, 23, 0),
(93, 'MySQL', NULL, 24, 1),
(94, 'MongoDB', NULL, 24, 0),
(95, 'SQLite', NULL, 24, 0),
(96, 'Oracle', NULL, 24, 0),
(97, 'Advanced Programming Interface', NULL, 25, 0),
(98, 'Application Programming Interface', NULL, 25, 1),
(99, 'Automated Programming Interface', NULL, 25, 0),
(100, 'Advanced Protocol Interface', NULL, 25, 0),
(101, 'Java', NULL, 26, 0),
(102, 'Swift', NULL, 26, 1),
(103, 'Python', NULL, 26, 0),
(104, 'C#', NULL, 26, 0),
(105, 'Địa chỉ vật lý của máy tính', NULL, 27, 0),
(106, 'Địa chỉ email', NULL, 27, 0),
(107, 'Địa chỉ trang web', NULL, 27, 1),
(108, 'Địa chỉ mạng', NULL, 27, 0),
(109, 'Integrated Development Environment', NULL, 28, 1),
(110, 'Interactive Design Environment', NULL, 28, 0),
(111, 'Intelligent Development Environment', NULL, 28, 0),
(112, 'Integrated Design Environment', NULL, 28, 0),
(113, 'Java', NULL, 29, 1),
(114, 'Python', NULL, 29, 0),
(115, 'JavaScript', NULL, 29, 0),
(116, 'HTML', NULL, 29, 0),
(117, 'Uniform Resource Locator', NULL, 30, 1),
(118, 'Universal Resource Link', NULL, 30, 0),
(119, 'Uniform Resource Link', NULL, 30, 0),
(120, 'Universal Resource Locator', NULL, 30, 0),
(121, 'Một loại biến', NULL, 31, 0),
(122, 'Một phần mềm chạy tự động', NULL, 31, 0),
(123, 'Một cấu trúc lặp lại lệnh nhiều lần', NULL, 31, 1),
(124, 'Một loại lỗi trong mã nguồn', NULL, 31, 0),
(125, 'Một loại máy tính', NULL, 32, 0),
(126, 'Một ngôn ngữ lập trình', NULL, 32, 0),
(127, 'Một quy trình giải quyết vấn đề', NULL, 32, 1),
(128, 'Một loại dữ liệu', NULL, 32, 0),
(129, '5', NULL, 33, 0),
(130, '8', NULL, 33, 0),
(131, '10', NULL, 33, 1),
(132, '15', NULL, 33, 0),
(133, 'Các lệnh lập trình chính', NULL, 34, 0),
(134, 'Một ngôn ngữ lập trình web', NULL, 34, 0),
(135, 'Một chuẩn mã nguồn mở', NULL, 34, 0),
(136, 'Một ngôn ngữ dùng để thiết kế giao diện trang web', NULL, 34, 1),
(137, 'Một giá trị không thay đổi', NULL, 35, 0),
(138, 'Một hằng số', NULL, 35, 0),
(139, 'Một tên được gán cho một giá trị hoặc đối tượng', NULL, 35, 1),
(140, 'Một loại dữ liệu', NULL, 35, 0),
(141, 'print(\"Hello, World!\")', NULL, 36, 1),
(142, 'echo(\"Hello, World!\")', NULL, 36, 0),
(143, 'console.log(\"Hello, World!\")', NULL, 36, 0),
(144, 'display(\"Hello, World!\")', NULL, 36, 0),
(145, 'Một biến chứa một giá trị', NULL, 37, 0),
(146, 'Một tập hợp các biến có cùng kiểu dữ liệu', NULL, 37, 1),
(147, 'Một hàm toán học', NULL, 37, 0),
(148, 'Một kiểu dữ liệu chỉ chứa số nguyên', NULL, 37, 0),
(149, 'Giá trị số nguyên', NULL, 38, 0),
(150, 'Giá trị logic đúng/sai (true/false)', NULL, 38, 1),
(151, 'Giá trị thập phân', NULL, 38, 0),
(152, 'Giá trị chuỗi ký tự', NULL, 38, 0),
(153, 'Một giá trị không thay đổi', NULL, 39, 0),
(154, 'Một chuỗi ký tự', NULL, 39, 0),
(155, 'Một đoạn mã thực hiện một nhiệm vụ cụ thể', NULL, 39, 1),
(156, 'Một hằng số', NULL, 39, 0),
(157, 'Một thuộc tính của một đối tượng', NULL, 40, 0),
(158, 'Một phương thức của một đối tượng', NULL, 40, 0),
(159, 'Một đối tượng kế thừa các thuộc tính và phương thức từ một đối tượng khác', NULL, 40, 1),
(160, 'Một loại dữ liệu', NULL, 40, 0),
(161, 'Phần mềm chỉ dành cho người dùng cuối', NULL, 41, 0),
(162, 'Phần mềm có mã nguồn được công khai và có thể sửa đổi', NULL, 41, 1),
(163, 'Phần mềm chỉ chạy trên máy Mac', NULL, 41, 0),
(164, 'Phần mềm chỉ chạy trên máy Windows', NULL, 41, 0),
(165, 'Cả hai đều là phương pháp phát triển phần mềm Agile', NULL, 42, 1),
(166, 'Cả hai đều không sử dụng biểu đồ Kanban', NULL, 42, 0),
(167, 'Cả hai đều không có Sprint', NULL, 42, 0),
(168, 'Cả hai đều tập trung vào quản lý quy trình làm việc', NULL, 42, 0),
(169, 'Kiểm thử phần mềm toàn bộ', NULL, 43, 0),
(170, 'Kiểm thử một đơn vị nhỏ nhất của mã nguồn, chẳng hạn như một hàm hoặc một phương thức', NULL, 43, 1),
(171, 'Kiểm thử giao diện người dùng', NULL, 43, 0),
(172, 'Kiểm thử tương tác giữa các thành phần của hệ thống', NULL, 43, 0),
(173, 'Tối ưu hóa hiệu suất ứng dụng', NULL, 44, 0),
(174, 'Tích hợp quy trình phát triển và quy trình vận hành hệ thống', NULL, 44, 1),
(175, 'Thiết kế giao diện người dùng', NULL, 44, 0),
(176, 'Kiểm thử bảo mật', NULL, 44, 0),
(177, 'Thay đổi liên tục không kế hoạch', NULL, 45, 0),
(178, 'Không có sự đánh giá định kỳ về tiến độ công việc', NULL, 45, 0),
(179, 'Khả năng thích ứng nhanh chóng với thay đổi', NULL, 45, 1),
(180, 'Giữ nguyên mọi yêu cầu từ đầu đến cuối dự án', NULL, 45, 0),
(181, 'Chỉ kiểm thử ở cuối quá trình phát triển', NULL, 46, 0),
(182, 'Tự động hóa quy trình kiểm thử', NULL, 46, 1),
(183, 'Không cần kiểm thử nếu mã nguồn được viết đúng', NULL, 46, 0),
(184, 'Chỉ cần kiểm thử các tính năng chính của ứng dụng', NULL, 46, 0),
(185, 'Customer Interaction/Code Deployment', NULL, 47, 0),
(186, 'Continuous Integration/Continuous Deployment', NULL, 47, 1),
(187, 'Code Inspection/Code Documentation', NULL, 47, 0),
(188, 'Critical Issue/Customer Delivery', NULL, 47, 0),
(189, 'Quá trình sửa đổi mã nguồn mà không làm thay đổi chức năng của ứng dụng', NULL, 48, 1),
(190, 'Quá trình kiểm thử và xác thực mã nguồn', NULL, 48, 0),
(191, 'Quá trình thiết kế giao diện người dùng', NULL, 48, 0),
(192, 'Quá trình tối ưu hóa hiệu suất ứng dụng', NULL, 48, 0),
(193, 'Khả năng tương thích với các phiên bản cũ của phần mềm', NULL, 49, 0),
(194, 'Khả năng tương thích với nhiều hệ thống khác nhau', NULL, 49, 0),
(195, 'Khả năng mở rộng và xử lý tăng lượng dữ liệu hoặc người dùng mà không giảm hiệu suất', NULL, 49, 1),
(196, 'Khả năng tự động cập nhật phần mềm khi có phiên bản mới', NULL, 49, 0),
(197, 'Application Programming Interface', NULL, 50, 1),
(198, 'Advanced Programming Interface', NULL, 50, 0),
(199, 'Automated Program Interface', NULL, 50, 0),
(200, 'Application Production Interface', NULL, 50, 0),
(201, 'Kiểm thử để đảm bảo rằng các tính năng mới không ảnh hưởng đến các tính năng đã tồn tại', NULL, 51, 1),
(202, 'Kiểm thử một phần nhỏ của mã nguồn để đảm bảo rằng nó không có lỗi', NULL, 51, 0),
(203, 'Kiểm thử để xác định hiệu suất của hệ thống trong điều kiện tải', NULL, 51, 0),
(204, 'Kiểm thử để xác định nguyên nhân của lỗi cụ thể', NULL, 51, 0),
(205, 'Một phương pháp phát triển phần mềm tuần và tuyến tính', NULL, 52, 1),
(206, 'Một phương pháp phát triển phần mềm Agile', NULL, 52, 0),
(207, 'Một phương pháp phát triển phần mềm không cần kế hoạch', NULL, 52, 0),
(208, 'Một phương pháp phát triển phần mềm chỉ tập trung vào kiểm thử', NULL, 52, 0),
(209, 'Một tài liệu hướng dẫn cho việc viết mã nguồn', NULL, 53, 0),
(210, 'Một tài liệu hướng dẫn cho việc quản lý dự án phát triển phần mềm', NULL, 53, 0),
(211, 'Một tài liệu mô tả về các nguyên tắc và giá trị của việc phát triển phần mềm theo phương pháp Agile', NULL, 53, 1),
(212, 'Một tài liệu hướng dẫn cho việc kiểm thử phần mềm', NULL, 53, 0),
(213, 'Người hỗ trợ và tạo điều kiện cho nhóm Scrum làm việc hiệu quả', NULL, 54, 1),
(214, 'Người viết mã nguồn', NULL, 54, 0),
(215, 'Người quản lý dự án', NULL, 54, 0),
(216, 'Người chịu trách nhiệm về chất lượng phần mềm', NULL, 54, 0),
(217, 'Kiểm thử từng phần nhỏ nhất của mã nguồn, chẳng hạn như một hàm hoặc một phương thức', NULL, 55, 1),
(218, 'Kiểm thử toàn bộ ứng dụng', NULL, 55, 0),
(219, 'Kiểm thử giao diện người dùng', NULL, 55, 0),
(220, 'Kiểm thử tích hợp giữa các thành phần của hệ thống', NULL, 55, 0),
(221, 'Kiểm tra mã nguồn để xác định lỗi cú pháp', NULL, 56, 0),
(222, 'Kiểm tra mã nguồn để xác định lỗi logic và kiểu dữ liệu', NULL, 56, 0),
(223, 'Kiểm tra mã nguồn để xác định việc viết mã theo quy tắc và tiêu chuẩn đặt ra', NULL, 56, 1),
(224, 'Kiểm tra mã nguồn để xác định các vấn đề hiệu suất', NULL, 56, 0),
(225, 'Quá trình xây dựng mã nguồn từ mã nguồn nguồn và triển khai lên máy chủ sản phẩm', NULL, 57, 0),
(226, 'Quá trình chuyển đổi mã nguồn thành tập tin thực thi và triển khai ứng dụng lên môi trường sản phẩm', NULL, 57, 1),
(227, 'Quá trình kiểm thử tự động ứng dụng trên các môi trường khác nhau', NULL, 57, 0),
(228, 'Quá trình xác định yêu cầu của khách hàng và triển khai các tính năng tương ứng', NULL, 57, 0),
(229, 'Most Valuable Product', NULL, 58, 0),
(230, 'Minimum Viable Product', NULL, 58, 1),
(231, 'Most Valuable Project', NULL, 58, 0),
(232, 'Minimum Viable Project', NULL, 58, 0),
(233, 'Kiểm thử tất cả các thành phần của hệ thống hoạt động đúng cách khi kết hợp với nhau', NULL, 59, 1),
(234, 'Kiểm thử từng thành phần của hệ thống độc lập', NULL, 59, 0),
(235, 'Kiểm thử tất cả các giao diện người dùng', NULL, 59, 0),
(236, 'Kiểm thử hiệu suất của hệ thống', NULL, 59, 0),
(237, 'Một tài liệu mô tả về các nguyên tắc và giá trị của việc phát triển phần mềm theo phương pháp Agile', NULL, 60, 1),
(238, 'Một tài liệu hướng dẫn cho việc viết mã nguồn', NULL, 60, 0),
(239, 'Một tài liệu hướng dẫn cho việc quản lý dự án phát triển phần mềm', NULL, 60, 0),
(240, 'Một tài liệu hướng dẫn cho việc kiểm thử phần mềm', NULL, 60, 0),
(241, 'Máy tính tự thực hiện phẫu thuật.', NULL, 61, 0),
(242, 'Một loại robot.', NULL, 61, 0),
(243, 'Lĩnh vực nghiên cứu và phát triển máy tính có khả năng học và thực hiện nhiệm vụ.', NULL, 61, 1),
(244, 'Tất cả đều đúng.', NULL, 61, 0),
(245, 'Sử dụng máy tính để học từ dữ liệu và cải thiện khả năng của chúng.', NULL, 62, 1),
(246, 'Máy tính tự động chơi cờ.', NULL, 62, 0),
(247, 'Là quá trình lập trình máy tính.', NULL, 62, 0),
(248, 'Tất cả máy tính đều tự động học cách thực hiện nhiệm vụ.', NULL, 62, 0),
(249, 'Một kỹ thuật để làm cho máy tính tự thấy mình thông minh.', NULL, 63, 0),
(250, 'Sử dụng các mạng nơ-ron sâu để hiểu và biểu diễn dữ liệu phức tạp.', NULL, 63, 1),
(251, 'Một loại học thấp kỹ thuật.', NULL, 63, 0),
(252, 'Làm thế nào con người học cách làm những việc mới.', NULL, 63, 0),
(253, 'Giúp robot thực hiện phẫu thuật.', NULL, 64, 0),
(254, 'Quản lý việc đặt hẹn bác sĩ.', NULL, 64, 0),
(255, 'Hỗ trợ bác sĩ trong chẩn đoán bệnh.', NULL, 64, 1),
(256, 'Làm đồ ăn cho bệnh nhân.', NULL, 64, 0),
(257, 'Bằng cách xử lý thông tin từ các cảm biến và quyết định lái xe.', NULL, 65, 1),
(258, 'Bằng cách tự động đậu xe ở mọi vị trí.', NULL, 65, 0),
(259, 'Bằng cách thay thế tài xế hoàn toàn.', NULL, 65, 0),
(260, 'Bằng cách tự động đặt hàng thức uống cho người lái.', NULL, 65, 0),
(261, 'Một lĩnh vực nghiên cứu chuyên về trí tuệ nhân tạo.', NULL, 66, 0),
(262, 'Lĩnh vực nghiên cứu và phát triển máy móc tự động có khả năng thực hiện nhiệm vụ trong môi trường thực tế.', NULL, 66, 1),
(263, 'Một ngành công nghiệp sản xuất đồ chơi robot.', NULL, 66, 0),
(264, 'Tất cả các loại máy móc.', NULL, 66, 0),
(265, 'Ngành sản xuất thực phẩm.', NULL, 67, 0),
(266, 'Sản xuất ô tô, công nghiệp điện tử và công việc lặp lại có tính chính xác cao.', NULL, 67, 1),
(267, 'Ngành dệt may.', NULL, 67, 0),
(268, 'Ngành công nghiệp vận tải.', NULL, 67, 0),
(269, 'Bằng cách sử dụng bản đồ giấy và bút chì.', NULL, 68, 0),
(270, 'Bằng cách sử dụng cảm biến nhấp nháy.', NULL, 68, 1),
(271, 'Bằng cách hỏi người điều khiển nơi nó đang ở.', NULL, 68, 0),
(272, 'Bằng cách sử dụng GPS.', NULL, 68, 0),
(273, 'Bằng cách sử dụng tiếng ồn và ánh sáng.', NULL, 69, 0),
(274, 'Bằng cách đọc suy nghĩ của con người.', NULL, 69, 0),
(275, 'Bằng cách sử dụng cảm biến để phát hiện và phản ứng với giao tiếp con người.', NULL, 69, 1),
(276, 'Bằng cách chỉ đơn giản lắc đầu.', NULL, 69, 0),
(277, 'Bằng cách tự động gọi điện thoại cho các đội cứu hộ.', NULL, 70, 0),
(278, 'Bằng cách xây dựng cầu và đường dẫn an toàn.', NULL, 70, 0),
(279, 'Bằng cách sử dụng cảm biến để tìm kiếm người mắc kẹt và cung cấp thông tin vị trí.', NULL, 70, 1),
(280, 'Bằng cách hát ca khúc để nâng tinh thần cho các nạn nhân.', NULL, 70, 0),
(281, 'Thực hiện việc quảng cáo sản phẩm.', NULL, 71, 0),
(282, 'Kiểm tra chất lượng sản phẩm.', NULL, 71, 1),
(283, 'Xây dựng thương hiệu sản phẩm.', NULL, 71, 0),
(284, 'Làm cho hàng hóa trở nên thơm ngon.', NULL, 71, 0),
(285, 'Bằng cách luyện tập thể hình.', NULL, 72, 0),
(286, 'Bằng cách tự động pha trộn các loại thuốc.', NULL, 72, 0),
(287, 'Bằng cách thực hiện thí nghiệm và kiểm tra lâm sàng.', NULL, 72, 1),
(288, 'Bằng cách chơi game y học trực tuyến.', NULL, 72, 0),
(289, 'Bằng cách gửi tín hiệu tiếng sấm để ngăn tai nạn.', NULL, 73, 0),
(290, 'Bằng cách sử dụng cảm biến để thu thập thông tin về môi trường xung quanh.', NULL, 73, 1),
(291, 'Bằng cách biểu diễn đám mây trên bản đồ giấy.', NULL, 73, 0),
(292, 'Bằng cách thực hiện đường nét mạch điện tử trên bảng điều khiển.', NULL, 73, 0),
(293, 'Sự quyết tâm của robot.', NULL, 74, 0),
(294, 'Khả năng biết cười của robot.', NULL, 74, 0),
(295, 'Khả năng tự động học và thích nghi của robot.', NULL, 74, 1),
(296, 'Sự thông minh của robot.', NULL, 74, 0),
(297, 'Bằng cách chỉ đơn giản lắc đầu.', NULL, 75, 0),
(298, 'Bằng cách sử dụng ánh mắt đa dạng.', NULL, 75, 1),
(299, 'Bằng cách gửi tin nhắn văn bản.', NULL, 75, 0),
(300, 'Bằng cách đọc suy nghĩ của con người.', NULL, 75, 0),
(301, 'Quá trình phân tích dữ liệu lịch sử.', NULL, 76, 0),
(302, 'Quá trình sử dụng dữ liệu hiện tại để đưa ra kết luận.', NULL, 76, 1),
(303, 'Quá trình học máy.', NULL, 76, 0),
(304, 'Quá trình ghi chép thông tin.', NULL, 76, 0),
(305, 'Sản phẩm tiêu biểu của ngành công nghiệp ô tô.', NULL, 77, 0),
(306, 'Simultaneous Localization and Mapping.', NULL, 77, 1),
(307, 'Hệ thống giao thông thông minh tự động.', NULL, 77, 0),
(308, 'Máy tính siêu mạnh.', NULL, 77, 0),
(309, 'Bằng cách sử dụng chỉ một lớp nơ-ron.', NULL, 78, 0),
(310, 'Bằng cách giảm độ sâu của mạng.', NULL, 78, 0),
(311, 'Bằng cách kết hợp nhiều lớp nơ-ron và trọng số.', NULL, 78, 1),
(312, 'Bằng cách chỉ sử dụng hàm kích hoạt tuyến tính.', NULL, 78, 0),
(313, 'Bằng cách giám sát con người liên tục.', NULL, 79, 0),
(314, 'Bằng cách tạo ra khu vực cách ly cho robot.', NULL, 79, 0),
(315, 'Bằng cách sử dụng cảm biến an toàn và hệ thống kiểm soát.', NULL, 79, 1),
(316, 'Bằng cách đào tạo con người để không gây xung đột với robot.', NULL, 79, 0),
(317, 'Bằng cách thay thế toàn bộ phần cứng.', NULL, 80, 0),
(318, 'Bằng cách thực hiện bảo trì định kỳ.', NULL, 80, 0),
(319, 'Bằng cách sử dụng giáo viên robot.', NULL, 80, 0),
(320, 'Bằng cách sử dụng học máy và học sâu.', NULL, 80, 0),
(321, 'Total Control Protocol / Internet Protocol', NULL, 81, 0),
(322, 'Transmission Control Protocol / Internet Protocol', NULL, 81, 1),
(323, 'The Communication Protocol / Internet Protocol', NULL, 81, 0),
(324, 'Top Computer Protocol / Internet Protocol', NULL, 81, 0),
(325, 'Truyền tải âm thanh qua mạng.', NULL, 82, 0),
(326, 'Truyền tải video qua mạng.', NULL, 82, 0),
(327, 'Truyền tải trang web và dữ liệu hypertext.', NULL, 82, 1),
(328, 'Truyền tải email qua mạng.', NULL, 82, 0),
(329, 'Phủ sóng rộng khắp toàn bộ thế giới.', NULL, 83, 0),
(330, 'Dễ quản lý và hiệu suất cao trong phạm vi hạn chế.', NULL, 83, 1),
(331, 'Chia sẻ dữ liệu trực tuyến với người dùng trên Internet.', NULL, 83, 0),
(332, 'Đủ lớn để kết nối hàng triệu thiết bị.', NULL, 83, 0),
(333, 'Một loại cổng USB.', NULL, 84, 0),
(334, 'Một dãy số xác định một thiết bị trên mạng.', NULL, 84, 1),
(335, 'Một loại máy tính.', NULL, 84, 0),
(336, 'Một loại ứng dụng mạng.', NULL, 84, 0),
(337, 'Sổ điện thoại.', NULL, 85, 0),
(338, 'Dịch vụ gửi thư truyền hình.', NULL, 85, 0),
(339, 'Giao thức truyền tải dữ liệu.', NULL, 85, 1),
(340, 'Địa chỉ IP của máy tính mục tiêu.', NULL, 85, 0),
(341, 'Bluetooth', NULL, 86, 0),
(342, 'Ethernet', NULL, 86, 0),
(343, 'Wi-Fi', NULL, 86, 1),
(344, 'GPS', NULL, 86, 0),
(345, 'Hình ảnh', NULL, 87, 0),
(346, 'Văn bản', NULL, 87, 0),
(347, 'Âm thanh', NULL, 87, 0),
(348, 'Tài liệu PDF', NULL, 87, 1),
(349, 'Hệ thống địa chỉ IP.', NULL, 88, 0),
(350, 'Một loại cổng USB.', NULL, 88, 0),
(351, 'Giao thức truyền tải dữ liệu.', NULL, 88, 0),
(352, 'Hệ thống đổi tên miền thành địa chỉ IP.', NULL, 88, 1),
(353, 'Microsoft Word', NULL, 89, 0),
(354, 'Photoshop', NULL, 89, 0),
(355, 'Google Chrome', NULL, 89, 1),
(356, 'Adobe Reader', NULL, 89, 0),
(357, 'Các chuỗi cáp quang dài hàng ngàn km.', NULL, 90, 0),
(358, 'Một máy fax cổ điển.', NULL, 90, 0),
(359, 'Một máy tính và giao thức email.', NULL, 90, 1),
(360, 'Bất kỳ ứng dụng di động nào.', NULL, 90, 0),
(361, 'Lớp Vận chuyển (Transport Layer).', NULL, 91, 0),
(362, 'Lớp Liên kết dữ liệu (Data Link Layer).', NULL, 91, 0),
(363, 'Lớp Mạng (Network Layer).', NULL, 91, 1),
(364, 'Lớp Ứng dụng (Application Layer).', NULL, 91, 0),
(365, 'Tường lửa, một thiết bị hoặc phần mềm giúp bảo vệ mạng khỏi truy cập trái phép.', NULL, 92, 1),
(366, 'Một cửa sổ thông báo lỗi.', NULL, 92, 0),
(367, 'Tường gạch trong phòng server', NULL, 92, 0),
(368, 'Bất kỳ thứ gì được nung nóng trước khi sử dụng.', NULL, 92, 0),
(369, 'HTTP', NULL, 93, 0),
(370, 'FTP', NULL, 93, 1),
(371, 'HTTPS', NULL, 93, 0),
(372, 'SMTP', NULL, 93, 0),
(373, 'Một mã dẫn đến trang web cụ thể.', NULL, 94, 0),
(374, 'Tên mạng không dây (Wireless Network Name) để xác định mạng Wi-Fi.', NULL, 94, 1),
(375, 'Một loại loa không dây.', NULL, 94, 0),
(376, 'Mã số ngẫu nhiên trên mạng.', NULL, 94, 0),
(377, 'Một vùng ngoại trời ngoài khơi để kết nối cáp dưới biển.', NULL, 95, 0),
(378, 'Một nơi để kết nối máy tính vào mạng.', NULL, 95, 1),
(379, 'Một chỗ để máy tính lưu trữ tất cả tệp tin.', NULL, 95, 0),
(380, 'Một loại công cụ trồng cây trên máy tính.', NULL, 95, 0),
(381, 'Lớp Mạng (Network Layer).', NULL, 96, 0),
(382, 'Lớp Vận chuyển (Transport Layer).', NULL, 96, 1),
(383, 'Lớp Liên kết dữ liệu (Data Link Layer).', NULL, 96, 0),
(384, 'Lớp Trình bày (Presentation Layer).', NULL, 96, 0),
(385, 'Very Large Area Network.', NULL, 97, 0),
(386, 'Virtual Local Area Network.', NULL, 97, 1),
(387, 'Visual Language for Network.', NULL, 97, 0),
(388, 'Virtual Linking of Area Networks.', NULL, 97, 0),
(389, 'Xác thực người dùng trước khi truy cập mạng.', NULL, 98, 0),
(390, 'Gửi dữ liệu trên mạng bằng email.', NULL, 98, 0),
(391, 'Phân chia mạng thành các phân đoạn.', NULL, 98, 0),
(392, 'Truy cập và quản lý email trên máy chủ email.', NULL, 98, 1),
(393, 'Chuyển đổi giữa hai loại giao thức mạng khác nhau.', NULL, 99, 0),
(394, 'Chuyển đổi giữa các địa chỉ IP và tên miền.', NULL, 99, 0),
(395, 'Chuyển đổi giữa các cổng mạng trên máy tính.', NULL, 99, 0),
(396, 'Chuyển đổi giữa các địa chỉ IP trong mạng nội bộ và địa chỉ IP công cộng.', NULL, 99, 1),
(397, 'DNS Lookup (Domain Name System Lookup).', NULL, 100, 1),
(398, 'ARP (Address Resolution Protocol).', NULL, 100, 0),
(399, 'NAT (Network Address Translation).', NULL, 100, 0),
(400, 'VPN (Virtual Private Network).', NULL, 100, 0),
(401, 'Dễ đoán và sử dụng chung cho nhiều dịch vụ.', NULL, 101, 0),
(402, 'Được lưu trữ trên một tờ giấy và để ở nơi dễ thấy.', NULL, 101, 0),
(403, 'Phức tạp, không dễ đoán, và không sử dụng chung cho nhiều dịch vụ.', NULL, 101, 1),
(404, 'Chia sẻ với bạn bè và gia đình.', NULL, 101, 0),
(405, 'Tạo ra các virus mới.', NULL, 102, 0),
(406, 'Bảo vệ máy tính khỏi các mối đe dọa từ phần mềm độc hại.', NULL, 102, 1),
(407, 'Cải thiện hiệu suất máy tính.', NULL, 102, 0),
(408, 'Tạo ra sao lưu của dữ liệu.', NULL, 102, 0),
(409, 'Gửi email giả mạo từ một ngân hàng yêu cầu bạn cung cấp thông tin tài khoản.', NULL, 103, 1),
(410, 'Lưu trữ dữ liệu quan trọng trên một ổ đĩa cứng ngoại.', NULL, 103, 0),
(411, 'Sử dụng phần mềm diệt virus để quét máy tính.', NULL, 103, 0),
(412, 'Xem video trực tuyến trên YouTube.', NULL, 103, 0),
(413, 'Sử dụng hai máy tính để bảo vệ dữ liệu.', NULL, 104, 0),
(414, 'Sử dụng hai mật khẩu khác nhau cho cùng một tài khoản.', NULL, 104, 0),
(415, 'Sử dụng hai yếu tố xác thực khác nhau để bảo vệ tài khoản.', NULL, 104, 1),
(416, 'Sử dụng hai trình duyệt web khác nhau để truy cập dữ liệu.', NULL, 104, 0),
(417, 'Bấm vào tất cả các liên kết để kiểm tra thông tin chi tiết.', NULL, 105, 0),
(418, 'Trả lời email để yêu cầu thêm thông tin.', NULL, 105, 0),
(419, 'Bỏ qua email đó và không mở bất kỳ đính kèm nào.', NULL, 105, 1),
(420, 'Gửi tiền cho người gửi email để khắc phục vấn đề.', NULL, 105, 0),
(421, 'Biến dữ liệu thành tiền tệ số.', NULL, 106, 0),
(422, 'Bảo vệ dữ liệu bằng cách chuyển nó thành ngôn ngữ máy tính.', NULL, 106, 0),
(423, 'Giảm kích thước của dữ liệu để tiết kiệm không gian lưu trữ.', NULL, 106, 0),
(424, 'Bảo vệ dữ liệu bằng cách biến nó thành dạng không đọc được trừ khi có khóa giải mã.', NULL, 106, 1),
(425, 'Thiết bị giúp tạo lửa trong lò nướng.', NULL, 107, 0),
(426, 'Phần mềm để tạo ra một quy tắc truy cập mạng.', NULL, 107, 1),
(427, 'Một hệ thống bảo vệ máy tính khỏi việc lây lan của virus.', NULL, 107, 0),
(428, 'Một loại chuỗi cổng USB.', NULL, 107, 0),
(429, 'Firewall', NULL, 108, 1),
(430, 'Trình duyệt web', NULL, 108, 0),
(431, 'Chương trình vẽ hình', NULL, 108, 0),
(432, 'Ổ đĩa cứng', NULL, 108, 0),
(433, 'Mã hóa dữ liệu.', NULL, 109, 1),
(434, 'Phishing.', NULL, 109, 0),
(435, 'Xác thực đa yếu tố (MFA).', NULL, 109, 0),
(436, 'Ngăn chặn tấn công từ chối dịch vụ (DDoS).', NULL, 109, 0),
(437, 'Gửi email giả mạo để lừa đảo thông tin cá nhân.', NULL, 110, 0),
(438, 'Gửi virus qua email để lây nhiễm máy tính.', NULL, 110, 0),
(439, 'Gửi hàng loạt yêu cầu kết nối đến một máy chủ để làm cho máy chủ quá tải và ngừng hoạt động.', NULL, 110, 1),
(440, 'Xâm nhập vào hệ thống máy tính bằng cách tấn công từ chối dịch vụ.', NULL, 110, 0),
(441, 'Để tạo mật khẩu mạng không dây.', NULL, 111, 0),
(442, 'Để tạo ảnh sao của ổ cứng.', NULL, 111, 0),
(443, 'Để phân tích và kiểm tra lưu lượng mạng.', NULL, 111, 1),
(444, 'Để tạo bản sao lưu của dữ liệu trên máy tính.', NULL, 111, 0),
(445, 'Người ta sử dụng kính để xem màn hình máy tính.', NULL, 112, 0),
(446, 'Người ta sử dụng kính đeo đầu để quét mã vạch.', NULL, 112, 0),
(447, 'Người ta lén lút quan sát người khác nhập mật khẩu hoặc thông tin nhạy cảm.', NULL, 112, 1),
(448, 'Người ta sử dụng tay để kiểm tra nhiệt độ của máy tính.', NULL, 112, 0),
(449, 'Trình duyệt web.', NULL, 113, 0),
(450, 'Antivirus (phần mềm diệt virus).', NULL, 113, 1),
(451, 'Trình soạn thảo văn bản.', NULL, 113, 0),
(452, 'Giao diện người dùng máy tính.', NULL, 113, 0),
(453, 'Đăng nhập vào mạng xã hội.', NULL, 114, 0),
(454, 'Mở khóa điện thoại di động.', NULL, 114, 0),
(455, 'Mở cửa ATM (máy rút tiền tự động).', NULL, 114, 1),
(456, 'Kiểm tra email.', NULL, 114, 0),
(457, 'Bảo vệ dữ liệu cá nhân.', NULL, 115, 0),
(458, 'Gửi email quảng cáo.', NULL, 115, 0),
(459, 'Lừa đảo người dùng và lấy thông tin cá nhân hoặc tài khoản.', NULL, 115, 1),
(460, 'Tạo sao lưu dữ liệu.', NULL, 115, 0),
(461, 'Một phần mềm bảo mật chống lại mọi loại tấn công.', NULL, 116, 0),
(462, 'Một lỗ hổng bảo mật đã được khắc phục.', NULL, 116, 0),
(463, 'Một lỗ hổng bảo mật mà nhà phát triển chưa biết và chưa có biện pháp phòng ngừa.', NULL, 116, 1),
(464, 'Một công nghệ mã hóa thông tin.', NULL, 116, 0),
(465, 'Đánh cắp dữ liệu từ các trang web.', NULL, 117, 0),
(466, 'Tấn công vào hệ thống máy tính bằng cách sử dụng phần mềm độc hại.', NULL, 117, 0),
(467, 'Xâm nhập vào hệ thống viễn thông để gọi điện thoại miễn phí hoặc thay đổi dịch vụ viễn thông.', NULL, 117, 1),
(468, 'Giám sát lưu lượng mạng.', NULL, 117, 0),
(469, 'Gửi hàng loạt email giả mạo để lừa đảo người dùng.', NULL, 118, 0),
(470, 'Ngăn chặn hoặc theo dõi thông tin giữa hai bên giao tiếp mà họ không hề hay biết.', NULL, 118, 1),
(471, 'Sử dụng mã hóa để bảo vệ dữ liệu trực tuyến.', NULL, 118, 0),
(472, 'Tấn công bằng cách tạo ra một \"cửa sau\" trong hệ thống máy tính.', NULL, 118, 0),
(473, 'Sử dụng mạng xã hội để chia sẻ thông tin cá nhân.', NULL, 119, 0),
(474, 'Sử dụng phần mềm diệt virus để bảo vệ dữ liệu.', NULL, 119, 0),
(475, 'Sử dụng kỹ thuật xâm nhập máy tính.', NULL, 119, 0),
(476, 'Sử dụng xác định xã hội để lừa đảo người dùng và lấy thông tin quan trọng.', NULL, 119, 1),
(477, 'Một phần mềm diệt virus mạnh mẽ.', NULL, 120, 0),
(478, 'Một máy tính chứa dữ liệu quan trọng.', NULL, 120, 0),
(479, 'Một hệ thống giả mạo được sử dụng để thu thập thông tin về các cuộc tấn công.', NULL, 120, 1),
(480, 'Một tên miền web phức tạp.', NULL, 120, 0),
(481, 'Một hệ thống lưu trữ giấy tờ', NULL, 121, 0),
(482, 'Một hệ thống lưu trữ và quản lý dữ liệu và thông tin', NULL, 121, 1),
(483, 'Một hệ thống quản lý nhân viên', NULL, 121, 0),
(484, 'Một hệ thống quản lý dự án', NULL, 121, 0),
(485, 'Tạo ứng dụng di động', NULL, 122, 0),
(486, 'Quản lý nhân viên', NULL, 122, 0),
(487, 'Lưu trữ và tổ chức dữ liệu và thông tin', NULL, 122, 1),
(488, 'Xây dựng cơ sở dữ liệu quan hệ', NULL, 122, 0),
(489, 'Hệ thống quản lý dự án', NULL, 123, 0),
(490, 'Hệ thống quản lý tài sản', NULL, 123, 0),
(491, 'Hệ thống quản lý thông tin và tài liệu', NULL, 123, 1),
(492, 'Hệ thống quản lý nhân viên', NULL, 123, 0),
(493, 'Microsoft Word', NULL, 124, 0),
(494, 'Excel', NULL, 124, 0),
(495, 'SharePoint', NULL, 124, 1),
(496, 'PowerPoint', NULL, 124, 0),
(497, 'Tính phức tạp của dự án', NULL, 125, 0),
(498, 'Hiệu quả và hiệu suất làm việc', NULL, 125, 1),
(499, 'Sự phát triển kỹ thuật', NULL, 125, 0),
(500, 'Số lượng nhân viên', NULL, 125, 0),
(501, 'Một loại hệ thống quản lý nhân viên', NULL, 126, 0),
(502, 'Một phần mềm quản lý cơ sở dữ liệu', NULL, 126, 1),
(503, 'Một ứng dụng di động', NULL, 126, 0),
(504, 'Một công cụ thiết kế đồ họa', NULL, 126, 0),
(505, 'Ngành xây dựng', NULL, 127, 0),
(506, 'Ngành truyền thông', NULL, 127, 0),
(507, 'Lĩnh vực quản lý tri thức', NULL, 127, 1),
(508, 'Ngành hàng không', NULL, 127, 0),
(509, 'Quản lý tài sản vật lý', NULL, 128, 0),
(510, 'Tăng cường an toàn thông tin', NULL, 128, 0),
(511, 'Tổ chức và truy cập dữ liệu dễ dàng', NULL, 128, 1),
(512, 'Quản lý quy trình sản xuất', NULL, 128, 0),
(513, 'Rủi ro tài chính', NULL, 129, 0),
(514, 'Rủi ro môi trường', NULL, 129, 0),
(515, 'Rủi ro về an ninh mạng', NULL, 129, 1),
(516, 'Rủi ro y tế', NULL, 129, 0),
(517, 'Sự sáng tạo', NULL, 130, 0),
(518, 'Trải nghiệm khách hàng', NULL, 130, 0),
(519, 'Tính toàn vẹn và an ninh dữ liệu', NULL, 130, 0),
(520, 'Khả năng sản xuất nhanh hơn', NULL, 130, 0),
(521, 'Chúng không giống nhau', NULL, 131, 0),
(522, 'Cả hai đều quản lý thông tin và tài liệu', NULL, 131, 1),
(523, 'Chúng chỉ quản lý dự án', NULL, 131, 0),
(524, 'Chúng chỉ quản lý tài sản', NULL, 131, 0),
(525, 'Y tế', NULL, 132, 1),
(526, 'Kiến thức thể thao', NULL, 132, 0),
(527, 'Quản lý dự án', NULL, 132, 0),
(528, 'Phát triển phần mềm', NULL, 132, 0),
(529, 'Quản lý tài sản vật lý', NULL, 133, 0),
(530, 'Tổ chức thông tin và dữ liệu', NULL, 133, 1),
(531, 'Lập kế hoạch tiếp thị', NULL, 133, 0),
(532, 'Sáng tạo ứng dụng di động', NULL, 133, 0),
(533, 'Rủi ro y tế', NULL, 134, 0),
(534, 'Rủi ro tài chính', NULL, 134, 0),
(535, 'Rủi ro về an ninh mạng', NULL, 134, 1),
(536, 'Rủi ro môi trường', NULL, 134, 0),
(537, 'Sự sáng tạo', NULL, 135, 0),
(538, 'Trải nghiệm khách hàng', NULL, 135, 0),
(539, 'Tính toàn vẹn và an ninh dữ liệu', NULL, 135, 1),
(540, 'Khả năng sản xuất nhanh hơn', NULL, 135, 0),
(541, 'Dữ liệu quan trọng nhất trong hệ thống', NULL, 136, 0),
(542, 'Thông tin mô tả về dữ liệu và tài liệu', NULL, 136, 1),
(543, 'Dự án quản lý thông tin', NULL, 136, 0),
(544, 'Hệ thống lưu trữ', NULL, 136, 0),
(545, 'Tối ưu hóa mã nguồn', NULL, 137, 0),
(546, 'Thực hiện kiểm thử liên tục', NULL, 137, 0),
(547, 'Xác định và tuân thủ quy trình và chính sách', NULL, 137, 1),
(548, 'Không cần quản lý', NULL, 137, 0),
(549, 'Quản lý phiên bản của tài liệu', NULL, 138, 1),
(550, 'Quản lý các tài liệu không phiên bản', NULL, 138, 0),
(551, 'Xác định phiên bản phần mềm', NULL, 138, 0),
(552, 'Kiểm tra tài liệu', NULL, 138, 0),
(553, 'Tính năng của hệ thống', NULL, 139, 0),
(554, 'Khả năng mở rộng hoặc mở rộng hệ thống khi có nhiều người sử dụng', NULL, 139, 1),
(555, 'Quá trình triển khai', NULL, 139, 0),
(556, 'Tính năng của phần cứng', NULL, 139, 0),
(557, 'Quản lý nguồn cung ứng', NULL, 140, 0),
(558, 'Quản lý dự án', NULL, 140, 0),
(559, 'Quản lý nội dung và thông tin', NULL, 140, 1),
(560, 'Quản lý tài sản vật lý', NULL, 140, 0),
(561, 'Dữ liệu lớn và phức tạp', NULL, 141, 1),
(562, 'Dữ liệu cỡ trung bình', NULL, 141, 0),
(563, 'Dữ liệu nhỏ', NULL, 141, 0),
(564, 'Dữ liệu không quan trọng', NULL, 141, 0),
(565, 'Lập trình máy tính để thực hiện các công việc cụ thể', NULL, 142, 0),
(566, 'Việc máy tính học hỏi từ dữ liệu và cải thiện hiệu suất', NULL, 142, 1),
(567, 'Sử dụng máy tính để lập trình các ứng dụng di động', NULL, 142, 0),
(568, 'Sử dụng máy tính để gọi điện thoại', NULL, 142, 0),
(569, 'Một loại ngôn ngữ lập trình', NULL, 143, 0),
(570, 'Một công ty sản xuất máy tính', NULL, 143, 0),
(571, 'Một framework xử lý dữ liệu lớn', NULL, 143, 1),
(572, 'Một hệ điều hành', NULL, 143, 0),
(573, 'Khi nó vượt quá 100 MB', NULL, 144, 0),
(574, 'Khi nó vượt quá khả năng lưu trữ của một máy tính', NULL, 144, 0),
(575, 'Khi nó vượt quá khả năng xử lý bởi các công cụ truyền thống', NULL, 144, 1),
(576, 'Khi nó vượt quá 1 GB', NULL, 144, 0),
(577, 'Một framework xử lý dữ liệu lớn', NULL, 145, 1),
(578, 'Một công ty sản xuất máy tính', NULL, 145, 0),
(579, 'Một loại đèn sáng', NULL, 145, 0),
(580, 'Một hệ điều hành', NULL, 145, 0),
(581, 'Lập trình viên', NULL, 146, 0),
(582, 'Nhà khoa học dữ liệu', NULL, 146, 1),
(583, 'Chuyên gia an toàn mạng', NULL, 146, 0),
(584, 'Quản lý dự án', NULL, 146, 0),
(585, 'Một hình thức thể dục', NULL, 147, 0),
(586, 'Một dạng đường thẳng', NULL, 147, 0),
(587, 'Một loại thuật toán dự đoán giá trị số', NULL, 147, 1),
(588, 'Một loại ngôn ngữ lập trình', NULL, 147, 0),
(589, 'Voluminous, Variety, Value', NULL, 148, 1),
(590, 'Value, Variables, Vehicular', NULL, 148, 0),
(591, 'Volume, Volatility, Vector', NULL, 148, 0),
(592, 'Vegetables, Vocal, Vibrant', NULL, 148, 0),
(593, 'Máy tính học từ dữ liệu có sẵn và dự đoán dựa trên nhãn đã biết', NULL, 149, 0),
(594, 'Máy tính tự động viết mã nguồn', NULL, 149, 0),
(595, 'Máy tính học hỏi từ dữ liệu mà không cần hướng dẫn', NULL, 149, 1),
(596, 'Máy tính dự đoán tương lai không cần dữ liệu', NULL, 149, 0),
(597, 'Khi nó vượt quá 100 MB', NULL, 150, 0),
(598, 'Khi nó vượt quá khả năng lưu trữ của một máy tính', NULL, 150, 0),
(599, 'Khi nó vượt quá khả năng xử lý bởi các công cụ truyền thống', NULL, 150, 1),
(600, 'Khi nó vượt quá 1 GB', NULL, 150, 0),
(601, 'Máy tính học từ dữ liệu mà không cần hướng dẫn', NULL, 151, 0),
(602, 'Máy tính học từ dữ liệu có sẵn và dự đoán dựa trên nhãn đã biết', NULL, 151, 1),
(603, 'Máy tính tự động viết mã nguồn', NULL, 151, 0),
(604, 'Máy tính dự đoán tương lai không cần dữ liệu', NULL, 151, 0),
(605, 'MapReduce là một trò chơi điện tử và không liên quan đến Big Data', NULL, 152, 0),
(606, 'MapReduce là một ngôn ngữ lập trình', NULL, 152, 0),
(607, 'MapReduce là một framework xử lý và phân tán dữ liệu lớn', NULL, 152, 1),
(608, 'MapReduce là một công ty sản xuất ứng dụng di động', NULL, 152, 0),
(609, 'Đo độ dài mã nguồn', NULL, 153, 0),
(610, 'Đo thời gian thực thi', NULL, 153, 0),
(611, 'So sánh với mô hình khác', NULL, 153, 1),
(612, 'Sử dụng máy tính cá nhân', NULL, 153, 0),
(613, 'Tốc độ mà dữ liệu được tạo ra và tích hợp', NULL, 154, 1),
(614, 'Khả năng lưu trữ dữ liệu lớn', NULL, 154, 0),
(615, 'Số lượng dữ liệu lớn', NULL, 154, 0),
(616, 'Tốc độ xử lý dữ liệu lớn', NULL, 154, 0),
(617, 'Clustering', NULL, 155, 0),
(618, 'Regression', NULL, 155, 0),
(619, 'Classification', NULL, 155, 1),
(620, 'Reinforcement Learning', NULL, 155, 0),
(621, 'Số lượng dữ liệu lớn', NULL, 156, 1),
(622, 'Tốc độ xử lý dữ liệu lớn', NULL, 156, 0),
(623, 'Độ phức tạp của dữ liệu lớn', NULL, 156, 0),
(624, 'Khả năng lưu trữ dữ liệu lớn', NULL, 156, 0),
(625, 'Java', NULL, 157, 0),
(626, 'C++', NULL, 157, 0),
(627, 'Python', NULL, 157, 1),
(628, 'Ruby', NULL, 157, 0),
(629, 'Viable', NULL, 158, 0),
(630, 'Virtual', NULL, 158, 0),
(631, 'Variety', NULL, 158, 1),
(632, 'Value', NULL, 158, 0),
(633, 'Mô hình hoạt động tốt trên dữ liệu đào tạo nhưng không hoạt động tốt trên dữ liệu thực tế', NULL, 159, 1),
(634, 'Mô hình quá đơn giản để hiểu được dữ liệu', NULL, 159, 0),
(635, 'Mô hình chưa đủ đào tạo và cần thêm dữ liệu', NULL, 159, 0),
(636, 'Mô hình hoạt động tốt trên mọi loại dữ liệu', NULL, 159, 0),
(637, '\"Bias\" là sự sai lệch trong dự đoán của mô hình, \"Variance\" là độ biến đổi của dự đoán. Cân nhắc giữa chúng quan trọng để đảm bảo mô hình không bị overfitting hoặc underfitting.', NULL, 160, 1),
(638, '\"Bias\" là độ biến đổi của dự đoán, \"Variance\" là sự sai lệch trong dự đoán. Cân nhắc giữa chúng quan trọng để tối ưu hóa hiệu suất mô hình.', NULL, 160, 0),
(639, '\"Bias\" và \"Variance\" không liên quan đến Machine Learning.', NULL, 160, 0),
(640, '\"Bias\" và \"Variance\" là hai thuộc tính không cần quan tâm khi xây dựng mô hình Machine Learning.', NULL, 160, 0),
(641, 'Một loại phần cứng', NULL, 161, 0),
(642, 'Chương trình máy tính và dữ liệu liên quan', NULL, 161, 1),
(643, 'Một loại máy tính', NULL, 161, 0),
(644, 'Công cụ thiết kế đồ họa', NULL, 161, 0),
(645, '1', NULL, 162, 0),
(646, '2', NULL, 162, 0),
(647, '3', NULL, 162, 1),
(648, '4', NULL, 162, 0),
(649, 'Photoshop', NULL, 163, 0),
(650, 'Visual Studio Code', NULL, 163, 1),
(651, 'Microsoft Word', NULL, 163, 0),
(652, 'Google Chrome', NULL, 163, 0),
(653, 'Thiết kế giao diện người dùng', NULL, 164, 0),
(654, 'Giao tiếp liên tục với khách hàng', NULL, 164, 1),
(655, 'Sử dụng mã nguồn mở', NULL, 164, 0),
(656, 'Tạo ứng dụng di động', NULL, 164, 0),
(657, 'Lập kế hoạch dự án', NULL, 165, 0),
(658, 'Thiết kế giao diện người dùng', NULL, 165, 0),
(659, 'Xác định các ca kiểm thử', NULL, 165, 1),
(660, 'Lập trình ứng dụng di động', NULL, 165, 0),
(661, 'Xác định mục tiêu kinh doanh', NULL, 166, 1),
(662, 'Lập kế hoạch tiếp thị', NULL, 166, 0),
(663, 'Lựa chọn các công nghệ mới nhất', NULL, 166, 0),
(664, 'Xây dựng cơ sở dữ liệu', NULL, 166, 0),
(665, 'Sprint, Daily Scrum, Sprint Review, Sprint Retrospective', NULL, 167, 1),
(666, 'Planning, Coding, Testing, Deployment', NULL, 167, 0),
(667, 'Daily Scrum, Code Review, User Acceptance Testing, Release Planning', NULL, 167, 0),
(668, 'Scrum không có cuộc họp', NULL, 167, 0),
(669, 'Photoshop', NULL, 168, 0),
(670, 'Visual Studio Code', NULL, 168, 1),
(671, 'Microsoft Word', NULL, 168, 0),
(672, 'Google Chrome', NULL, 168, 0),
(673, 'Phát triển từng phần nhỏ của dự án một cách độc lập', NULL, 169, 1),
(674, 'Thực hiện kiểm tra đầu cuối cùng', NULL, 169, 0),
(675, 'Không cần thay đổi trong quá trình phát triển', NULL, 169, 0),
(676, 'Lập kế hoạch chi tiết từ đầu', NULL, 169, 0),
(677, 'Thiết kế giao diện người dùng', NULL, 170, 0),
(678, 'Giao tiếp liên tục với khách hàng', NULL, 170, 1),
(679, 'Sử dụng mã nguồn mở', NULL, 170, 0),
(680, 'Tạo ứng dụng di động', NULL, 170, 0),
(681, 'Sprint, Daily Scrum, Sprint Review, Sprint Retrospective', NULL, 171, 1),
(682, 'Planning, Coding, Testing, Deployment', NULL, 171, 0),
(683, 'Daily Scrum, Code Review, User Acceptance Testing, Release Planning', NULL, 171, 0),
(684, 'Scrum không có cuộc họp', NULL, 171, 0),
(685, 'Sử dụng các công nghệ mới nhất', NULL, 172, 0),
(686, 'Chất lượng mã nguồn', NULL, 172, 1),
(687, 'Số lượng nhân viên', NULL, 172, 0),
(688, 'Sự phức tạp của dự án', NULL, 172, 0),
(689, 'Xác định mục tiêu kinh doanh', NULL, 173, 1),
(690, 'Lập kế hoạch tiếp thị', NULL, 173, 0),
(691, 'Lựa chọn các công nghệ mới nhất', NULL, 173, 0),
(692, 'Xây dựng cơ sở dữ liệu', NULL, 173, 0),
(693, 'Phát triển từng phần nhỏ của dự án một cách độc lập', NULL, 174, 1),
(694, 'Thực hiện kiểm tra đầu cuối cùng', NULL, 174, 0),
(695, 'Không cần thay đổi trong quá trình phát triển', NULL, 174, 0),
(696, 'Lập kế hoạch chi tiết từ đầu', NULL, 174, 0),
(697, 'Xây dựng lại ứng dụng từ đầu', NULL, 175, 0),
(698, 'Tối ưu hóa mã nguồn hiện tại mà không thay đổi chức năng', NULL, 175, 1),
(699, 'Thêm tính năng mới', NULL, 175, 0),
(700, 'Ghi đè lên mã nguồn cũ', NULL, 175, 0),
(701, 'Quản lý cơ sở dữ liệu', NULL, 176, 0),
(702, 'Kỹ thuật chuyển đổi mã nguồn sang mã máy', NULL, 176, 0),
(703, 'Tích hợp liên tục và triển khai liên tục', NULL, 176, 1),
(704, 'Quản lý tài liệu dự án', NULL, 176, 0),
(705, 'Hỏi khách hàng một lần và lưu lại yêu cầu', NULL, 177, 0),
(706, 'Tạo một danh sách yêu cầu ban đầu và không thay đổi', NULL, 177, 0),
(707, 'Xác định yêu cầu, theo dõi và cập nhật khi cần thiết', NULL, 177, 1),
(708, 'Không cần xác định yêu cầu', NULL, 177, 0),
(709, 'Tính năng của phần mềm', NULL, 178, 0),
(710, 'Khả năng mở rộng hoặc mở rộng hệ thống khi có nhiều người sử dụng', NULL, 178, 0),
(711, 'Quá trình triển khai', NULL, 178, 0),
(712, 'Tính năng của phần cứng', NULL, 178, 1),
(713, 'Kiểm tra tích hợp của toàn bộ ứng dụng', NULL, 179, 0),
(714, 'Kiểm tra cả hệ thống và cơ sở dữ liệu', NULL, 179, 0),
(715, 'Kiểm tra từng đơn vị (hoặc phần) của mã nguồn một cách độc lập', NULL, 179, 1),
(716, 'Kiểm tra giao diện người dùng', NULL, 179, 0),
(717, 'Ngẫu nhiên', NULL, 180, 0),
(718, 'Dựa trên quyết định của quản lý dự án', NULL, 180, 0),
(719, 'Dựa trên giá trị kinh doanh dự kiến và phản hồi từ khách hàng', NULL, 180, 1),
(720, 'Dựa trên chi phí thực hiện', NULL, 180, 0),
(721, 'Hyper Transfer Markup Language', NULL, 181, 0),
(722, 'Hyper Text Markup Language', NULL, 181, 1),
(723, 'High-Level Text Markup Language', NULL, 181, 0),
(724, 'Hyperlink and Text Markup Language', NULL, 181, 0),
(725, '<h1>', NULL, 182, 1),
(726, '<header>', NULL, 182, 0),
(727, '<title>', NULL, 182, 0),
(728, '<heading>', NULL, 182, 0),
(729, 'Computer Style Sheets', NULL, 183, 0),
(730, 'Cascading Style Sheets', NULL, 183, 1),
(731, 'Creative Style Sheets', NULL, 183, 0),
(732, 'Colorful Style Sheets', NULL, 183, 0),
(733, '<link>', NULL, 184, 0),
(734, '<a>', NULL, 184, 1),
(735, '<href>', NULL, 184, 0),
(736, '<url>', NULL, 184, 0),
(737, '<img>', NULL, 185, 1),
(738, '<picture>', NULL, 185, 0),
(739, '<image source>', NULL, 185, 0),
(740, '<image>', NULL, 185, 0),
(741, 'border-radius', NULL, 186, 0),
(742, 'border-style', NULL, 186, 0),
(743, 'border-color', NULL, 186, 0),
(744, 'border-color', NULL, 186, 1),
(745, 'Hiển thị một phần tử dưới dạng lưới', NULL, 187, 0),
(746, 'Hiển thị một phần tử dưới dạng danh sách', NULL, 187, 0),
(747, 'Hiển thị một phần tử dưới dạng khối chồng lên nhau', NULL, 187, 0),
(748, 'Hiển thị một phần tử dưới dạng linh hoạt theo chiều ngang và chiều dọc', NULL, 187, 1),
(749, 'Line chart', NULL, 188, 0),
(750, 'Bar chart', NULL, 188, 0),
(751, 'Pie chart', NULL, 188, 1),
(752, 'Scatter plot', NULL, 188, 0),
(753, 'Java', NULL, 189, 0),
(754, 'JScript', NULL, 189, 0),
(755, 'JavaScript', NULL, 189, 1),
(756, 'JScript.NET', NULL, 189, 0),
(757, 'define', NULL, 190, 0),
(758, 'let', NULL, 190, 1),
(759, 'variable', NULL, 190, 0),
(760, 'int', NULL, 190, 0),
(761, 'AJAX', NULL, 191, 1),
(762, 'XML', NULL, 191, 0),
(763, 'HTML5', NULL, 191, 0),
(764, 'HTTP', NULL, 191, 0),
(765, 'parseInt()', NULL, 192, 1),
(766, 'convertToNumber()', NULL, 192, 0),
(767, 'stringToNumber()', NULL, 192, 0),
(768, 'strToNum()', NULL, 192, 0),
(769, 'Nó đặt phần tử tương tự như position: relative;', NULL, 193, 0),
(770, 'Nó đặt phần tử tương tự như position: static;', NULL, 193, 0),
(771, 'Nó đặt phần tử tương tự như position: fixed;', NULL, 193, 0),
(772, 'Nó đặt phần tử dựa trên một phần tử cha có thuộc tính position: relative;', NULL, 193, 1),
(773, 'onhover', NULL, 194, 0),
(774, 'onmouseover', NULL, 194, 1),
(775, 'onmouseenter', NULL, 194, 0),
(776, 'onmove', NULL, 194, 0),
(777, 'Nguyên tắc thiết kế giao diện', NULL, 195, 0),
(778, 'Nguyên tắc tuân thủ màu sắc', NULL, 195, 0),
(779, 'Nguyên tắc an toàn và bảo mật', NULL, 195, 1),
(780, 'Nguyên tắc tối ưu hóa hiệu suất', NULL, 195, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Công nghệ phần mềm', 'congnghephanmem.jpg'),
(2, 'Khoa học máy tính', 'khoahocmaytinh.png'),
(3, 'Kỹ thuật phần mềm', 'kythuatphanmem.jpg'),
(4, 'Trí tuệ nhân tạo và Robotics', 'aivarobotics.jpeg'),
(5, 'Mạng máy tính và truyền thông dữ liệu', 'mangmaytinhvatruyenthongdulieu.jpg'),
(6, 'An toàn thông tin', 'antoanthongtin.jpg'),
(7, 'Hệ thống quản lý thông tin', 'hethongquanlythongtin.jpeg'),
(8, 'Big Data và Machine Learning', 'bigdatavamachinelearning.jpg'),
(9, 'Phát triển phần mềm', 'phattrienphanmem.jpg'),
(10, 'Lập trình website', 'laptrinhweb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_code` varchar(50) NOT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `number_question` int(11) NOT NULL,
  `exam_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_code`, `schedule_id`, `category_id`, `exam_type_id`, `number_question`, `exam_time`) VALUES
(1, 'CODE001', 1, 6, 2, 40, 0),
(2, 'RYHUIB', NULL, 1, 1, 15, 30),
(3, 'T0YK63', NULL, 1, 1, 15, 30),
(4, 'BVT70C', NULL, 1, 1, 15, 30),
(5, '5HMV1X', NULL, 1, 1, 15, 30),
(6, '5WZTTF', NULL, 1, 1, 15, 30),
(7, '5KQ2LF', NULL, 1, 1, 15, 30),
(8, 'MOKPWJ', NULL, 1, 1, 15, 30),
(9, 'A9OPN0', NULL, 1, 1, 15, 30),
(10, 'O9VKDG', NULL, 1, 1, 15, 30),
(11, 'INDPIB', NULL, 1, 1, 15, 30),
(12, 'MFXXEE', NULL, 1, 1, 15, 30),
(13, '1X7CSN', NULL, 1, 1, 15, 30),
(14, '6O8CGI', NULL, 1, 1, 15, 30),
(15, '0B7FTQ', NULL, 1, 1, 15, 30);

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`id`, `exam_id`, `question_id`) VALUES
(1, 8, 200),
(2, 8, 7),
(3, 8, 19),
(4, 8, 205),
(5, 8, 202),
(6, 8, 5),
(7, 8, 8),
(8, 8, 8),
(9, 8, 8),
(10, 8, 8),
(11, 8, 196),
(12, 8, 15),
(13, 8, 9),
(14, 8, 18),
(15, 8, 12),
(16, 9, 202),
(17, 9, 202),
(18, 9, 204),
(19, 9, 205),
(20, 9, 10),
(21, 9, 5),
(22, 9, 8),
(23, 9, 17),
(24, 9, 11),
(25, 9, 2),
(26, 9, 12),
(27, 9, 12),
(28, 9, 6),
(29, 9, 9),
(30, 9, 9),
(31, 10, 7),
(32, 10, 4),
(33, 10, 201),
(34, 10, 7),
(35, 10, 19),
(36, 10, 14),
(37, 10, 14),
(38, 10, 5),
(39, 10, 11),
(40, 10, 8),
(41, 10, 18),
(42, 10, 6),
(43, 10, 196),
(44, 10, 18),
(45, 10, 18),
(46, 11, 203),
(47, 11, 1),
(48, 11, 197),
(49, 11, 205),
(50, 11, 203),
(51, 11, 11),
(52, 11, 8),
(53, 11, 5),
(54, 11, 5),
(55, 11, 11),
(56, 11, 18),
(57, 11, 9),
(58, 11, 9),
(59, 11, 9),
(60, 11, 196),
(61, 12, 19),
(62, 12, 204),
(63, 12, 203),
(64, 12, 10),
(65, 12, 16),
(66, 12, 14),
(67, 12, 17),
(68, 12, 17),
(69, 12, 14),
(70, 12, 17),
(71, 12, 9),
(72, 12, 196),
(73, 12, 6),
(74, 12, 15),
(75, 12, 12),
(76, 13, 200),
(77, 13, 4),
(78, 13, 205),
(79, 13, 200),
(80, 13, 198),
(81, 13, 20),
(82, 13, 17),
(83, 13, 11),
(84, 13, 2),
(85, 13, 14),
(86, 13, 196),
(87, 13, 6),
(88, 13, 196),
(89, 13, 18),
(90, 13, 9),
(91, 14, 200),
(92, 14, 13),
(93, 14, 200),
(94, 14, 1),
(95, 14, 201),
(96, 14, 5),
(97, 14, 20),
(98, 14, 17),
(99, 14, 2),
(100, 14, 17),
(101, 14, 196),
(102, 14, 12),
(103, 14, 3),
(104, 14, 196),
(105, 14, 18),
(106, 15, 197),
(107, 15, 203),
(108, 15, 204),
(109, 15, 200),
(110, 15, 7),
(111, 15, 14),
(112, 15, 11),
(113, 15, 20),
(114, 15, 11),
(115, 15, 8),
(116, 15, 12),
(117, 15, 18),
(118, 15, 6),
(119, 15, 196),
(120, 15, 9);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `question_level_id` int(11) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `content`, `image`, `question_level_id`, `question_type_id`, `category_id`) VALUES
(1, 'Phần mềm mã nguồn mở là gì?', NULL, 1, 1, 1),
(2, 'Agile là gì trong ngữ cảnh của phát triển phần mềm?', NULL, 2, 1, 1),
(3, 'Trong phát triển phần mềm, điểm chung của Scrum và Kanban là gì?', NULL, 3, 1, 1),
(4, 'Trong kiểm thử phần mềm, kiểm thử đơn vị là gì?', NULL, 1, 1, 1),
(5, 'DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', NULL, 2, 1, 1),
(6, 'Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', NULL, 3, 1, 1),
(7, 'Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', NULL, 1, 1, 1),
(8, 'Điều gì được hiểu bởi \"CI/CD\" trong phát triển phần mềm?', NULL, 2, 1, 1),
(9, 'Trong ngữ cảnh của công nghệ phần mềm, \"Refactoring\" là gì?', NULL, 3, 1, 1),
(10, 'Trong lĩnh vực phát triển phần mềm, \"Scalability\" (khả năng mở rộng) là gì?', NULL, 1, 1, 1),
(11, 'Trong lĩnh vực phát triển phần mềm, thuật ngữ \"API\" viết tắt của điều gì?', NULL, 2, 1, 1),
(12, 'Điều gì được hiểu bởi thuật ngữ \"Regression Testing\" trong kiểm thử phần mềm?', NULL, 3, 1, 1),
(13, 'Trong phát triển phần mềm, \"Waterfall Model\" là gì?', NULL, 1, 1, 1),
(14, 'Điều gì được hiểu bởi thuật ngữ \"Agile Manifesto\" trong phát triển phần mềm?', NULL, 2, 1, 1),
(15, 'Trong lĩnh vực phát triển phần mềm, \"Scrum Master\" là người đảm nhận vai trò gì trong nhóm Scrum?', NULL, 3, 1, 1),
(16, 'Trong ngữ cảnh của phát triển phần mềm, \"Unit Testing\" là gì?', NULL, 1, 1, 1),
(17, 'Điều gì được hiểu bởi thuật ngữ \"Code Review\" trong phát triển phần mềm?', NULL, 2, 1, 1),
(18, 'Điều gì được hiểu bởi thuật ngữ \"Deployment\" trong phát triển phần mềm?', NULL, 3, 1, 1),
(19, 'Trong lĩnh vực phát triển phần mềm, điều gì được hiểu bởi \"MVP\" viết tắt của điều gì?', NULL, 1, 1, 1),
(20, 'Trong kiểm thử phần mềm, \"End-to-End Testing\" là gì?', NULL, 2, 1, 1),
(21, 'Phần mềm mã nguồn mở là gì?', NULL, 1, 1, 2),
(22, 'Ngôn ngữ lập trình phổ biến được sử dụng trong phát triển web là gì?', NULL, 2, 1, 2),
(23, 'Trong lập trình hướng đối tượng, tính chất nào cho phép một đối tượng kế thừa các thuộc tính và phương thức từ một đối tượng khác?', NULL, 1, 1, 2),
(24, 'Hệ thống quản lý cơ sở dữ liệu phổ biến được sử dụng trong phát triển ứng dụng web là gì?', NULL, 2, 1, 2),
(25, 'Thuật ngữ \"API\" viết tắt của điều gì?', NULL, 3, 1, 2),
(26, 'Ngôn ngữ lập trình nào được sử dụng chủ yếu trong phát triển ứng dụng di động cho hệ điều hành iOS?', NULL, 1, 1, 2),
(27, 'Địa chỉ IP được sử dụng để định danh địa chỉ nào sau đây trên Internet?', NULL, 2, 1, 2),
(28, 'Trong lập trình, \"IDE\" viết tắt của điều gì?', NULL, 3, 1, 2),
(29, 'Đâu là một ngôn ngữ lập trình biên dịch?', NULL, 1, 1, 2),
(30, 'Thuật ngữ \"URL\" viết tắt của điều gì?', NULL, 2, 1, 2),
(31, 'Trong ngữ cảnh của lập trình, điều gì được hiểu bởi thuật ngữ \"loop\"?', NULL, 3, 1, 2),
(32, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ \"algorithm\"?', NULL, 1, 1, 2),
(33, 'Trong hệ thống số nhị phân, số 1010 tương đương với số nào sau đây?', NULL, 2, 1, 2),
(34, 'Trong lập trình web, điều gì được hiểu bởi thuật ngữ \"CSS\"?', NULL, 3, 1, 2),
(35, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ \"variable\"?', NULL, 1, 1, 2),
(36, 'Trong ngôn ngữ lập trình Python, câu lệnh nào được sử dụng để in một chuỗi ra màn hình?', NULL, 2, 1, 2),
(37, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ \"array\"?', NULL, 3, 1, 2),
(38, 'Trong lập trình, thuật ngữ \"boolean\" thường được sử dụng để biểu diễn điều gì?', NULL, 1, 1, 2),
(39, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ \"function\"?', NULL, 2, 1, 2),
(40, 'Trong lập trình hướng đối tượng, điều gì được hiểu bởi thuật ngữ \"inheritance\"?', NULL, 3, 1, 2),
(41, 'Phần mềm mã nguồn mở là gì?', NULL, 1, 1, 3),
(42, 'Điểm chung của Scrum và Kanban trong phát triển phần mềm là gì?', NULL, 2, 1, 3),
(43, 'Kiểm thử đơn vị trong phát triển phần mềm là gì?', NULL, 3, 1, 3),
(44, 'DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', NULL, 1, 1, 3),
(45, 'Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', NULL, 2, 1, 3),
(46, 'Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', NULL, 3, 1, 3),
(47, 'Điều gì được hiểu bởi \"CI/CD\" trong phát triển phần mềm?', NULL, 1, 1, 3),
(48, 'Trong ngữ cảnh của công nghệ phần mềm, \"Refactoring\" là gì?', NULL, 2, 1, 3),
(49, 'Trong lĩnh vực phát triển phần mềm, \"Scalability\" (khả năng mở rộng) là gì?', NULL, 3, 1, 3),
(50, 'Trong lĩnh vực phát triển phần mềm, thuật ngữ \"API\" viết tắt của điều gì?', NULL, 1, 1, 3),
(51, 'Điều gì được hiểu bởi thuật ngữ \"Regression Testing\" trong kiểm thử phần mềm?', NULL, 2, 1, 3),
(52, 'Trong phát triển phần mềm, \"Waterfall Model\" là gì?', NULL, 3, 1, 3),
(53, 'Điều gì được hiểu bởi thuật ngữ \"Agile Manifesto\" trong phát triển phần mềm?', NULL, 1, 1, 3),
(54, 'Trong ngữ cảnh của phát triển phần mềm, \"Scrum Master\" là người đảm nhận vai trò gì trong nhóm Scrum?', NULL, 2, 1, 3),
(55, 'Trong phát triển phần mềm, \"Unit Testing\" là gì?', NULL, 3, 1, 3),
(56, 'Điều gì được hiểu bởi thuật ngữ \"Code Review\" trong phát triển phần mềm?', NULL, 1, 1, 3),
(57, 'Điều gì được hiểu bởi thuật ngữ \"Deployment\" trong phát triển phần mềm?', NULL, 2, 1, 3),
(58, 'Trong lĩnh vực phát triển phần mềm, \"MVP\" viết tắt của điều gì?', NULL, 3, 1, 3),
(59, 'Trong kiểm thử phần mềm, \"End-to-End Testing\" là gì?', NULL, 1, 1, 3),
(60, 'Điều gì được hiểu bởi thuật ngữ \"Agile Manifesto\" trong phát triển phần mềm?', NULL, 2, 1, 3),
(61, 'Trí tuệ nhân tạo (AI) là gì?', NULL, 1, 1, 4),
(62, 'Học máy (Machine Learning) liên quan đến gì?', NULL, 1, 1, 4),
(63, 'Học sâu (Deep Learning) là gì?', NULL, 1, 1, 4),
(64, 'Làm thế nào AI có ứng dụng trong lĩnh vực y tế?', NULL, 1, 1, 4),
(65, 'Làm thế nào robot có thể hỗ trợ trong phát triển xe tự hành (self-driving cars)?', NULL, 1, 1, 4),
(66, 'Robotics là gì?', NULL, 1, 1, 4),
(67, 'Robot công nghiệp thường được sử dụng trong ngành công nghiệp nào?', NULL, 1, 1, 4),
(68, 'Làm thế nào robot có thể xác định vị trí của chính nó trong môi trường?', NULL, 1, 1, 4),
(69, 'Làm thế nào robot có thể tương tác với con người?', NULL, 1, 1, 4),
(70, 'Làm thế nào robot có thể giúp trong công việc cứu hộ trong tình huống khẩn cấp?', NULL, 1, 1, 4),
(71, 'Trong ngành công nghiệp sản xuất, robot công nghiệp thường được sử dụng để làm gì?', NULL, 2, 1, 4),
(72, 'Làm thế nào robot có thể đóng vai trò quan trọng trong nghiên cứu và phát triển trong lĩnh vực y học và dược phẩm?', NULL, 2, 1, 4),
(73, 'Trong lĩnh vực xe tự hành (self-driving cars), làm thế nào hệ thống AI có thể xử lý thông tin từ các cảm biến để lái xe an toàn?', NULL, 2, 1, 4),
(74, 'Trong lĩnh vực Robotics, điều gì là quan trọng để giúp robot thực hiện nhiệm vụ trong môi trường thực tế?', NULL, 2, 1, 4),
(75, 'Làm thế nào robot có thể tương tác với con người một cách hiệu quả?', NULL, 2, 1, 4),
(76, 'Trong lĩnh vực Trí tuệ nhân tạo (AI), khái niệm \"suy diễn tiến\" (forward inference) liên quan đến gì?', NULL, 3, 1, 4),
(77, 'Trong lĩnh vực nghiên cứu Robotics, khái niệm \"SLAM\" viết tắt của gì?', NULL, 3, 1, 4),
(78, 'Làm thế nào mạng nơ-ron sâu (Deep Neural Networks) có thể học biểu diễn dữ liệu phức tạp?', NULL, 3, 1, 4),
(79, 'Trong ngành công nghiệp sản xuất, làm thế nào robot có thể làm việc cùng với con người một cách an toàn?', NULL, 3, 1, 4),
(80, 'Trong lĩnh vực Robotics, làm thế nào robot có thể tự động học và cải thiện hiệu suất của mình trong môi trường thay đổi?', NULL, 3, 1, 4),
(81, 'TCP/IP là viết tắt của gì trong lĩnh vực mạng máy tính?', NULL, 1, 1, 5),
(82, 'Giao thức HTTP được sử dụng trong ngữ cảnh nào?', NULL, 1, 1, 5),
(83, 'Đâu là ưu điểm của mạng LAN (Local Area Network)?', NULL, 1, 1, 5),
(84, 'IP address (địa chỉ IP) là gì?', NULL, 1, 1, 5),
(85, 'Để truyền dữ liệu từ máy tính của bạn đến máy tính mục tiêu trên mạng, bạn cần sử dụng gì?', NULL, 1, 1, 5),
(86, 'Đâu là loại kết nối mạng không dây phổ biến cho các thiết bị di động như điện thoại di động và máy tính bảng?', NULL, 1, 1, 5),
(87, 'Một tập tin có phần mở rộng là \".pdf\" thường liên quan đến loại tài liệu gì?', NULL, 1, 1, 5),
(88, 'DNS (Domain Name System) là gì?', NULL, 1, 1, 5),
(89, 'Đâu là ví dụ về phần mềm duyệt web phổ biến?', NULL, 1, 1, 5),
(90, 'Khi gửi một email, người gửi và người nhận thường cần sử dụng gì để truyền thông dữ liệu?', NULL, 1, 1, 5),
(91, 'Trong mô hình OSI (Open Systems Interconnection), lớp nào chịu trách nhiệm quản lý việc truyền dữ liệu giữa các thiết bị trong mạng?', NULL, 1, 1, 5),
(92, 'Từ \"Firewall\" trong ngữ cảnh mạng máy tính ám chỉ gì?', NULL, 1, 1, 5),
(93, 'Đâu là giao thức truyền dữ liệu nhanh và an toàn được sử dụng rộng rãi trong việc tải tệp và trang web?', NULL, 1, 1, 5),
(94, 'Trong mạng Wi-Fi, SSID là gì?', NULL, 1, 1, 5),
(95, 'Cổng (port) mạng máy tính là gì?', NULL, 1, 1, 5),
(96, 'Trong mô hình OSI, lớp nào có trách nhiệm kiểm soát việc truyền dữ liệu giữa hai máy tính trực tiếp kết nối với nhau?', NULL, 1, 1, 5),
(97, 'Từ \"VLAN\" là viết tắt của gì trong mạng máy tính?', NULL, 1, 1, 5),
(98, 'Trong giao thức mạng, POP và IMAP liên quan đến việc gì?', NULL, 1, 1, 5),
(99, 'Trong mạng máy tính, khái niệm \"NAT\" (Network Address Translation) liên quan đến việc gì?', NULL, 1, 1, 5),
(100, 'Trong mạng máy tính, để truy cập một trang web bằng tên miền, máy tính của bạn cần phải thực hiện quá trình nào để tìm địa chỉ IP tương ứng của tên miền đó?', NULL, 1, 1, 5),
(101, 'Mật khẩu mạng xã hội hoặc email của bạn nên:', NULL, 1, 1, 6),
(102, 'Một phần mềm diệt virus được sử dụng để làm gì?', NULL, 1, 1, 6),
(103, 'Đâu là ví dụ về hình thức tấn công phishing?', NULL, 1, 1, 6),
(104, 'Tính năng \"2FA\" (Two-Factor Authentication) liên quan đến việc gì trong bảo mật thông tin?', NULL, 1, 1, 6),
(105, 'Khi bạn nhận được một email có thông tin gian lận hoặc đe dọa, bạn nên làm gì?', NULL, 1, 1, 6),
(106, 'Mã hóa dữ liệu làm gì?', NULL, 1, 1, 6),
(107, 'Firewall (tường lửa) trong bảo mật mạng là gì?', NULL, 1, 1, 6),
(108, 'Đâu là một phần tử bảo mật thông tin trong hệ thống máy tính?', NULL, 1, 1, 6),
(109, 'Phương pháp bảo mật nào đòi hỏi người dùng cung cấp thông tin như tên người dùng và mật khẩu?', NULL, 1, 1, 6),
(110, 'Đâu là một ví dụ về phương pháp tấn công DDoS (Distributed Denial of Service)?', NULL, 1, 1, 6),
(111, 'Công cụ \"wireshark\" được sử dụng trong mục đích gì trong lĩnh vực an toàn thông tin?', NULL, 1, 1, 6),
(112, 'Phương pháp \"shoulder surfing\" trong an toàn thông tin liên quan đến việc gì?', NULL, 1, 1, 6),
(113, 'Đâu là ví dụ về phần mềm bảo mật được sử dụng để bảo vệ máy tính khỏi các mối đe dọa trực tuyến?', NULL, 1, 1, 6),
(114, 'Mã PIN (Personal Identification Number) thường được sử dụng trong ngữ cảnh nào để xác thực người dùng?', NULL, 1, 1, 6),
(115, 'Phần mềm \"phishing\" thường được sử dụng để làm gì?', NULL, 1, 1, 6),
(116, 'Khái niệm \"Zero-Day Exploit\" liên quan đến việc gì trong lĩnh vực an toàn thông tin?', NULL, 1, 1, 6),
(117, 'Trong lĩnh vực an toàn thông tin, khái niệm \"Phreaking\" liên quan đến việc gì?', NULL, 1, 1, 6),
(118, 'Hình thức tấn công \"Man-in-the-Middle (MITM)\" trong an toàn thông tin liên quan đến việc gì?', NULL, 1, 1, 6),
(119, 'Phương pháp \"Social Engineering\" trong an toàn thông tin liên quan đến việc gì?', NULL, 1, 1, 6),
(120, 'Trong bảo mật thông tin, một \"honeypot\" là gì?', NULL, 1, 1, 6),
(121, 'Hệ thống quản lý thông tin là gì?', NULL, 1, 1, 7),
(122, 'Hệ thống quản lý thông tin giúp gì cho tổ chức?', NULL, 1, 1, 7),
(123, 'Hệ thống quản lý tài liệu (DMS) là gì?', NULL, 1, 1, 7),
(124, 'Công cụ quản lý dự án phổ biến dựa trên hệ thống quản lý thông tin là gì?', NULL, 1, 1, 7),
(125, 'Hệ thống quản lý thông tin giúp tăng cường gì trong tổ chức?', NULL, 1, 1, 7),
(126, 'Trong hệ thống quản lý thông tin, \"Database Management System\" (DBMS) là gì?', NULL, 1, 1, 7),
(127, 'Hệ thống quản lý thông tin thường được sử dụng trong ngành nghề nào sau đây?', NULL, 1, 1, 7),
(128, 'Điểm mạnh chính của hệ thống quản lý thông tin là gì?', NULL, 1, 1, 7),
(129, 'Hệ thống quản lý thông tin giúp giảm rủi ro gì?', NULL, 1, 1, 7),
(130, 'Hệ thống quản lý thông tin có thể cải thiện gì trong tổ chức?', NULL, 1, 1, 7),
(131, 'Hệ thống quản lý thông tin và Hệ thống quản lý tài liệu (DMS) có điểm gì giống nhau?', NULL, 2, 1, 7),
(132, 'Hệ thống quản lý thông tin thường được sử dụng trong lĩnh vực nào?', NULL, 2, 1, 7),
(133, 'Hệ thống quản lý thông tin có thể giúp tổ chức làm gì?', NULL, 2, 1, 7),
(134, 'Hệ thống quản lý thông tin giúp giảm rủi ro gì?', NULL, 2, 1, 7),
(135, 'Hệ thống quản lý thông tin có thể cải thiện gì trong tổ chức?', NULL, 2, 1, 7),
(136, 'Trong hệ thống quản lý thông tin, \"Metadata\" là gì?', NULL, 3, 1, 7),
(137, 'Làm thế nào để quản lý hiệu quả hệ thống quản lý thông tin?', NULL, 3, 1, 7),
(138, 'Trong hệ thống quản lý thông tin, \"Document Version Control\" đề cập đến việc gì?', NULL, 3, 1, 7),
(139, 'Trong phát triển phần mềm, \"Scalability\" đề cập đến việc gì trong hệ thống quản lý thông tin?', NULL, 3, 1, 7),
(140, 'Trong hệ thống quản lý thông tin, \"Content Management\" đề cập đến việc gì?', NULL, 3, 1, 7),
(141, 'Big Data là gì?', NULL, 1, 1, 8),
(142, 'Machine Learning là gì?', NULL, 1, 1, 8),
(143, 'Hadoop là gì?', NULL, 1, 1, 8),
(144, 'Khi nào dữ liệu trở thành \"Big Data\"?', NULL, 1, 1, 8),
(145, 'Apache Spark là gì?', NULL, 1, 1, 8),
(146, 'Data Scientist là người nghề gì?', NULL, 1, 1, 8),
(147, 'Trong Machine Learning, \"Regression\" là gì?', NULL, 1, 1, 8),
(148, 'Big Data thường có đặc điểm nào?', NULL, 1, 1, 8),
(149, 'Trong Machine Learning, thuật ngữ \"Unsupervised Learning\" là gì?', NULL, 1, 1, 8),
(150, 'Khi nào dữ liệu trở thành \"Big Data\"?', NULL, 2, 1, 8),
(151, 'Supervised Learning là gì trong Machine Learning?', NULL, 2, 1, 8),
(152, 'MapReduce là gì và nó liên quan đến Big Data như thế nào?', NULL, 2, 1, 8),
(153, 'Để đánh giá hiệu suất mô hình Machine Learning, bạn thường sử dụng phương pháp nào?', NULL, 2, 1, 8),
(154, 'Trong Big Data, ý nghĩa của \"Velocity\" là gì?', NULL, 2, 1, 8),
(155, 'Để thực hiện việc phân loại dữ liệu trong Machine Learning, bạn sử dụng thuật toán gì?', NULL, 3, 1, 8),
(156, 'Đối với Big Data, ý nghĩa của \"Volume\" là gì?', NULL, 3, 1, 8),
(157, 'Ngôn ngữ lập trình nào thường được sử dụng trong việc triển khai các mô hình Machine Learning?', NULL, 3, 1, 8),
(158, 'Big Data có ba yếu tố chính là \"3V\". Ngoài \"Velocity\" và \"Volume,\" yếu tố còn lại là gì?', NULL, 3, 1, 8),
(159, 'Trong Machine Learning, ý nghĩa của thuật ngữ \"Overfitting\" là gì?', NULL, 3, 1, 8),
(160, 'Trong Machine Learning, \"Bias\" và \"Variance\" là gì và tại sao cân nhắc giữa chúng quan trọng trong việc xây dựng mô hình?', NULL, 3, 1, 8),
(161, 'Phần mềm là gì?', NULL, 1, 1, 9),
(162, 'Phát triển phần mềm gồm bao nhiêu giai đoạn chính?', NULL, 1, 1, 9),
(163, 'Công cụ quản lý mã nguồn phổ biến là gì?', NULL, 1, 1, 9),
(164, 'Phát triển phần mềm Agile tập trung vào điều gì?', NULL, 1, 1, 9),
(165, 'Đâu là một phần của quy trình kiểm thử phần mềm?', NULL, 1, 1, 9),
(166, 'Điểm đầu tiên trong phát triển phần mềm là gì?', NULL, 1, 1, 9),
(167, 'Trong phát triển phần mềm, SCRUM gồm những cuộc họp nào?', NULL, 1, 1, 9),
(168, 'Công cụ quản lý mã nguồn phổ biến là gì?', NULL, 1, 1, 9),
(169, 'Các mô hình lặp lại (Iterative Models) trong phát triển phần mềm thường dựa trên nguyên tắc gì?', NULL, 1, 1, 9),
(170, 'Phát triển phần mềm Agile tập trung vào điều gì?', NULL, 1, 1, 9),
(171, 'Trong phát triển phần mềm, SCRUM gồm những cuộc họp nào?', NULL, 2, 1, 9),
(172, 'Điều gì làm nên một phát triển phần mềm thành công?', NULL, 2, 1, 9),
(173, 'Điểm đầu tiên trong việc phát triển ứng dụng di động là gì?', NULL, 2, 1, 9),
(174, 'Các mô hình lặp lại (Iterative Models) trong phát triển phần mềm thường dựa trên nguyên tắc gì?', NULL, 2, 1, 9),
(175, 'Trong phát triển phần mềm, \"refactoring\" đề cập đến việc gì?', NULL, 2, 1, 9),
(176, '\"DevOps\" là gì và nó liên quan đến việc gì trong phát triển phần mềm?', NULL, 3, 1, 9),
(177, 'Làm thế nào để xác định yêu cầu phần mềm?', NULL, 3, 1, 9),
(178, 'Trong phát triển phần mềm, \"Scalability\" đề cập đến việc gì?', NULL, 3, 1, 9),
(179, 'Trong phát triển phần mềm, \"Unit Testing\" đề cập đến việc gì?', NULL, 3, 1, 9),
(180, 'Trong Agile, làm thế nào để xác định ưu tiên của các yêu cầu?', NULL, 3, 1, 9),
(181, 'HTML là viết tắt của gì?', NULL, 1, 1, 10),
(182, 'Định dạng tiêu đề lớn nhất trong HTML bằng thẻ nào?', NULL, 1, 1, 10),
(183, 'CSS là viết tắt của gì?', NULL, 1, 1, 10),
(184, 'Thẻ HTML để tạo liên kết đến một trang web khác là gì?', NULL, 1, 1, 10),
(185, 'Để thêm một hình ảnh vào trang web, bạn sử dụng thẻ nào trong HTML?', NULL, 1, 1, 10),
(186, 'Để tạo một đường viền xung quanh một phần tử HTML, bạn sử dụng thuộc tính CSS nào?', NULL, 2, 1, 10),
(187, 'Lựa chọn CSS display: flex; định dạng phần tử HTML như thế nào?', NULL, 2, 1, 10),
(188, 'Để tạo một biểu đồ hình tròn đơn giản trong HTML và CSS, bạn sử dụng loại hình nào?', NULL, 2, 1, 10),
(189, 'Ngôn ngữ lập trình nào thường được sử dụng để làm cho trang web trở nên tương tác?', NULL, 2, 1, 10),
(190, 'Để xác định một biến trong JavaScript, bạn sử dụng từ khóa nào?', NULL, 2, 1, 10),
(191, 'Để gửi dữ liệu từ trang web của bạn đến máy chủ mà không cần làm tải lại trang, bạn sử dụng công nghệ gì?', NULL, 3, 1, 10),
(192, 'Để chuyển đổi một chuỗi sang số trong JavaScript, bạn sử dụng hàm nào?', NULL, 3, 1, 10),
(193, 'CSS position: absolute; làm gì cho một phần tử?', NULL, 3, 1, 10),
(194, 'Để thực hiện tính năng đổi màu khi di chuột qua một phần tử trong JavaScript, bạn sử dụng sự kiện nào?', NULL, 3, 1, 10),
(195, 'Để tạo một trang web đáng tin cậy và an toàn, bạn nên tuân thủ các nguyên tắc gì?', NULL, 3, 1, 10),
(196, 'Quân là người đẹp trai nhất??', NULL, 3, 2, 1),
(197, 'Ai là người đẹp trai nhất', 'quan.jpg', 1, 1, 1),
(198, 'Ai là người đẹp trai nhất', 'quan.jpg', 1, 1, 1),
(199, 'Ai là người đẹp trai nhất', 'quan.jpg', 1, 1, 1),
(200, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1),
(201, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1),
(202, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1),
(203, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1),
(204, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1),
(205, 'Quân có phải người đẹp trai nhất không?', 'quan.jpg', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question_levels`
--

CREATE TABLE `question_levels` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_levels`
--

INSERT INTO `question_levels` (`id`, `level`) VALUES
(1, 'Dễ'),
(2, 'Trung bình'),
(3, 'Khó');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `points` float DEFAULT NULL,
  `time_start` datetime NOT NULL DEFAULT current_timestamp(),
  `exam_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_details`
--

CREATE TABLE `result_details` (
  `id` int(11) NOT NULL,
  `result_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(0, 'admin'),
(1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time_start` datetime NOT NULL DEFAULT current_timestamp(),
  `exam_time` int(11) NOT NULL,
  `number_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `name`, `time_start`, `exam_time`, `number_exam`) VALUES
(1, 'Kỳ thi thử nghiệm', '2023-11-11 22:07:24', 30, 4);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_detail`
--

CREATE TABLE `schedule_detail` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule_detail`
--

INSERT INTO `schedule_detail` (`id`, `schedule_id`, `account_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'practice_test'),
(2, 'real_test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`,`exam_code`),
  ADD KEY `exam_type_id` (`exam_type_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `schedule_id` (`schedule_id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `question_level_id` (`question_level_id`),
  ADD KEY `question_type_id` (`question_type_id`);

--
-- Indexes for table `question_levels`
--
ALTER TABLE `question_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `result_details`
--
ALTER TABLE `result_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_detail`
--
ALTER TABLE `schedule_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=781;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `question_levels`
--
ALTER TABLE `question_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_details`
--
ALTER TABLE `result_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule_detail`
--
ALTER TABLE `schedule_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`exam_type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exams_ibfk_4` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD CONSTRAINT `exam_details_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_details_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`question_level_id`) REFERENCES `question_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_3` FOREIGN KEY (`question_type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedule_detail`
--
ALTER TABLE `schedule_detail`
  ADD CONSTRAINT `schedule_detail_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`),
  ADD CONSTRAINT `schedule_detail_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
