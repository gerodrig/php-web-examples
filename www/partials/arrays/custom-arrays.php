<?php
$error = '';


// Ejemplo de función personalizada para manipular un array

function customArrayFunction($input)
{
    // Divide la cadena en un array
    $array = explode(',', $input);
    // Elimina espacios en blanco de cada elemento
    $array = array_map('trim', $array);
    // Ordena el array
    sort($array);
    // Invierte el array
    $reversedArray = array_reverse($array);
    // Convierte a mayúsculas cada elemento
    $uppercaseArray = array_map('strtoupper', $reversedArray);

    return $uppercaseArray;
}

if (isset($_POST['custom_function_submit'])) {
    $input = trim($_POST['custom_function_input']);
    if (empty($input)) {
        $error = "Por favor ingresa los elementos";
    } else {
        $resultArray = customArrayFunction($input);
    }
}
?>

<h2 id="custom-arrays">Función Personalizada para Manipular Arrays</h2>
<p>La función personalizada `customArrayFunction` toma una cadena de texto con elementos separados por comas, convierte esta cadena en un array, elimina los espacios en blanco de cada elemento, ordena los elementos alfabéticamente, los invierte, los convierte todos a mayúsculas y devuelve este array transformado.</p>
<form method="post" action="#custom-arrays">
    <label>Ingresa elementos para manipular (ej. manzana, banana, cereza):</label>
    <input type="text" name="custom_function_input">
    <input type="submit" name="custom_function_submit" value="Aplicar Función">
    <?php if (!empty($error)) : ?>
        <div class="error" style="color: red;"><?php echo $error; ?></div>
    <?php endif; ?>
</form>

<?php
    if (isset($_POST['custom_function_submit']) && empty($error) && !empty($resultArray)) {
        echo "<div class='result'>Array manipulado: " . implode(', ', $resultArray) . ".</div>";
    }
?>

<div class="code-editor">
    <div class="code-header">Codigo - Función Personalizada para Manipular Arrays</div>
    <pre class="code-content">
    // Ejemplo de función personalizada para manipular un array
    function customArrayFunction($input) {
        // Divide la cadena en un array
        $array = explode(',', $input);
        // Elimina espacios en blanco de cada elemento
        $array = array_map('trim', $array);
        // Ordena el array
        sort($array);
        // Invierte el array
        $reversedArray = array_reverse($array);
        // Convierte a mayúsculas cada elemento
        $uppercaseArray = array_map('strtoupper', $reversedArray);
        
        return $uppercaseArray;
    }
    
    if (isset($_POST['custom_function_submit'])) {
        $input = $_POST['custom_function_input'];
        $resultArray = customArrayFunction($input);
        echo "Array manipulado: " . implode(', ', $resultArray) . ".";
    }
    </pre>
</div>