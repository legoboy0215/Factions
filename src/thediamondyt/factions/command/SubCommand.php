<?php

namespace thediamondyt\command;

use thediamondyt\Factions;
use pocketmine\command\CommandSender;

abstract class SubCommand{
	
    private $plugin;
    
    public function __construct(Factions $plugin){
        $this->plugin = $plugin;
    }
   
    public final function getPlugin(){
        return $this->plugin;
    }
    
    public abstract function canUse(CommandSender $sender);
    
    public abstract function getUsage();

    public abstract function getName();
    
    public abstract function getDescription();
  
    public abstract function getAliases();
  
    public abstract function execute(CommandSender $sender, array $args);
	
	}
	