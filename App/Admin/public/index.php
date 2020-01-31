<?php
define('ROOT_PATH',dirname(dirname(dirname(dirname(__FILE__)))).'/');
define('BR','</br>');

require ROOT_PATH.'Biz/Loader.php';
spl_autoload_register('Biz\Loader::autoload');

new Patter\Iterator\Main(); # 迭代器
new Patter\Adapter\Main(); # 适配器
new Patter\Template\Main(); # 模板发放
new Patter\Factory\Main(); # 工厂方法
new Patter\Singleton\Main(); # 单例模式
new Patter\Prototype\Main(); # 原型
new Patter\Builder\Main(); // 建造者模式17年考过
new Patter\AbstractFactory\Main(); # 抽象工厂
new Patter\Bridge\Main(); // 桥接模式17年考过
new Patter\Flyweight\Main(); # 享元模式
new Patter\Decorator\Main(); # 装饰模式
new Patter\Facade\Main(); # 外观模式
new Patter\Proxy\Main(); # 代理模式
new Patter\Strategy\Main(); # 策略模式
new Patter\Chain\Main(); # 责任链模式
new Patter\Command\Main(); # 命令模式
new Patter\State\Main(); # 状态模式
new Patter\Observer\Main(); # 观察者模式
new Patter\Mediator\Main(); # 中介者模式
new Patter\Memento\Main(); # 备忘录模式

// 状态模式 18年考过


