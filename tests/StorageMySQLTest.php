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
    protected $storage;

    public function setUp()
    {
        $connect = new \Connect([
            'dsn' => 'mysql:host=localhost;dbname=fruittest',
            'username' => 'root',
            'password' => 'Antoine'
        ]);

        $this->pdo = $connect->db;
        $this->storage = new \StorageMySQL($this->pdo);

        $this->storage->reset();
    }


    /**
     * @description : test si la table de test est bien créée
     */
    public function testInitStorageMySQL(){

        // test de l'instance de la classe Product
        $this->assertInstanceOf(
            \StorageMySQL::class , $this->storage
        );
    }

    public function testAddProduct(){

        $this->storage->setValue('apple', 5*1.5);

        $this->assertEquals(5*1.5, $this->storage->total());
    }
}