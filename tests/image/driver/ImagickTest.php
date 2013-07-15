<?php
require_once('Driver.php');
class Imagick_Image_Test extends Driver {

	public $rotated_size = 410;
	
	public function getDriver(){
		return new \PHPixie\Image\Imagick();
	}
	
	protected function save() {
		$this->image->save($this->files_dir.'pixie_ima.png', 'png');
	}

}

	