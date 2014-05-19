<?php
namespace Mouf\Sample;

class Warrior {
	private $leftHandWeapon;
	private $rightHandWeapon;
	private $hp;
	
	/**
	 * @param WeaponInterface $leftHandWeapon
	 * @param WeaponInterface $rightHandWeapon
	 * @param int $hp
	 */
	public function __construct(WeaponInterface $leftHandWeapon, 
			WeaponInterface $rightHandWeapon,
			$hp) {
		$this->leftHandWeapon = $leftHandWeapon;
		$this->rightHandWeapon = $rightHandWeapon;
		$this->hp = $hp;
	}
	
	public function attack(Warrior $warrior) {
		$this->leftHandWeapon->attack($warrior);
		$this->rightHandWeapon->attack($warrior);
	}
	
	public function removeHp($hp) {
		$this->hp -= $hp;
		if ($this->hp <= 0) {
			echo "I'm dead!\n";
		}
	}
}
