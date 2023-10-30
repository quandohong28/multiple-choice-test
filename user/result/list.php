<?php
$kind = $_GET['kind'];
if ($kind == 'that') {
    $title = 'Thi thật';
    // caau truy van ra du lieu cua bang thi that
} else {
    $title = 'Thi thử';
    // caau truy van ra du lieu cua bang thi thu
}
?>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
                <th scope="col">Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>