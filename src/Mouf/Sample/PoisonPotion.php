<?php
namespace Mouf\Sample;

class PoisonPotion implements PotionInterface {
	const POISON_DAMAGE = 5;
	
	public function apply(Warrior $warrior) {
		$warrior->removeHp(self::HEAL_POINTS);
	}
}
