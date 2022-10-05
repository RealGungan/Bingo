<HTML>

<HEAD>
    <TITLE> EJ6B – Factorial</TITLE>

    <style>
        table,
        tr,
        td {
             border: 1px solid;
            border-collapse: collapse;
            font-size: 1.5rem;
            padding: 1rem;
            width: 100px;
            height: 50px;
            text-align: center;
        }

        div {
            width: fit-content;
            display: flex;
            padding: 1rem
        }
    </style>
</HEAD>

<BODY>
    <?php
    printf("<div>");
    createCarton();
    createCarton();
    createCarton();
    printf("</div>");

    //función para generar arrays
    function createCarton()
    {
        $arr_2d = [];
        $numeros_bolsa = [];
        $numeros_rellenar = [];
        $numeros_rellenar_count = 0;
        $numeros_no_validos = [];
        $vacio = 0;
        $vacio_count = 0;

        printf("<div>");
        printf("<table>");

        //generar números
        for ($i = 1; $i <= 60; $i++) {
            $numeros_bolsa[$i] = $i;
        }

        $numeros_rellenar = $numeros_bolsa;

        for ($i = 0; $i < 3; $i++) {
            $arr_rows = [];
            printf("<tr>");
            for ($j = 0; $j < 7; $j++) {
                $vacio = rand(1, 10);
                if ($vacio % 2 == 0 || $vacio_count == 6) {
                    $numeros_rellenar_count++;
                    $numero = $numeros_rellenar[rand(1, 60 - $numeros_rellenar_count)];
                    array_splice($numeros_rellenar, array_search($numero, $numeros_rellenar), 1);
                    printf("<td>" . $numero . "</td>");
                } else {
                    $arr_rows[] = "";
                    printf("<td></td>");
                    $vacio_count++;
                }
            }
            printf("</tr>");
            $arr_2d[] = $arr_rows;
        }

        printf("</table>");
        printf("</div>");

        return $arr_2d;
    }
    //FUNCION GENERAR BOLAS-------------------------------------------------------------------------


function generarBolas(){
$arrayBolas = array();
$valorRandomPrimero = mt_rand(0,60);
array_push($arrayBolas, $valorRandomPrimero);
$x = 1;
while ($x <= 60) {
    $siguienteValorRadom = mt_rand(0, 60);
    if(in_array($siguienteValorRadom, $arrayBolas)){
        continue;
    }else{
    array_push($arrayBolas, $siguienteValorRadom);
    $x++;
    }
}
print_r($arrayBolas);
    
$bola=array_pop($arrayBolas);
echo "Ha salido la bola :" .$bola;
}
    ?>
</BODY>

</HTML>
