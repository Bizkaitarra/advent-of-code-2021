<?php
while (true) {


    $data = json_decode(file_get_contents('https://e00-loterias.uecdn.es/navidad.json'), true);

    $premiosA = $data['premios'];

    $numerosPropios = [76553, 33545, 86136, 71837];

    foreach ($numerosPropios as $numeroPropio) {
        if (array_key_exists($numeroPropio,$premiosA)) {
            $message = sprintf(
                'Ha tocado %s€ por cada 20€ en el numero %s',
                $premiosA[$numeroPropio] / 10, $numeroPropio
            );
            exec('ffplay /home/jon/Descargas/BellaCiao.ogx > /dev/null &');
            echo "\n".$message;
        }
    }
    $hora = new DateTime();
    echo "\n".$hora->format('h:i:s'). " Fin de la comprobación";
    sleep(60);
}
