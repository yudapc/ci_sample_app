<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * author : yuda cogati
 * email  : yudapc@gmail.com
 * desc   : helper untuk boxgue
 */

if(!function_exists('assets_url')) {
  function assets_url($uri = '') {
    return base_url().'assets/';
  }
}

if(!function_exists('assetsbackend_url')) {
  function assetsbackend_url($uri = '') {
    return base_url().'assets/template/backend';
  }
}

if(!function_exists('css_url')) {
  function css_url($uri = '') {
    return base_url().'assets/css/';
  }
}

if(!function_exists('file_url')) {
  function file_url($uri = '') {
    return base_url().'assets/files/';
  }
}

if(!function_exists('images_url')) {
  function images_url($uri = '') {
    return base_url().'assets/images/';
  }
}

if(!function_exists('js_url')) {
  function js_url($uri = '') {
    return base_url().'assets/js/';
  }
}

if(!function_exists('uploads_url')) {
  function uploads_url($uri = '') {
    return base_url().'assets/uploads/';
  }
}

if(!function_exists('slug')) {
  function slug($title) {
    return strtolower(url_title($title));
  }
}

if(!function_exists('title_text')) {
  function title_text($title) {
    return ucwords(strtolower($title));
  }
}

if(!function_exists('check_login')) {
  function check_login() {
    $CI =& get_instance();
    if($CI->session->userdata('login') == false) {
      redirect('login');
    }
  }
}

if(!function_exists('class_name')) {
  function class_name() {
    $CI =& get_instance();
    return $CI->router->fetch_class();
  }
}

if(!function_exists('action_name')) {
  function action_name() {
    $CI =& get_instance();
    return $CI->router->fetch_method();
  }
}
