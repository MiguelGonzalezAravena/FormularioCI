<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-27 18:39:45
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-11-11 03:25:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <h1>Formulario en PHP</h1>
  <?php echo validation_errors('<div class="alert alert-danger"><i class="glyphicon glyphicon-warning-sign"></i> ', '</div>'); ?>
  <?php echo isset($error) ? '<div class="alert alert-danger"><i class="glyphicon glyphicon-warning-sign"></i> ' . $error . '</div>': ''; ?>
  <!-- Formulario -->
  <?php echo form_open_multipart('formulario/enviar'); ?>
    <!-- Hidden -->
    <?php echo form_hidden('enviado', 1); ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Formulario</h3>
      </div>
      <div class="panel-body">
        <!-- Texto -->
        <div class="form-group">
        	<?php echo form_label('Nombre', 'nombre'); ?>
          <?php echo form_input(array('value' => set_value('nombre'), 'class' => 'form-control', 'name' => 'nombre', 'placeholder' => 'Ingrese su nombre')); ?>
        </div>
        <!-- Email -->
        <div class="form-group">
        	<?php echo form_label('Correo electrónico', 'correo'); ?>
          <?php echo form_input(array('value' => set_value('correo'), 'type' => 'email', 'class' => 'form-control', 'name' => 'correo', 'placeholder' => 'Ingrese su correo electrónico')); ?>
        </div>
        <!-- Password -->
        <div class="form-group">
        	<?php echo form_label('Contraseña', 'contrasena'); ?>
          <?php echo form_input(array('value' => set_value('contrasena'), 'type' => 'password', 'class' => 'form-control', 'name' => 'contrasena', 'placeholder' => 'Ingrese su contraseña')); ?>
        </div>
        <!-- File -->
        <div class="form-group">
        	<?php echo form_label('Foto de perfil', 'foto'); ?>
          <?php echo form_input(array('type' => 'file', 'class' => 'form-control', 'name' => 'foto')); ?>
        </div>
        <!-- Textarea -->
        <div class="form-group">
        	<?php echo form_label('Descripción', 'descripcion'); ?>
          <?php echo form_textarea(array('value' => set_value('descripcion'), 'class' => 'form-control', 'name' => 'descripcion', 'placeholder' => 'Ingrese una descripción')); ?>
        </div>
        <!-- Select -->
        <div class="form-group">
        	<?php echo form_label('Año de ingreso', 'anio'); ?>
          <?php echo form_dropdown('anio', array('' => 'Seleccione un año', 2009 => 2009, 2010 => 2010, 2011 => 2011, 2012 => 2012, 2013 => 2013, 2014 => 2014), set_value('anio'), 'class="form-control"'); ?>
          </select>
        </div>
        <!-- Radio -->
        <div class="form-group">
        	<?php echo form_label('Sexo', 'sexo'); ?><br />
          <?php echo form_radio(array('name' => 'sexo', 'value' => 'm', 'checked' => (set_value('sexo') == 'm' ? true : false))); ?> Masculino<br />
          <?php echo form_radio(array('name' => 'sexo', 'value' => 'f', 'checked' => (set_value('sexo') == 'f' ? true : false))); ?> Femenino<br />
        </div>
        <!-- Checkbox -->
        <div class="form-group">
        	<?php echo form_label('Términos y condiciones', 'terminos'); ?><br />
          <?php echo form_checkbox(array('name' => 'terminos', 'value' => 1, 'checked' => (set_value('terminos') == 1 ? true : false))); ?> Acepto y he leído los términos y condiciones.<br />
        </div>
        <!-- div class="form-group">
        	<?php echo form_checkbox(array('name' => 'contenido', 'value' => 1, 'checked' => (set_value('contenido') == 1 ? true : false))); ?> <b>¿Ver la estructura del contenido que se envió?</b>
        </div-->
      </div>
      <div class="panel-footer">
        <div class="text-right">
        	<!-- Button reset -->
        	<?php echo anchor('/', '<i class="glyphicon glyphicon-repeat"></i> Reiniciar', 'class="btn btn-primary"'); ?>
          <!-- Button submit -->
          <?php echo form_submit('enviar', 'Enviar', 'class="btn btn-success"'); ?>
        </div>
      </div>
    </div>
  </form>