<?php

declare(strict_types=1);

namespace TestForms;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\form\MenuOption;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        switch($cmd->getName()){
            case "test":
                if($sender instanceof Player){
                    $sender->sendForm($this->makeTestForm());
                    return true;
                }
                return false;
            break;
        }
    }
    
    public function makeTestForm() : CustomForm{
        $button = new MenuOption("First step...");
        $form = new CustomForm("Test Title", "Some awful text", $button);
        unset($button);
        return $form;
    }
    
}