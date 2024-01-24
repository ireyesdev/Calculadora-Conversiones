<?php
    require "clases/Masa.php";
    require "clases/Volumen.php";
    require "clases/Tiempo.php";
    require "clases/Moneda.php";
    require "clases/Longitud.php";
    require "clases/Datos.php";

    class Calcular implements Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino){
            switch ($tipo_medida) {
                case 'masa':
                    $conversor = new Masa();
                    break;
                case 'volumen':
                    $conversor = new Volumen();
                    break;
                case 'moneda':
                    $conversor = new Moneda();
                    break;
                case 'tiempo':
                    $conversor = new Tiempo();
                    break;
                case 'Longitud':
                    $conversor = new Longitud();
                    break; 
                case 'datos':
                    $conversor = new Datos();
                    break; 
                default:
                    return "Tipo de medida no válido.";
            }
            return $conversor->convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino);
        }
    }
?>