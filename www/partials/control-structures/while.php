<h2 id="while">While</h2>
<p>La estructura 'while' ejecuta un bloque de código mientras una condición sea verdadera.</p>

<form method="post" action="#while">
    <label>Valor inicial (menor que 10):</label>
    <input type="number" name="while_input" min="1" max="9">
    <input type="submit" name="while_submit" value="Iniciar">
</form>

<?php
if (isset($_POST['while_submit'])) {
    $value = $_POST['while_input'];
    echo "<div class='result'>";
    while ($value < 10) {
        echo $value . " ";
        $value++;
    }
    echo "</div>";
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - While</div>
    <pre class="code-content">
    while (condición) {
        // código a ejecutar
    }
    </pre>
</div>