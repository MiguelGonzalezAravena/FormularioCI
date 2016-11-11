<?php
/**
 * @Author: Miguel González Aravena
 * @Email: miguel.gonzalez.93@gmail.com
 * @Github: https://github.com/MiguelGonzalezAravena
 * @Date: 2016-10-27 18:37:10
 * @Last Modified by: Miguel GonzÃ¡lez Aravena
 * @Last Modified time: 2016-11-11 03:17:56
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
  public function index() {
    $this->load->template('formulario_view');
  }

  public function enviar() {
    $config['upload_path']   = $this->config->item('upload_path');
    $config['allowed_types'] = $this->config->item('allowed_types');
    $config['max_size']      = $this->config->item('max_size');
    $config['max_width']     = $this->config->item('max_width');
    $config['max_height']    = $this->config->item('max_height');
    $this->load->library('upload', $config);

    // Nombre de variables a utilizar
    $nombre = $this->input->post('nombre');
    $correo = $this->input->post('correo');
    $contrasena = $this->input->post('contrasena');
    $descripcion = $this->input->post('descripcion');
    $anio = $this->input->post('anio');
    $sexo = $this->input->post('sexo');
    $terminos = $this->input->post('terminos');

    // Establecer campos a validar
    $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim');
    $this->form_validation->set_rules('correo', 'Correo electrónico', 'required|valid_email');
    $this->form_validation->set_rules('contrasena', 'Contraseña', 'required|trim');
    $this->form_validation->set_rules('descripcion', 'Descripción', 'required|trim');
    $this->form_validation->set_rules('anio', 'Año de ingreso', 'required');
    $this->form_validation->set_rules('sexo', 'Sexo', 'required');
    $this->form_validation->set_rules('terminos', 'Términos y condiciones', 'required');

    if(!$this->form_validation->run() || !$this->upload->do_upload('foto')) {
      $error = array('error' => $this->upload->display_errors());
      // Mostrar formulario en caso de error
      $this->load->template('formulario_view', $error);
    } else {
      $foto = array('upload_data' => $this->upload->data());
      $data = array(
        'nombre' => $nombre,
        'correo' => $correo,
        'contrasena' => $contrasena,
        'descripcion' => $descripcion,
        'anio' => $anio,
        'sexo' => $sexo,
        'terminos' => $terminos,
        'foto' => $foto
      );
      // Mostrar contenido
      $this->load->template('formulario_success', $data);
    }
  }
}
