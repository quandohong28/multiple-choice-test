-- Đang thêm dữ liệu cho bảng answer
INSERT INTO answers (
    content,
    is_correct,
    question_id
)
VALUES
<<<<<<< HEAD

--Trí tuệ nhân tạo và Robotics
--Mức dễ (10) câu
('Máy tính tự thực hiện phẫu thuật.', 0, 61),
('Một loại robot.', 0, 61),
('Lĩnh vực nghiên cứu và phát triển máy tính có khả năng học và thực hiện nhiệm vụ.', 1, 61),
('Tất cả đều đúng.', 0, 61),

('Sử dụng máy tính để học từ dữ liệu và cải thiện khả năng của chúng.', 1, 62),
('Máy tính tự động chơi cờ.', 0, 62),
('Là quá trình lập trình máy tính.', 0, 62),
('Tất cả máy tính đều tự động học cách thực hiện nhiệm vụ.', 0, 62),

('Một kỹ thuật để làm cho máy tính tự thấy mình thông minh.', 0, 63),
('Sử dụng các mạng nơ-ron sâu để hiểu và biểu diễn dữ liệu phức tạp.', 1, 63),
('Một loại học thấp kỹ thuật.', 0, 63),
('Làm thế nào con người học cách làm những việc mới.', 0, 63),

('Giúp robot thực hiện phẫu thuật.', 0, 64),
('Quản lý việc đặt hẹn bác sĩ.', 0, 64),
('Hỗ trợ bác sĩ trong chẩn đoán bệnh.', 1, 64),
('Làm đồ ăn cho bệnh nhân.', 0, 64),

('Bằng cách xử lý thông tin từ các cảm biến và quyết định lái xe.', 1, 65),
('Bằng cách tự động đậu xe ở mọi vị trí.', 0, 65),
('Bằng cách thay thế tài xế hoàn toàn.', 0, 65),
('Bằng cách tự động đặt hàng thức uống cho người lái.', 0, 65),

('Một lĩnh vực nghiên cứu chuyên về trí tuệ nhân tạo.', 0, 66),
('Lĩnh vực nghiên cứu và phát triển máy móc tự động có khả năng thực hiện nhiệm vụ trong môi trường thực tế.', 1, 66),
('Một ngành công nghiệp sản xuất đồ chơi robot.', 0, 66),
('Tất cả các loại máy móc.', 0, 66),

('Ngành sản xuất thực phẩm.', 0, 67),
('Sản xuất ô tô, công nghiệp điện tử và công việc lặp lại có tính chính xác cao.', 1, 67),
('Ngành dệt may.', 0, 67),
('Ngành công nghiệp vận tải.', 0, 67),

('Bằng cách sử dụng bản đồ giấy và bút chì.', 0, 68),
('Bằng cách sử dụng cảm biến nhấp nháy.', 1, 68),
('Bằng cách hỏi người điều khiển nơi nó đang ở.', 0, 68),
('Bằng cách sử dụng GPS.', 0, 68),

('Bằng cách sử dụng tiếng ồn và ánh sáng.', 0, 69),
('Bằng cách đọc suy nghĩ của con người.', 0, 69),
('Bằng cách sử dụng cảm biến để phát hiện và phản ứng với giao tiếp con người.', 1, 69),
('Bằng cách chỉ đơn giản lắc đầu.', 0, 69),

('Bằng cách tự động gọi điện thoại cho các đội cứu hộ.', 0, 70),
('Bằng cách xây dựng cầu và đường dẫn an toàn.', 0, 70),
('Bằng cách sử dụng cảm biến để tìm kiếm người mắc kẹt và cung cấp thông tin vị trí.', 1, 70),
('Bằng cách hát ca khúc để nâng tinh thần cho các nạn nhân.', 0, 70),

--Mức trung bình (5) câu

('Thực hiện việc quảng cáo sản phẩm.', 0, 71),
('Kiểm tra chất lượng sản phẩm.', 1, 71),
('Xây dựng thương hiệu sản phẩm.', 0, 71),
('Làm cho hàng hóa trở nên thơm ngon.', 0, 71),

('Bằng cách luyện tập thể hình.', 0, 72),
('Bằng cách tự động pha trộn các loại thuốc.', 0, 72),
('Bằng cách thực hiện thí nghiệm và kiểm tra lâm sàng.', 1, 72),
('Bằng cách chơi game y học trực tuyến.', 0, 72),

('Bằng cách gửi tín hiệu tiếng sấm để ngăn tai nạn.', 0, 73),
('Bằng cách sử dụng cảm biến để thu thập thông tin về môi trường xung quanh.', 1, 73),
('Bằng cách biểu diễn đám mây trên bản đồ giấy.', 0, 73),
('Bằng cách thực hiện đường nét mạch điện tử trên bảng điều khiển.', 0, 73),

('Sự quyết tâm của robot.', 0, 74),
('Khả năng biết cười của robot.', 0, 74),
('Khả năng tự động học và thích nghi của robot.', 1, 74),
('Sự thông minh của robot.', 0, 74),

('Bằng cách chỉ đơn giản lắc đầu.', 0, 75),
('Bằng cách sử dụng ánh mắt đa dạng.', 1, 75),
('Bằng cách gửi tin nhắn văn bản.', 0, 75),
('Bằng cách đọc suy nghĩ của con người.', 0, 75),

--Mức khó (5) câu

('Quá trình phân tích dữ liệu lịch sử.', 0, 76),
('Quá trình sử dụng dữ liệu hiện tại để đưa ra kết luận.', 1, 76),
('Quá trình học máy.', 0, 76),
('Quá trình ghi chép thông tin.', 0, 76),

('Sản phẩm tiêu biểu của ngành công nghiệp ô tô.', 0, 77),
('Simultaneous Localization and Mapping.', 1, 77),
('Hệ thống giao thông thông minh tự động.', 0, 77),
('Máy tính siêu mạnh.', 0, 77),

('Bằng cách sử dụng chỉ một lớp nơ-ron.', 0, 78),
('Bằng cách giảm độ sâu của mạng.', 0, 78),
('Bằng cách kết hợp nhiều lớp nơ-ron và trọng số.', 1, 78),
('Bằng cách chỉ sử dụng hàm kích hoạt tuyến tính.', 0, 78),

('Bằng cách giám sát con người liên tục.', 0, 79),
('Bằng cách tạo ra khu vực cách ly cho robot.', 0, 79),
('Bằng cách sử dụng cảm biến an toàn và hệ thống kiểm soát.', 1, 79),
('Bằng cách đào tạo con người để không gây xung đột với robot.', 0, 79),

('Bằng cách thay thế toàn bộ phần cứng.', 0, 80),
('Bằng cách thực hiện bảo trì định kỳ.', 0, 80),
('Bằng cách sử dụng giáo viên robot.', 0, 80),
('Bằng cách sử dụng học máy và học sâu.', 0, 80),

--Mạng máy tính và truyền thông dữ liệu

-- Mức dễ (10) câu

