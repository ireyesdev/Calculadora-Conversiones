<?php
    require_once "clases/Convertidor.php";
    class Tiempo implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            $conversiones = [             
                'Segundos' => 1,             
                'Minutos' => 0.0166667,             
                'Horas' => 0.000277778,             
                'Dias' => 1.15741e-5,             
                'Semanas' => 1.65344e-6,         
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