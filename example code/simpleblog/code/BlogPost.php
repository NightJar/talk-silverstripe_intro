<?php
class BlogPost extends DataObject {
	private static $db = [
		'Title' => 'Varchar(200)',
		'Body' => 'HTMLText'
	];
	private static $has_one = [
		'Author' => 'Member',
		'Page' => 'BlogPage'
	];
	private static $default_sort = 'Created DESC';
}
