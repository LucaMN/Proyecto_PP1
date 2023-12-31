<?php
// src/Negocio/Almacen.php

namespace App\Negocio;

class Almacen
{
    private $productos;

    public function __construct()
    {
        $this->productos = [
            1 => [
                'id' => 0,
                'nombre' => 'Producto 1',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 101,
                'imagen' => 'images/producto1.jpg',
            ],
            2 => [
                'id' => 1,
                'nombre' => 'Producto 2',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 102,
                'imagen' => 'images/producto2.jpg',
            ],
            3 => [
                'id' => 2,
                'nombre' => 'Producto 3',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 103,
                'imagen' => 'images/producto3.jpg',
            ],
            4 => [
                'id' => 3,
                'nombre' => 'Producto 4',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 104,
                'imagen' => 'images/producto4.jpg',
            ],
            5 => [
                'id' => 4,
                'nombre' => 'Producto 5',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 105,
                'imagen' => 'images/producto5.jpg',
            ],
            6 => [
                'id' => 5,
                'nombre' => 'Producto 6',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 106,
                'imagen' => 'images/producto6.jpg',
            ],
            7 => [
                'id' => 6,
                'nombre' => 'Producto 7',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 107,
                'imagen' => 'images/producto7.jpg',
            ],
            8 => [
                'id' => 7,
                'nombre' => 'Producto 8',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 108,
                'imagen' => 'images/producto8.jpg',
            ],
            9 => [
                'id' => 8,
                'nombre' => 'Producto 9',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 109,
                'imagen' => 'images/producto9.jpg',
            ],
            10 => [
                'id' => 9,
                'nombre' => 'Producto 10',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 110,
                'imagen' => 'images/producto10.jpg',
            ],
        ];
    }

    public function findAll()
    {
        return $this->productos;
    }

    public function find($id)
    {
        return $this->productos[$id] ?? null;
    }
}
