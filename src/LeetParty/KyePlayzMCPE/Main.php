<?php
namespace LeetParty\KyePlayzMCPE;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;

class Main extends PluginBase implements Listener {
  public $Cfg;
  public function onEnable() {
    $this->getCfg();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->notice(TF::GREEN."Enabled!");
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    if(strtolower($command) === "") {
      //TODO
    }
    return false;
  }
  public function getCfg() {
    $this->saveDefaultConfig();
    $this->Cfg = $this->getConfig();
  }
  public function onDisable() {
    $this->getLogger()->notice(TF::GREEN."Disabled!");
  }
}
