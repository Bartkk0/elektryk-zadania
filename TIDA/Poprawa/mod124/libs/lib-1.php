<?php
class Form{

	private $legend;
	private $ctrls;

	public function __construct($text){
		$this->legend = $text;
	}
	public function pack(...$controls){
		$this->ctrls = $controls;
	}

	private function getHeader(){
		return '<h2>'.$this->legend.'</h2>';
	}

	public function display(){
		$ctrls = '';
		foreach($this->ctrls as $ctrl){
			$ctrls .= $ctrl->render();
		}
		$out = '<form>'.$this->getHeader().$ctrls.'</form>';
		return $out;
	}

}
?>
