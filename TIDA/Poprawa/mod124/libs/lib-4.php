<?php
class Input{
	private $name;
	public function __construct($name){
		$this->content = $name;
	}
	public function render(){
		$out = '<input type="text" name="'.$this->name.'" />';
		return $out;
	}
}
?>
