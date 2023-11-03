INSERT INTO questions (
    content,
    question_level_id,
    question_type_id,
    category_id
)
VALUES
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






