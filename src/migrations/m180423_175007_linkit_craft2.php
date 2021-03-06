<?php
namespace fruitstudios\linkit\migrations;

use fruitstudios\linkit\migrations\Install;

class m180423_175007_linkit_craft2 extends Install
{
    public function safeUp()
    {
        $this->upgradeFromCraft2();
        return true;
    }

    public function safeDown()
    {
        echo "m180423_175007_craft2 cannot be reverted.\n";
        return false;
    }
}
