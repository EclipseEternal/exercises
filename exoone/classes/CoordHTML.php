<?php

require_once('classes/CoordIF.php');

class CoordHTML implements CoordIF{
	
	protected $coord_list = array();
	
  public function __construct($coo){
    $this->setCoordinates($coo);
  }
  
	public function setCoordinates($coord_list){
		$this->coord_list = $coord_list;
	}
	public function renderFormat(){
		$st = '<table class="coords table table-striped">';
		foreach($this->coord_list as $coords){
			$st .= "<tr>";
			foreach($coords as $coo){
				$st .= "<td>$coo</td>";
			}
			$st .= "</tr>";
		}
		$st .= "</table>";
		return $st;
  }
}