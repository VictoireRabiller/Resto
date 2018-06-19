<?php

class Tools {
	static function pre($thing) {
		echo "<pre>";
		print_r($thing);
		echo "</pre>";
	} 

	static function getPriceTTC($priceHT, $tax){
		
		$priceTTC = $priceHT * ( 1 + ( $tax / 100 ));
		return $priceTTC;

	}

	public static function getPrettyPrice($priceHT,$tax) {
		return number_format(Tools::getPriceTTC($priceHT,$tax), 2, ',', ' ') . "€ TTC";
	}
}
