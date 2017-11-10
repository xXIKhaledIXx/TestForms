<?php

declare(strict_types=1);

namespace TestForms;

use pocketmine\Player;
use pocketmine\form\Form;
use pocketmine\form\FormIcon;
use pocketmine\form\MenuForm;
use pocketmine\form\MenuOption;

class FourthForm extends MenuForm{
    
    public function __construct(string $title, string $text, MenuOption ...$options){
        parent::__construct($title, $text, ...$options);
    }
    
    public function onSubmit(Player $player) : ?Form{
        return null;
    }
    
}