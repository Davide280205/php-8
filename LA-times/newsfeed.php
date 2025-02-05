<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Angeles Times</title>
</head>
<body>

    <h1>The lastest news from Los Angeles Times</h1>

    <?php 

        $url = 'https://www.latimes.com/science/rss2.0.xml';

        $feed = simplexml_load_file($url, 'SimpleXMLIterator');

        $filtered = new LimitIterator($feed->channel->item, 0, 10);

        foreach ($filtered as $item){

            $title = htmlentities($item->title);
            $link = htmlentities($item->link);
            $description = htmlentities($item->description);

            echo "<h2><a href='$link'>$title</a></h2>";
            echo "<p>$description</p>";

        }

    ?>
    
</body>
</html>