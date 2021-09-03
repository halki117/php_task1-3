<?php 

$question["問題"] = "日本の首都は？";

$answer["回答1"] = "大阪";

$answer["回答2"] = "北海道";

$answer["回答3"] = "箱根";

$answer["回答4"] = "東京";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php foreach( $question as $key => $value ){ ?>
    <h1><?php  echo "{$key}"."\t"."{$value}"; ?></h1>
  <?php  } ?>

  <?php foreach( $answer as $key => $value ){ ?>
    <p><?php  echo "{$key}"."\t"."{$value}"; ?>  </p>
  <?php  } ?>
  
</body>
</html>