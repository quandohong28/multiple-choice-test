INSERT INTO questions (
    content,
    question_level_id,
    question_type_id,
    category_id
)
VALUES
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






