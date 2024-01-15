<h2 id="do-while">Do-While</h2>
<p>La estructura 'do-while' ejecuta un bloque de código una vez, y luego repite la ejecución mientras la condición sea verdadera.</p>

<form method="post" action="#do-while">
    <label>Valor inicial (menor que 10):</label>
    <input type="number" name="do_while_input" min="1" max="9">
    <input type="submit" name="do_while_submit" value="Iniciar">
</form>

<?php
if (isset($_POST['do_while_submit'])) {
    $value = $_POST['do_while_input'];
    echo "<div class='result'>";
    do {
        echo $value . " ";
        $value++;
    } while ($value < 10);
    echo "</div>";
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - Do-While</div>
    <pre class="code-content">
    do {
        // código a ejecutar
    } while (condición);
    </pre>
</div>