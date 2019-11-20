
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Madi's Slide App</title>

    <link rel="icon" type="image/x-icon" href="madilogo.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slides.css">

</head>

<body>
    <header>
        <div class="pull-right">
            <img src="madilogo.jpg" class="img-rounded img-responsive" alt="UNC Bear" width="120">
        </div>
        <div>
            <h1>Madi's Slides App</h1>
            <h2>Project 11</h2>
        </div>
    </header>

    <main>

        <div><p><a class="button" href="..">My Homepage</a><a class="button" href="pagelog.php">Show Log</a><a class="button" href="add.html">Add Slide Show</a></p></div><div class="card">
        
        <div class="card">

    <div class="card-header">
         Test Slide
    </div>

    <div class="card-body card-padding">
        <pre># My Slides

## This is a test slide!
</pre>
    </div>
                <p>
        <a class="button" href="reveal.html" target="slides">
            Show Slides
        </a>
        <a href="edit.html" class="button">
            Edit Slides
        </a>
        <a class="button" href="index.php?action=delete&id=1">
            Delete Slides
        </a>
    </p>


    <div class="card-header">
        [1] Building a Presentation App
    </div>

    <div class="card-body card-padding">
        <pre># Software Lifecycle

* Building a Presentation App
* by Mark Seaman

![](Bear.png)


### Software Lifecycle
* Requirements
* Design
* Code
* Test


## Requirements
* Data
* Views


### Slide Show Data Records
* Slide show records 
    * id
    * title
    * body
    
    
### Slide Show Views
* Use Reveal JS to show slides
* Standard CRUD views to create new shows
* Run slides in new browser tab


## Design
* Apps = Data + Views


### Data
*  Database: uncobacs_slides
* Table slides:
    * id
    * title
    * body


### Views
* List of slide shows
* Add new show
* Edit existing show
* Delete a show
* Run the presentation


## Code
* Pages
* Templates
* Controller


## PHP Files
* index.php - home view to run app
* slideshow.php - presentation display page
* slides.php - business logic for slides

### Template Files
* page.html - main app page
* slides.html - show the content of a "slides" record
* add.html - form to add a new presentation
* edit.html - form to edit a presentation
* reveal.html - HTML code to show presentation


## Test
* Basic Usability Test
    * Home page 
    * Run slides
    * Add new show
    * Edit show
    * Delete show

### Apps = Data + Views

![](Bear.png)

</pre>
    </div>

    <p>
        <a class="button" href="reveal.html" target="slides">
            Show Slides
        </a>
        <a href="edit.html" class="button">
            Edit Slides
        </a>
        <a class="button" href="index.php?action=delete&id=1">
            Delete Slides
        </a>
    </p>

</div>
<div class="card">

    <div class="card-header">
        [2] Building Apps
    </div>

    <div class="card-body card-padding">
        <pre>Building Your App

* Step-by-step application development
* Friday, Nov 16, 2018
* by Mark Seaman

![](Bear.png)

--

## Development Process
* Create a page for the app
* Customize general code to create new datatype
* Debug one feature at a time
* Fix before moving forward

--

## Software Lifecycle
* Requirements
* Design
* Code
* Test

--

## Data
Review:

* date - date of last update
* title - title of record
* body - text for the record

--

## Views
* List
* Details
* Add
* Edit
* Delete

--

## Code structure
* CRUD functions
* View render functions
* Controller that manages views
* Page and view templates
* Standard stylesheet


---


# Testing
* Try each feature interactively
* Code a page with links for testing

--

## Design Reviews
* Published and share code
* Gather feedback from Design Reviews
* Fix issues that are found


![](Bear.png)
</pre>
    </div>

    <p>
        <a class="button" href="reveal.html" target="slides">
            Show Slides
        </a>
        <a href="edit.html" class="button">
            Edit Slides
        </a>
        <a class="button" href="index.php?action=delete&id=2">
            Delete Slides
        </a>
    </p>

</div>
<div class="card">

    <div class="card-header">
        [3] Slide Show SQL
    </div>

    <div class="card-body card-padding">
        <pre># Slide Show SQL code

## Database table

    CREATE TABLE slides (
        id          int(3) NOT NULL AUTO_INCREMENT,
        title       varchar(100) NOT NULL,
        body        text         NOT NULL,
        PRIMARY KEY (id)
    );


## Connection Settings  - PHP Variables 

    $dbname = 'uncobacs_350';
    $username = 'uncobacs_350';
    $password = 'BACS_350';
    $port = '3306';
    $host = "localhost:$port";


## CREATE

    INSERT INTO slides (title, body) 
    VALUES (:title, :body);


## READ

    SELECT * FROM slides;

    SELECT * FROM slides WHERE id = :id; 

    foreach (slides as row) {
        row['id']
        row['title']
        row['body']
    }


## UPDATE

    SELECT * FROM slides WHERE id = :id;

    UPDATE slides 
    SET title=:title, body=:body
    WHERE id = :id;


## DELETE

    DELETE from slides WHERE id = :id;

</pre>
    </div>

    <p>
        <a class="button" href="reveal.html" target="slides">
            Show Slides
        </a>
        <a href="edit.html" class="button">
            Edit Slides
        </a>
        <a class="button" href="index.php?action=delete&id=3">
            Delete Slides
        </a>
    </p>

</div>
<div class="card">

    <div class="card-header">
        [4] Hey
    </div>

    <div class="card-body card-padding">
        <pre># My Slides

## First Slide
</pre>
    </div>

    <p>
        <a class="button" href="reveal.html" target="slides">
            Show Slides
        </a>
        <a href="edit.html" class="button">
            Edit Slides
        </a>
        <a class="button" href="index.php?action=delete&id=4">
            Delete Slides
        </a>
    </p>

</div>


    </main>
</body>

</html>