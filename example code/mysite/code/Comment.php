<?php
class Comment extends DataObject {
	private static $db = [
		'Name' => 'Varchar',
		'Email' => 'Varchar(100)',
		'Comment' => 'Text'
	];
	private static $has_one = [
		'Post' => 'BlogPost',
		'Parent' => 'Comment'
	];
	private static $has_many = [
		'Replies' => 'Comment'
	];
}
