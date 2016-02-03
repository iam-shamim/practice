<?php
interface iFactory{
    public static function getCaches();
}

class singleRowCaches implements iFactory{
    public static function getCaches(){
        return 'Single Row Cache';
    }
}

class multiRowsCaches implements iFactory{
    public static function getCaches(){
        return 'Multi Rows Cache';
    }
}

class fullRowsCaches implements iFactory{
    public static function getCaches(){
        return 'Full Rows Cache';
    }
}

class caches{
    private $cache;
    public function __construct(iFactory $cacheFactory){
        $this->cache=$cacheFactory->getCaches();
    }
    public function info(){
        return $this->cache;
    }
}


$obj=new caches(new singleRowCache());
echo $obj->info();



