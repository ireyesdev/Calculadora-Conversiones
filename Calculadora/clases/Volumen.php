<?php
    require_once "clases/Convertidor.php";
    class Volumen implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [
                'Litros' => 0.001,
                'Mililitros' => 1,
                'Metros Cubicos' => 1e-6,
                'Pulgadas Cubicas' => 0.0610237,
                'Galones' => 0.000264172,
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