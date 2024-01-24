<?php
    interface Convertidor{
        public function convertir($tipo_medida, $valor_conversion, $unidad_origen, $unidad_destino);
    }
?>