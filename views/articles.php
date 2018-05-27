<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <div>
        <h1>Тест</h1>
        <div>
        <?php foreach ($articles as $a): ?> 
            <div>
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                    </a></h3>
                <em>Опубликовано:<?=$a['date']?></em>
                <p><?=$a['content']?></p>
            </div>
        <?php endforeach ?> 
        </div>
    </div>
</body>
</html>