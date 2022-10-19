<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
  <script src="script.js"></script>
</head>
<body>    
    <?php foreach ($posts as $post): ?>
        <div>
            <?php echo $post ?>
        </div>
    <?php endforeach ?>
</body>
</html>
