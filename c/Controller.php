 <?php
abstract class Controller
{
  public $connection;
  //Вывод готовых страниц
  abstract function render();
  //Действия пользователя
  abstract function before();

  public function Request($connection,$action)
  {
    $this->connection=$connection;
    $this->before();
    $this->$action();
    $this->render();
  }
  //запрос пользователя GET
  protected function isGet()
  {
    return $_SERVER['REQUEST_METHOD']=='GET';
  }

  //запрос пользователя POST
  protected function isPOST()
  {
    return $_SERVER['REQUEST_METHOD']=='POST';
  }

  //шаблонизатор
  protected function template($fileName,$params=NULL)
  {
    if(isset($params))
    {
      extract($params);
    }
    ob_start();
    include $fileName;
    return ob_get_clean();
  }

  //вызов несуществующей функции
  public function __call($name,$params)
  {
    die("{$name} такой функции не существует");
  }
}
