<?php

class Views{
    public function getViews ($controlador, $vista) {
        $controller = get_class($controlador);
        if ($controller == "Home") {
            $vista = "Views/".$vista.".php";
        }
        else {
            $vista = "Views/".$controller."/".$vista.".php";
        }
        require $vista;
    }
}

?>