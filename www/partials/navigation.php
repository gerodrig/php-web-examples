<header>
    <div class="container">
        <div id="branding">
            <h1>Actividad 2 - Desarrollo Web Avanzado</h1>
        </div>
        <?php
        // Obtener la parte del contenido actual desde el parámetro URL 'content'
        $current_page = isset($_GET['content']) ? $_GET['content'] : 'home';
        ?>
        <nav>
            <ul>
                <li class="<?= $current_page == 'home' ? 'current' : '' ?>"><a href="index.php?content=home">Inicio</a></li>
                <li class="<?= $current_page == 'control-structures' ? 'current' : '' ?>"><a href="index.php?content=control-structures">Estructuras de Control</a></li>
                <li class="<?= $current_page == 'function' ? 'current' : '' ?>"><a href="index.php?content=function">Función</a></li>
                <li class="<?= $current_page == 'array' ? 'current' : '' ?>"><a href="index.php?content=array">Array / Matriz</a></li>
        </nav>
    </div>
</header>