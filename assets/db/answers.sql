-- Đang thêm dữ liệu cho bảng answer
INSERT INTO answers (
    content,
    is_correct,
    question_id
)
VALUES
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
