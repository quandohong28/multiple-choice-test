<button onclick="getQuestionById()">Lấy dữ liệu</button>

<button onclick="postQuestion('Ai là người đẹp trai nhất', 'quan.jpg', '1', '1', '1')">Thêm dữ liệu</button>
<script>
    var id = 1;
    const getQuestionById = async () => {
        const response = await fetch(`./data.php?id=${id++}`);
        const data = await response.json();
        console.log(data);
    }

    const postQuestion = async (content, image, question_level_id, question_type_id, category_id) => {
        const response = await fetch('./post.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify({
                content: content,
                image: image,
                question_level_id: question_level_id,
                question_type_id: question_type_id,
                category_id: category_id
            })
        });
        const data = await response.json();
        console.log(data);
    }
</script>