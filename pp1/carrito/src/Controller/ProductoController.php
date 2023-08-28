<?php

// src/Controller/ProductoController.php

namespace App\Controller;

use App\Negocio\Almacen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController
{
    /**
     * @Route("/", name="listar_productos")
     */
    public function listarProductos(Almacen $almacen): Response
    {
        $productos = $almacen->findAll();

        return $this->render('lista.html.twig', [
            'productos' => $productos,
        ]);
    }
    /**
     * @Route("/producto/{id}", name="detalle_producto")
     */
    public function detalleProducto(Almacen $almacen, $id): Response
    {
        $producto = $almacen->find($id);

        return $this->render('producto/detalle.html.twig', [
            'producto' => $producto,
        ]);
    }

}
    

?>