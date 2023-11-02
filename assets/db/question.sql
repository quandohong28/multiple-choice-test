-- sử dụng multiple_choice_test
USE multiple_choice_test;

-- Chèn danh sách 20 câu hỏi
INSERT INTO questions (content, image, correct_answer, question_level_id, question_type_id, category_id)
VALUES
    ('Định nghĩa của hàm trong lý thuyết tập hợp là gì?', NULL, 'A', '1', 'question_type_id', 'category_id'),
    ('Chứng minh hoặc phản minh: Nếu A ⊆ B và B ⊆ A, thì A = B.', NULL, 'D', '3', 'question_type_id', 'category_id'),
    ('Định nghĩa của cây bao phủ trong đồ thị là gì?', NULL, 'B', '1', 'question_type_id', 'category_id'),
    ('Sự khác biệt giữa hoán vị và tổ hợp là gì?', NULL, 'C', '1', 'question_type_id', 'category_id'),
    ('Chứng minh rằng căn bậc hai của 2 là một số vô tỉ.', NULL, 'D', '3', 'question_type_id', 'category_id'),
    ('Tính số đỉnh của một đồ thị có độ lớn nếu biết số cạnh và số thành phố là như nhau.', NULL, 'A', '3', 'question_type_id', 'category_id'),
    ('Định nghĩa của đồ thị liên thông là gì?', NULL, 'C', '1', 'question_type_id', 'category_id'),
    ('Chứng minh rằng mọi đồ thị có ít nhất một đỉnh với bậc là 1.', NULL, 'B', '3', 'question_type_id', 'category_id'),
    ('Phân loại các phương trình đệ quy và giải bài toán T(n) = 2T(n/2) + n.', NULL, 'D', '3', 'question_type_id', 'category_id'),
    ('Giải thuật Dijkstra được sử dụng để làm gì trong lý thuyết đồ thị?', NULL, 'A', '1', 'question_type_id', 'category_id'),
    ('Định nghĩa của biểu diễn ma trận của một đồ thị.', NULL, 'C', '1', 'question_type_id', 'category_id'),
    ('Chứng minh rằng số Euler của một đồ thị phẳng liên thông là 2.', NULL, 'B', '3', 'question_type_id', 'category_id'),
    ('Giải bài toán Xác suất sử dụng nguyên lý Ông đùng trong một tình huống cụ thể.', NULL, 'A', '1', 'question_type_id', 'category_id'),
    ('Định nghĩa và ứng dụng của nguyên lý Người điều khiển trong lý thuyết tập hợp.', NULL, 'C', '1', 'question_type_id', 'category_id'),
    ('Phân loại các biểu đồ và mô tả sự khác biệt giữa chúng.', NULL, 'D', '3', 'question_type_id', 'category_id'),
    ('Tính toán số cạnh của đồ thị hoàn chỉnh có n đỉnh.', NULL, 'A', '3', 'question_type_id', 'category_id'),
    ('Đặc điểm và ứng dụng của nguyên lý Lồng vào trong lý thuyết đồ thị.', NULL, 'B', '1', 'question_type_id', 'category_id'),
    ('Tính số lượng cây khung khác nhau trong một đồ thị.', NULL, 'C', '3', 'question_type_id', 'category_id'),
    ('So sánh giữa thuật toán DFS và thuật toán BFS trong lý thuyết đồ thị.', NULL, 'A', '1', 'question_type_id', 'category_id'),
    ('Chứng minh rằng nếu một đồ thị liên thông không có chu trình thì nó là một cây.', NULL, 'D', '3', 'question_type_id', 'category_id');
