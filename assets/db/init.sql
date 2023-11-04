
-- MULTIPLE CHOICE TEST

-- auth: quandohong28, chunghieu, vanthanh
-- version: 0.0.1 beta test
-- create at: 30/10/2023

-- đang tạo cơ sở dữ liệu multiple_choice_test
CREATE DATABASE multiple_choice_test;

-- sử dụng multiple_choice_test
USE multiple_choice_test;

-- đang tạo bảng phân quyền tài khoản
CREATE TABLE roles (
    id INT(11) NOT NULL DEFAULT 1,
    role VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- đang tạo bảng tài khoản
CREATE TABLE accounts (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fullname VARCHAR(255) NULL,
    avatar VARCHAR(255) NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NULL,
    tel VARCHAR(10) NULL,
    introduce TEXT NULL,
    role_id INT(11) NOT NULL default 1,
    PRIMARY KEY (id , username),
    FOREIGN KEY (role_id)
        REFERENCES roles (id)
        ON DELETE CASCADE
);

-- đang tạo bảng chuyên mục
CREATE TABLE categories (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    PRIMARY KEY (id)
);

-- đang tạo bảng độ khó của câu hỏi
CREATE TABLE question_levels (
    id INT(11) NOT NULL AUTO_INCREMENT,
    level VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

-- đang tạo bảng loại (sử dụng cho bảng câu hỏi và bảng bài thi)
CREATE TABLE types (
    id INT(11) NOT NULL AUTO_INCREMENT,
    type VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

-- đang tạo bảng câu hỏi
CREATE TABLE questions (
    id INT(11) NOT NULL AUTO_INCREMENT,
    content TEXT NOT NULL,
    image VARCHAR(255) NULL,
    question_level_id INT(11) NOT NULL,
    question_type_id INT(11) NOT NULL,
    category_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (category_id)
        REFERENCES categories (id)
        ON DELETE CASCADE,
    FOREIGN KEY (question_level_id)
        REFERENCES question_levels (id)
        ON DELETE CASCADE,
    FOREIGN KEY (question_type_id)
        REFERENCES types (id)
        ON DELETE CASCADE
);

-- đang tạo bảng câu trả lời
CREATE TABLE answers (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    image VARCHAR(255) NULL,
    is_correct TINYINT(1) NOT NULL,
    question_id INT(11) NOT NULL,
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE
);

-- đang tạo bảng danh sách lịch thi
CREATE TABLE schedules (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    time_start DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    time_exp DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    exam_time INT(11) NOT NULL,
    number_exam INT(11) NOT NULL,
    number_account INT(11) NOT NULL,
    PRIMARY KEY (id)
);

-- đang tạo bảng các thí sinh có mặt trong 1 lịch thi
CREATE TABLE candidates (
    id INT(11) NOT NULL AUTO_INCREMENT,
    test_schedule_id INT(11) NOT NULL,
    exam_detail_id INT(11) NOT NULL,
    account_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (test_schedule_id)
        REFERENCES schedules (id)
        ON DELETE CASCADE,
    FOREIGN KEY (account_id)
        REFERENCES accounts (id)
        ON DELETE CASCADE
);

-- đang tạo bảng danh sách các bài thi
CREATE TABLE list_exams (
    id INT(11) NOT NULL AUTO_INCREMENT,
    exam_code VARCHAR(50) NOT NULL,
    schedule_id INT(11) NULL,
    category_id INT(11) NOT NULL,
    exam_type_id INT(11) NOT NULL,
    number_question INT(11) NOT NULL,
    PRIMARY KEY (id , exam_code),
    FOREIGN KEY (schedule_id)
        REFERENCES schedules (id)
        ON DELETE CASCADE,
    FOREIGN KEY (exam_type_id)
        REFERENCES types (id)
        ON DELETE CASCADE,
    FOREIGN KEY (category_id)
        REFERENCES categories (id)
        ON DELETE CASCADE
);

-- đang tạo bảng 1 bài thi chi tiết
CREATE TABLE exam_details (
    id INT(11) NOT NULL AUTO_INCREMENT,
    exam_id INT(11) NOT NULL,
    question_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (exam_id)
        REFERENCES list_exams (id)
        ON DELETE CASCADE,
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE
);

-- đang liên kết bảng thí sinh với bảng chi tiết đề thi
ALTER TABLE candidates
ADD FOREIGN KEY (exam_detail_id) REFERENCES exam_details (id);

-- đang tạo bảng danh sách những bài thi đang làm
CREATE TABLE doing_exams (
    id INT(11) NOT NULL AUTO_INCREMENT,
    account_id INT(11) NOT NULL,
    exam_detail_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id)
        REFERENCES accounts (id)
        ON DELETE CASCADE,
    FOREIGN KEY (exam_detail_id)
        REFERENCES exam_details (id)
        ON DELETE CASCADE
);

-- đang tạo bảng những câu hỏi đã chọn - trong khi thi - có thể sửa dữ liệu
CREATE TABLE completed_questions (
    id INT(11) NOT NULL AUTO_INCREMENT,
    question_id INT(11) NOT NULL,
    selected_answer INT(11) NOT NULL,
    doing_exam_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE,
    FOREIGN KEY (doing_exam_id)
        REFERENCES doing_exams (id)
        ON DELETE CASCADE
);

-- đang tạo bảng những câu hỏi đã chọn - đã thi - không thể sửa dữ liệu
CREATE TABLE completed_exams (
    id INT(11) NOT NULL AUTO_INCREMENT,
    exam_detail_id INT(11) NOT NULL,
    question_id INT(11) NOT NULL,
    selected_answer INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE,
    FOREIGN KEY (exam_detail_id)
        REFERENCES exam_details (id)
        ON DELETE CASCADE
);

-- đang tạo bảng danh sách kết quả của những bài thi đã thi
CREATE TABLE results (
    id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    exam_id INT(11) NOT NULL,
    account_id INT(11) NOT NULL,
    FOREIGN KEY (exam_id)
        REFERENCES list_exams (id)
        ON DELETE CASCADE
);

-- đang tạo bảng kết quả của 1 bài thi chi tiết
CREATE TABLE result_details (
    id INT(11) NOT NULL AUTO_INCREMENT,
    result_id INT(11) NOT NULL,
    account_id INT(11) NOT NULL,
    completed_exam_id INT(11) NOT NULL,
    points INT(11),
    PRIMARY KEY (id),
    FOREIGN KEY (account_id)
        REFERENCES accounts (id)
        ON DELETE CASCADE,
    FOREIGN KEY (completed_exam_id)
        REFERENCES completed_exams (id)
        ON DELETE CASCADE
);

-- đang nhập dữ liệu cho bảng độ khó câu hỏi
INSERT INTO question_levels (id, level)
VALUES
	(1, 'easy'),
    (2, 'medium'),
    (3, 'hard');

-- đang nhập dữ liệu cho bảng quyền tài khoản
INSERT INTO roles (id, role)
VALUES
	(0, 'admin'),
    (1, 'user');

-- đang nhập dữ liệu cho bảng loại câu hỏi
INSERT INTO types (type)
VALUES
    ('practice_test'),
    ('real_test');

-- đang nhập dữ liệu cho bảng chuyên mục
INSERT INTO categories(name,image)
VALUES
('Công nghệ phần mềm','congnghephanmem.jpg'),
('Khoa học máy tính','khoahocmaytinh.png'),
('Kỹ thuật phần mềm','kythuatphanmem.jpg'),
('Trí tuệ nhân tạo và Robotics','aivarobotics.jpeg'),
('Mạng máy tính và truyền thông dữ liệu','mangmaytinhvatruyenthongdulieu.jpg'),
('An toàn thông tin','antoanthongtin.jpg'),
('Hệ thống quản lý thông tin','hethongquanlythongtin.jpeg'),
('Big Data và Machine Learning','bigdatavamachinelearning.jpg'),
('Phát triển phần mềm','phattrienphanmem.jpg'),
('Lập trình website','laptrinhweb.jpg');

INSERT INTO questions (
    content,
    question_level_id,
    question_type_id,
    category_id
)
VALUES


('Trí tuệ nhân tạo (AI) là gì?', 1, 1, 4),
('Học máy (Machine Learning) liên quan đến gì?', 1, 1, 4),
('Học sâu (Deep Learning) là gì?', 1, 1, 4),
('Làm thế nào AI có ứng dụng trong lĩnh vực y tế?', 1, 1, 4),
('Làm thế nào robot có thể hỗ trợ trong phát triển xe tự hành (self-driving cars)?', 1, 1, 4),
('Robotics là gì?', 1, 1, 4),
('Robot công nghiệp thường được sử dụng trong ngành công nghiệp nào?', 1, 1, 4),
('Làm thế nào robot có thể xác định vị trí của chính nó trong môi trường?', 1, 1, 4),
('Làm thế nào robot có thể tương tác với con người?', 1, 1, 4),
('Làm thế nào robot có thể giúp trong công việc cứu hộ trong tình huống khẩn cấp?', 1, 1, 4),

-- Mức trung bình (5) câu

('Trong ngành công nghiệp sản xuất, robot công nghiệp thường được sử dụng để làm gì?', 2, 1, 4),
('Làm thế nào robot có thể đóng vai trò quan trọng trong nghiên cứu và phát triển trong lĩnh vực y học và dược phẩm?', 2, 1, 4),
('Trong lĩnh vực xe tự hành (self-driving cars), làm thế nào hệ thống AI có thể xử lý thông tin từ các cảm biến để lái xe an toàn?', 2, 1, 4),
('Trong lĩnh vực Robotics, điều gì là quan trọng để giúp robot thực hiện nhiệm vụ trong môi trường thực tế?', 2, 1, 4),
('Làm thế nào robot có thể tương tác với con người một cách hiệu quả?', 2, 1, 4),

-- Mức khó (5) câu

('Trong lĩnh vực Trí tuệ nhân tạo (AI), khái niệm "suy diễn tiến" (forward inference) liên quan đến gì?', 3, 1, 4),
('Trong lĩnh vực nghiên cứu Robotics, khái niệm "SLAM" viết tắt của gì?', 3, 1, 4),
('Làm thế nào mạng nơ-ron sâu (Deep Neural Networks) có thể học biểu diễn dữ liệu phức tạp?', 3, 1, 4),
('Trong ngành công nghiệp sản xuất, làm thế nào robot có thể làm việc cùng với con người một cách an toàn?', 3, 1, 4),
('Trong lĩnh vực Robotics, làm thế nào robot có thể tự động học và cải thiện hiệu suất của mình trong môi trường thay đổi?', 3, 1, 4),

-- Mạng máy tính và truyền thông dữ liệu

-- Mức dễ (10) câu

('TCP/IP là viết tắt của gì trong lĩnh vực mạng máy tính?', 1, 1, 5),
('Giao thức HTTP được sử dụng trong ngữ cảnh nào?', 1, 1, 5),
('Đâu là ưu điểm của mạng LAN (Local Area Network)?', 1, 1, 5),
('IP address (địa chỉ IP) là gì?', 1, 1, 5),
('Để truyền dữ liệu từ máy tính của bạn đến máy tính mục tiêu trên mạng, bạn cần sử dụng gì?', 1, 1, 5),
('Đâu là loại kết nối mạng không dây phổ biến cho các thiết bị di động như điện thoại di động và máy tính bảng?', 1, 1, 5),
('Một tập tin có phần mở rộng là ".pdf" thường liên quan đến loại tài liệu gì?', 1, 1, 5),
('DNS (Domain Name System) là gì?', 1, 1, 5),
('Đâu là ví dụ về phần mềm duyệt web phổ biến?', 1, 1, 5),
('Khi gửi một email, người gửi và người nhận thường cần sử dụng gì để truyền thông dữ liệu?', 1, 1, 5),

-- Mức trung bình (5) câu

('Trong mô hình OSI (Open Systems Interconnection), lớp nào chịu trách nhiệm quản lý việc truyền dữ liệu giữa các thiết bị trong mạng?', 1, 1, 5),
('Từ "Firewall" trong ngữ cảnh mạng máy tính ám chỉ gì?', 1, 1, 5),
('Đâu là giao thức truyền dữ liệu nhanh và an toàn được sử dụng rộng rãi trong việc tải tệp và trang web?', 1, 1, 5),
('Trong mạng Wi-Fi, SSID là gì?', 1, 1, 5),
('Cổng (port) mạng máy tính là gì?', 1, 1, 5),

-- Mức khó (5) câu


('Trong mô hình OSI, lớp nào có trách nhiệm kiểm soát việc truyền dữ liệu giữa hai máy tính trực tiếp kết nối với nhau?', 1, 1, 5),
('Từ "VLAN" là viết tắt của gì trong mạng máy tính?', 1, 1, 5),
('Trong giao thức mạng, POP và IMAP liên quan đến việc gì?', 1, 1, 5),
('Trong mạng máy tính, khái niệm "NAT" (Network Address Translation) liên quan đến việc gì?', 1, 1, 5),
('Trong mạng máy tính, để truy cập một trang web bằng tên miền, máy tính của bạn cần phải thực hiện quá trình nào để tìm địa chỉ IP tương ứng của tên miền đó?', 1, 1, 5),

-- An toàn thông tin

-- Mức dễ (10) câu

('Mật khẩu mạng xã hội hoặc email của bạn nên:', 1, 1, 6),
('Một phần mềm diệt virus được sử dụng để làm gì?', 1, 1, 6),
('Đâu là ví dụ về hình thức tấn công phishing?', 1, 1, 6),
('Tính năng "2FA" (Two-Factor Authentication) liên quan đến việc gì trong bảo mật thông tin?', 1, 1, 6),
('Khi bạn nhận được một email có thông tin gian lận hoặc đe dọa, bạn nên làm gì?', 1, 1, 6),
('Mã hóa dữ liệu làm gì?', 1, 1, 6),
('Firewall (tường lửa) trong bảo mật mạng là gì?', 1, 1, 6),
('Đâu là một phần tử bảo mật thông tin trong hệ thống máy tính?', 1, 1, 6),
('Phương pháp bảo mật nào đòi hỏi người dùng cung cấp thông tin như tên người dùng và mật khẩu?', 1, 1, 6),
('Đâu là một ví dụ về phương pháp tấn công DDoS (Distributed Denial of Service)?', 1, 1, 6),

-- Mức trung bình (5) câu

('Công cụ "wireshark" được sử dụng trong mục đích gì trong lĩnh vực an toàn thông tin?', 1, 1, 6),
('Phương pháp "shoulder surfing" trong an toàn thông tin liên quan đến việc gì?', 1, 1, 6),
('Đâu là ví dụ về phần mềm bảo mật được sử dụng để bảo vệ máy tính khỏi các mối đe dọa trực tuyến?', 1, 1, 6),
('Mã PIN (Personal Identification Number) thường được sử dụng trong ngữ cảnh nào để xác thực người dùng?', 1, 1, 6),
('Phần mềm "phishing" thường được sử dụng để làm gì?', 1, 1, 6),

-- Mức khó (5) câu

('Khái niệm "Zero-Day Exploit" liên quan đến việc gì trong lĩnh vực an toàn thông tin?', 1, 1, 6),
('Trong lĩnh vực an toàn thông tin, khái niệm "Phreaking" liên quan đến việc gì?', 1, 1, 6),
('Hình thức tấn công "Man-in-the-Middle (MITM)" trong an toàn thông tin liên quan đến việc gì?', 1, 1, 6),
('Phương pháp "Social Engineering" trong an toàn thông tin liên quan đến việc gì?', 1, 1, 6),
('Trong bảo mật thông tin, một "honeypot" là gì?', 1, 1, 6),

-- Chuyên đề công nghệ phần mềm
('Phần mềm mã nguồn mở là gì?', 1, 1, 1),
('Agile là gì trong ngữ cảnh của phát triển phần mềm?', 2, 1, 1),
('Trong phát triển phần mềm, điểm chung của Scrum và Kanban là gì?', 3, 1, 1),
('Trong kiểm thử phần mềm, kiểm thử đơn vị là gì?', 1, 1, 1),
('DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', 2, 1, 1),
('Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', 3, 1, 1),
('Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', 1, 1, 1),
('Điều gì được hiểu bởi "CI/CD" trong phát triển phần mềm?', 2, 1, 1),
('Trong ngữ cảnh của công nghệ phần mềm, "Refactoring" là gì?', 3, 1, 1),
('Trong lĩnh vực phát triển phần mềm, "Scalability" (khả năng mở rộng) là gì?', 1, 1, 1),
('Trong lĩnh vực phát triển phần mềm, thuật ngữ "API" viết tắt của điều gì?', 2, 1, 1),
('Điều gì được hiểu bởi thuật ngữ "Regression Testing" trong kiểm thử phần mềm?', 3, 1, 1),
('Trong phát triển phần mềm, "Waterfall Model" là gì?', 1, 1, 1),
('Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', 2, 1, 1),
('Trong lĩnh vực phát triển phần mềm, "Scrum Master" là người đảm nhận vai trò gì trong nhóm Scrum?', 3, 1, 1),
('Trong ngữ cảnh của phát triển phần mềm, "Unit Testing" là gì?', 1, 1, 1),
('Điều gì được hiểu bởi thuật ngữ "Code Review" trong phát triển phần mềm?', 2, 1, 1),
('Điều gì được hiểu bởi thuật ngữ "Deployment" trong phát triển phần mềm?', 3, 1, 1),
('Trong lĩnh vực phát triển phần mềm, điều gì được hiểu bởi "MVP" viết tắt của điều gì?', 1, 1, 1),
('Trong kiểm thử phần mềm, "End-to-End Testing" là gì?', 2, 1, 1),

-- Chuyên đề khoa học máy tính
('Phần mềm mã nguồn mở là gì?', 1, 1, 2),
('Ngôn ngữ lập trình phổ biến được sử dụng trong phát triển web là gì?', 2, 1, 2),
('Trong lập trình hướng đối tượng, tính chất nào cho phép một đối tượng kế thừa các thuộc tính và phương thức từ một đối tượng khác?', 1, 1, 2),
('Hệ thống quản lý cơ sở dữ liệu phổ biến được sử dụng trong phát triển ứng dụng web là gì?', 2, 1, 2),
('Thuật ngữ "API" viết tắt của điều gì?', 3, 1, 2),
('Ngôn ngữ lập trình nào được sử dụng chủ yếu trong phát triển ứng dụng di động cho hệ điều hành iOS?', 1, 1, 2),
('Địa chỉ IP được sử dụng để định danh địa chỉ nào sau đây trên Internet?', 2, 1, 2),
('Trong lập trình, "IDE" viết tắt của điều gì?', 3, 1, 2),
('Đâu là một ngôn ngữ lập trình biên dịch?', 1, 1, 2),
('Thuật ngữ "URL" viết tắt của điều gì?', 2, 1, 2),
('Trong ngữ cảnh của lập trình, điều gì được hiểu bởi thuật ngữ "loop"?', 3, 1, 2),
('Trong lập trình, điều gì được hiểu bởi thuật ngữ "algorithm"?', 1, 1, 2),
('Trong hệ thống số nhị phân, số 1010 tương đương với số nào sau đây?', 2, 1, 2),
('Trong lập trình web, điều gì được hiểu bởi thuật ngữ "CSS"?', 3, 1, 2),
('Trong lập trình, điều gì được hiểu bởi thuật ngữ "variable"?', 1, 1, 2),
('Trong ngôn ngữ lập trình Python, câu lệnh nào được sử dụng để in một chuỗi ra màn hình?', 2, 1, 2),
('Trong lập trình, điều gì được hiểu bởi thuật ngữ "array"?', 3, 1, 2),
('Trong lập trình, thuật ngữ "boolean" thường được sử dụng để biểu diễn điều gì?', 1, 1, 2),
('Trong lập trình, điều gì được hiểu bởi thuật ngữ "function"?', 2, 1, 2),
('Trong lập trình hướng đối tượng, điều gì được hiểu bởi thuật ngữ "inheritance"?', 3, 1, 2),

-- Chuyên đề Kỹ thuật phần mềm
('Phần mềm mã nguồn mở là gì?', 1, 1, 3),
('Điểm chung của Scrum và Kanban trong phát triển phần mềm là gì?', 2, 1, 3),
('Kiểm thử đơn vị trong phát triển phần mềm là gì?', 3, 1, 3),
('DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', 1, 1, 3),
('Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', 2, 1, 3),
('Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', 3, 1, 3),
('Điều gì được hiểu bởi "CI/CD" trong phát triển phần mềm?', 1, 1, 3),
('Trong ngữ cảnh của công nghệ phần mềm, "Refactoring" là gì?', 2, 1, 3),
('Trong lĩnh vực phát triển phần mềm, "Scalability" (khả năng mở rộng) là gì?', 3, 1, 3),
('Trong lĩnh vực phát triển phần mềm, thuật ngữ "API" viết tắt của điều gì?', 1, 1, 3),
('Điều gì được hiểu bởi thuật ngữ "Regression Testing" trong kiểm thử phần mềm?', 2, 1, 3),
('Trong phát triển phần mềm, "Waterfall Model" là gì?', 3, 1, 3),
('Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', 1, 1, 3),
('Trong ngữ cảnh của phát triển phần mềm, "Scrum Master" là người đảm nhận vai trò gì trong nhóm Scrum?', 2, 1, 3),
('Trong phát triển phần mềm, "Unit Testing" là gì?', 3, 1, 3),
('Điều gì được hiểu bởi thuật ngữ "Code Review" trong phát triển phần mềm?', 1, 1, 3),
('Điều gì được hiểu bởi thuật ngữ "Deployment" trong phát triển phần mềm?', 2, 1, 3),
('Trong lĩnh vực phát triển phần mềm, "MVP" viết tắt của điều gì?', 3, 1, 3),
('Trong kiểm thử phần mềm, "End-to-End Testing" là gì?', 1, 1, 3),
('Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', 2, 1, 3),

-- chuyên mục hệ thống quản lý thông tin
-- mức độ dễ: 10 câu
('Hệ thống quản lý thông tin là gì?', 1, 1, 7),
('Hệ thống quản lý thông tin giúp gì cho tổ chức?', 1, 1, 7),
('Hệ thống quản lý tài liệu (DMS) là gì?', 1, 1, 7),
('Công cụ quản lý dự án phổ biến dựa trên hệ thống quản lý thông tin là gì?', 1, 1, 7),
('Hệ thống quản lý thông tin giúp tăng cường gì trong tổ chức?', 1, 1, 7),
('Trong hệ thống quản lý thông tin, "Database Management System" (DBMS) là gì?', 1, 1, 7),
('Hệ thống quản lý thông tin thường được sử dụng trong ngành nghề nào sau đây?', 1, 1, 7),
('Điểm mạnh chính của hệ thống quản lý thông tin là gì?', 1, 1, 7),
('Hệ thống quản lý thông tin giúp giảm rủi ro gì?', 1, 1, 7),
('Hệ thống quản lý thông tin có thể cải thiện gì trong tổ chức?', 1, 1, 7),

-- mức độ trung bình: 5 câu
('Hệ thống quản lý thông tin và Hệ thống quản lý tài liệu (DMS) có điểm gì giống nhau?', 2, 1, 7),
('Hệ thống quản lý thông tin thường được sử dụng trong lĩnh vực nào?', 2, 1, 7),
('Hệ thống quản lý thông tin có thể giúp tổ chức làm gì?', 2, 1, 7),
('Hệ thống quản lý thông tin giúp giảm rủi ro gì?', 2, 1, 7),
('Hệ thống quản lý thông tin có thể cải thiện gì trong tổ chức?', 2, 1, 7),

-- mức độ khó: 5 câu
('Trong hệ thống quản lý thông tin, "Metadata" là gì?', 3, 1, 7),
('Làm thế nào để quản lý hiệu quả hệ thống quản lý thông tin?', 3, 1, 7),
('Trong hệ thống quản lý thông tin, "Document Version Control" đề cập đến việc gì?', 3, 1, 7),
('Trong phát triển phần mềm, "Scalability" đề cập đến việc gì trong hệ thống quản lý thông tin?', 3, 1, 7),
('Trong hệ thống quản lý thông tin, "Content Management" đề cập đến việc gì?', 3, 1, 7),

-- chủ đề Big data và merchine learning
-- mức độ dễ: 9 câu
('Big Data là gì?', 1, 1, 8),
('Machine Learning là gì?', 1, 1, 8),
('Hadoop là gì?', 1, 1, 8),
('Khi nào dữ liệu trở thành "Big Data"?', 1, 1, 8),
('Apache Spark là gì?', 1, 1, 8),
('Data Scientist là người nghề gì?', 1, 1, 8),
('Trong Machine Learning, "Regression" là gì?', 1, 1, 8),
('Big Data thường có đặc điểm nào?', 1, 1, 8),
('Trong Machine Learning, thuật ngữ "Unsupervised Learning" là gì?', 1, 1, 8),

-- mức độ trung bình: 5 câu
('Khi nào dữ liệu trở thành "Big Data"?', 2, 1, 8),
('Supervised Learning là gì trong Machine Learning?', 2, 1, 8),
('MapReduce là gì và nó liên quan đến Big Data như thế nào?', 2, 1, 8),
('Để đánh giá hiệu suất mô hình Machine Learning, bạn thường sử dụng phương pháp nào?', 2, 1, 8),
('Trong Big Data, ý nghĩa của "Velocity" là gì?', 2, 1, 8),

-- mức độ khó: 6 câu
('Để thực hiện việc phân loại dữ liệu trong Machine Learning, bạn sử dụng thuật toán gì?', 3, 1, 8),
('Đối với Big Data, ý nghĩa của "Volume" là gì?', 3, 1, 8),
('Ngôn ngữ lập trình nào thường được sử dụng trong việc triển khai các mô hình Machine Learning?', 3, 1, 8),
('Big Data có ba yếu tố chính là "3V". Ngoài "Velocity" và "Volume," yếu tố còn lại là gì?', 3, 1, 8),
('Trong Machine Learning, ý nghĩa của thuật ngữ "Overfitting" là gì?', 3, 1, 8),
('Trong Machine Learning, "Bias" và "Variance" là gì và tại sao cân nhắc giữa chúng quan trọng trong việc xây dựng mô hình?', 3, 1, 8),

-- chủ đề Phát triển phần mềm
-- mức độ dễ: 10 câu
('Phần mềm là gì?', 1, 1, 9),
('Phát triển phần mềm gồm bao nhiêu giai đoạn chính?', 1, 1, 9),
('Công cụ quản lý mã nguồn phổ biến là gì?', 1, 1, 9),
('Phát triển phần mềm Agile tập trung vào điều gì?', 1, 1, 9),
('Đâu là một phần của quy trình kiểm thử phần mềm?', 1, 1, 9),
('Điểm đầu tiên trong phát triển phần mềm là gì?', 1, 1, 9),
('Trong phát triển phần mềm, SCRUM gồm những cuộc họp nào?', 1, 1, 9),
('Công cụ quản lý mã nguồn phổ biến là gì?', 1, 1, 9),
('Các mô hình lặp lại (Iterative Models) trong phát triển phần mềm thường dựa trên nguyên tắc gì?', 1, 1, 9),
('Phát triển phần mềm Agile tập trung vào điều gì?', 1, 1, 9),

-- mức độ trung bình: 5 câu
('Trong phát triển phần mềm, SCRUM gồm những cuộc họp nào?', 2, 1, 9),
('Điều gì làm nên một phát triển phần mềm thành công?', 2, 1, 9),
('Điểm đầu tiên trong việc phát triển ứng dụng di động là gì?', 2, 1, 9),
('Các mô hình lặp lại (Iterative Models) trong phát triển phần mềm thường dựa trên nguyên tắc gì?', 2, 1, 9),
('Trong phát triển phần mềm, "refactoring" đề cập đến việc gì?', 2, 1, 9),

-- mức độ khó: 5 câu
('"DevOps" là gì và nó liên quan đến việc gì trong phát triển phần mềm?', 3, 1, 9),
('Làm thế nào để xác định yêu cầu phần mềm?', 3, 1, 9),
('Trong phát triển phần mềm, "Scalability" đề cập đến việc gì?', 3, 1, 9),
('Trong phát triển phần mềm, "Unit Testing" đề cập đến việc gì?', 3, 1, 9),
('Trong Agile, làm thế nào để xác định ưu tiên của các yêu cầu?', 3, 1, 9),

-- chủ đề: lập trình website
-- mức độ dễ: 5 câu
('HTML là viết tắt của gì?', 1, 1, 10),
('Định dạng tiêu đề lớn nhất trong HTML bằng thẻ nào?', 1, 1, 10),
('CSS là viết tắt của gì?', 1, 1, 10),
('Thẻ HTML để tạo liên kết đến một trang web khác là gì?', 1, 1, 10),
('Để thêm một hình ảnh vào trang web, bạn sử dụng thẻ nào trong HTML?', 1, 1, 10),

-- mức độ trung bình: 5 câu
('Để tạo một đường viền xung quanh một phần tử HTML, bạn sử dụng thuộc tính CSS nào?', 2, 1, 10),
('Lựa chọn CSS display: flex; định dạng phần tử HTML như thế nào?', 2, 1, 10),
('Để tạo một biểu đồ hình tròn đơn giản trong HTML và CSS, bạn sử dụng loại hình nào?', 2, 1, 10),
('Ngôn ngữ lập trình nào thường được sử dụng để làm cho trang web trở nên tương tác?', 2, 1, 10),
('Để xác định một biến trong JavaScript, bạn sử dụng từ khóa nào?', 2, 1, 10),

-- mức độ khó: 5 câu
('Để gửi dữ liệu từ trang web của bạn đến máy chủ mà không cần làm tải lại trang, bạn sử dụng công nghệ gì?', 3, 1, 10),
('Để chuyển đổi một chuỗi sang số trong JavaScript, bạn sử dụng hàm nào?', 3, 1, 10),
('CSS position: absolute; làm gì cho một phần tử?', 3, 1, 10),
('Để thực hiện tính năng đổi màu khi di chuột qua một phần tử trong JavaScript, bạn sử dụng sự kiện nào?', 3, 1, 10),
('Để tạo một trang web đáng tin cậy và an toàn, bạn nên tuân thủ các nguyên tắc gì?', 3, 1, 10);







