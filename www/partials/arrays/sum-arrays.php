<?php
$error = '';

if (isset($_POST['sum_array_submit'])) {
    $input = trim($_POST['sum_array_input']);
    if (empty($input)) {
        $error = "Por favor ingresa los elementos";
    } else if (!preg_match('/^[0-9,]+$/', $input)) {
        $error = "Por favor ingresa solo números separados por comas";
    } else {
        $numberList = explode(',', $input);
        $sum = array_sum($numberList);
    }
}
?>

<h2 id="sum-array">Sumar Elementos de un Array</h2>
<form method="post" action="#sum-array">
    <label>Ingresa números separados por comas (ej. 1,2,3):</label>
    <input type="text" name="sum_array_input">
    <input type="submit" name="sum_array_submit" value="Sumar Elementos">
    <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
</form>

<?php
if (isset($_POST['sum_array_submit']) && empty($error) && !empty($sum)) {
    echo "<div class='result'>La suma de los elementos es: {$sum}.</div>";
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