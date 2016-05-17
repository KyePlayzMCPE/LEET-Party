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
    if(strtolower($command) === "lp") {
      if($args[1] == "create"){
        $sender->sendMessage("[LeetParty] WIP");
      }elseif($args[1] == "delete"){
        $sender->sendMessage("[LeetParty] WIP");
      }elseif($args[1] == "remove"){
        $sender->sendMessage("[LeetParty] WIP");
      }elseif($args[1] == "teleport"){
        $sender->sendMessage("[LeetParty] WIP");
      }elseif($args[1] == "add"){
        $sender->sendMessage("[LeetParty] WIP");
      }elseif($args[1] == "help"){
        $sender->sendMessage(TF::GREEN."-= [ ++  Leet Party Commands ++ ] =-");
        $sender->sendMessage(TF::RED."/lp create [party] -- Creates a LEET party.");
        $sender->sendMessage(TF::RED."/lp delete -- Deletes your LEET party.");
        $sender->sendMessage(TF::RED."/lp add [player] -- Add a player to your LEET party.");
        $sender->sendMessage(TF::RED."/lp remove [player] -- Remove a player from your LEET party.");
        $sender->sendMessage(TF::RED."/lp teleport -- Teleport to your LEET party.");
      }elseif($args[1] == "easterEgg"){
      }else{
      $sender->sendMessage(TF::YELLOW."[LeetParty]".TF::RED." Unknown command. Type \"/lp help\" for a list of commands.");
      }
      }
      }
      }
      }
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
