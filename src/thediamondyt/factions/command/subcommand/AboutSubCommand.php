<?php

namespace thediamondyt\command\subcommand;

use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use thediamondyt\command\Subcommand;

class AboutSubCommand extends SubCommand {
	
    public function canUse(CommandSender $sender) {
        return true;
    }
	
    public function getUsage() {
        return "null";
    }
	
    public function getName() {
        return "about";
    }
	
    public function getDescription() {
        return "Displays info about the plugin";
    }
	
    public function getAliases() {
        return [];
    }
	
    public function execute(CommandSender $sender, array $args) {
        $sender->sendMessage("§eFactions developed by TheDiamondYT aka RandomAltThingy");
         $sender->sendMessage("§eAll Rights Reserved");
    }
	
}