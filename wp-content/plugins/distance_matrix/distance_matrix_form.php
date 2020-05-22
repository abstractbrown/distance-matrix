<?php

    // wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) );

    // wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) );

    echo "
        <form id='distance-matrix' action='wp-content/plugins/distance_matrix/distance_matrix_api.php' method='get'>
            <label for='fname'>Origin:</label><br>
            <input type='text' id='fname' name='origin' value='John'><br>
            <label for='lname'>Destination:</label><br>
            <input type='text' id='lname' name='destination' value='Doe'><br><br>
            <input id='distance-matrix-submit' type='submit' value='Submit'>
        </form>
    ";
?>