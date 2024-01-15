 <h2 id="revert-string">Revertir Cadena de Texto</h2>
    <form method="post" action="#revert-string">
        <label>Ingresa una cadena para revertirla:</label>
        <input type="text" name="reverse_input">
        <input type="submit" name="reverse_submit" value="Revertir Cadena">
    </form>

    <?php
    if (isset($_POST['reverse_submit'])) {
        $inputString = $_POST['reverse_input'];
        $reversedString = strrev($inputString);
        echo "<div class='result'>La cadena revertida ({$inputString}) es: {$reversedString}.</div>";
    }
    ?>

<div class="code-editor">
    <div class="code-header">Codigo - Revertir Cadena</div>
    <pre class="code-content">
    if (isset($_POST['reverse_submit'])) {
        $inputString = $_POST['reverse_input'];
        $reversedString = strrev($inputString);
        echo "La cadena revertida es: {$reversedString}.";
    }
    </pre>
</div>