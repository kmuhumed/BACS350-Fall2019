 <link rel="stylesheet" href="subscriberstyle.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<h1>Madi's Subscriber Database</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>

<h2>Step 1 - Simple page</h2>

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