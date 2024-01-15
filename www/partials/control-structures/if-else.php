<h2 id="if-else">If-Else</h2>
<p>En el siguiente ejemplo, si el valor de <code>$a</code> es mayor que 5, se mostrará un mensaje que dice que <code>$a</code> es mayor que 5. De lo contrario, se mostrará un mensaje que dice que <code>$a</code> no es mayor que 5.</p>


<form method="post" action="#if-else">
    <label>Ingresa un número:</label>
    <input type="number" name="if_else_input">
    <input type="submit" name="if_else_submit" value="Probar">
</form>

<?php
if (isset($_POST['if_else_submit'])) {
    $a = $_POST['if_else_input'];
    if ($a > 5) {
        echo "<div class='result'>\$a es mayor que 5</div>";
    } else {
        echo "<div class='result'>\$a no es mayor que 5</div>";
    }
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - If-Else</div>
    <pre class="code-content">
    if (condición) {
        // código a ejecutar si la condición es verdadera
    } else {
        // código a ejecutar si la condición es falsa
    }
    </pre>
</div>
