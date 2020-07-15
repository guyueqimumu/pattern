<?php
/***************************************************************************
 * 抽象工厂方法相对与工厂方法模式来说，工厂方法模式是针对一个产品系列，
 * 而抽象工厂方法模式是多产品系列。即工厂方法模式是一个产品系列一个工厂类，
 * 而抽象工厂模式是多个产品系列一个工厂类
 *
 **************************************************************************
 */
abstract class AbstractFactory
{
    abstract public function CreateButton();

    abstract public function CreateBorder();
}

class MacFactory extends AbstractFactory
{
    public function CreateButton()
    {
        return new MacButton();
    }

    public function CreateBorder()
    {
        return new MacBorder();
    }
}

class WinFactory extends AbstractFactory
{
    public function CreateButton()
    {
        return new WinButton();
    }

    public function CreateBorder()
    {
        return new WinBorder();
    }
}

class Button
{
}

class Border
{
}

class MacButton extends Button
{
    function __construct()
    {
        echo 'MacButton is created' . "\n";
    }
}

class MacBorder extends Border
{
    function __construct()
    {
        echo 'MacBorder is created' . "\n";
    }
}

class WinButton extends Button
{
    function __construct()
    {
        echo 'WinButton is created' . "\n";
    }
}

class WinBorder extends Border
{
    function __construct()
    {
        echo 'WinBorder is created' . "\n";
    }
}

?>