('Total Control Protocol / Internet Protocol', 0, 81),
('Transmission Control Protocol / Internet Protocol', 1, 81),
('The Communication Protocol / Internet Protocol', 0, 81),
('Top Computer Protocol / Internet Protocol', 0, 81),

('Truyền tải âm thanh qua mạng.', 0, 82),
('Truyền tải video qua mạng.', 0, 82),
('Truyền tải trang web và dữ liệu hypertext.', 1, 82),
('Truyền tải email qua mạng.', 0, 82),

('Phủ sóng rộng khắp toàn bộ thế giới.', 0, 83),
('Dễ quản lý và hiệu suất cao trong phạm vi hạn chế.', 1, 83),
('Chia sẻ dữ liệu trực tuyến với người dùng trên Internet.', 0, 83),
('Đủ lớn để kết nối hàng triệu thiết bị.', 0, 83),

('Một loại cổng USB.', 0, 84),
('Một dãy số xác định một thiết bị trên mạng.', 1, 84),
('Một loại máy tính.', 0, 84),
('Một loại ứng dụng mạng.', 0, 84),

('Sổ điện thoại.', 0, 85),
('Dịch vụ gửi thư truyền hình.', 0, 85),
('Giao thức truyền tải dữ liệu.', 1, 85),
('Địa chỉ IP của máy tính mục tiêu.', 0, 85),

('Bluetooth', 0, 86),
('Ethernet', 0, 86),
('Wi-Fi', 1, 86),
('GPS', 0, 86),

('Hình ảnh', 0, 87),
('Văn bản', 0, 87),
('Âm thanh', 0, 87),
('Tài liệu PDF', 1, 87),

('Hệ thống địa chỉ IP.', 0, 88),
('Một loại cổng USB.', 0, 88),
('Giao thức truyền tải dữ liệu.', 0, 88),
('Hệ thống đổi tên miền thành địa chỉ IP.', 1, 88),

('Microsoft Word', 0, 89),
('Photoshop', 0, 89),
('Google Chrome', 1, 89),
('Adobe Reader', 0, 89),

('Các chuỗi cáp quang dài hàng ngàn km.', 0, 90),
('Một máy fax cổ điển.', 0, 90),
('Một máy tính và giao thức email.', 1, 90),
('Bất kỳ ứng dụng di động nào.', 0, 90),

--Mức trung bình (5) câu

('Lớp Vận chuyển (Transport Layer).', 0, 91),
('Lớp Liên kết dữ liệu (Data Link Layer).', 0, 91),
('Lớp Mạng (Network Layer).', 1, 91),
('Lớp Ứng dụng (Application Layer).', 0, 91),

('Tường lửa, một thiết bị hoặc phần mềm giúp bảo vệ mạng khỏi truy cập trái phép.', 1, 92),
('Một cửa sổ thông báo lỗi.', 0, 92),
('Tường gạch trong phòng server', 0, 92),
('Bất kỳ thứ gì được nung nóng trước khi sử dụng.', 0, 92),

('HTTP', 0, 93),
('FTP', 1, 93),
('HTTPS', 0, 93),
('SMTP', 0, 93),

('Một mã dẫn đến trang web cụ thể.', 0, 94),
('Tên mạng không dây (Wireless Network Name) để xác định mạng Wi-Fi.', 1, 94),
('Một loại loa không dây.', 0, 94),
('Mã số ngẫu nhiên trên mạng.', 0, 94),

('Một vùng ngoại trời ngoài khơi để kết nối cáp dưới biển.', 0, 95),
('Một nơi để kết nối máy tính vào mạng.', 1, 95),
('Một chỗ để máy tính lưu trữ tất cả tệp tin.', 0, 95),
('Một loại công cụ trồng cây trên máy tính.', 0, 95),

--Mức khó (5) câu

('Lớp Mạng (Network Layer).', 0, 96),
('Lớp Vận chuyển (Transport Layer).', 1, 96),
('Lớp Liên kết dữ liệu (Data Link Layer).', 0, 96),
('Lớp Trình bày (Presentation Layer).', 0, 96),

('Very Large Area Network.', 0, 97),
('Virtual Local Area Network.', 1, 97),
('Visual Language for Network.', 0, 97),
('Virtual Linking of Area Networks.', 0, 97),

('Xác thực người dùng trước khi truy cập mạng.', 0, 98),
('Gửi dữ liệu trên mạng bằng email.', 0, 98),
('Phân chia mạng thành các phân đoạn.', 0, 98),
('Truy cập và quản lý email trên máy chủ email.', 1, 98),

('Chuyển đổi giữa hai loại giao thức mạng khác nhau.', 0, 99),
('Chuyển đổi giữa các địa chỉ IP và tên miền.', 0, 99),
('Chuyển đổi giữa các cổng mạng trên máy tính.', 0, 99),
('Chuyển đổi giữa các địa chỉ IP trong mạng nội bộ và địa chỉ IP công cộng.', 1, 99),

('DNS Lookup (Domain Name System Lookup).', 1, 100),
('ARP (Address Resolution Protocol).', 0, 100),
('NAT (Network Address Translation).', 0, 100),
('VPN (Virtual Private Network).', 0, 100),

--An toàn thông tin

-- Mức dễ (10) câu

('Dễ đoán và sử dụng chung cho nhiều dịch vụ.', 0, 101),
('Được lưu trữ trên một tờ giấy và để ở nơi dễ thấy.', 0, 101),
('Phức tạp, không dễ đoán, và không sử dụng chung cho nhiều dịch vụ.', 1, 101),
('Chia sẻ với bạn bè và gia đình.', 0, 101),

('Tạo ra các virus mới.', 0, 102),
('Bảo vệ máy tính khỏi các mối đe dọa từ phần mềm độc hại.', 1, 102),
('Cải thiện hiệu suất máy tính.', 0, 102),
('Tạo ra sao lưu của dữ liệu.', 0, 102),

('Gửi email giả mạo từ một ngân hàng yêu cầu bạn cung cấp thông tin tài khoản.', 1, 103),
('Lưu trữ dữ liệu quan trọng trên một ổ đĩa cứng ngoại.', 0, 103),
('Sử dụng phần mềm diệt virus để quét máy tính.', 0, 103),
('Xem video trực tuyến trên YouTube.', 0, 103),

('Sử dụng hai máy tính để bảo vệ dữ liệu.', 0, 104),
('Sử dụng hai mật khẩu khác nhau cho cùng một tài khoản.', 0, 104),
('Sử dụng hai yếu tố xác thực khác nhau để bảo vệ tài khoản.', 1, 104),
('Sử dụng hai trình duyệt web khác nhau để truy cập dữ liệu.', 0, 104),

('Bấm vào tất cả các liên kết để kiểm tra thông tin chi tiết.', 0, 105),
('Trả lời email để yêu cầu thêm thông tin.', 0, 105),
('Bỏ qua email đó và không mở bất kỳ đính kèm nào.', 1, 105),
('Gửi tiền cho người gửi email để khắc phục vấn đề.', 0, 105),

