<?php


?>
<styles>

<link rel="stylesheet" type="text/css" href="wp-content/plugins/distance_matrix/includes/cssdistance_matrix.css">
<link rel="stylesheet" type="text/css" href="wp-content/plugins/distance_matrix/includes/css/dForm.css">

</styles>

<?php

    // wp_register_style( 'distance_matrix', plugins_url( 'includes/css/distance_matrix.css' ) );
    // wp_register_style( 'distance_matrix', plugins_url( 'includes/css/dForm.css' ) );

    echo "
    <div id='distance-form'> 

        </br>
    
            <div id='title-box'>
            <p id='form-title'>GET YOUR FREE SHIPPING QUOTE NOW</p>
            </div>
    
        </br>
  
        <section id='form-input'>

                <div class='vehicle-select'>
                    <select>
                    <option value='0'>Vehicle</option>
                    <option value='1'>Motorcycle</option>
                    <option value='2'>ATV</option>
                    <option value='3'>Snowmobile</option>
                    <option value='4'>Single Jet Ski</option>
                    </select>
                </div>

            <!-- </br> -->

            <div class='year-select'>
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
    
                <div class='make-select'>
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
                
            <!-- </br> -->

                <div class='model-select'>
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

                <!-- <p>Can't find your vehicle? Submit a custom quote.</p> -->

            <!-- // wp_register_style( 'my-plugin', plugins_url( 'ddd/css/plugin.css' ) ); -->

            <!-- // wp_register_script( 'my-plugin', plugins_url( 'ddd/js/plugin.js' ) ); -->

                
                <form id='distance-matrix' action='wp-content/plugins/distance_matrix/distance_matrix_api.php' method='get'>
                    <!-- <label for='fname'>Origin:</label><br> -->
                    <input class='zip' type='text' id='fname' name='origin' value='Origin'><br><br>
                    <!-- <label for='lname'>Destination:</label><br> -->
                    <input class='zip' type='text' id='lname' name='destination' value='Destination'><br><br>
            </section>
                </br>
                </br>
                    <input id='distance-matrix-submit' type='submit' value= '    >  GET PRICING'>
                </form>
                </br>
                <p>$7000 VALUATION COVERAGE INCLUDED.</p>
                <p>CURRENTLY AVERAGE TRANSIT TIME IS 15 BUSINESS DAYS.</p>
            </br>
            </br>
            <p>DON'T SEE YOUR VEHICLE? WE ALSO TRANSPORT</p>
            <p>BOATS, UTV'S & PWC's - <a style='color:green' href=''><i>CLICK HERE FOR A CUSTOM QUOTE ></i></a></p>
            
        </div>
  
    ";
?>
<script src="wp-content/plugins/distance_matrix/includes/js/form.js"></script>
<script src="wp-content/plugins/distance_matrix/includes/js/make-select.js"></script>
<script src="wp-content/plugins/distance_matrix/includes/js/model-select.js"></script>
<script src="wp-content/plugins/distance_matrix/includes/js/vehicle-select.js"></script>
<script src="wp-content/plugins/distance_matrix/includes/js/year-select.js"></script>