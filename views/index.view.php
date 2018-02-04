<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sample MVC Application</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="css/style.css" rel="stylesheet"> -->
        
        <style>
            header {
                background-color: #e3e3e3;
                padding: 2em;
                text-align:center;
            }
        </style>
        
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="../about">About Us</a></li>
                <li><a href="../contact">Contact Us</a></li>

            </ul>
        </nav>
        <h1>Task For the Day</h1>
            <ul>
            
                <?php 
                foreach ($tasks as $task) {
                    if ($task->completed){
                        echo "<strike>$task->description</strike>";
                    
                    } else {
                        echo "<li>$task->description</li>";

                    }
                }
                
                ?>

            </ul>

    </body>
</html>
