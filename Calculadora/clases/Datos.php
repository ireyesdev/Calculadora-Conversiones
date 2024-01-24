<?php
    require_once "clases/Convertidor.php";
    class Datos implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [
                'Bits' => 1,
                'Bytes' => 0.125,
                'Kilobits' => 0.001,
                'Kilobytes' => 0.000125,
                'Megabytes' => 1.25e-7,
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