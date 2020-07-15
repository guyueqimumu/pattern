<?php
/**
 * Created by QiLin.
 * User: NO.01
 * Date: 2020/7/14
 * Time: 11:05
 */

/***************************************************************************
 * 简单工厂方法模式（Simple Factory Pattern）属于类的创新型模式，又叫静态工厂方法模式（Static FactoryMethod Pattern）,
 * 是通过专门定义一个类来负责创建其他类的实例，被创建的实例通常都具有共同的父类。
 * 简单工厂跟工厂方法个人认为一致
 **************************************************************************
 */
class factoryMethod
{
    public function createProduction(): Production
    {
        return new Production();
    }
}

class Production
{

    public function getPrice(int $price)
    {
        return $price * 2;
    }
}

class Test
{
    public function __construct()
    {
        $factory = new factoryMethod();
        $production = $factory->createProduction();

        if ($production instanceof Production) {
            $production->getPrice(15);
            echo 'Nice';
        }
    }
}