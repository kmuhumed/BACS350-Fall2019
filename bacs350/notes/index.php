<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'notes_views.php';
    require_once 'notes_db.php';
//    require_once 'log.php';

    // Log this page hit
//    add_log($log, "notes/index.php page loaded");


    // List subscriber records
    $list = render_notes(list_notes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Note Here!</a></p>';

    
    // Display the HTML in the page
    $intro = '
        <p>
            Visit <a href="https://spillmandesigns.com">My Website</a>
        </p>
         
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('Notes App', "Design notes application", $content);
?>
