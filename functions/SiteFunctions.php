<?php

	/**
	 * Display's navigation
	 * @return String
	 */
	function showNavigation($siteInfo) {

		$navigation = $siteInfo->navigation();

		$showNavigation = '';

		if ($navigation) {

			$submenu = array();
				foreach ($navigation as $key=> $value) {
					// key => 
					// $value je objekat tog niza
					$parrent = $value->parrent;
					
					if ($parrent > 0) {
						$arrVal = $navigation[$parrent-1]->id;
						$arrKey = $value->id;
						$submenu[$arrKey] = $arrVal; // Array( Child => Parrent )
					} 
				}
				$showNavigation .= "
		<nav>
			<ul>
			";

			$x = 1;

				foreach ($navigation as $key => $value) {
						if (!array_key_exists($value->id, $submenu) && in_array($value->id, $submenu) ) {

							$showNavigation .= "
							<li><a href=\"" . $value->link . "\" data-action=\"dropdown\" data-target=\"#drop-{$x}\">" . $value->text . "</a></li>";

							if (in_array($value->id, $submenu)) {
									$showNavigation .= "
								<ul class=\"dropdown\" id=\"drop-{$x}\">
									";

								foreach ($submenu as $subKey => $subVal) {
									if ($value->id == $subVal) {
										$showNavigation .= "<li><a href=\"" . $navigation[$subKey-1]->link . "\">" . $navigation[$subKey-1]->text . "</a></li>
									";
									}
								}

								$showNavigation .= "
								</ul>";
							}

						} else if(!array_key_exists($value->id, $submenu) && !in_array($value->id, $submenu)) {
							$showNavigation .= "
							<li><a href=\"" . $value->link . "\">" . $value->text . "</a></li>";
						}

						$x++;
					}
				$showNavigation .= "
			</ul>
		</nav>";


		return $showNavigation;

		}
	}  // End of showNavigation()


	function showSiteName($siteInfo) {
		$showSiteName = $siteInfo->siteName();

		return $showSiteName;
	}  // End of showSiteName()

	if ( !function_exists('showFooter') ) :
		function showFooter($siteInfo) {
			$showFooter = $siteInfo->footer();

			$showFooter = "<footer>{$showFooter}</footer>";

			return $showFooter;
	}  // End of showFooter()
	endif;


	function showBannerTop($siteInfo) {
		$showBannerTop = $siteInfo->bannerTop();

		$title 	 = $showBannerTop->title;
		$content = $showBannerTop->content;

		return $banerTop = "<div class=\"istaknuto\">
					{$content}
				</div>";
	} // End of showBannerTop()

	function showBanners($siteInfo) {
		$banners = $siteInfo->banners();

		$showBanners = '';

		$showBanners .= "<div class=\"ponude\">";
			foreach ($banners as $banner) {
				$showBanners .= "
			<div class=\"ponuda col-sm-12 col-lg-6\">
			<p class=\"naslov\"> {$banner->title} </p>

				{$banner->content}
				</div>";
			}
			$showBanners .= "</div>";

			return $showBanners;
	} // End of showBanners()