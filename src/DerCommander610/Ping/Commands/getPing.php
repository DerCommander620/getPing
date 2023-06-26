<?php
namespace DerCommander610\Ping\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;

class getPing extends Command{

    public function __construct(){
        parent::__construct("getping", "Get your Ping or from other Player", "getping <playername>", []);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
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
    }
}
