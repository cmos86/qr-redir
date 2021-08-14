<?php 

/*Redirección Dinámica para Códigos QR.*/
/*Autor: Christian Mosquera*/
/*Fecha: 31-07-2021*/

// #1 - enlace 1
// #2 - enlace 2
// #3 - enlace 3

if (isset($_GET['qr'])){ /*Si existe la peticion GET QR*/
    if ($_GET['qr']=='1'){ /*Si la peticion GET QR = 1 */
        header('Location: website/enlace1'); /*Redirige a enlace 1*/
        exit;
    }else if ($_GET['qr']=='2'){ /*Si la peticion GET QR = 2 */
        header('Location: website/enlace2'); /*Redirige a enlace 2*/
        exit;
    }else if ($_GET['qr']=='3'){ /*Si la peticion GET QR = 2 */
        header('Location: website/enlace3'); /*Redirige a enlace 3*/
        exit;
    }
}else{
    header('Location: website'); /*Redirige a la pagina principal*/
    exit;
}


?>
