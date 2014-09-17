<?php
class LeaveAComment extends Extension {
	private static $allowed_actions = [
		'Form'
	];
	public function Form() {
		return Form::create(
			$this->owner,
			__FUNCTION__,
			FieldList::create(
				TextField::create('Name'),
				EmailField::create('Email'),
				TextareaField::create('Comment'),
				HiddenField::create('ParentID')
			),
			FieldList::create(
				FormAction::create('doSubmit', 'Comment')
			),
			RequiredFields::create('Name', 'Email', 'Comment')
		);
	}
	public function doSubmit($data, $form) {
		$comment = Comment::create();
		$form->saveInto($comment);
		$comment->PostID = $this->owner->ID;
		$comment->write();
		$this->owner->redirectBack();
	}
}