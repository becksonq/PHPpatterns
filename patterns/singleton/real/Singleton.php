<?php


namespace app\patterns\singleton\real;


class Singleton
{
    private static $_instances = [];

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$_instances[$subclass])) {
            // Обратите внимание, что здесь мы используем ключевое слово
            // "static"  вместо фактического имени класса. В этом контексте
            // ключевое слово "static" означает «имя текущего класса». Эта
            // особенность важна, потому что, когда метод вызывается в
            // подклассе, мы хотим, чтобы экземпляр этого подкласса был создан
            // здесь.

            self::$_instances[$subclass] = new static;
        }
        return self::$_instances[$subclass];
    }
}