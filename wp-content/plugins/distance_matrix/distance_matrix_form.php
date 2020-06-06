<?php

    // wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) );

    // wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) );

    echo "
    <div id='distance-form'> 
    <p id='form-title'>FREE SHIPPING QUOTE</p>

            <div class='vehicle-select' style='width: 95%;'>
                <select>
                <option value='0'>Vehicle</option>
                <option value='1'>Motorcycle</option>
                <option value='2'>ATV</option>
                <option value='3'>Snowmobile</option>
                <option value='4'>Single Jet Ski</option>
                </select>
            </div>

        </br>

        <div class='year-select' style='width: 95%;'>
            <select>
              <option value='0'>Year</option>
              <option value='1'>2020</option>
              <option value='2'>2019</option>
              <option value='3'>2018</option>
              <option value='4'>2017</option>
              <option value='5'>2016</option>
              <option value='6'>2015</option>
              <option value='7'>2014</option>
              <option value='8'>2013</option>
              <option value='9'>2012</option>
              <option value='10'>2011</option>
              <option value='11'>2010</option>
              <option value='12'>2009</option>
            </select>
          </div>
            
        </br>
        
        <div class='make-select' style='width: 95%;'>
            <select>
              <option value='0'>Make</option>
              <option value='1'>Audi</option>
              <option value='2'>BMW</option>
              <option value='3'>Citroen</option>
              <option value='4'>Ford</option>
              <option value='5'>Honda</option>
              <option value='6'>Jaguar</option>
              <option value='7'>Land Rover</option>
              <option value='8'>Mercedes</option>
              <option value='9'>Mini</option>
              <option value='10'>Nissan</option>
              <option value='11'>Toyota</option>
              <option value='12'>Volvo</option>
            </select>
          </div>
            
        </br>

        <div class='model-select' style='width: 95%;'>
            <select>
              <option value='0'>Model</option>
              <option value='1'>Audi</option>
              <option value='2'>BMW</option>
              <option value='3'>Citroen</option>
              <option value='4'>Ford</option>
              <option value='5'>Honda</option>
              <option value='6'>Jaguar</option>
              <option value='7'>Land Rover</option>
              <option value='8'>Mercedes</option>
              <option value='9'>Mini</option>
              <option value='10'>Nissan</option>
              <option value='11'>Toyota</option>
              <option value='12'>Volvo</option>
            </select>
          </div>

            <p>Can't find your vehicle? Submit a custom quote.</p>

        <!-- // wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) ); -->

        <!-- // wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) ); -->

            echo '
            <form id='distance-matrix' action='wp-content/plugins/distance_matrix/distance_matrix_api.php' method='get'>
                <!-- <label for='fname'>Origin:</label><br> -->
                <input class='zip' type='text' id='fname' name='origin' value='Pick Up Zip Code'><br><br>
                <!-- <label for='lname'>Destination:</label><br> -->
                <input class='zip' type='text' id='lname' name='destination' value='Delivery Zip Code'><br><br>
                <p>$7000 valuation coverage included.</p>
                <p>Currently average transit time is 15 business days.</p>
            </br>
                <input id='distance-matrix-submit' type='submit' value='FREE QUOTE'>
            </form>
            ';

    </div>
    ";
?>