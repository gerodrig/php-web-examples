<?php
$error = '';

if (isset($_POST['sort_array_submit'])) {
    $input = trim($_POST['sort_array_input']);
    if (empty($input)) {
        $error = "Por favor ingresa los elementos";
    } else {
        $itemList = explode(',', $input);
        sort($itemList);
    }
}
?>



<h2 id="sort-arrays">Ordenar Array</h2>
    <form method="post" action="#sort-arrays">
        <label>Ingresa elementos para ordenar (ej. z,a,h):</label>
        <input type="text" name="sort_array_input">
        <input type="submit" name="sort_array_submit" value="Ordenar Array">
        <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
    </form>

    <?php
    if (isset($_POST['sort_array_submit']) && empty($error) && !empty($itemList)) {
        $itemList = explode(',', $_POST['sort_array_input']);
        sort($itemList);
        echo "<div class='result'>Array ordenado: " . implode(', ', $itemList) . ".</div>";
    }
    ?>

<div class="code-editor">
    <div class="code-header">Codigo - Ordenar Array</div>
    <pre class="code-content">
    if (isset($_POST['sort_array_submit'])) {
        $itemList = explode(',', $_POST['sort_array_input']);
        sort($itemList);
        echo "Array ordenado: " . implode(', ', $itemList) . ".";
    }
    </pre>
</div>