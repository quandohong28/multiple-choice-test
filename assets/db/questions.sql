-- sử dụng multiple_choice_test
USE multiple_choice_test;

-- Chèn danh sách 20 câu hỏi chuyên đề 

-- Chuyên đề phát triển phần mềm  

INSERT INTO questions (id, content, image, question_level_id, question_type_id, category_id)
VALUES
    (1, 'Phần mềm mã nguồn mở là gì?', NULL, 1, 'question_type_id', 1),
    (2, 'Agile là gì trong ngữ cảnh của phát triển phần mềm?', NULL, 2, 'question_type_id', 1),
    (3, 'Trong phát triển phần mềm, điểm chung của Scrum và Kanban là gì?', NULL, 3, 'question_type_id', 1),
    (4, 'Trong kiểm thử phần mềm, kiểm thử đơn vị là gì?', NULL, 1, 'question_type_id', 1),
    (5, 'DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', NULL, 2, 'question_type_id', 1),
    (6, 'Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', NULL, 3, 'question_type_id', 1),
    (7, 'Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', NULL, 1, 'question_type_id', 1),
    (8, 'Điều gì được hiểu bởi "CI/CD" trong phát triển phần mềm?', NULL, 2, 'question_type_id', 1),
    (9, 'Trong ngữ cảnh của công nghệ phần mềm, "Refactoring" là gì?', NULL, 3, 'question_type_id', 1),
    (10, 'Trong lĩnh vực phát triển phần mềm, "Scalability" (khả năng mở rộng) là gì?', NULL, 1, 'question_type_id', 1),
    (11, 'Trong lĩnh vực phát triển phần mềm, thuật ngữ "API" viết tắt của điều gì?', NULL, 2, 'question_type_id', 1),
    (12, 'Điều gì được hiểu bởi thuật ngữ "Regression Testing" trong kiểm thử phần mềm?', NULL, 3, 'question_type_id', 1),
    (13, 'Trong phát triển phần mềm, "Waterfall Model" là gì?', NULL, 1, 'question_type_id', 1),
    (14, 'Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', NULL, 2, 'question_type_id', 1),
    (15, 'Trong lĩnh vực phát triển phần mềm, "Scrum Master" là người đảm nhận vai trò gì trong nhóm Scrum?', NULL, 3, 'question_type_id', 1),
    (16, 'Trong ngữ cảnh của phát triển phần mềm, "Unit Testing" là gì?', NULL, 1, 'question_type_id', 1),
    (17, 'Điều gì được hiểu bởi thuật ngữ "Code Review" trong phát triển phần mềm?', NULL, 2, 'question_type_id', 1),
    (18, 'Điều gì được hiểu bởi thuật ngữ "Deployment" trong phát triển phần mềm?', NULL, 3, 'question_type_id', 1),
    (19, 'Trong lĩnh vực phát triển phần mềm, điều gì được hiểu bởi "MVP" viết tắt của điều gì?', NULL, 1, 'question_type_id', 1),
    (20, 'Trong kiểm thử phần mềm, "End-to-End Testing" là gì?', NULL, 2, 'question_type_id', 1),

