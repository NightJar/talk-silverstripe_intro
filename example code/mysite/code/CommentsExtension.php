<?php
class Comments extends DataExtension {
	public function getComments() {
		return Comment::get()->filter([
			'ParentID' => 0,
			'PostID' => $this->owner->ID
		]);
	}
}