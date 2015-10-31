<?php

namespace thediamondyt\faction;

use pocketmine\Player;
use pocketmine\utils\TextFormat as Color;
use explosivepe\Factions;
	
class Faction {
	
	private $name;
	private $leader;
	private $members = array();
	private $plugin;

	public function __construct($plugin, $name, Player $leader){
		$this->name = $name;
		$this->leader = $leader;
		$this->plugin = $plugin;
		
		$this->broadcast(Color::WHITE. $leader->getName(). Color::YELLOW. " created the faction " .Color::WHITE .$name);
		$leader->sendMessage(Color::GREEN. "Faction succesfully created!");
	}
	
	private function broadcast($msg){
		foreach($this->plugin->getServer()->getOnlinePlayers() as $p){
			if(!$p === $this->leader){
				$p->sendMessage($msg);
			}
		}
	}
	
}
