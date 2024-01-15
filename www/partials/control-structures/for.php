<h2 id="for">For</h2>
<p>La estructura 'for' ejecuta un bloque de código un número específico de veces:</p>

<form method="post" action="#for">
    <label>Contar hasta:</label>
    <input type="number" name="for_input" min="1" max="10">
    <input type="submit" name="for_submit" value="Contar">
</form>

<?php
if (isset($_POST['for_submit'])) {
    $countTo = $_POST['for_input'];
    echo "<div class='result'>";
    for ($i = 1; $i <= $countTo; $i++) {
        echo $i . " ";
    }
    echo "</div>";
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - For</div>
    <pre class="code-content">
    for (inicialización; condición; incremento) {
        // código a ejecutar
    }
    </pre>
</div>