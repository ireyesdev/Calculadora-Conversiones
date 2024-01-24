<?php
    require_once "clases/Convertidor.php";
    class Longitud implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [             
                'Centimetros' => 1,             
                'Metros' => 0.01,             
                'Kilometros' => 0.00001,             
                'Pulgadas' => 0.393701,             
                'Yardas' => 0.0109361,        
            ];
            return $this->realizarConversion($conversiones, $valor_conversion, $unidad_origen, $unidad_destino);
        }
        protected function realizarConversion($conversiones, $valor_conversion, $unidad_origen, $unidad_destino){
            if (isset($conversiones[$unidad_origen]) && isset($conversiones[$unidad_destino])) {
                $resultado = $valor_conversion * ($conversiones[$unidad_destino] / $conversiones[$unidad_origen]);
                return $resultado;
            } else {
                return "Unidades no válidas para la conversión.";
            }
        }
    }
?>