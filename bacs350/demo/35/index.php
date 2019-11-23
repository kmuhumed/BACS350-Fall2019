<?php
    
    require_once 'log.php';
    require_once '/bacs350/lib/views.php';


    // Log the page load
    log_page();


    // Display the page content
    $buttonbar = '<div><p>' . 
        render_button('Other Demos', '..') .
        render_button('Show Log', 'pagelog.php') .
        '</p></div>';


    // Text
    $text = '
    <h2>Views Library Code</h2>
    <p>
        This solution demonstrates the views.php code from /bacs350/lib.
    </p>
    ';
    

    // Create main part of page content
    $settings = array(
        "site_title" => "UNC BACS 350 Demo",
        "page_title" => "Demo 35 - Views Library", 
        "content"    => $buttonbar . $text);

    echo render_page($settings);

?>