('Biến dữ liệu thành tiền tệ số.', 0, 106),
('Bảo vệ dữ liệu bằng cách chuyển nó thành ngôn ngữ máy tính.', 0, 106),
('Giảm kích thước của dữ liệu để tiết kiệm không gian lưu trữ.', 0, 106),
('Bảo vệ dữ liệu bằng cách biến nó thành dạng không đọc được trừ khi có khóa giải mã.', 1, 106),

('Thiết bị giúp tạo lửa trong lò nướng.', 0, 107),
('Phần mềm để tạo ra một quy tắc truy cập mạng.', 1, 107),
('Một hệ thống bảo vệ máy tính khỏi việc lây lan của virus.', 0, 107),
('Một loại chuỗi cổng USB.', 0, 107),

('Firewall', 1, 108),
('Trình duyệt web', 0, 108),
('Chương trình vẽ hình', 0, 108),
('Ổ đĩa cứng', 0, 108),

('Mã hóa dữ liệu.', 1, 109),
('Phishing.', 0, 109),
('Xác thực đa yếu tố (MFA).', 0, 109),
('Ngăn chặn tấn công từ chối dịch vụ (DDoS).', 0, 109),

('Gửi email giả mạo để lừa đảo thông tin cá nhân.', 0, 110),
('Gửi virus qua email để lây nhiễm máy tính.', 0, 110),
('Gửi hàng loạt yêu cầu kết nối đến một máy chủ để làm cho máy chủ quá tải và ngừng hoạt động.', 1, 110),
('Xâm nhập vào hệ thống máy tính bằng cách tấn công từ chối dịch vụ.', 0, 110),

--Mức trung bình (5) câu

('Để tạo mật khẩu mạng không dây.', 0, 111),
('Để tạo ảnh sao của ổ cứng.', 0, 111),
('Để phân tích và kiểm tra lưu lượng mạng.', 1, 111),
('Để tạo bản sao lưu của dữ liệu trên máy tính.', 0, 111),

('Người ta sử dụng kính để xem màn hình máy tính.', 0, 112),
('Người ta sử dụng kính đeo đầu để quét mã vạch.', 0, 112),
('Người ta lén lút quan sát người khác nhập mật khẩu hoặc thông tin nhạy cảm.', 1, 112),
('Người ta sử dụng tay để kiểm tra nhiệt độ của máy tính.', 0, 112),

('Trình duyệt web.', 0, 113),
('Antivirus (phần mềm diệt virus).', 1, 113),
('Trình soạn thảo văn bản.', 0, 113),
('Giao diện người dùng máy tính.', 0, 113),

('Đăng nhập vào mạng xã hội.', 0, 114),
('Mở khóa điện thoại di động.', 0, 114),
('Mở cửa ATM (máy rút tiền tự động).', 1, 114),
('Kiểm tra email.', 0, 114),

('Bảo vệ dữ liệu cá nhân.', 0, 115),
('Gửi email quảng cáo.', 0, 115),
('Lừa đảo người dùng và lấy thông tin cá nhân hoặc tài khoản.', 1, 115),
('Tạo sao lưu dữ liệu.', 0, 115),

--Mức khó (5) câu

('Một phần mềm bảo mật chống lại mọi loại tấn công.', 0, 116),
('Một lỗ hổng bảo mật đã được khắc phục.', 0, 116),
('Một lỗ hổng bảo mật mà nhà phát triển chưa biết và chưa có biện pháp phòng ngừa.', 1, 116),
('Một công nghệ mã hóa thông tin.', 0, 116),

('Đánh cắp dữ liệu từ các trang web.', 0, 117),
('Tấn công vào hệ thống máy tính bằng cách sử dụng phần mềm độc hại.', 0, 117),
('Xâm nhập vào hệ thống viễn thông để gọi điện thoại miễn phí hoặc thay đổi dịch vụ viễn thông.', 1, 117),
('Giám sát lưu lượng mạng.', 0, 117),

('Gửi hàng loạt email giả mạo để lừa đảo người dùng.', 0, 118),
('Ngăn chặn hoặc theo dõi thông tin giữa hai bên giao tiếp mà họ không hề hay biết.', 1, 118),
('Sử dụng mã hóa để bảo vệ dữ liệu trực tuyến.', 0, 118),
('Tấn công bằng cách tạo ra một "cửa sau" trong hệ thống máy tính.', 0, 118),

('Sử dụng mạng xã hội để chia sẻ thông tin cá nhân.', 0, 119),
('Sử dụng phần mềm diệt virus để bảo vệ dữ liệu.', 0, 119),
('Sử dụng kỹ thuật xâm nhập máy tính.', 0, 119),
('Sử dụng xác định xã hội để lừa đảo người dùng và lấy thông tin quan trọng.', 1, 119),

('Một phần mềm diệt virus mạnh mẽ.', 0, 120),
('Một máy tính chứa dữ liệu quan trọng.', 0, 120),
('Một hệ thống giả mạo được sử dụng để thu thập thông tin về các cuộc tấn công.', 1, 120),
('Một tên miền web phức tạp.', 0, 120),

('Một hệ thống lưu trữ giấy tờ', 0, 121),
('Một hệ thống lưu trữ và quản lý dữ liệu và thông tin', 1, 121),
('Một hệ thống quản lý nhân viên', 0, 121),
('Một hệ thống quản lý dự án', 0, 121),

('Tạo ứng dụng di động', 0, 122),
('Quản lý nhân viên', 0, 122),
('Lưu trữ và tổ chức dữ liệu và thông tin', 1, 122),
('Xây dựng cơ sở dữ liệu quan hệ', 0, 122),

('Hệ thống quản lý dự án', 0, 123),
('Hệ thống quản lý tài sản', 0, 123),
('Hệ thống quản lý thông tin và tài liệu', 1, 123),
('Hệ thống quản lý nhân viên', 0, 123),

('Microsoft Word', 0, 124),
('Excel', 0, 124),
('SharePoint', 1, 124),
('PowerPoint', 0, 124),

('Tính phức tạp của dự án', 0, 125),
('Hiệu quả và hiệu suất làm việc', 1, 125),
('Sự phát triển kỹ thuật', 0, 125),
('Số lượng nhân viên', 0, 125),

('Một loại hệ thống quản lý nhân viên', 0, 126),
('Một phần mềm quản lý cơ sở dữ liệu', 1, 126),
('Một ứng dụng di động', 0, 126),
('Một công cụ thiết kế đồ họa', 0, 126),

('Ngành xây dựng', 0, 127),
('Ngành truyền thông', 0, 127),
('Lĩnh vực quản lý tri thức', 1, 127),
('Ngành hàng không', 0, 127),

('Quản lý tài sản vật lý', 0, 128),
('Tăng cường an toàn thông tin', 0, 128),
('Tổ chức và truy cập dữ liệu dễ dàng', 1, 128),
('Quản lý quy trình sản xuất', 0, 128),

('Rủi ro tài chính', 0, 129),
('Rủi ro môi trường', 0, 129),
('Rủi ro về an ninh mạng', 1, 129),
('Rủi ro y tế', 0, 129),

