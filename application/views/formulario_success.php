<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-11-11 02:18:22
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-11-11 03:22:02
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      <p>Bienvenido(a) <b><?php echo $nombre; ?></b>,</p>
      <p>Tu correo electrónico es <b><?php echo $correo; ?></b>, y tu contraseña tiene <b><?php echo strlen($contrasena); ?></b> caracteres.</p>
      <p>
        Tu foto de perfil es: <br />
        <img src="<?php echo base_url('uploads/' . $foto['upload_data']['file_name']); ?>" class="thumbnail">
      </p>
      <p>
        Tu descripción es: <br />
        <blockquote>
          <?php echo $descripcion; ?>
        </blockquote>
      </p>
      <p>
        Tu año de ingreso es: <b><?php echo $anio; ?></b>
      </p>
      <p>
        Tu sexo es: <b><?php echo ($sexo == 'm' ? 'Masculino' : 'Femenino'); ?></b>
      </p>
      <p>
        Tu <b><?php echo ($terminos == 1 ? 'sí' : 'no'); ?></b> aceptaste los términos y condiciones.</b>
      </p>
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <?php echo anchor('/', '<i class="glyphicon glyphicon-chevron-left"></i> Volver', 'class="btn btn-primary"'); ?>
      </div>
    </div>
  </div>