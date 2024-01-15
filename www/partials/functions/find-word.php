<?php
$error = '';

if (isset($_POST['find_word_submit'])) {
    if (empty(trim($_POST['full_string_input'])) || empty(trim($_POST['word_to_find']))) {
        $error = "Por favor ingresa la cadena completa y la palabra a buscar";
    } else {
        $fullString = $_POST['full_string_input'];
        $wordToFind = $_POST['word_to_find'];
        $position = strpos($fullString, $wordToFind);
    }
}
?>

<h2 id="find-word">Buscar Palabra en Cadena</h2>
<form method="post" action="#find-word">
    <label>Ingresa la cadena completa:</label>
    <input type="text" name="full_string_input">
    <label>Ingresa la palabra a buscar:</label>
    <input type="text" name="word_to_find">
    <input type="submit" name="find_word_submit" value="Buscar Palabra">
    <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
</form>

<?php
if (isset($_POST['find_word_submit']) && empty($error)) {

    if ($position !== false) {
        echo "<div class='result'>La palabra se encontró en la posición: {$position}.</div>";
    } else {
        echo "<div class='result'>La palabra no se encontró en la cadena.</div>";
    }
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - Buscar Palabra</div>
    <pre class="code-content">
    if (isset($_POST['find_word_submit'])) {
        $fullString = $_POST['full_string_input'];
        $wordToFind = $_POST['word_to_find'];
        $position = strpos($fullString, $wordToFind);
        
        if ($position !== false) {
            echo "La palabra se encontró en la posición: {$position}.";
        } else {
            echo "La palabra no se encontró en la cadena.";
        }
    }
    </pre>
</div>