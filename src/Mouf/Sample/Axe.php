<?php
namespace Mouf\Sample;

class Axe implements WeaponInterface {
	const DAMAGE = 7;
	
	public function attack(Warrior $warrior) {
		$warrior->removeHp(self::DAMAGE);
	}
}