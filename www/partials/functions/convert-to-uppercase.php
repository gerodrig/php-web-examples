<?php
$error = '';

if (isset($_POST['uppercase_submit'])) {
    if (empty(trim($_POST['uppercase_input']))) {
        $error = "Por favor ingresa una cadena de texto";
    } else {
        $inputString = $_POST['uppercase_input'];
        $uppercaseString = strtoupper($inputString);
    }
}
?>

<h2 id="convert-to-mayus">Convertir a Mayúsculas</h2>
<form method="post" action="#convert-to-mayus">
    <label>Ingresa una cadena para convertir a mayúsculas:</label>
    <input type="text" name="uppercase_input">
    <input type="submit" name="uppercase_submit" value="Convertir a Mayúsculas">
    <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
</form>

<?php
if (isset($_POST['uppercase_submit']) && empty($error)) {
    echo "<div class='result'>\"{$inputString}\"en mayúsculas es: {$uppercaseString}.</div>";
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - Convertir a Mayúsculas</div>
    <pre class="code-content">
    if (isset($_POST['uppercase_submit'])) {
        $inputString = $_POST['uppercase_input'];
        $uppercaseString = strtoupper($inputString);
        echo "La cadena en mayúsculas es: {$uppercaseString}.";
    }
    </pre>
</div>