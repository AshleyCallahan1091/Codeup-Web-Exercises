<?php 
//working

require_once 'Model.php';

class User extends Model
{
	/** Insert a new entry into the database */
	
	protected function insert()
	{
		$stmt = self::$dbc->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');

		$stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
		$stmt->bindValue(':email',  $this->attributes['email'],  PDO::PARAM_STR);
		$stmt->bindValue(':password',  $this->attributes['password'],  PDO::PARAM_STR);

		$stmt->execute();
		
		$this->id = self::$dbc->lastInsertId();
	}

	/** Update existing entry in the database */
	protected function update()
	{
		$stmt = self::$dbc->prepare('UPDATE users (id, name, email, password) SET (:id, :name, :email, :password) WHERE id = :id'); //probably the problem, future yous

			$stmt->bindValue(':id', $this->attributes['id'], PDO::PARAM_STR);
			$stmt->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
			$stmt->bindValue(':email',  $this->attributes['email'],  PDO::PARAM_STR);
			$stmt->bindValue(':password',  $this->attributes['password'],  PDO::PARAM_STR);

			$stmt->execute();
		
	}

	/**
	 * Find a single record in the DB based on its id
	 *
	 * @param int $id id of the user entry in the database
	 *
	 * @return User An instance of the User class with attributes array set to values from the database
	 */
	public static function find($id)
	{
		self::dbConnect();

		$stmt = self::$dbc->prepare('SELECT * FROM users WHERE id = :id');

		$stmt->bindValue(':id', $id, PDO::PARAM_INT);

		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$instance = null;
		if ($result) {
			$instance = new static($result);
		}
		return $instance;
	}

	/**
	 * Find all records in a table
	 *
	 * @return User[] Array of instances of the User class with attributes set to values from database
	 */
	public static function all()
	{
		self::dbConnect();

		$stmt = self::$dbc->prepare('SELECT * FROM users');

		$stmt->execute();

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$users = [];
		foreach($results as $result){
			$users[] = new static($resut);
		}
		return $users;

	}
}
