<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Madi's Homepage";
    
    $content = '
        <p>
            <a href="/">BACS 350 WordPress Blog</a>
        </p>
        <p> 
            This page my homepage for BACS 350.
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p
        
        <ul>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
             <a href="https://spillmandesigns.com/bacs350/subscriber/index.php">Subsciber Project</a>
             </li>
             <li>
              <a href="https://spillmandesigns.com/bacs350/superhero/index.php">Design Superhero Index</a>
              </li>
              <li>
               <a href="https://spillmandesigns.com/bacs350/notes/index.php">Notes Project</a>
               </li>
               <li>
             <a href="https://spillmandesigns.com/bacs350/review/index.php">Review Project</a>
             </li>
             <li>
              <a href="https://spillmandesigns.com/bacs350/skills/index.html">Skills</a>
             
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
<img src="picofme.jpg" alt="Madi's Picture">
