<?php

  require_once('library/tcpdf.php');

  $nombreComprador = $_POST['nombreComprador'];
  $nombreVendedor = $_POST['nombreVendedor'];
  $fechaCompra = $_POST['fechaCompra'];
  $numeroCasa = $_POST['numeroCasa'];

  $private_file = "../llaves/myCert.key.pem";
  $public_file  = "../llaves/myCert.cer.pem";

  $sello = '';
  $cadenaOriginal =  "||" . $nombreComprador . "|"
                          . $nombreVendedor . "|"
                          . $fechaCompra . "|"
                          . $numeroCasa . "||";
                          
                          
  
  // print($cadenaOriginal);

  $private_key = openssl_get_privatekey(file_get_contents($private_file));
  openssl_sign($cadenaOriginal, 
                        $Firma, 
                  $private_key, 
          OPENSSL_ALGO_SHA256);
  
  $sello = base64_encode($Firma);

  $public_key = openssl_pkey_get_public(file_get_contents($public_file));           

  // $PubData = openssl_pkey_get_details($public_key);

  // print_r($PubData[]);


  $result = openssl_verify($cadenaOriginal, 
                                    $Firma, 
                                $public_key, 
                  "sha256WithRSAEncryption");
  
  if ($result == 1) {
    $status = "COMPRA VALIDADA";
  } else {
    $status = "COMPRA NO VALIDA";
  }

  // echo $Firma . "\n";
  // echo $sello;


  // create new PDF document
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

  $pdf->SetTitle('Formulario');
  $pdf->SetAuthor('Hector Saldaña');
  $pdf->SetPageOrientation('P');
  
  $pdf->AddPage();
  
  $content = '
    <h2>Detalle compra</h2>
    <table>
    <tr>
    <td><b>Nombre del Comprador:</b></td>
    <td>'.$nombreComprador.'</td>
  </tr>  
  <tr>
    <td><b>Nombre del Vendedor:</b></td>
    <td>'.$nombreVendedor.'</td>
  </tr>
  <tr>
    <td><b>Fecha de la compra:</b></td>
    <td>'.$fechaCompra.'</td>
  </tr>
  <tr>
    <td><b>Numero de casa:</b></td>
    <td>'.$numeroCasa.'</td>
  </tr> 
      <tr>    
        <td><b>Cadena original:</b></td>
        <td>'.$cadenaOriginal.'</td>
      </tr> 
      <tr>    
        <td><b>Sello:</b></td>
        <td>'.$sello.'</td>
      </tr>
      <tr>    
        <td></td>
        <td></td>
      </tr>
      <tr>    
        <td><b>status:</b></td>
        <td>'.$status.'</td>
      </tr>
    </table>';

  $pdf->writeHTML($content);

  // ob_end_clean();
  $pdf->Output('formulario.pdf', 'I');


?>