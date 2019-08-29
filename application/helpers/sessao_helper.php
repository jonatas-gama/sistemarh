<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	if(!function_exists('verificaSessao')){
		function verificaSessao($sessao){

			$ci = get_instance();
			if(!$ci->session->userdata('nome')){
				$ci->session->set_flashdata('msg-warning', 'Favor realizar login novamente');
				redirect('/');
			}

		}
	}