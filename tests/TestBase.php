<?php

/**
* DirectMongosuite Test.
*/
class TestBase extends CTestCase
{
	public function setUp()
	{
		parent::setUp();

		// Clear Out the Test Database Before Running
		Yii::app()->edmsMongoDb()->drop();
	}
}
