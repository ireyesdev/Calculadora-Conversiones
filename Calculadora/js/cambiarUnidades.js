function cambiarUnidades() {
    let tipoMedida = document.getElementById("tipo_medida").value;
    let unidadesOrigen = document.getElementById("unidad_origen");
    let unidadesDestino = document.getElementById("unidad_destino");
            
    unidadesOrigen.innerHTML = "";
    unidadesDestino.innerHTML = "";
            
        switch(tipoMedida){
            case "Longitud":
                var opciones = ["Centimetros", "Metros", "Kilometros", "Pulgadas", "Yarda"];   
                break;
            case "masa": 
                var opciones = ["Gramos", "Kilogramos", "Toneladas", "Onzas", "Libras"]; 
                    break;
            case "volumen": 
                var opciones = ["Litros", "Mililitros", "Metros Cubicos", "Pulgadas Cubicas", "Galones"];
                    break;
            case "datos": 
                var opciones = ["Bits", "Bytes", "Kilobits", "Kilobytes", "Megabytes"];
                    break;
            case "moneda": 
                var opciones = ["Dolar", "Euro", "Libras", "Yenes", "Yuanes"];
                    break;
            case "tiempo": 
                var opciones = ["Segundos", "Minutos", "Horas", "Dias", "Semanas"];
                    break;
            default:
                var opciones = [];
            }
           
            for (var i = 0; i < opciones.length; i++) {
                var opcionOrigen = document.createElement("option");
                var opcionDestino = document.createElement("option");
                opcionOrigen.text = opciones[i];
                opcionDestino.text = opciones[i];
                
                unidadesOrigen.add(opcionOrigen);
                unidadesDestino.add(opcionDestino);
            }
        }
        cambiarUnidades();