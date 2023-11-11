<button onclick="getQuestionById()">Lấy dữ liệu</button>

<button onclick="postQuestion('Quân có phải người đẹp trai nhất không?', 'quan.jpg', '1', '1', '1')">Thêm dữ liệu</button>
<button onclick="deleteQuestionById(205)">Xoá dữ liệu</button>
<script>
    let id = 1;
    const getQuestionById = async () => {
        const response = await fetch(`./data.php?id=${id++}`);
        const data = await response.json();
        console.log(data);
    }

    // const getQuestionById = () => {
    //     fetch(`./data.php?id=${id++}`)
    //         .then(response => response.json())
    //         .then(data => console.log(data))
    //         .catch(error => console.log(error));
    // }

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

    const deleteQuestionById = async (id) => {
        const response = await fetch(`./delete.php?id=${id++}`);
        const data = await response.json();
        console.log(data);
    }
</script>