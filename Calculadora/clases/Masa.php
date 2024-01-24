<?php
    require_once "clases/Convertidor.php";
    class Masa implements Convertidor{
        public function convertir($tipo_conversion, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [
                'Gramos' => 1,
                'Kilogramos' => 0.001,
                'Toneladas' => 0.000001,
                'Onzas' => 0.035274,
                'Libras' => 0.00220462,
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