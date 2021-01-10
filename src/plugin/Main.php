<?php

namespace plugin;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("Plugin pocketmine 4.0 chargé!");
    }

    public function onDisable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

        $this->getLogger()->info("Plugin de Test pocketmine 4.O déchargé");

    }
}