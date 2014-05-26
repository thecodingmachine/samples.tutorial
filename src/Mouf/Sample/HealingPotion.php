<?php
namespace Mouf\Sample;

class HealingPotion implements PotionInterface {
	const HEAL_POINTS = 5;
	
	public function apply(Warrior $warrior) {
		$warrior->removeHp(-self::HEAL_POINTS);
	}
}
