<?php
namespace DerCommander610\Ping;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "getping":
                if($sender instanceof Player){
                    if($sender->hasPermission("ping.command.use")){
                        if(isset($args[0])){
                           $player = Server::getInstance()->getPlayerExact($args[0]);
                           $sender->sendMessage("§a" . $player->getName() . " Ping: §e" . $player->getNetworkSession()->getPing());
                    }
                        $player = Server::getInstance()->getPlayerExact($args[0]);
                        $sender->sendMessage("§aYour Ping: §e" . $player->getNetworkSession()->getPing());
                    }
                }
                break;
        }
    return true;    
    }
}
