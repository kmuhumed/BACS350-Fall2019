<<<<<<< HEAD


            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Add Subscriber</title>
                    <link rel="icon" type="image/x-icon" href="/bacs350/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>UNC BACS 350</h1>
                                    <h2>Add Subscriber</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                        <img class="img-rounded img-responsive"
                                        src="/bacs350/images/Bear.200.png"
                                        alt="UNC Bear" width="150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main>
                        This form collects data to create a superhero record in the database.  
            <div class="card">
                <div class="card-header">
                    Add Superhero
                </div>
                <div class="card-body card-padding">
                    
            <form action="insert.php" method="get">
                <p><label>Name:</label> &nbsp; <input type="text" name="name"></p>
                <p><label>Also Known As:</label> &nbsp; <input type="text" name="aka"></p>
                <p><label>Photo:</label> &nbsp; <input type="text" name="image"></p>
                <p><label>Description:</label> &nbsp; 
                <textarea name="description">Text goes here.</textarea></p>
                <p><input class="button" type="submit" value="Add Subscriber"/></p>
            </form>
            
                </div>
            </div>
         <a href="delete.php">Reset Subscribers</a>
                    </main>
                </body>
            </html>
=======
<?php

    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // Pick out the inputs
    $name = filter_input(INPUT_GET, 'name');
    $aka = filter_input(INPUT_GET, 'aka');
    $image = filter_input(INPUT_GET, 'image');
    $description = filter_input(INPUT_GET, 'description');

    if ($name == '' || $aka == '' || $image == '' || $description == '') {
        
        // Form view to add superhero
        $add_form = add_superhero_form();


        // Button to clear
        $clear_button = '<a href="delete.php">Reset Subscribers</a>';


        // Display the HTML in the page
        $intro = 'This form collects data to create a superhero record in the database.';
        $content = "$intro $list $add_form $clear_button";

        echo render_page('UNC BACS 350', "Add Subscriber", $content);
    }
    else {
        // Add record and return to list
        if (add_superhero ($db, $name, $aka, $image, $description))
        {
            header("Location: index.php");
        };
    }
 
?>
>>>>>>> 09acd3f872afb1ec097da78cc3acf92567281996