('Sự sáng tạo', 0, 130),
('Trải nghiệm khách hàng', 0, 130),
('Tính toàn vẹn và an ninh dữ liệu', 0, 130),
('Khả năng sản xuất nhanh hơn', 0, 130),

-- 

('Chúng không giống nhau', 0, 131),
('Cả hai đều quản lý thông tin và tài liệu', 1, 131),
('Chúng chỉ quản lý dự án', 0, 131),
('Chúng chỉ quản lý tài sản', 0, 131),

('Y tế', 1, 132),
('Kiến thức thể thao', 0, 132),
('Quản lý dự án', 0, 132),
('Phát triển phần mềm', 0, 132),

('Quản lý tài sản vật lý', 0, 133),
('Tổ chức thông tin và dữ liệu', 1, 133),
('Lập kế hoạch tiếp thị', 0, 133),
('Sáng tạo ứng dụng di động', 0, 133),

('Rủi ro y tế', 0, 134),
('Rủi ro tài chính', 0, 134),
('Rủi ro về an ninh mạng', 1, 134),
('Rủi ro môi trường', 0, 134),

('Sự sáng tạo', 0, 135),
('Trải nghiệm khách hàng', 0, 135),
('Tính toàn vẹn và an ninh dữ liệu', 1, 135),
('Khả năng sản xuất nhanh hơn', 0, 135),

-- 

('Dữ liệu quan trọng nhất trong hệ thống', 0, 136),
('Thông tin mô tả về dữ liệu và tài liệu', 1, 136),
('Dự án quản lý thông tin', 0, 136),
('Hệ thống lưu trữ', 0, 136),

('Tối ưu hóa mã nguồn', 0, 137),
('Thực hiện kiểm thử liên tục', 0, 137),
('Xác định và tuân thủ quy trình và chính sách', 1, 137),
('Không cần quản lý', 0, 137),

('Quản lý phiên bản của tài liệu', 1, 138),
('Quản lý các tài liệu không phiên bản', 0, 138),
('Xác định phiên bản phần mềm', 0, 138),
('Kiểm tra tài liệu', 0, 138),

('Tính năng của hệ thống', 0, 139),
('Khả năng mở rộng hoặc mở rộng hệ thống khi có nhiều người sử dụng', 1, 139),
('Quá trình triển khai', 0, 139),
('Tính năng của phần cứng', 0, 139),

('Quản lý nguồn cung ứng', 0, 140),
('Quản lý dự án', 0, 140),
('Quản lý nội dung và thông tin', 1, 140),
('Quản lý tài sản vật lý', 0, 140),

--

('Dữ liệu lớn và phức tạp', 1, 141),
('Dữ liệu cỡ trung bình', 0, 141),
('Dữ liệu nhỏ', 0, 141),
('Dữ liệu không quan trọng', 0, 141),

('Lập trình máy tính để thực hiện các công việc cụ thể', 0, 142),
('Việc máy tính học hỏi từ dữ liệu và cải thiện hiệu suất', 1, 142),
('Sử dụng máy tính để lập trình các ứng dụng di động', 0, 142),
('Sử dụng máy tính để gọi điện thoại', 0, 142),

('Một loại ngôn ngữ lập trình', 0, 143),
('Một công ty sản xuất máy tính', 0, 143),
('Một framework xử lý dữ liệu lớn', 1, 143),
('Một hệ điều hành', 0, 143),

('Khi nó vượt quá 100 MB', 0, 144),
('Khi nó vượt quá khả năng lưu trữ của một máy tính', 0, 144),
('Khi nó vượt quá khả năng xử lý bởi các công cụ truyền thống', 1, 144),
('Khi nó vượt quá 1 GB', 0, 144),

('Một framework xử lý dữ liệu lớn', 1, 145),
('Một công ty sản xuất máy tính', 0, 145),
('Một loại đèn sáng', 0, 145),
('Một hệ điều hành', 0, 145),

('Lập trình viên', 0, 146),
('Nhà khoa học dữ liệu', 1, 146),
('Chuyên gia an toàn mạng', 0, 146),
('Quản lý dự án', 0, 146),

('Một hình thức thể dục', 0, 147),
('Một dạng đường thẳng', 0, 147),
('Một loại thuật toán dự đoán giá trị số', 1, 147),
('Một loại ngôn ngữ lập trình', 0, 147),

('Voluminous, Variety, Value', 1, 148),
('Value, Variables, Vehicular', 0, 148),
('Volume, Volatility, Vector', 0, 148),
('Vegetables, Vocal, Vibrant', 0, 148),

('Máy tính học từ dữ liệu có sẵn và dự đoán dựa trên nhãn đã biết', 0, 149),
('Máy tính tự động viết mã nguồn', 0, 149),
('Máy tính học hỏi từ dữ liệu mà không cần hướng dẫn', 1, 149),
('Máy tính dự đoán tương lai không cần dữ liệu', 0, 149),

--

('Khi nó vượt quá 100 MB', 0, 150),
('Khi nó vượt quá khả năng lưu trữ của một máy tính', 0, 150),
('Khi nó vượt quá khả năng xử lý bởi các công cụ truyền thống', 1, 150),
('Khi nó vượt quá 1 GB', 0, 150),

('Máy tính học từ dữ liệu mà không cần hướng dẫn', 0, 151),
('Máy tính học từ dữ liệu có sẵn và dự đoán dựa trên nhãn đã biết', 1, 151),
('Máy tính tự động viết mã nguồn', 0, 151),
('Máy tính dự đoán tương lai không cần dữ liệu', 0, 151),

('MapReduce là một trò chơi điện tử và không liên quan đến Big Data', 0, 152),
('MapReduce là một ngôn ngữ lập trình', 0, 152),
('MapReduce là một framework xử lý và phân tán dữ liệu lớn', 1, 152),
('MapReduce là một công ty sản xuất ứng dụng di động', 0, 152),

('Đo độ dài mã nguồn', 0, 153),
('Đo thời gian thực thi', 0, 153),
('So sánh với mô hình khác', 1, 153),
('Sử dụng máy tính cá nhân', 0, 153),

('Tốc độ mà dữ liệu được tạo ra và tích hợp', 1, 154),
('Khả năng lưu trữ dữ liệu lớn', 0, 154),
('Số lượng dữ liệu lớn', 0, 154),
('Tốc độ xử lý dữ liệu lớn', 0, 154),

-- khó

('Clustering', 0, 155),
('Regression', 0, 155),
('Classification', 1, 155),
('Reinforcement Learning', 0, 155),

('Số lượng dữ liệu lớn', 1, 156),
('Tốc độ xử lý dữ liệu lớn', 0, 156),
('Độ phức tạp của dữ liệu lớn', 0, 156),
('Khả năng lưu trữ dữ liệu lớn', 0, 156),

('Java', 0, 157),
('C++', 0, 157),
('Python', 1, 157),
('Ruby', 0, 157),

('Viable', 0, 158),
('Virtual', 0, 158),
('Variety', 1, 158),
('Value', 0, 158),

