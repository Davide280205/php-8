<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsfeed 01</title>
</head>
<body>

    <h1>The lastest news from BBC</h1>

    <?php 

        $url = 'https://feeds.bbci.co.uk/news/world/rss.xml';

        $feed = simplexml_load_file($url);

        foreach ($feed->channel->item as $item) {

            echo htmlentities($item->title) . '<br>';

        }

    ?>
    
</body>
</html>