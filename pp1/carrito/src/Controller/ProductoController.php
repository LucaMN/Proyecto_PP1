<?php

// src/Controller/ProductoController.php

namespace App\Controller;

use App\Negocio\Almacen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Producto;


class ProductoController extends AbstractController
{
    /**
     * @Route("/", name="listar_productos")
     */
    public function listarProductos(ManagerRegistry  $registry): Response
    {
        $productoRepository = $registry->getRepository(Producto::class);
        $productos = $productoRepository->findAll();

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