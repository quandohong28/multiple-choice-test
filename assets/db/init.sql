-- MULTIPLE CHOICE TEST
-- auth: quandohong28, chunghieu, vanthanh
-- version: 0.0.1 beta test
-- create at: 30/10/2023

-- đang tạo cơ sở dữ liệu multiple_choice_test
CREATE TABLE multiple_choice_test;


-- sử dụng multiple_choice_test
USE multiple_choice_test;


-- đang tạo bảng phân quyền tài khoản
CREATE TABLE roles (
    id INT(11) NOT NULL AUTO_INCREMENT,
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
    role_id TINYINT(1) NOT NULL,
    PRIMARY KEY (id , username),
    FOREIGN KEY (role_id)
        REFERENCES roles (id)
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
    level VARCHAR(50) NOT NULL
);

-- đang tạo bảng loại (sử dụng cho bảng câu hỏi và bảng bài thi)
CREATE TABLE types (
    id INT(11) NOT NULL AUTO_INCREMENT,
    type VARCHAR(50) NOT NULL
);


-- đang tạo bảng câu hỏi
CREATE TABLE questions (
    id INT(11) NOT NULL AUTO_INCREMENT,
    content TEXT NOT NULL,
    image VARCHAR(255) NULL,
    correct_answer TINYINT NOT NULL,
    question_level_id INT(11) NOT NULL,
    question_type_id TINYINT(1) NOT NULL,
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
    question_id INT(11) NOT NULL,
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE
);


-- liên kết câu trả lời đúng của bảng câu hỏi với bảng câu trả lời
ALTER TABLE questions
ADD constraint FOREIGN KEY (correct_answer) REFERENCES answers(id);


-- đang tạo bảng danh sách lịch thi
CREATE TABLE test_schedules (
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
    category_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (test_schedule_id)
        REFERENCES test_schedules (id)
        ON DELETE CASCADE,
    account_id INT(11) NOT NULL,
    FOREIGN KEY (account_id)
        REFERENCES accounts (id)
        ON DELETE CASCADE,
    FOREIGN KEY (category_id)
        REFERENCES categories (id)
        ON DELETE CASCADE
);


-- đang tạo bảng danh sách các bài thi
CREATE TABLE exams (
    id INT(11) NOT NULL AUTO_INCREMENT,
    test_schedule_id INT(11) NULL,
    exam_type_id INT(11) NOT NULL,
    number_question INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (test_schedule_id)
        REFERENCES test_schedules (id)
        ON DELETE CASCADE,
    FOREIGN KEY (exam_type_id)
        REFERENCES types (id)
        ON DELETE CASCADE
);


-- đang tạo bảng 1 bài thi chi tiết
CREATE TABLE exam_details (
    id INT(11) NOT NULL AUTO_INCREMENT,
    exam_id INT(11) NOT NULL,
    question_id INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (exam_id)
        REFERENCES exams (id)
        ON DELETE CASCADE,
    FOREIGN KEY (question_id)
        REFERENCES questions (id)
        ON DELETE CASCADE
);


-- đang tạo bảng danh sách kết quả của những bài thi đã thi
CREATE TABLE results (
    id INT(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    exam_id INT(11) NOT NULL,
    FOREIGN KEY (exam_id)
        REFERENCES exams (id)
        ON DELETE CASCADE
);


-- đang tạo bảng kết quả của 1 bài thi chi tiết
CREATE TABLE result_details (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    exam_detail_id INT(11) NOT NULL,
    account_id INT(11) NOT NULL,
    answer TINYINT(1) NOT NULL,
    points INT(11),
    FOREIGN KEY (exam_detail_id)
        REFERENCES exam_details (id)
        ON DELETE CASCADE,
    FOREIGN KEY (account_id)
        REFERENCES accounts (id)
        ON DELETE CASCADE
);



















