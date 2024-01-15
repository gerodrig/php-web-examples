<h2 id="count-letters">Contar Letras en una Cadena</h2>
    <form method="post" action="#count-letters">
        <label>Ingresa una cadena de texto:</label>
        <input type="text" name="string_input">
        <input type="submit" name="string_submit" value="Contar Letras">
    </form>

    <?php
    if (isset($_POST['string_submit'])) {
        $inputString = $_POST['string_input'];
        $letterCount = strlen($inputString);
        echo "<div class='result'>{$inputString} tiene {$letterCount} letras.</div>";
    }

    ?>

<div class="code-editor">
    <div class="code-header">Codigo - Contar Letras</div>
    <pre class="code-content">
    if (isset($_POST['string_submit'])) {
        $inputString = $_POST['string_input'];
        $letterCount = strlen($inputString);
        echo "La cadena tiene {$letterCount} letras.";
    }
    </pre>
</div>