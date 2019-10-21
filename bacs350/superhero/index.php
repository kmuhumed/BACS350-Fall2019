
<<<<<<< HEAD
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Madi's Project 7</title>
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
                                    <h2>Madi's Project 7</h2>
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
                        
        <p> This is my project 7, check it out!</p>
     <p><a class="button" href="insert.php">Add Subscriber</a></p> 
            <div class="card">
                <div class="card-header">
                    Wonder Woman
                </div>
                <div class="card-body card-padding">
                    
                <table class='table table-hover'>
                    <tr><td><img src='wonderwoman.jpg' alt='wonderwoman' width="200"></td></tr>
                    <tr><td>Superhero:</td><td>Wonder Woman</td></tr>
                    <tr><td>Name:</td><td>My favorite superhero</td></tr>
                    <tr><td>Notes:</td><td>She has a magic whip!</td></tr>
                    <tr><td>Record 1</td><td><a href='delete.php?id=1'>Delete Record</a></td></tr>
                </table>
                </div>
            </div>
        
            <div class="card">
                <div class="card-header">
                   The Crimson Chin
                </div>
                <div class="card-body card-padding">
                    
                <table class='table table-hover'>
                    <tr><td><img src='crimsonchin.jpg' alt='crimsonchin' width="200"></td></tr>
                    <tr><td>Superhero:</td><td>The Crimson Chin</td></tr>
                    <tr><td>Name:</td><td>Chuck</td></tr>
                    <tr><td>Notes:</td><td>Timmy Turner's favorite superhero!/td></tr>
                    <tr><td>Record 2</td><td><a href='delete.php?id=2'>Delete Record</a></td></tr>
                </table>
                </div>
 
            </div>
        
                    </main>
                </body>
            </html>
=======
    // Code to define functions
    require_once 'views.php';
    require_once 'superhero_views.php';
    require_once 'superhero_db.php';


    // List superhero records
    $list = render_superheroes(list_superheroes ($db));

    
    // Button to go to other views
    $add_button = '<p><a class="button" href="insert.php">Add Subscriber</a></p>';

    
    $intro = '
        <p>
            This email list gives you access to big ideas and deep thoughts.
        </p>
        <p>
            Visit the <a href="https://seamanslog.com">Seaman\'s Log</a> site now to start reading.
        </p>
    ';
    $content = "$intro $add_button $list";

    // Show the page
    echo render_page('UNC BACS 350', "Seaman's List Subscribers", $content);
?>
>>>>>>> 09acd3f872afb1ec097da78cc3acf92567281996
