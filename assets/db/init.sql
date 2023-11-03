
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
    fullname VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NULL,
    tel VARCHAR(10) NULL,
    introduce TEXT NULL,
    role_id INT(11) NOT NULL,
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
INSERT INTO categories(name, image)
VALUES
	('Công nghệ phần mềm', ''),
    ('Khoa học máy tính', ''),
    ('Kỹ thuật phần mềm', ''),
    ('Trí tuệ nhân tạo và Robotics', ''),
    ('Mạng máy tính và truyền thông dữ liệu', ''),
    ('An toàn thông tin', ''),
    ('Hệ thống quản lý thông tin', ''),
    ('Big Data và Machine Learning', ''),
    ('Phát triển phần mềm', ''),
    ('Lập trình website', '');