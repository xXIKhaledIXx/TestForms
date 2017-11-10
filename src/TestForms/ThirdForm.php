<?php

declare(strict_types=1);

namespace TestForms;

use pocketmine\Player;
use pocketmine\form\Form;
use pocketmine\form\FormIcon;
use pocketmine\form\MenuForm;
use pocketmine\form\MenuOption;

class ThirdForm extends MenuForm{
    
    public function __construct(string $title, string $text, MenuOption ...$options){
        parent::__construct($title, $text, ...$options);
    }
    
    public function onSubmit(Player $player) : ?Form{
        return new FourthForm("Test Title", "Some awful text (x3)", new MenuOption("Fourth step..."));
    }
    
}