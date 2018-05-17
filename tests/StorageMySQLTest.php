<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 17/05/18
 * Time: 13:50
 */

namespace Tests;
use PDO ;
use PHPUnit\Framework\TestCase;

class StorageMySQLTest  extends  TestCase
{
    protected $pdo;

    /**
     *
     */
    public function setUp()
    {
        $this->pdo = new PDO('sqlite::memory:');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec(
            "CREATE TABLE IF NOT EXISTS products
          (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name VARCHAR( 225 ),
            price DECIMAL(4,2),
            total DECIMAL(4,2)
          )
      ");

        $this->pdo->query('INSERT INTO products (name, price) VALUES  (\'apple\', 10.5), (\'raspberry\',13), (\'strawberry\', 7.8)');

    }

}