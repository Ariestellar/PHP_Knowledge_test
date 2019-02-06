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
*@var $post - массив, ключи-имена столбцов, значения -данные в БД
*/
  public function insertBD($post)
  {
    foreach ($post as $value) {
      $this->instance->quote($value);
    }
    $allQuestions=$this->allSelect();
    if($allQuestions[count($allQuestions)-1]['question']!=$post['question']){
      $this->instance->query("INSERT INTO questions (question,answer,incorrect_unswer1,incorrect_unswer2) VALUES ('$post[question]','$post[answer]','$post[incorrect_unswer1]','$post[incorrect_unswer2]')");
    }
  }
	public function insertUsersBD($post)
  {
    foreach ($post as $value) {
      $this->instance->quote($value);
    }
    $this->instance->query("INSERT INTO users (email,name,login,password) VALUES ('$post[email]','$post[name]','$post[login]','$post[password]')");
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
    $this->instance->query("UPDATE questions SET question='$post[question]', answer='$post[answer]',incorrect_unswer1='$post[incorrect_unswer1]',incorrect_unswer2='$post[incorrect_unswer2]' WHERE id='$post[id]'");
  }
	//вевести весь столбец
	public function searchColumn($search)
	{
		foreach ($this->instance->query("SELECT $search FROM users") as $row)
		{
			$result[]=$row["$search"];
		}
		return $result;
	}
	//найти пользователя для авторизации
	public function searchUsersID($email)
	{
		$this->instance->quote($email);
		//$result=$this->instance->query("SELECT * FROM users WHERE email = '$email'");
		foreach ($this->instance->query("SELECT * FROM users WHERE email = '$email'") as $row)
		{
			$result=array('id' => $row['id'], 'name' => $row['name'], 'password' => $row['password']);
		}
		return $result;
	}
	/**
	*@return $allQuestions - массив c 0-.. каждый элемент
	*/
	public function allSelect()
  {
    foreach($this->instance->query("SELECT * FROM questions") as $row)
    {
      $allQuestions[]=array('id'=> $row['id'],'title'=>$row['title'],'question'=>$row['question'],'answer'=>$row['answer'],'incorrect_unswer1'=>$row['incorrect_unswer1'],'incorrect_unswer2'=>$row['incorrect_unswer2']);
    }
    return $allQuestions;
  }
}
?>
