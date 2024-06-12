<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_Controller extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		/*$this->load->model('Entidad_eloquent');
		$this->load->model('Registroasistentes_eloquent');
		$this->form_validation->set_message('loginok', 'Usuario o clave incorrectos');
		$this->form_validation->set_message('Clave', 'Ingrese contraseña');*/
	}

	public function index()
	{
		//if($this->session->userdata('user_guard') == '' || $this->session->userdata('user_guard') == null) {
			// session isn't started
			$this->load->view('auth/login_view');
		//}else{
		//	redirect(base_url() . $this->session->userdata('user_guard') . '/index');
		//}
		
	}

	public function login()
    {
		$login = $this->input->post('username');
		$password = $this->input->post('password');

		if ($login != NULL && $password != NULL) {

			$this->form_validation->set_rules('username', 'Usuario', 'required|callback_loginok');
			$this->form_validation->set_rules('password', 'Clave', 'required');
			//si el proceso falla mostramos errores
			if ($this->form_validation->run() == FALSE) {
				$this->index();
				//en otro caso procesamos los datos
			} else {
				redirect(site_url($this->session->user_guard) . '/index');
				//redirect('admin/users');
			}
		} else {
			//redirect('home/acceso_denegado');
			$this->session->set_flashdata('error', 'Ingrese su usuario y contraseña.');
			$this->index();
			//$this->login();
		}
	}

	protected function loginok()
    {
        $login = $this->input->post('username');
		$password = $this->input->post('password');
		//return $this->Usuariolib->login($login, $password);
		$this->load->library('LoginLib');
		$util = new LoginLib();
		$checkUser = $util->login($login, $password);
		//print_r('checkUser'.$checkUser);
		$this->session->set_flashdata('error', $checkUser['error']);
		return $checkUser['isLogged'];
    }

	public function username()
    {
        return 'email';
    }

	public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
