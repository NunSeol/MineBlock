<?php

namespace MineBlock;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\block\BlockBreakEvent;
use onebone\economyapi\EconomyAPI;
use ifteam\SimpleArea\SimpleArea;
use pocketmine\entity\Item;
class Main extends PluginBase implements Listener {
	public function onLoad() {
		$this->getLogger()->info(TextFormat::AQUA . "CSBLOCK 플러그인을 로드하고 있습니다");
	}
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::AQUA . "CSBLOCK 플러그인을 사용할 수 있습니다!");
	}
	public function BreakBlock(BlockBreakEvent $event) {
		$player = $event->getPlayer();
		if ($event->getBlock()->getId() == 14) {
			$num = mt_rand(0, 50);
                            if($num>48){

					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1000);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1000원이 지급되었습니다!");

                                }else if($num >43){
                                  
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 500);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("500원이 지급되었습니다!");
                                }else if($num>38){

					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 100);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("100원이 지급되었습니다!");

                                }else if ($num > 27){
					$this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 50);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("50원이 지급되었습니다!");
                                }else if ($num > 16){
                                        $this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 10);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("10원이 지급되었습니다!");
                                }else{
                                        $this->getServer()->getLevel()->setBlock($event, 14);
					EconomyAPI::getInstance()->addMoney($player, 1);
					$player->removeCreativeItem(14);
					$event->getPlayer()->sendMessage("1원이 지급되었습니다!");
			
                                }
return;
		}
	}
	public function onDisable() {
		$this->getLogger()->info(TextFormat::DARK_AQUA . "CSBlock 플러그인을 비활성화 합니다");
	}
}

?>
