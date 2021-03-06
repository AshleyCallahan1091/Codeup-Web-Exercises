<?php

require_once __DIR__ . '/adlister_login.php';

abstract class Model
{
    /** @var PDO|null Connection to the database */
    protected static $dbc = null;

    /** @var array Database values for a single record. Array keys should be column names in the DB */
    protected $attributes = array();

    /**
     * Constructor
     *
     * An instance of a class derived from Model represents a single record in the database.
     *
     * $param array $attributes Optional array of database values to initialize the model record with
     */
    public function __construct(array $attributes = array())
    {
        self::dbConnect();

        $this->attributes = $attributes;
    }

    /**
     * Connect to the DB
     *
     * This method should be called at the beginning of any function that needs to communicate with the database
     */
    protected static function dbConnect()
    {
        if (!self::$dbc) {
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . "", DB_USER, DB_PASS);
        }
    }

    /**
     * Get a value from attributes based on its name
     *
     * @param string $name key for attributes array
     *
     * @return mixed|null value from the attributes array or null if it is undefined
     */
    public function __get($name)
    {
        if (isset($this->attributes[$name])) {
            return $this->attributes[$name];
        } else {
            return null;
        }
    }

    /**
     * Set a new value for a key in attributes
     *
     * @param string $name  key for attributes array
     * @param mixed  $value value to be saved in attributes array
     */
    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /** Store the object in the database */
    public function save()
    {
        if(!empty($this->attributes)) 
            {
                if (isset($this->attributes['id'])) 
                {
                    $this->update();
                } else 
                {
                    $this->insert();
                }
            }else {
                throw new InvalidArgumentException(
                    'There are no values to insert/update!');
            }

            if(isset($this->attributes['id'])){
                $this->update();
            } else {
                $this->insert();
            }
    }

    /**
     * Insert new entry into database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function insert();

    /**
     * Update existing entry in database
     *
     * NOTE: Because this method is abstract, any child class MUST have it defined.
     */
    protected abstract function update();
}
