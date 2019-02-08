<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <p>
      <?php if((isset($_COOKIE['user'])&&!empty($_COOKIE['user']))||isset($_SESSION['username'])&&!empty($_SESSION['username'])):?>
      <a href="/PHPtest/PHP_Knowledge_test/test/start">Начать тест</a> || <a href="/PHPtest/PHP_Knowledge_test/page/index">База вопросов</a> || <a href="/PHPtest/PHP_Knowledge_test/page/addQuestion">Добавить вопрос</a> ||
      <?php endif;?>
      <a href="/PHPtest/PHP_Knowledge_test/users/auth">Войти</a> || <a href="/PHPtest/PHP_Knowledge_test/users/registration">Регистрация</a></p>
    <h1><?php echo $title ?></h1>
    <div><?php echo $content ?></div>
  </body>
</html>
