<?php 

use Cygnite\Database\Migration;
use Cygnite\Database\Schema;

/**
* This file is generated by Cygnite Migration Command
* You may use up and down method to create migration
*/

class User extends Migration
{

    /* Your database name */
    protected $database = 'cygnite';

	/**
	 * Run the migrations up.
	 *
	 * @return void
	 */
	public function up()
	{
		//Your schema to migrate
        Schema::instance(
            $this,
            function ($table) {

                $table->tableName = 'user';

                $table->create(
                    array(
                        array('column'=> 'id', 'type' => 'int', 'length' => 11,
                            'increment' => true, 'key' => 'primary'),
                        array('column'=> 'name', 'type' => 'string', 'length' =>100),
                        array('column'=> 'email', 'type' => 'string', 'length'  =>150),
                        array('column'=> 'password', 'type' => 'string', 'length'  =>150),
                        array('column'=> 'country', 'type' => 'string', 'length'  =>50),
                        array('column'=> 'age', 'type' => 'int', 'length'  =>11),
                        array('column'=> 'created_at', 'type' => 'datetime'),
                        array('column'=> 'updated_at', 'type' => 'datetime'),
                    ),
                    'InnoDB',
                    'latin1'
                )->run();
            }
        );

        $crypt = new \Cygnite\Common\Encrypt();

        $data = array(
            'name' => 'Admin',
            'email' => 'admin@cygnite.com',
            'password' => $crypt->encode('admin@123'),
            'country' => 'United States',
            'age' => '26',
            'created_at' => date( 'Y-m-d H:i:s'),
            'updated_at' => date( 'Y-m-d H:i:s')
        );

        $this->insert('user', $data);
		
	}

	/**
	 * Revert back your migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 //Roll back your changes done by up method.
        $this->trash(1);

        Schema::instance(
            $this,
            function ($table) {
                $table->tableName = 'user';
                $table->drop()->run();
            }
        );
		 
	}
}// End of the Migration