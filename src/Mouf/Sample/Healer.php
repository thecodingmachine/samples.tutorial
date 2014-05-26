<?php
namespace Mouf\Sample;

/**
 * This class represents a character who is a "healer"
 */
class Healer {
	private $hp;
	//private $potions;
	
	/**
	 * @param int $hp The hit points of the healer
	 */
	public function __construct($hp) {
		$this->hp = $hp;
	}
	
	/**
	 * The list of potions the Healer possesses.
	 * 
	 * @param array<PotionInterface> $potions
	 */
	/*public function setPotions(array $potions) {
		$this->potions = $potions;
	}*/
	
	/**
	 * The list of potions the Healer possesses.
	 * @var array<PotionInterface>
	 */
	public $potions;
}
