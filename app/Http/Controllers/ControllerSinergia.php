<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSinergia extends Controller
{
    public function getFicha($consecutivo){
        //return($consecutivo);
        $CPR_FICHA = [
            '0' => [
                'id' => 1,
                'nit' => '9009123548',
                'nombre' => 'Sergio Rodriguez',
                'consecutivo' => 111,
                'estado' => 'Activo',
            ],
            '1' => [
                'id' => 2,
                'nit' => '9009123548',
                'nombre' => 'Maria Cendales',
                'consecutivo' => 222,
                'estado' => 'Activo',
            ],
            '2' => [
                'id' => 3,
                'nit' => '16524825',
                'nombre' => 'Juan Sanchez',
                'consecutivo' => 333,
                'estado' => 'Activo',
            ],
            '3' => [
                'id' => 4,
                'nit' => '9009123548',
                'nombre' => 'Claudia Martinez',
                'consecutivo' => 444,
                'estado' => 'Activo',
            ],
            '4' => [
                'id' => 4,
                'nit' => '9009123548',
                'nombre' => 'Milena Roa',
                'consecutivo' => 555,
                'estado' => 'Activo',
            ],
            '5' => [
                'id' => 5,
                'nit' => '9009123548',
                'nombre' => 'Antonio Rodriguez',
                'consecutivo' => 666,
                'estado' => 'Activo',
            ],
            '6' => [
                'id' => 6,
                'nit' => '9009123548',
                'nombre' => 'Felipe Grisales',
                'consecutivo' => 777,
                'estado' => 'Inactivo',
            ]
        ];
        $CPR_DETALLE_FICHA = [
            '0' => [
                'id' => 1,
                'id_ficha' => 1,
                'cod_personal' => 123,
                'cantidad_personal' => 25,
                'categoria' => 'Oficina',
                'presupuesto' => 22000000,
            ],
            '1' => [
                'id' => 2,
                'id_ficha' => 2,
                'cod_personal' => 12312,
                'cantidad_personal' => 2,
                'categoria' => 'Dotacion',
                'presupuesto' => 250000,
            ],
            '2' => [
                'id' => 3,
                'id_ficha' => 3,
                'cod_personal' => 234123,
                'cantidad_personal' => 5,
                'categoria' => 'Dotacion',
                'presupuesto' => 12000000,
            ],
            '3' => [
                'id' => 4,
                'id_ficha' => 4,
                'cod_personal' => 456,
                'cantidad_personal' => 1,
                'categoria' => 'Implementos de oficina,',
                'presupuesto' => 15000000,
            ],
            '4' => [
                'id' => 5,
                'id_ficha' => 5,
                'cod_personal' => 167867823,
                'cantidad_personal' => 2,
                'categoria' => 'Transporte',
                'presupuesto' => 4000000,
            ],
            '5' => [
                'id' => 6,
                'id_ficha' => 6,
                'cod_personal' => 123565,
                'cantidad_personal' => 15,
                'categoria' => 'Papeleria',
                'presupuesto' => 5800000,
            ],
            '6' => [
                'id' => 7,
                'id_ficha' => 7,
                'cod_personal' => 14123,
                'cantidad_personal' => 10,
                'categoria' => 'Transporte',
                'presupuesto' => 29000000,
            ],
        ];
        $resultado = '';
        $clave_ficha = array_search($consecutivo, array_column($CPR_FICHA, 'consecutivo'));
        //return $clave_ficha;
        if (is_numeric($clave_ficha)){
            $clave_detalle = array_search($CPR_FICHA[$clave_ficha]['id'], array_column($CPR_DETALLE_FICHA, 'id_ficha'));
            $resultado = array_merge($CPR_FICHA[$clave_ficha],$CPR_DETALLE_FICHA[$clave_detalle]);
            return $resultado;
        }else{
            return response()->json($resultado,200);
        }
    }
}
