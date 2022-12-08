<?php require_once("./Helpers/url_base_help.php");?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world! hola a todos <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Button</button>
  </h1>
  <?php echo "hola -> ".$baseUrl->baseUrl();?>

  <a href="<?php echo $baseUrl->baseUrl(); ?>?ctrl=login">Login para entrar</a>
</body>
</html>