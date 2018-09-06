<?php
session_start();

global $wppa;

$wppa = array( 'elm1' => 'value1',
               'elm2' => 'value2'
             );
/*
if ( ! session_id() )
@ session_start();
*/

//if ( ! isset($_SESSION['wppa'])
//$_SESSION['wppa'] = array();

/*
if ( ! isset($_SESSION['wppa']['album']) )
$_SESSION['wppa']['album'] = array();
$_SESSION['wppa']['album'][1234] = 1;  */

/*
$wppa['elm1'] = 'newvalue1';

print_r($_SESSION);
*/

$_SESSION['info']['dato1'] = "nombre";
$_SESSION['info']['dato2'] = "apellido";

echo $_SESSION['info']['dato1']."<br />";

echo $_SESSION['info']['dato2']."<br />";

/***********************************************/

$_SESSION['elementos'] = $wppa;
echo $_SESSION['elementos']['elm1'];

echo "<br /> <br /><br /><br />";

echo $_SESSION['datospersonales']['dato1']['edad'] = 1;
echo $_SESSION['datospersonales']['dato1']['nombre'] = "david";
echo $_SESSION['datospersonales']['dato2']['deporte'] = "natacion";

echo "<br /> <br /><br /><br />";

print_r($_SESSION);

echo "<br /> <br /><br /><br />";

foreach ($_SESSION['info'] as $key => $value)
{


    echo "la posicion es ". $key . " y el valor es : " . $value."<br />";

}






















///session_destroy();

 ?>
