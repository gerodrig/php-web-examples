<?php
$error = '';

if (isset($_POST['search_array_submit'])) {
    if (empty(trim($_POST['search_array_input'])) || empty(trim($_POST['search_term']))) {
        $error = "Por favor ingresa el array y el elemento a buscar";
    } else {
        $arrayToSearch = explode(',', $_POST['search_array_input']);
        $searchTerm = $_POST['search_term'];
        $key = array_search($searchTerm, $arrayToSearch);
    }
}
?>



<h2 id="search-arrays">Buscar en Array</h2>
<form method="post" action="#search-arrays">
    <label>Ingresa array (ej. apple,banana,cherry):</label>
    <input type="text" name="search_array_input">
    <label>Ingresa elemento a buscar:</label>
    <input type="text" name="search_term">
    <input type="submit" name="search_array_submit" value="Buscar en Array">
    <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
</form>

<?php
if (isset($_POST['search_array_submit']) && empty($error)) {

    if ($key !== false) {
        echo "<div class='result'>Elemento encontrado en el índice: {$key}.</div>";
    } else {
        echo "<div class='result'>El elemento no se encuentra en el array.</div>";
    }
}
?>

<div class="code-editor">
    <div class="code-header">Codigo - Buscar en Array</div>
    <pre class="code-content">
    if (isset($_POST['search_array_submit'])) {
        $arrayToSearch = explode(',', $_POST['search_array_input']);
        $searchTerm = $_POST['search_term'];
        $key = array_search($searchTerm, $arrayToSearch);
        
        if ($key !== false) {
            echo "Elemento encontrado en el índice: {$key}.";
        } else {
            echo "El elemento no se encuentra en el array.";
        }
    }
    </pre>
</div>