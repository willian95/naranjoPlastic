<html lang="es">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        
        <link rel="stylesheet" href="ticket.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Ticket de Venta - Naranjo Plastic CPTV</title>
    </head>

<div class="ticket">
		<img src="Logotipo_Naranjo.png" alt="Logotipo">
    <p class="centrado"> 
        José Clemente Orozco No. 2468, Edificio Plaza Medical Int. 306, Zona Rio, C.P. 22320, Tijuana, Baja California, México.
      <br>Folio del ticket:{{$ticket->id}}
      <br>Fecha:{{$venta[0]->created_at}}
      <br>Cliente y/o Paciente:  {{$venta[0]->name}} 
      <br>{{$venta[0]->apePat}} {{$venta[0]->apeMat}}
      <br>Forma de pago:
              @if($venta[0]->idTipoPago)
                Credito
              @else
                Contado
              @endif
              </p>
    <table>
      <thead>
        <tr>
          <th class="cantidad">CANT</th>
          <th class="producto">PRODUCTO</th>
          <th class="precio">$$</th>
        </tr>
      </thead>
      <tbody>
            @foreach($detalles as $detalle)
            <tr>
              <td class="cantidad">{{$detalle->codigo}}</td>
              <td class="producto">{{$detalle->descripcion}}</td>
              <td class="precio">{{$detalle->total}}</td>
            </tr>
            @endforeach
      </tbody>
    </table>
    <p class="derecha">
        <br>
        @if($venta[0]->idTipoPago)
                 Total a pagar MXN:$ {{$venta[0]->Total-$venta[0]->abono+$pago[0]->pesos+$pago[0]->dollar+$pago[0]->tarjeta+$pago[0]->deposito+$pago[0]->transferencia}}
               @else
                Total:$ {{$venta[0]->Total}}
      @endif
     
        <br>Pago:{{$pago[0]->pesos+$pago[0]->dollar+$pago[0]->tarjeta+$pago[0]->deposito+$pago[0]->transferencia}}
      <br>
      Cambio:{{$pago[0]->cambio}}
      <br>
       @if($venta[0]->idTipoPago)
                Total Dolar:${{round((($venta[0]->Total-$venta[0]->abono+$pago[0]->pesos+$pago[0]->dollar+$pago[0]->tarjeta+$pago[0]->deposito+$pago[0]->transferencia)/$venta[0]->cambio) * 100) / 100}}
     @else
                  Total Dolar:${{round((($venta[0]->Total)/$venta[0]->cambio) * 100) / 100}}
        @endif
       <br> 
       @if($venta[0]->idTipoPago)
                 Pendiente de Pago MXN:$ {{$venta[0]->Total-$venta[0]->abono}}
               
      @endif
     
      <br>
           Pesos:{{$pago[0]->pesos}} Dolar:{{$pago[0]->dollar}} Tarjeta:{{$pago[0]->tarjeta}} Deposito:{{$pago[0]->deposito}} Transferencia:{{$pago[0]->transferencia}}
    
    </p>
    <p class="centrado">
    Gracias por su Compra en Naranjo Plastic Surgery
        <br>
          www.naranjoplasticsurgery.com
          <br>
          <br>.<br>.<br>.<br>.<br>.<br>
          ----------------------------------
    </p>
  </div>
</body>

</html>

 