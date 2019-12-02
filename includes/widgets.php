<?php

function ju_widgets(){
    register_sidebar([
        'name'          =>  __( 'My First Theme Sidebar', 'udemy' ),
        'id'            =>  'ju_sidebar',
        'description'   =>  __( 'Sidebar for the theme Udemy', 'udemy' ), 
    ]);

}


?>