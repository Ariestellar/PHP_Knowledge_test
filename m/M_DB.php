<?php
/*
*static $instante - соединение с БД
*/
class M_DB
{
	private static $instance = null;
	// для безопасности настройки лучше хранить в файле с конфигом
	const DB_HOST = 'localhost';
	const DB_NAME = 'php_test';
	const DB_USER = 'mysql';
	const DB_PASS = 'mysql';

	private function __construct () {
		$this->instance = new PDO(
			'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME,
	    	self::DB_USER,
	    	self::DB_PASS,
	    	[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
	    );
	}
	public static function getInstance()
	{
		if (self::$instance != null) {
			return self::$instance;
		}
		return new self;
	}
/**
*@var $table - имя таблицы
*@var $post - массив, ключи-имена столбцов, значения -данные в БД
*/
  public function insertBD($post)
  {
    foreach ($post as $value) {
      $this->instance->quote($value);
    }
    $allQuestions=$this->allSelect();
    if($allQuestions[count($allQuestions)-1]['question']!=$post['question']){
      $this->instance->query("INSERT INTO questions (question,answer) VALUES ('$post[question]','$post[answer]')");
    }
  }

  public function allSelect()
  {
    foreach($this->instance->query("SELECT * FROM questions") as $row)
    {
      $allQuestions[]=array('id'=> $row['id'],'title'=>$row['title'],'question'=>$row['question'],'answer'=>$row['answer']);
    }
    return $allQuestions;
  }

  public function deleteDB($post)
  {
    $this->instance->quote($post);
    $this->instance->query("DELETE FROM questions WHERE id=$post");
  }

  public function updateBD($post)
  {
    foreach ($post as $value) {
      $this->instance->quote($value);
    }
    $this->instance->query("UPDATE questions SET question='$post[question]', answer='$post[answer]' WHERE id='$post[id]'");
  }
}
?>
