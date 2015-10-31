<?php

namespace thediamondyt\factions;

use pocketmine\utils\Config;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use explosivepe\command\SubCommandMap;
use pocketmine\Player;

class Factions extends PluginBase implements Listener {
	
	private $db;
	private $config;
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	    $this->getServer()->getCommandMap()->register(SubCommandMap::class, new SubCommandMap($this));
		
		$this->setupDatabase();
	    $this->saveDefaultConfig();
	}

	private function setupDatabase(){
		$this->db = new \SQLite3($this->getDataFolder() . "Factions.db");
		$this->db->exec("CREATE TABLE IF NOT EXISTS desc (faction TEXT PRIMARY KEY, message TEXT);");
	}

	public function onDisable(){
		$this->db->close();
	}
	
}
