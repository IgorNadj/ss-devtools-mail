<?php 


class StoredEmail extends DataObject {
	
	private static $db = array(
		'From'    => 'Varchar',
		'To'      => 'Varchar',
		'Subject' => 'Varchar',
		'Body'    => 'HTMLText',
	);
	
	public function PlainBody(){
		return htmlentities($this->Body);
	}
	
}