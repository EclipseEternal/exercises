<?php

require_once('classes/CoordIF.php');

class CoordCSV implements CoordIF{
	
	protected $coord_list = array();
	
  public function __construct($coo){
    $this->setCoordinates($coo);
  }
	public function setCoordinates($coord_list){
		$this->coord_list = $coord_list;
	}
	public function renderFormat(){
		$st = "";
		foreach($this->coord_list as $coords){
			$first = true;
			foreach($coords as $coo){
				if($first){
					$st .= $coo;
					$first = false;
				}
				else
					$st .= ",$coo";
			}
			$st .= "\n";
		}
		return $st;
  }
}