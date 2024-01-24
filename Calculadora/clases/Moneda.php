<?php
    require_once "clases/Convertidor.php";
    class Moneda implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [
                'Dolar' => 1, 
                'Euro' => 0.85,             
                'Libras' => 0.73,             
                'Yenes' => 112.35,             
                'Yuanes' => 6.41,         
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