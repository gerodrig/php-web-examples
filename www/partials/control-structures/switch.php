<h2 id="switch">Switch</h2>

<form method="post" action="#switch">
    <label>Elige un número (1-3):</label>
    <select name="switch_input">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <input type="submit" name="switch_submit" value="Evaluar">
</form>

<?php
if (isset($_POST['switch_submit'])) {
    $b = $_POST['switch_input'];
    switch ($b) {
        case 1:
            echo "<div class='result'>El valor es 1</div>";
            break;
        case 2:
            echo "<div class='result'>El valor es 2</div>";
            break;
        case 3:
            echo "<div class='result'>El valor es 3</div>";
            break;
        default:
            echo "<div class='result'>El valor es otro</div>";
    }
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - Switch</div>
    <pre class="code-content">
    switch (expresión) {
        case valor1:
            // código a ejecutar si la expresión es igual a valor1
            break;
        case valor2:
            // código a ejecutar si la expresión es igual a valor2
            break;
        case valor3:
            // código a ejecutar si la expresión es igual a valor3
            break;
        default:
            // código a ejecutar si la expresión no es igual a ninguno de los valores
    }
    </pre>
</div>