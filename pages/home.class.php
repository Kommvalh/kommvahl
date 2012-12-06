<?php
// class för home

class Home extends Page{
	protected $bigImage = 'bild';//Från databasen.
	public $productList;
	public $image;

	protected function showImage() {
		$bigImageHolder = '
			<div id="bigImage">
				<img src="'.$this->bigImage.'" alt="En sjyst pic" />
			</div>';
		$this->setResponse($id, $title, $content, $image);
	}
	public function showProducts() {
		
	}
}