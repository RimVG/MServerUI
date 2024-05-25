<?php

namespace RimVG\PluginDev;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use skyss0fly\welcomemessage\libs\jojoe77777\FormAPI\SimpleForm;
use pocketmine\player\Player;

class IREnableRimVGDev extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        
 $title = $this->getConfig()->get("Title");
 $content = $this->getConfig()->get("Content");
 $button = $this->getConfig()->get("ButtonText");

$form = new SimpleForm(function(Player $player, $data){
    if($data === null) return;
  
});
$form->setTitle($title);
$form->setContent($content);
$form->addButton($button);
$player->sendForm($form);

}
}
