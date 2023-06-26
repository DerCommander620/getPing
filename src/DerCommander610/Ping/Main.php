<?php
namespace DerCommander610\Ping;

use DerCommander610\Ping\Commands\getPing;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase{
    use SingletonTrait;

    public function onLoad(): void{
        self::setInstance($this);
    }

    public function onEnable(): void{
        self::getServer()->getCommandMap()->registerAll($this->getName(), [
            new getPing()
        ]);
    }
}