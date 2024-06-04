<?php

namespace BaorzK\JoinParticle;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\world\World;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener; 
use pocketmine\world\particle\FlameParticle;
use pocketmine\world\particle\HeartParticle;
use pocketmine\world\particle\InkParticle;
use pocketmine\world\particle\AngryVillagerParticle;
use pocketmine\world\particle\SmokeParticle;
use pocketmine\world\particle\WaterParticle;
use pocketmine\world\particle\LavaParticle;
use pocketmine\world\particle\EndermanTeleportParticle;


class Main extends PluginBase implements Listener{
  
  public function onEnable(): void{
    $this->saveDefaultConfig();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("JoinParticle is Enable");
  }
  
  public function onDisable(): void{
    $this->getConfig()->save();
    $this->getLogger()->info("JoinParticle is Disable");
  }
  
  public function onJoin(PlayerJoinEvent $ev){
  $player = $ev->getPlayer();
  $world = $player->getPosition()->getWorld();
  $position = $player->getLocation();
  //See if it is true or not!
  if($this->getConfig()->get("FlameParticle") === true){
  $particle = $world->addParticle($position, new FlameParticle());
  }
  if($this->getConfig()->get("LavaParticle") === true){
  $particle = $world->addParticle($position, new LavaParticle());
  }
  if($this->getConfig()->get("AngryVillagerParticle") === true){
  $particle = $world->addParticle($position, new AngryVillagerParticle());
  }
  if($this->getConfig()->get("InkParticle") === true){
  $particle = $world->addParticle($position, new InkParticle());
  }
  if($this->getConfig()->get("SmokeParticle") === true){
  $particle = $world->addParticle($position, new SmokeParticle());
  }
  if($this->getConfig()->get("WaterParticle") === true){
  $particle = $world->addParticle($position, new WaterParticle());
  }
  if($this->getConfig()->get("EndermanTeleportParticle") === true){
  $particle = $world->addParticle($position, new EndermanTeleportParticle());
  }
}
}
