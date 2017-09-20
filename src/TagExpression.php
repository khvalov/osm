<?php
namespace KageNoNeko\OSM;



class TagExpression 
{

	private $expression=null;

	public function setExpression($exp){
		$this->expression=$exp;
	}

	public function getExpression(){
		return $this->expression;
	}

}