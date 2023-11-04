INSERT INTO questions (
    content,
    question_level_id,
    question_type_id,
    category_id
)

--Trí tuệ nhân tạo và Robotics

--Mức dễ (10) câu

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

--Mức trung bình (5) câu

('Trong ngành công nghiệp sản xuất, robot công nghiệp thường được sử dụng để làm gì?', 2, 1, 4),
('Làm thế nào robot có thể đóng vai trò quan trọng trong nghiên cứu và phát triển trong lĩnh vực y học và dược phẩm?', 2, 1, 4),
('Trong lĩnh vực xe tự hành (self-driving cars), làm thế nào hệ thống AI có thể xử lý thông tin từ các cảm biến để lái xe an toàn?', 2, 1, 4),
('Trong lĩnh vực Robotics, điều gì là quan trọng để giúp robot thực hiện nhiệm vụ trong môi trường thực tế?', 2, 1, 4),
('Làm thế nào robot có thể tương tác với con người một cách hiệu quả?', 2, 1, 4),

--Mức khó (5) câu

('Trong lĩnh vực Trí tuệ nhân tạo (AI), khái niệm "suy diễn tiến" (forward inference) liên quan đến gì?', 3, 1, 4),
('Trong lĩnh vực nghiên cứu Robotics, khái niệm "SLAM" viết tắt của gì?', 3, 1, 4),
('Làm thế nào mạng nơ-ron sâu (Deep Neural Networks) có thể học biểu diễn dữ liệu phức tạp?', 3, 1, 4),
('Trong ngành công nghiệp sản xuất, làm thế nào robot có thể làm việc cùng với con người một cách an toàn?', 3, 1, 4),
('Trong lĩnh vực Robotics, làm thế nào robot có thể tự động học và cải thiện hiệu suất của mình trong môi trường thay đổi?', 3, 1, 4),

--Mạng máy tính và truyền thông dữ liệu

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

--Mức trung bình (5) câu

('Trong mô hình OSI (Open Systems Interconnection), lớp nào chịu trách nhiệm quản lý việc truyền dữ liệu giữa các thiết bị trong mạng?', 2, 1, 5),
('Từ "Firewall" trong ngữ cảnh mạng máy tính ám chỉ gì?', 2, 1, 5),
('Đâu là giao thức truyền dữ liệu nhanh và an toàn được sử dụng rộng rãi trong việc tải tệp và trang web?', 2, 1, 5),
('Trong mạng Wi-Fi, SSID là gì?', 2, 1, 5),
('Cổng (port) mạng máy tính là gì?', 2, 1, 5),

--Mức khó (5) câu


('Trong mô hình OSI, lớp nào có trách nhiệm kiểm soát việc truyền dữ liệu giữa hai máy tính trực tiếp kết nối với nhau?', 3, 1, 5),
('Từ "VLAN" là viết tắt của gì trong mạng máy tính?', 3, 1, 5),
('Trong giao thức mạng, POP và IMAP liên quan đến việc gì?', 3, 1, 5),
('Trong mạng máy tính, khái niệm "NAT" (Network Address Translation) liên quan đến việc gì?', 3, 1, 5),
('Trong mạng máy tính, để truy cập một trang web bằng tên miền, máy tính của bạn cần phải thực hiện quá trình nào để tìm địa chỉ IP tương ứng của tên miền đó?', 3, 1, 5),

--An toàn thông tin

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

--Mức trung bình (5) câu

('Công cụ "wireshark" được sử dụng trong mục đích gì trong lĩnh vực an toàn thông tin?', 2, 1, 6),
('Phương pháp "shoulder surfing" trong an toàn thông tin liên quan đến việc gì?', 2, 1, 6),
('Đâu là ví dụ về phần mềm bảo mật được sử dụng để bảo vệ máy tính khỏi các mối đe dọa trực tuyến?', 2, 1, 6),
('Mã PIN (Personal Identification Number) thường được sử dụng trong ngữ cảnh nào để xác thực người dùng?', 2, 1, 6),
('Phần mềm "phishing" thường được sử dụng để làm gì?', 2, 1, 6),

--Mức khó (5) câu

('Khái niệm "Zero-Day Exploit" liên quan đến việc gì trong lĩnh vực an toàn thông tin?', 3, 1, 6),
('Trong lĩnh vực an toàn thông tin, khái niệm "Phreaking" liên quan đến việc gì?', 3, 1, 6),
('Hình thức tấn công "Man-in-the-Middle (MITM)" trong an toàn thông tin liên quan đến việc gì?', 3, 1, 6),
('Phương pháp "Social Engineering" trong an toàn thông tin liên quan đến việc gì?', 3, 1, 6),
('Trong bảo mật thông tin, một "honeypot" là gì?', 3, 1, 6);