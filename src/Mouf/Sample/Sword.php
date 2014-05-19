<?php
namespace Mouf\Sample;

class Sword implements WeaponInterface {
	const DAMAGE = 5;
	
	public function attack(Warrior $warrior) {
		$warrior->removeHp(self::DAMAGE);
	}
}
