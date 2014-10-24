<?php

class SiteInfo {


	/**
	 * Returns object with navigation menu data
	 * @return Object
	 */
	public function navigation() {

		$navigation = DB::getInstance()->get('navigation', array('active', '=', 1))->results();

		if ($navigation) {
			return $navigation;
		}

		return false;
		
	}   // End navigation()

	/**
	 * Returns site name
	 * @return string
	 */
	public function siteName() {
		$name = DB::getInstance()->get('config', array('name', '=', 'site_name'))->first()->value;

		return $name;
	}  // End siteName()

	public function footer() {
		$footer = DB::getInstance()->get('config', array('name', '=', 'footer'))->first()->value;
		if ($footer) {
			return $footer;
		}
		return false;
	}  // End footer()


	public function bannerTop() {
		$top = DB::getInstance()->get('banners', array('position', '=', '2'))->last();
		
		if ($top) {

			return $top;

		}
		return false;
	}  //End bannerTop()

	public function banners() {
		$banners = DB::getInstance()->get('banners', array('position', '=', '1'))->results();

		if ($banners) {
			return $banners;
		}
		return false;
	} // End of banners()

}

?>


		
