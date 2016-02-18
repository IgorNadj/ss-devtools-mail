<?php 


class DevMailController extends Controller {
	
	private static $allowed_actions = array(
		'testSend',
		'TestForm',
		'view'
	);
	
	private static $url_handlers = array(
		'view/$ID' => 'view'
	);
	
	
	public function index(){
		return $this->renderWith('DevMail');
	}
	
	public function Captured(){
		return StoredEmail::get();
	}
	
	public function view(SS_HTTPRequest $request){
		$id = $request->param('ID');
		echo StoredEmail::get()->byID($id)->Body;
	}
	
	public function TestForm(){
		$fields = new FieldList(
			TextField::create('From'),
			TextField::create('To'),
			TextField::create('Subject'),
			TextareaField::create('Body')
		);
		$actions = new FieldList(
			FormAction::create('testSend', 'Test')
		);
		return new Form($this, 'TestForm', $fields, $actions);
	}
	
	
	public function testSend($params){
		$e = new Email($params['From'], $params['To'], $params['Subject'], $params['Body']);
		$e->send();
		$this->redirect($this->Link());
	}
	
	public function Link() {
		return '/dev/mail/';
	}
	
}