<?php
class BlogPage extends Page {
	private static $has_many = [
		'Posts' => 'BlogPost'
	];
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Posts', GridField::create('Posts', 'Blog Posts', $this->Posts(), GridFieldConfig_RelationEditor::create()));
		return $fields;
	}
}
class BlogPage_Controller extends Page_Controller {
	private static $allowed_actions = ['read'];
	public function read() {
		return ['Post'=>BlogPost::get()->byID($this->request->param('ID'))];
	}
}
