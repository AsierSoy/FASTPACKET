<?php
include './core/Main.php';

$sesion=new Sesion_model();
$sesion->tieneSesion($nameSesion);
$login= new Login_model();


$codeEnvio=$login->generarPass();

$cms = new Cms_model();

$mng="";
$confir="";

if($_POST){
    extract($_REQUEST);
    if($cms->insertarEnvio($estado,$proceso,$nombreSalida, $teleSalida, $mailSalida, $diaSalida, $hora1Salida, $hora2Salida, $ciudadSalida, $cpSalida, $poblacionSalida, $direcSalida, $empresaSalida, $attSalida, $comenSalida, $nombreDestino, $teleDestino, $mailDestino, $diaDestino, $hora1Destino, $hora2Destino, $ciudadDestino, $cpDestino, $poblacionDestino, $direcDestino, $empresaDestino, $attDestino, $comenDestino, $altoCm, $anchoCm, $profundoCm, $km, $cantidad, $codeEnvio, $_SESSION['id_usuario'])){
        
        if($cms->envioDeCode($nombreDestino,$mailDestino,$codeEnvio)){
            $mng="Envío iniciado, se mandará un correo a ".$mailDestino." con el código de envío, la persona que recoja el paquete deberá darle al mensajero el código, el lo inserta en su plataforma y el envío queda cerrado."."<br>"."Muchas gracias por utilizar FastPacket";
            $confir="_0";
        }else {
            $mng="Hay problemas en el envio del code";
            $confir="_0";
        }
            
        
    }else {
        $mng="Envio erroneo no se han gurdado los datos";
    }
}


?>

<!--estructura-->
<?php include './col/header.php'; ?>
<?php include './col/nav.php'; ?>
    <section>
      <div class="conte">
            <div class="post cont_envio">
                <h1>Solicitud de envio recogida y entrega</h1>
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <div class="dt_generales">
                    <p>Datos generales <span class="confir<?= $confir?>"><?= $mng ?></span></p>
                    <input type="hidden" name="estado" value="activo">
                    <input type="hidden" name="proceso" value="iniciado">
                    <input type="text" name="nombreSalida" placeholder="Nombre" required >
                    <input type="tel" name="teleSalida" placeholder="Teléfono" required>
                    <input type="email" name="mailSalida" placeholder="correo@email.com" required>
                </div>
                <div class="dt_recogida">
                    <p>Datos de recogida</p>
                    
                    <div>
                        <div class="dia_recog">
                            <label>Dia de recogida</label>
                            <input type="date" name="diaSalida" placeholder="fecha recogida" required autofocus>
                            <label>Hora de recogida entre</label>
                            <input type="time" name="hora1Salida" placeholder="hora de recogida" required> 
                            y las
                            <input type="time" name="hora2Salida" placeholder="hora de recogida" required>
                        </div>
                        <label>City</label>
                        <input type="text" name="ciudadSalida" placeholder="ciudad de recogida" required autofocus>
                        <label>cp</label>
                        <input type="text" name="cpSalida" placeholder="codigo postal" required autofocus>
                        <label>Población</label>
                        <input type="text" name="poblacionSalida" placeholder="poblacion de recogida" required autofocus>
                    </div>
                    <div>
                        <label>Dirección calle nº</label>
                        <input type="text" name="direcSalida" placeholder="calle de recogida" required autofocus>
                        <label>Empresa o persona de recogida</label>
                        <input type="text" name="empresaSalida" placeholder="Empresa o persona de recogida" required autofocus>
                        <label>Persona de recogida comentario</label>
                        <textarea type="text" name="attSalida" placeholder="comentario de recogida" required autofocus></textarea>
                        <label>Observaciones</label>
                        <textarea type="text" name="comenSalida" placeholder="observaciones" required autofocus></textarea>
                    </div>
                </div>
                <div class="dt_recogida">
                    <p>Datos entrega</p>
                    <input type="text" name="nombreDestino" placeholder="Nombre de persona de entrega" required >
                    <input type="tel" name="teleDestino" placeholder="Teléfono de persona de entrega" required>
                    <input type="email" name="mailDestino" placeholder="correo@email.com de persona de entrega" required>
                    <div>
                        <div class="dia_recog">
                            <label>Dia de entrega</label>
                            <input type="date" name="diaDestino" placeholder="fecha entrega" required autofocus>
                            <label>Hora de entrega entre</label>
                            <input type="time" name="hora1Destino" placeholder="hora de entrega" required> y las
                            <input type="time" name="hora2Destino" placeholder="hora de entrega" required>
                        </div>
                        <label>City</label>
                        <input type="text" name="ciudadDestino" placeholder="ciudad de entrega" required autofocus>
                        <label>cp</label>
                        <input type="text" name="cpDestino" placeholder="codigo postal" required autofocus>
                        <label>Población</label>
                        <input type="text" name="poblacionDestino" placeholder="poblacion de entrega" required autofocus>
                    </div>
                    <div>        
                        <label>Dirección calle nº</label>
                        <input type="text" name="direcDestino" placeholder="calle de entrega" required autofocus>
                        <label>Empresa o persona de entrega</label>
                        <input type="text" name="empresaDestino" placeholder="Empresa o persona de entrega" required autofocus>
                        <label>Persona de entrega comentario</label>
                        <textarea type="text" name="attDestino" placeholder="comentario de entrega" required autofocus></textarea>
                        <label>Observaciones</label>
                        <textarea type="text" name="comenDestino" placeholder="observaciones" required autofocus></textarea>
                    </div>
                </div>
                <div class="dt_recogida">
                    <p>Info del packet</p>
                    <div>
                        <label>Alto</label>
                        <input type="text" name="altoCm" placeholder="alto" required autofocus>
                        <label>Ancho</label>
                        <input type="text" name="anchoCm" placeholder="ancho" required autofocus>
                        <label>Profundo</label>
                        <input type="text" name="profundoCm" placeholder="profundo" required autofocus>
                    </div>
                    <div>
                        <div class="mitad">
                            <label>Km</label>
                            <input type="text" name="km" placeholder="Kilometros" required autofocus>
                        </div>
                        <div class="mitad">
                            <label>Bultos a enviar</label>
                            <input type="text" name="cantidad" placeholder="Nº bultos" required autofocus>
                        </div>
                        <input type="submit" value="Enviar">
                        
                    </div>
                </div>
                </form>
                
            </div>
      </div>  
            
    </section>    
    <?php include './col/footer.php'; ?>