('Mô hình hoạt động tốt trên dữ liệu đào tạo nhưng không hoạt động tốt trên dữ liệu thực tế', 1, 159),
('Mô hình quá đơn giản để hiểu được dữ liệu', 0, 159),
('Mô hình chưa đủ đào tạo và cần thêm dữ liệu', 0, 159),
('Mô hình hoạt động tốt trên mọi loại dữ liệu', 0, 159),

('"Bias" là sự sai lệch trong dự đoán của mô hình, "Variance" là độ biến đổi của dự đoán. Cân nhắc giữa chúng quan trọng để đảm bảo mô hình không bị overfitting hoặc underfitting.', 1, 160),
('"Bias" là độ biến đổi của dự đoán, "Variance" là sự sai lệch trong dự đoán. Cân nhắc giữa chúng quan trọng để tối ưu hóa hiệu suất mô hình.', 0, 160),
('"Bias" và "Variance" không liên quan đến Machine Learning.', 0, 160),
('"Bias" và "Variance" là hai thuộc tính không cần quan tâm khi xây dựng mô hình Machine Learning.', 0, 160),

-- 

('Một loại phần cứng', 0, 161),
('Chương trình máy tính và dữ liệu liên quan', 1, 161),
('Một loại máy tính', 0, 161),
('Công cụ thiết kế đồ họa', 0, 161),

('1', 0, 162),
('2', 0, 162),
('3', 1, 162),
('4', 0, 162),

('Photoshop', 0, 163),
('Visual Studio Code', 1, 163),
('Microsoft Word', 0, 163),
('Google Chrome', 0, 163),

('Thiết kế giao diện người dùng', 0, 164),
('Giao tiếp liên tục với khách hàng', 1, 164),
('Sử dụng mã nguồn mở', 0, 164),
('Tạo ứng dụng di động', 0, 164),

('Lập kế hoạch dự án', 0, 165),
('Thiết kế giao diện người dùng', 0, 165),
('Xác định các ca kiểm thử', 1, 165),
('Lập trình ứng dụng di động', 0, 165),

('Xác định mục tiêu kinh doanh', 1, 166),
('Lập kế hoạch tiếp thị', 0, 166),
('Lựa chọn các công nghệ mới nhất', 0, 166),
('Xây dựng cơ sở dữ liệu', 0, 166),

('Sprint, Daily Scrum, Sprint Review, Sprint Retrospective', 1, 167),
('Planning, Coding, Testing, Deployment', 0, 167),
('Daily Scrum, Code Review, User Acceptance Testing, Release Planning', 0, 167),
('Scrum không có cuộc họp', 0, 167),

('Photoshop', 0, 168),
('Visual Studio Code', 1, 168),
('Microsoft Word', 0, 168),
('Google Chrome', 0, 168),

('Phát triển từng phần nhỏ của dự án một cách độc lập', 1, 169),
('Thực hiện kiểm tra đầu cuối cùng', 0, 169),
('Không cần thay đổi trong quá trình phát triển', 0, 169),
('Lập kế hoạch chi tiết từ đầu', 0, 169),

('Thiết kế giao diện người dùng', 0, 170),
('Giao tiếp liên tục với khách hàng', 1, 170),
('Sử dụng mã nguồn mở', 0, 170),
('Tạo ứng dụng di động', 0, 170),

--

('Sprint, Daily Scrum, Sprint Review, Sprint Retrospective', 1, 171),
('Planning, Coding, Testing, Deployment', 0, 171),
('Daily Scrum, Code Review, User Acceptance Testing, Release Planning', 0, 171),
('Scrum không có cuộc họp', 0, 171),

('Sử dụng các công nghệ mới nhất', 0, 172),
('Chất lượng mã nguồn', 1, 172),
('Số lượng nhân viên', 0, 172),
('Sự phức tạp của dự án', 0, 172),

('Xác định mục tiêu kinh doanh', 1, 173),
('Lập kế hoạch tiếp thị', 0, 173),
('Lựa chọn các công nghệ mới nhất', 0, 173),
('Xây dựng cơ sở dữ liệu', 0, 173),

('Phát triển từng phần nhỏ của dự án một cách độc lập', 1, 174),
('Thực hiện kiểm tra đầu cuối cùng', 0, 174),
('Không cần thay đổi trong quá trình phát triển', 0, 174),
('Lập kế hoạch chi tiết từ đầu', 0, 174),

('Xây dựng lại ứng dụng từ đầu', 0, 175),
('Tối ưu hóa mã nguồn hiện tại mà không thay đổi chức năng', 1, 175),
('Thêm tính năng mới', 0, 175),
('Ghi đè lên mã nguồn cũ', 0, 175),

--

('Quản lý cơ sở dữ liệu', 0, 176),
('Kỹ thuật chuyển đổi mã nguồn sang mã máy', 0, 176),
('Tích hợp liên tục và triển khai liên tục', 1, 176),
('Quản lý tài liệu dự án', 0, 176),

('Hỏi khách hàng một lần và lưu lại yêu cầu', 0, 177),
('Tạo một danh sách yêu cầu ban đầu và không thay đổi', 0, 177),
('Xác định yêu cầu, theo dõi và cập nhật khi cần thiết', 1, 177),
('Không cần xác định yêu cầu', 0, 177),

('Tính năng của phần mềm', 0, 178),
('Khả năng mở rộng hoặc mở rộng hệ thống khi có nhiều người sử dụng', 0, 178),
('Quá trình triển khai', 0, 178),
('Tính năng của phần cứng', 1, 178),

('Kiểm tra tích hợp của toàn bộ ứng dụng', 0, 179),
('Kiểm tra cả hệ thống và cơ sở dữ liệu', 0, 179),
('Kiểm tra từng đơn vị (hoặc phần) của mã nguồn một cách độc lập', 1, 179),
('Kiểm tra giao diện người dùng', 0, 179),

('Ngẫu nhiên', 0, 180),
('Dựa trên quyết định của quản lý dự án', 0, 180),
('Dựa trên giá trị kinh doanh dự kiến và phản hồi từ khách hàng', 1, 180),
('Dựa trên chi phí thực hiện', 0, 180),

--

('Hyper Transfer Markup Language', 0, 181),
('Hyper Text Markup Language', 1, 181),
('High-Level Text Markup Language', 0, 181),
('Hyperlink and Text Markup Language', 0, 181),

('<h1>', 1, 182),
('<header>', 0, 182),
('<title>', 0, 182),
('<heading>', 0, 182),

('Computer Style Sheets', 0, 183),
('Cascading Style Sheets', 1, 183),
('Creative Style Sheets', 0, 183),
('Colorful Style Sheets', 0, 183),

('<link>', 0, 184),
('<a>', 1, 184),
('<href>', 0, 184),
('<url>', 0, 184),

('<img>', 1, 185),
('<picture>', 0, 185),
('<image source>', 0, 185),
('<image>', 0, 185),

--

('border-radius', 0, 186),
('border-style', 0, 186),
('border-color', 0, 186),
('border-color', 1, 186),

