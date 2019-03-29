<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Questions</title>
    </head>
    <body>
        <h1>Header</h1>
        <div class="list">
          <?php
            $jsondata = file_get_contents('https://cadgroup2.jdrcomputers.co.uk/api/questions');
	    $json = json_decode($jsondata, true);
            $output = "<ul>";
	    foreach($json as $question) {
                $output .= "<a><li>Question: ".$question['question']."</li></a>";
            }
            $output .= "</ul>";
	    echo $output;
	  ?>

	</div><!--/list-->

	<div class="flip">
	<button type="button" id="x">refresh</button>
	<button type="button" id="y">edit</button>
	<button type="button" id="z">submit</button>
	</div>


    </body>
</html>