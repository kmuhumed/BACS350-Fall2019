<<<<<<< HEAD
 <link rel="stylesheet" href="subscriberstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<h1>Madi's Subscriber Database</h1>
=======
<?php
>>>>>>> 09acd3f872afb1ec097da78cc3acf92567281996

    // Code to define functions
    require_once 'views.php';
    require_once 'subscriber_views.php';
    require_once 'subscriber_db.php';


<<<<<<< HEAD
<p>
    <b></b> Here is my working page for step 1 of this project. Check it out!
</p>
<p>
    <a href="step1.php">Subscribers Page</a>
</p>

<h1>Subscribers Database - Step 2</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>
<p>The last output for this page should be a success confirmation. </p>


<?php

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';


    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);

    echo $list;
    
?>

<p><b>Success !!</b></p>
=======
    // List subscriber records
    $list = render_subscribers(list_subscribers ($db));

    
    // Button to go to other views
    $add_button = '<a href="insert.php">Add Subscriber</a>';

    
    $intro = '
        <p>
            This email list gives you access to big ideas and deep thoughts.
        </p>
        <p>
            Visit the <a href="https://seamanslog.com">Seaman\'s Log</a> site now to start reading.
        </p>
    ';
    $content = "$intro $list $add_button";

    // Show the page
    echo render_page('UNC BACS 350', "Seaman's List Subscribers", $content);
?>
>>>>>>> 09acd3f872afb1ec097da78cc3acf92567281996
