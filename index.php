<?php 
    $ruta = !empty($_GET['url']) ? $_GET['url'] : "Home/index";
    $array = explode('/', $ruta);
    $controller = $array[0];
    $method = "index";
    $parameter = "";
    if (!empty($array[1])) {
        $method = $array[1];
    }

    if (!empty($array[2])) {
        $method = $array[2];
        for ($i = 2; $i < count($array); $i++) {
            $parameter .= $array[$i] . ",";
        }
        $parameter = trim($parameter, ",");
    }
    require_once("Config/App/Autoload.php");
    $dirControllers = "Controllers/".$controller.".php";
    if(file_exists($dirControllers)) {
        require_once $dirControllers;
        $controller = new $controller();
        if (method_exists($controller,$method)) {
            $controller->$method($parameter);
        }else {
            echo "No existe el método";
        }
    } else {
        echo "No existe el controlador";
    }
?>
