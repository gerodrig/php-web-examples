    <h2 id="sort-arrays">Ordenar Array</h2>
    <form method="post" action="#sort-arrays">
        <label>Ingresa elementos para ordenar (ej. z,a,h):</label>
        <input type="text" name="sort_array_input">
        <input type="submit" name="sort_array_submit" value="Ordenar Array">
    </form>

    <?php
    if (isset($_POST['sort_array_submit'])) {
        $itemList = explode(',', $_POST['sort_array_input']);
        sort($itemList);
        echo "<div class='result'>Array ordenado: " . implode(', ', $itemList) . ".</div>";
    }
    ?>