-- Chuyên đề khoa học máy tính

    (21, 'Phần mềm mã nguồn mở là gì?', 1, 'question_type_id', 2),
    (22, 'Ngôn ngữ lập trình phổ biến được sử dụng trong phát triển web là gì?', 2, 'question_type_id', 2),
    (23, 'Trong lập trình hướng đối tượng, tính chất nào cho phép một đối tượng kế thừa các thuộc tính và phương thức từ một đối tượng khác?', 1, 'question_type_id', 2),
    (24, 'Hệ thống quản lý cơ sở dữ liệu phổ biến được sử dụng trong phát triển ứng dụng web là gì?', 2, 'question_type_id', 2),
    (25, 'Thuật ngữ "API" viết tắt của điều gì?', 3, 'question_type_id', 2),
    (26, 'Ngôn ngữ lập trình nào được sử dụng chủ yếu trong phát triển ứng dụng di động cho hệ điều hành iOS?', 1, 'question_type_id', 2),
    (27, 'Địa chỉ IP được sử dụng để định danh địa chỉ nào sau đây trên Internet?', 2, 'question_type_id', 2),
    (28, 'Trong lập trình, "IDE" viết tắt của điều gì?', 3, 'question_type_id', 2),
    (29, 'Đâu là một ngôn ngữ lập trình biên dịch?', 1, 'question_type_id', 2),
    (30, 'Thuật ngữ "URL" viết tắt của điều gì?', 2, 'question_type_id', 2),
    (31, 'Trong ngữ cảnh của lập trình, điều gì được hiểu bởi thuật ngữ "loop"?', 3, 'question_type_id', 2),
    (32, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ "algorithm"?', 1, 'question_type_id', 2),
    (33, 'Trong hệ thống số nhị phân, số 1010 tương đương với số nào sau đây?', 2, 'question_type_id', 2),
    (34, 'Trong lập trình web, điều gì được hiểu bởi thuật ngữ "CSS"?', 3, 'question_type_id', 2),
    (35, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ "variable"?', 1, 'question_type_id', 2),
    (36, 'Trong ngôn ngữ lập trình Python, câu lệnh nào được sử dụng để in một chuỗi ra màn hình?', 2, 'question_type_id', 2),
    (37, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ "array"?', 3, 'question_type_id', 2),
    (38, 'Trong lập trình, thuật ngữ "boolean" thường được sử dụng để biểu diễn điều gì?', 1, 'question_type_id', 2),
    (39, 'Trong lập trình, điều gì được hiểu bởi thuật ngữ "function"?', 2, 'question_type_id', 2),
    (40, 'Trong lập trình hướng đối tượng, điều gì được hiểu bởi thuật ngữ "inheritance"?', 3, 'question_type_id', 2),

-- Chuyên đề Kỹ thuật phần mềm 

    (41, 'Phần mềm mã nguồn mở là gì?', NULL, 1, 'question_type_id', 3),
    (42, 'Điểm chung của Scrum và Kanban trong phát triển phần mềm là gì?', NULL, 2, 'question_type_id', 3),
    (43, 'Kiểm thử đơn vị trong phát triển phần mềm là gì?', NULL, 3, 'question_type_id', 3),
    (44, 'DevOps liên quan đến việc gì trong quy trình phát triển phần mềm?', NULL, 1, 'question_type_id', 3),
    (45, 'Điều gì làm nên một quy trình phát triển phần mềm linh hoạt?', NULL, 2, 'question_type_id', 3),
    (46, 'Làm thế nào để đảm bảo chất lượng phần mềm trong quá trình phát triển?', NULL, 3, 'question_type_id', 3),
    (47, 'Điều gì được hiểu bởi "CI/CD" trong phát triển phần mềm?', NULL, 1, 'question_type_id', 3),
    (48, 'Trong ngữ cảnh của công nghệ phần mềm, "Refactoring" là gì?', NULL, 2, 'question_type_id', 3),
    (49, 'Trong lĩnh vực phát triển phần mềm, "Scalability" (khả năng mở rộng) là gì?', NULL, 3, 'question_type_id', 3),
    (50, 'Trong lĩnh vực phát triển phần mềm, thuật ngữ "API" viết tắt của điều gì?', NULL, 1, 'question_type_id', 3),
    (51, 'Điều gì được hiểu bởi thuật ngữ "Regression Testing" trong kiểm thử phần mềm?', NULL, 2, 'question_type_id', 3),
    (52, 'Trong phát triển phần mềm, "Waterfall Model" là gì?', NULL, 3, 'question_type_id', 3),
    (53, 'Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', NULL, 1, 'question_type_id', 3),
    (54, 'Trong ngữ cảnh của phát triển phần mềm, "Scrum Master" là người đảm nhận vai trò gì trong nhóm Scrum?', NULL, 2, 'question_type_id', 3),
    (55, 'Trong phát triển phần mềm, "Unit Testing" là gì?', NULL, 3, 'question_type_id', 3),
    (56, 'Điều gì được hiểu bởi thuật ngữ "Code Review" trong phát triển phần mềm?', NULL, 1, 'question_type_id', 3),
    (57, 'Điều gì được hiểu bởi thuật ngữ "Deployment" trong phát triển phần mềm?', NULL, 2, 'question_type_id', 3),
    (58, 'Trong lĩnh vực phát triển phần mềm, "MVP" viết tắt của điều gì?', NULL, 3, 'question_type_id', 3),
    (59, 'Trong kiểm thử phần mềm, "End-to-End Testing" là gì?', NULL, 1, 'question_type_id', 3),
    (60, 'Điều gì được hiểu bởi thuật ngữ "Agile Manifesto" trong phát triển phần mềm?', NULL, 2, 'question_type_id', 3);
