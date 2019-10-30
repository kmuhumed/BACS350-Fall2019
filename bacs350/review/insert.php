

            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>Add Review</title>
                    <link rel="icon" type="image/x-icon" href="/bacs350/images/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://dvandiver.com/bacs350/unc.css">
                </head>
                <body>
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>BACS 350</h1>
                                    <h2>Add Review</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <main>
                        
            <div class="card">
                <div class="card-header">
                    Add Review
                </div>
                <div class="card-body card-padding">
                    
            <form action="insert.php" method="get">
                <table class="table table-hover">
                    <tr>
                        <td width="500"><label>Date:</label></td>
                        <td><input type="date" name="date"></td>
                    </tr>
                    <tr>
                        <td><label>Designer:</label></td>
                        <td><input type="text" name="designer"></td>
                    </tr>
                    <tr>
                        <td><label>url:</label></td>
                        <td><input type="url" name="url"></td>
                    </tr>
                    <tr>
                        <td><label>score:</label></td>
                        <td><input type="number" name="score"></td>
                    </tr>
                    <tr>
                        <td><label>report</label></td>
                        <td><textarea name="report"></textarea></td>
                    </tr>
                    <tr>
                        <td><button class="button">Save Review</button></td>
                    </tr>
                </table>
            </form>
            
                </div>
            </div>
        
                    </main>
                </body>
            </html>
        