('Hiển thị một phần tử dưới dạng lưới', 0, 187),
('Hiển thị một phần tử dưới dạng danh sách', 0, 187),
('Hiển thị một phần tử dưới dạng khối chồng lên nhau', 0, 187),
('Hiển thị một phần tử dưới dạng linh hoạt theo chiều ngang và chiều dọc', 1, 187),

('Line chart', 0, 188),
('Bar chart', 0, 188),
('Pie chart', 1, 188),
('Scatter plot', 0, 188),

('Java', 0, 189),
('JScript', 0, 189),
('JavaScript', 1, 189),
('JScript.NET', 0, 189),

('define', 0, 190),
('let', 1, 190),
('variable', 0, 190),
('int', 0, 190),

--

('AJAX', 1, 191),
('XML', 0, 191),
('HTML5', 0, 191),
('HTTP', 0, 191),

('parseInt()', 1, 192),
('convertToNumber()', 0, 192),
('stringToNumber()', 0, 192),
('strToNum()', 0, 192),

('Nó đặt phần tử tương tự như position: relative;', 0, 193),
('Nó đặt phần tử tương tự như position: static;', 0, 193),
('Nó đặt phần tử tương tự như position: fixed;', 0, 193),
('Nó đặt phần tử dựa trên một phần tử cha có thuộc tính position: relative;', 1, 193),

('onhover', 0, 194),
('onmouseover', 1, 194),
('onmouseenter', 0, 194),
('onmove', 0, 194),

('Nguyên tắc thiết kế giao diện', 0, 195),
('Nguyên tắc tuân thủ màu sắc', 0, 195),
('Nguyên tắc an toàn và bảo mật', 1, 195),
('Nguyên tắc tối ưu hóa hiệu suất', 0, 195);

=======
-- Câu trả lời chuyên đề phát triển phần mềm  

    ('Phần mềm mà người dùng có thể xem, sửa đổi và phân phối mã nguồn.', 1, 1),
    ('Phần mềm chỉ có thể chạy trên máy tính có kết nối internet.', 0, 1),
    ('Phần mềm chỉ có thể chạy trên hệ điều hành Windows.', 0, 1),
    ('Phần mềm chỉ có thể sử dụng cho mục đích cá nhân.', 0, 1),

    ('Một phương pháp quản lý dự án linh hoạt và tương tác.', 1, 2),
    ('Một phương pháp nghiên cứu khoa học.', 0, 2),
    ('Một loại ngôn ngữ lập trình.', 0, 2),
    ('Một hệ điều hành mã nguồn mở.', 0, 2),

    ('Cả hai đều là phương pháp quản lý dự án Agile.', 1, 3),
    ('Cả hai đều là ngôn ngữ lập trình.', 0, 3),
    ('Cả hai chỉ được sử dụng trong kiểm thử phần mềm.', 0, 3),
    ('Cả hai chỉ được sử dụng trong phát triển phần mềm mã nguồn mở.', 0, 3),

    ('Kiểm tra xem các thành phần phần mềm hoạt động đúng cách không.', 1, 4),
    ('Kiểm tra toàn bộ hệ thống phần mềm.', 0, 4),
    ('Kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', 0, 4),
    ('Kiểm tra xem phần mềm có tương thích với các hệ thống khác không.', 0, 4),

    ('Kết hợp phát triển và vận hành để tối ưu hóa quy trình phát triển và triển khai phần mềm.', 1, 5),
    ('Quản lý phiên bản phần mềm.', 0, 5),
    ('Kiểm tra chất lượng phần mềm.', 0, 5),
    ('Thiết kế giao diện người dùng.', 0, 5),

    ('Khả năng thích ứng nhanh chóng với thay đổi và tương tác tích cực với khách hàng.', 1, 6),
    ('Sử dụng một số lượng lớn công cụ kiểm thử tự động.', 0, 6),
    ('Tuân thủ chặt chẽ theo kế hoạch ban đầu mà không cần điều chỉnh.', 0, 6),
    ('Giữ nguyên trạng thái và không thay đổi trong suốt quá trình phát triển.', 0, 6),

    ('Thực hiện kiểm thử đơn vị, kiểm thử tích hợp và kiểm thử hệ thống thường xuyên.', 1, 7),
    ('Tăng cường việc kiểm tra và sửa lỗi ở cuối quá trình phát triển.', 0, 7),
    ('Tạo ra một tài liệu chi tiết mô tả chức năng của phần mềm.', 0, 7),
    ('Giảm bớt thời gian dành cho quy trình kiểm thử để tăng tốc độ phát triển.', 0, 7),

    ('Continuous Integration/Continuous Deployment, tức là tích hợp liên tục và triển khai liên tục, là một phương pháp tự động hóa việc tích hợp mã nguồn và triển khai phiên bản mới.', 1, 8),
    ('Một phương pháp lập kế hoạch dự án phát triển phần mềm.', 0, 8),
    ('Kỹ thuật quản lý phiên bản mã nguồn.', 0, 8),
    ('Application Programming Interface.', 0, 8),

    ('Quy trình tối ưu hóa cấu trúc và mã nguồn của phần mềm mà không làm thay đổi hành vi bên ngoài.', 1, 9),
    ('Quy trình làm mới lại hệ thống phần mềm từ đầu.', 0, 9),
    ('Quy trình giảm bớt chức năng của phần mềm để làm cho mã nguồn ngắn gọn hơn.', 0, 9),
    ('Quy trình tăng cường chức năng của phần mềm.', 0, 9),

    ('Khả năng của hệ thống để xử lý một lượng lớn dữ liệu và người dùng mà không làm giảm đi hiệu suất.', 1, 10),
    ('Khả năng của phần mềm để chạy trên nhiều hệ thống khác nhau.', 0, 10),
    ('Khả năng của ngôn ngữ lập trình để tạo ra các ứng dụng đa nhiệm.', 0, 10),
    ('Khả năng của phần mềm để tương thích với các phiên bản mới của hệ điều hành.', 0, 10),

    ('Application Programming Interface.', 1, 11),
    ('Advanced Programming Interface.', 0, 11),
    ('Automated Programming Interface.', 0, 11),
    ('Application Process Interface.', 0, 11),

    ('Kiểm tra xem các thay đổi gần đây có ảnh hưởng đến các chức năng hiện tại không.', 1, 12),
    ('Kiểm tra lại tất cả các chức năng của phần mềm.', 0, 12),
    ('Kiểm tra tích hợp của phần mềm với các hệ thống khác.', 0, 12),
    ('Kiểm tra chất lượng giao diện người dùng.', 0, 12),

    ('Một phương pháp phát triển phần mềm tuần tự với các giai đoạn nhất định.', 1, 13),
    ('Một phương pháp phát triển phần mềm linh hoạt.', 0, 13),
    ('Một loại ngôn ngữ lập trình.', 0, 13),
    ('Một phương pháp phát triển phần mềm không yêu cầu kế hoạch trước.', 0, 13),

    ('Một bản tuyên bố mô tả các giá trị và nguyên tắc của phương pháp Agile.', 1, 14),
    ('Một tài liệu hướng dẫn về cách viết mã nguồn.', 0, 14),
    ('Một chuỗi các câu lệnh lập trình.', 0, 14),
    ('Một công cụ kiểm thử tự động.', 0, 14),

    ('Người giữ cho quy trình Scrum được tuân thủ và giúp giải quyết các vấn đề phát sinh.', 1, 15),
    ('Người viết mã nguồn chính của dự án.', 0, 15),
    ('Người thiết kế giao diện người dùng.', 0, 15),
    ('Người kiểm tra chất lượng của sản phẩm.', 0, 15),

    ('Kiểm tra các thành phần riêng lẻ của mã nguồn để đảm bảo chúng hoạt động đúng cách.', 1, 16),
    ('Kiểm tra chất lượng giao diện người dùng.', 0, 16),
    ('Kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', 0, 16),
    ('Kiểm tra tích hợp của phần mềm với các hệ thống khác.', 0, 16),

    ('Một quy trình kiểm tra chất lượng mã nguồn bằng cách xem xét mã nguồn của người khác.', 1, 17),
    ('Một quy trình kiểm tra chất lượng giao diện người dùng.', 0, 17),
    ('Một phương pháp kiểm tra xem phần mềm có đáp ứng yêu cầu kinh doanh không.', 0, 17),
    ('Một phương pháp kiểm tra tích hợp của phần mềm với các hệ thống khác.', 0, 17),

    ('Quá trình triển khai phiên bản mới của phần mềm vào môi trường sản xuất hoặc khách hàng cuối.', 1, 18),
    ('Quá trình viết mã nguồn.', 0, 18),
    ('Quá trình thiết kế giao diện người dùng.', 0, 18),
    ('Quá trình kiểm thử tự động.', 0, 18),

    ('Minimum Viable Product.', 1, 19),
    ('Most Valuable Player.', 0, 19),
    ('Maximum Value Proposition.', 0, 19),
    ('Most Valued Project.', 0, 19),

    ('Kiểm tra toàn bộ quy trình hoạt động của phần mềm từ đầu đến cuối.', 1, 20),
    ('Kiểm tra từng thành phần của phần mềm một cách riêng lẻ.', 0, 20),
    ('Kiểm tra chất lượng giao diện người dùng.', 0, 20),
    ('Kiểm tra tích hợp của phần mềm với các hệ thống khác.', 0, 20),

