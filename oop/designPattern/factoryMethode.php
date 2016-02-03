<?php
class Cricket{
    public function __construct(){
        echo 'Cricket';
    }
}

class Football{
    public function __construct(){
        echo 'Football';
    }
}
class Basketball{
    public function __construct(){
        echo 'Basketball';
    }

}
class Swimming{
    public function __construct(){
        echo 'Swimming';
    }
}

class factory{
    public static function create($className){
        if(class_exists($className)){
            return new $className();
        }else{
            $functionInfo=debug_backtrace();
            echo "<br><strong>Fatal error</strong>: Uncaught Error:  Call to undefined class \"<strong>".$functionInfo[0]['args'][0]."\"</strong> in <strong>".$functionInfo[0]['file']."</strong> on line <strong>".$functionInfo[0]['line']."</strong> <br>";
            exit;
        }
    }
}

factory::create('Swimming');
