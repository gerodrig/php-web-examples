<h2 id="sum-arrays">Sumar Elementos de un Array</h2>
    <form method="post" action="#sum-arrays">
        <label>Ingresa números separados por comas (ej. 1,2,3):</label>
        <input type="text" name="sum_array_input">
        <input type="submit" name="sum_array_submit" value="Sumar Elementos">
    </form>

    <?php
    if (isset($_POST['sum_array_submit'])) {
        $numberList = explode(',', $_POST['sum_array_input']);
        $sum = array_sum($numberList);
        echo "<div class='result'>La suma de los elementos es: {$sum}.</div>";
    }

    function sumArray($array) {
        $total = 0;
        foreach ($array as $value) {
            $total += $value;
        }
        return $total;
    }
    ?>

<div class="code-editor">
    <div class="code-header">Codigo - Sumar Elementos de un Array</div>
    <pre class="code-content">
    if (isset($_POST['sum_array_submit'])) {
        $numberList = explode(',', $_POST['sum_array_input']);
        $sum = array_sum($numberList);
        echo "La suma de los elementos es: {$sum}.";
    }
    </pre>
</div>