-- Câu trả lời chuyên đề khoa học máy tính 

    ('Phần mềm chỉ dành cho người dùng cuối', 0, 21),
    ('Phần mềm có mã nguồn được công khai và có thể sửa đổi', 1, 21),
    ('Phần mềm chỉ chạy trên máy Mac', 0, 21),
    ('Phần mềm chỉ chạy trên máy Windows', 0, 21),

    ('Java', 0, 22),
    ('Python', 0, 22),
    ('HTML/CSS/JavaScript', 1, 22),
    ('C++', 0, 22),

    ('Kế thừa', 1, 23),
    ('Đa hình', 0, 23),
    ('Đóng gói', 0, 23),
    ('Trừu tượng', 0, 23),

    ('MySQL', 1, 24),
    ('MongoDB', 0, 24),
    ('SQLite', 0, 24),
    ('Oracle', 0, 24),

    ('Advanced Programming Interface', 0, 25),
    ('Application Programming Interface', 1, 25),
    ('Automated Programming Interface', 0, 25),
    ('Advanced Protocol Interface', 0, 25),

    ('Java', 0, 26),
    ('Swift', 1, 26),
    ('Python', 0, 26),
    ('C#', 0, 26),

    ('Địa chỉ vật lý của máy tính', 0, 27),
    ('Địa chỉ email', 0, 27),
    ('Địa chỉ trang web', 1, 27),
    ('Địa chỉ mạng', 0, 27),

    ('Integrated Development Environment', 1, 28),
    ('Interactive Design Environment', 0, 28),
    ('Intelligent Development Environment', 0, 28),
    ('Integrated Design Environment', 0, 28),

    ('Java', 1, 29),
    ('Python', 0, 29),
    ('JavaScript', 0, 29),
    ('HTML', 0, 29),

    ('Uniform Resource Locator', 1, 30),
    ('Universal Resource Link', 0, 30),
    ('Uniform Resource Link', 0, 30),
    ('Universal Resource Locator', 0, 30),

    ('Một loại biến', 0, 31),
    ('Một phần mềm chạy tự động', 0, 31),
    ('Một cấu trúc lặp lại lệnh nhiều lần', 1, 31),
    ('Một loại lỗi trong mã nguồn', 0, 31),

    ('Một loại máy tính', 0, 32),
    ('Một ngôn ngữ lập trình', 0, 32),
    ('Một quy trình giải quyết vấn đề', 1, 32),
    ('Một loại dữ liệu', 0, 32),

    ('5', 0, 33),
    ('8', 0, 33),
    ('10', 1, 33),
    ('15', 0, 33),

    ('Các lệnh lập trình chính', 0, 34),
    ('Một ngôn ngữ lập trình web', 0, 34),
    ('Một chuẩn mã nguồn mở', 0, 34),
    ('Một ngôn ngữ dùng để thiết kế giao diện trang web', 1, 34),

    ('Một giá trị không thay đổi', 0, 35),
    ('Một hằng số', 0, 35),
    ('Một tên được gán cho một giá trị hoặc đối tượng', 1, 35),
    ('Một loại dữ liệu', 0, 35),

    ('print("Hello, World!")', 1, 36),
    ('echo("Hello, World!")', 0, 36),
    ('console.log("Hello, World!")', 0, 36),
    ('display("Hello, World!")', 0, 36),

    ('Một biến chứa một giá trị', 0, 37),
    ('Một tập hợp các biến có cùng kiểu dữ liệu', 1, 37),
    ('Một hàm toán học', 0, 37),
    ('Một kiểu dữ liệu chỉ chứa số nguyên', 0, 37),

    ('Giá trị số nguyên', 0, 38),
    ('Giá trị logic đúng/sai (true/false)', 1, 38),
    ('Giá trị thập phân', 0, 38),
    ('Giá trị chuỗi ký tự', 0, 38),

    ('Một giá trị không thay đổi', 0, 39),
    ('Một chuỗi ký tự', 0, 39),
    ('Một đoạn mã thực hiện một nhiệm vụ cụ thể', 1, 39),
    ('Một hằng số', 0, 39),

    ('Một thuộc tính của một đối tượng', 0, 40),
    ('Một phương thức của một đối tượng', 0, 40),
    ('Một đối tượng kế thừa các thuộc tính và phương thức từ một đối tượng khác', 1, 40),
    ('Một loại dữ liệu', 0, 40),


