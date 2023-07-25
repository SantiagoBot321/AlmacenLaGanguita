<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {

    }

    // vista about
    public function about()
    {
        $data['title'] = 'Sobre nosotros';
        $this->views->getView('principal', "about", $data);
    }

    // vista nuestros productos
    public function shop()
    {
        $data['title'] = 'Nuestros productos';
        $this->views->getView('principal', "shop", $data);
    }

    // vista detalles
    public function detail($id_producto)
    {
       $data['producto'] =  $this->model->getProducto($id_producto);
        $data['title'] = $data['producto']['nombre'];
        $this->views->getView('principal', "detail", $data);
    }

    // vista contacto
    public function contactos()
    {
        $data['title'] = 'Contáctanos';
        $this->views->getView('principal', "contact", $data);
    }


}