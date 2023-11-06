<!DOCTYPE html>
<html>

<head>
    <style>
        .expandable {
            display: none;
            /* Mặc định ẩn thành phần con */
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="expandable-container">
            <button id="toggleButton">Nhấn vào đây</button>
            <div class="expandable">
                <!-- Nội dung của thành phần con nằm ở đây -->
                <p>This is the expandable content.</p>
            </div>
        </div>
    <?php endfor ?>

    <script>
        const toggleButtons = document.querySelectorAll("#toggleButton");
        const expandableContents = document.querySelectorAll(".expandable");
        toggleButtons.forEach((toggleButton, index) => {
            toggleButton.addEventListener("click", function() {
                if (expandableContents[index].style.display === "none" || expandableContents[index].style.display === "") {
                    // Khi ẩn hoặc không hiển thị, thì mở rộng
                    expandableContents[index].style.display = "block";
                } else {
                    // Khi đã hiển thị, thì thu gọn
                    expandableContents[index].style.display = "none";
                }
            });
        });
    </script>

</body>

</html>