-- Câu trả lời chuyên đề Kỹ thuật phần mềm 

    ('Phần mềm chỉ dành cho người dùng cuối', 0, 41),
    ('Phần mềm có mã nguồn được công khai và có thể sửa đổi', 1, 41),
    ('Phần mềm chỉ chạy trên máy Mac', 0, 41),
    ('Phần mềm chỉ chạy trên máy Windows', 0, 41),

    ('Cả hai đều là phương pháp phát triển phần mềm Agile', 1, 42),
    ('Cả hai đều không sử dụng biểu đồ Kanban', 0, 42),
    ('Cả hai đều không có Sprint', 0, 42),
    ('Cả hai đều tập trung vào quản lý quy trình làm việc', 0, 42),

    ('Kiểm thử phần mềm toàn bộ', 0, 43),
    ('Kiểm thử một đơn vị nhỏ nhất của mã nguồn, chẳng hạn như một hàm hoặc một phương thức', 1, 43),
    ('Kiểm thử giao diện người dùng', 0, 43),
    ('Kiểm thử tương tác giữa các thành phần của hệ thống', 0, 43),

    ('Tối ưu hóa hiệu suất ứng dụng', 0, 44),
    ('Tích hợp quy trình phát triển và quy trình vận hành hệ thống', 1, 44),
    ('Thiết kế giao diện người dùng', 0, 44),
    ('Kiểm thử bảo mật', 0, 44),

    ('Thay đổi liên tục không kế hoạch', 0, 45),
    ('Không có sự đánh giá định kỳ về tiến độ công việc', 0, 45),
    ('Khả năng thích ứng nhanh chóng với thay đổi', 1, 45),
    ('Giữ nguyên mọi yêu cầu từ đầu đến cuối dự án', 0, 45),

    ('Chỉ kiểm thử ở cuối quá trình phát triển', 0, 46),
    ('Tự động hóa quy trình kiểm thử', 1, 46),
    ('Không cần kiểm thử nếu mã nguồn được viết đúng', 0, 46),
    ('Chỉ cần kiểm thử các tính năng chính của ứng dụng', 0, 46),

    ('Customer Interaction/Code Deployment', 0, 47),
    ('Continuous Integration/Continuous Deployment', 1, 47),
    ('Code Inspection/Code Documentation', 0, 47),
    ('Critical Issue/Customer Delivery', 0, 47),

    ('Quá trình sửa đổi mã nguồn mà không làm thay đổi chức năng của ứng dụng', 1, 48),
    ('Quá trình kiểm thử và xác thực mã nguồn', 0, 48),
    ('Quá trình thiết kế giao diện người dùng', 0, 48),
    ('Quá trình tối ưu hóa hiệu suất ứng dụng', 0, 48),

    ('Khả năng tương thích với các phiên bản cũ của phần mềm', 0, 49),
    ('Khả năng tương thích với nhiều hệ thống khác nhau', 0, 49),
    ('Khả năng mở rộng và xử lý tăng lượng dữ liệu hoặc người dùng mà không giảm hiệu suất', 1, 49),
    ('Khả năng tự động cập nhật phần mềm khi có phiên bản mới', 0, 49),

    ('Application Programming Interface', 1, 50),
    ('Advanced Programming Interface', 0, 50),
    ('Automated Program Interface', 0, 50),
    ('Application Production Interface', 0, 50),

    ('Kiểm thử để đảm bảo rằng các tính năng mới không ảnh hưởng đến các tính năng đã tồn tại', 1, 51),
    ('Kiểm thử một phần nhỏ của mã nguồn để đảm bảo rằng nó không có lỗi', 0, 51),
    ('Kiểm thử để xác định hiệu suất của hệ thống trong điều kiện tải', 0, 51),
    ('Kiểm thử để xác định nguyên nhân của lỗi cụ thể', 0, 51),

    ('Một phương pháp phát triển phần mềm tuần tự và tuyến tính', 1, 52),
    ('Một phương pháp phát triển phần mềm Agile', 0, 52),
    ('Một phương pháp phát triển phần mềm không cần kế hoạch', 0, 52),
    ('Một phương pháp phát triển phần mềm chỉ tập trung vào kiểm thử', 0, 52),

    ('Một tài liệu hướng dẫn cho việc viết mã nguồn', 0, 53),
    ('Một tài liệu hướng dẫn cho việc quản lý dự án phát triển phần mềm', 0, 53),
    ('Một tài liệu mô tả về các nguyên tắc và giá trị của việc phát triển phần mềm theo phương pháp Agile', 1, 53),
    ('Một tài liệu hướng dẫn cho việc kiểm thử phần mềm', 0, 53),

    ('Người hỗ trợ và tạo điều kiện cho nhóm Scrum làm việc hiệu quả', 1, 54),
    ('Người viết mã nguồn', 0, 54),
    ('Người quản lý dự án', 0, 54),
    ('Người chịu trách nhiệm về chất lượng phần mềm', 0, 54),

    ('Kiểm thử từng phần nhỏ nhất của mã nguồn, chẳng hạn như một hàm hoặc một phương thức', 1, 55),
    ('Kiểm thử toàn bộ ứng dụng', 0, 55),
    ('Kiểm thử giao diện người dùng', 0, 55),
    ('Kiểm thử tích hợp giữa các thành phần của hệ thống', 0, 55),

    ('Kiểm tra mã nguồn để xác định lỗi cú pháp', 0, 56),
    ('Kiểm tra mã nguồn để xác định lỗi logic và kiểu dữ liệu', 0, 56),
    ('Kiểm tra mã nguồn để xác định việc viết mã theo quy tắc và tiêu chuẩn đặt ra', 1, 56),
    ('Kiểm tra mã nguồn để xác định các vấn đề hiệu suất', 0, 56),

    ('Quá trình xây dựng mã nguồn từ mã nguồn nguồn và triển khai lên máy chủ sản phẩm', 0, 57),
    ('Quá trình chuyển đổi mã nguồn thành tập tin thực thi và triển khai ứng dụng lên môi trường sản phẩm', 1, 57),
    ('Quá trình kiểm thử tự động ứng dụng trên các môi trường khác nhau', 0, 57),
    ('Quá trình xác định yêu cầu của khách hàng và triển khai các tính năng tương ứng', 0, 57),

    ('Most Valuable Product', 0, 58),
    ('Minimum Viable Product', 1, 58),
    ('Most Valuable Project', 0, 58),
    ('Minimum Viable Project', 0, 58),

    ('Kiểm thử tất cả các thành phần của hệ thống hoạt động đúng cách khi kết hợp với nhau', 1, 59),
    ('Kiểm thử từng thành phần của hệ thống độc lập', 0, 59),
    ('Kiểm thử tất cả các giao diện người dùng', 0, 59),
    ('Kiểm thử hiệu suất của hệ thống', 0, 59),

    ('Một tài liệu mô tả về các nguyên tắc và giá trị của việc phát triển phần mềm theo phương pháp Agile', 1, 60),
    ('Một tài liệu hướng dẫn cho việc viết mã nguồn', 0, 60),
    ('Một tài liệu hướng dẫn cho việc quản lý dự án phát triển phần mềm', 0, 60),
    ('Một tài liệu hướng dẫn cho việc kiểm thử phần mềm', 0, 60);
>>>>>>> vanthanh
