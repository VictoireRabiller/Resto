<?php

class Tools {
	static function pre($thing) {
		echo "<pre>";
		print_r($thing);
		echo "</pre>";
	} 

	static function getPriceTTC($priceHT){
		
		$priceTTC = $priceHT * 1.1;
		return $priceTTC;

	}

	public static function getPrettyPrice($price) {
		return number_format($price, 2, ',', ' ') . "€ TTC";
	}

	public static function getPriceEur($price) {
		return number_format($price, 2, ',', ' ') . "€";
	}





}
