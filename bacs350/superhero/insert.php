

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