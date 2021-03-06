<?php

class ArticleFixture extends CakeTestFixture {
	public $name = 'Article';

	public $fields = array(
		'id'            => array('type' => 'integer', 'key' => 'primary'),
		'author_id'     => array('type' => 'integer'),
		'title'         => array('type' => 'string', 'null' => false),
		'body'          => 'text',
		'published'     => array('type' => 'string', 'length' => 1, 'default' => 'N'),
		'ignored_field' => array('type' => 'integer', 'length' => 1, 'default' => 0),
		'created'       => 'datetime',
		'updated'       => 'datetime'
	);

/**
* Records property
*
* @var array
* @access public
*/
	public $records = array(
		array('author_id' => 1, 'title' => 'First Article', 'body' => 'First Article Body', 'published' => 'Y', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('author_id' => 3, 'title' => 'Second Article', 'body' => 'Second Article Body', 'published' => 'Y', 'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31'),
		array('author_id' => 1, 'title' => 'Third Article', 'body' => 'Third Article Body', 'published' => 'Y', 'created' => '2007-03-18 10:43:23', 'updated' => '2007-03-18 10:45:31')
	);
}
