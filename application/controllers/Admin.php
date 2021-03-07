<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('session','pdf'));
		$this->load->model('Consultas');
	}

	public function Template($contenido)
	{
		$layouts = array(
			'head' => $this->load->view('template/head', '', TRUE),
			'nav' => $this->load->view('template/nav', '', TRUE),
			'aside' => $this->load->view('template/aside', '', TRUE),
			'vista' => $contenido,
			'footer' => $this->load->view('template/footer', '', TRUE),
		);

		$this->load->view('template/contenido', $layouts);
	}

	public function index()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$alumnos = $this->Consultas->ConsultaAlumnos();
			$docentes = $this->Consultas->ConsultaDocentes();
			$p_mecanica = $this->Consultas->ConsultaAlumnoPrimeroMecanica();
			$p_electricidad = $this->Consultas->ConsultaAlumnoPrimeroElectricidad();
			$p_petro = $this->Consultas->ConsultaAlumnoPrimeroPetro();
			$sg_mecanica = $this->Consultas->ConsultaAlumnoSgMecanica();
			$sg_electricidad = $this->Consultas->ConsultaAlumnoSgElectricidad();
			$sg_petro = $this->Consultas->ConsultaAlumnoSgPetro();
			$t_mecanica = $this->Consultas->ConsultaAlumnoTerceroMecanica();
			$t_electricidad = $this->Consultas->ConsultaAlumnoTerceroElectricidad();
			$t_petro = $this->Consultas->ConsultaAlumnoTerceroPetro();
			$c_mecanica = $this->Consultas->ConsultaAlumnoCuartoMecanica();
			$c_electricidad = $this->Consultas->ConsultaAlumnoCuartoElectricidad();
			$c_petro = $this->Consultas->ConsultaAlumnoCuartoPetro();
			$q_mecanica = $this->Consultas->ConsultaAlumnoQuintoMecanica();
			$q_electricidad = $this->Consultas->ConsultaAlumnoQuintoElectricidad();
			$q_petro = $this->Consultas->ConsultaAlumnoQuintoPetro();
			$seelectricidad = $this->Consultas->ConsultaAlumnoSextoElectricicdad();
			$semecanica = $this->Consultas->ConsultaAlumnoSextoMecanica();
			$sepetro = $this->Consultas->ConsultaAlumnoSextoPetro();
			$masculino = $this->Consultas->ConsultaAlumnosM();
			$femenino = $this->Consultas->ConsultaAlumnoF();
			$view = $this->load->view('admin/admin_dashboard', array('alumnos'=>$alumnos, 'docentes'=>$docentes, 'q_mecanica'=>$q_mecanica, 'q_electricidad'=>$q_electricidad, 'q_petro'=>$q_petro, 'se_electricidad'=>$seelectricidad, 'se_mecanica'=>$semecanica, 'se_petro'=>$sepetro, 'masculino'=>$masculino, 'femenino'=>$femenino, 'c_mecanica'=>$c_mecanica, 'c_electricidad'=>$c_electricidad, 'c_petro'=>$c_petro, 't_mecanica'=>$t_mecanica, 't_electricidad'=>$t_electricidad, 't_petro'=>$t_petro, 'sg_mecanica'=>$sg_mecanica, 'sg_electricidad'=>$sg_electricidad, 'sg_petro'=>$sg_petro, 'p_mecanica'=>$p_mecanica, 'p_electricidad'=>$p_electricidad, 'p_petro'=>$p_petro), TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}

	}

	######## Modulo De estudiantes ########

	public function Estudiante()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$view = $this->load->view('admin/busqueda_estudiante', '', TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function FichaEstudiante()
	{
		if ($ci = $this->input->post('cedula')) {
			if ($result = $this->Consultas->LeerEstudiante($ci)) {
				if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
					$turnos = $this->Consultas->ConsultaTurno();
					$cursos = $this->Consultas->ConsultaCurso();
					$secciones = $this->Consultas->ConsultaSeccion();
					$codigos = $this->Consultas->ConsultaCodigo();
					$nacimiento = $this->Consultas->ConsultaNacimiento();
					$fotos_e = $this->Consultas->ConsultaFotoE();
					$fotos_r = $this->Consultas->ConsultaFotoR();
					$cartas_v = $this->Consultas->ConsultaVacunacion();
					$certificados = $this->Consultas->ConsultaCertificado();
					$notas = $this->Consultas->ConsultaNota();
					$menciones = $this->Consultas->ConsultaMencion();
					$view = $this->load->view('admin/ficha/ficha_estudiante', array('result' => $result, 'turnos' => $turnos, 'cursos' => $cursos, 'secciones' => $secciones, 'codigos' => $codigos, 'nacimiento' => $nacimiento, 'fotos_e' => $fotos_e, 'fotos_r' => $fotos_r, 'cartas_v' => $cartas_v, 'certificados' => $certificados, 'notas' => $notas, 'menciones' => $menciones), TRUE);
							$this->Template($view);

				}else{
					redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
				}
			}
		}
	}

	public function EliminarEstudiante()
	{
		$id = $this->input->get('id');
		if ($id != '') {
			$this->Consultas->DeleteEstudiante($id);
		}
	}

	public function EditarEstudiante()
	{
		$id_alumno = $this->input->post('id');
		$datos = array('p_nombre_e' => $this->input->post('p_nombre'),
						's_nombre_e' => $this->input->post('s_nombre'),
						'p_apellido_e' => $this->input->post('p_apellido'),
						's_apellido_e' => $this->input->post('s_apellido'),
						'ci_e' => $this->input->post('cedula'),
						'f_nacimiento_e' => $this->input->post('nacimiento'),
						'edad' => $this->input->post('edad'),
						'codigo' => $this->input->post('codigo'),
						'telefono' => $this->input->post('telefono'),
						'direccion' => $this->input->post('textarea'),
						'curso' => $this->input->post('curso'),
						'seccion' => $this->input->post('seccion'),
						'turno' => $this->input->post('turno'),
						'p_nacimiento' => $this->input->post('partida_nacimiento'),
						'foto_e' => $this->input->post('foto_e'),
						'foto_r' => $this->input->post('foto_r'),
						'c_vacunacion' => $this->input->post('c_vacunacion'),
						'certificado' => $this->input->post('certificado'),
						'notas' => $this->input->post('notas'),
						'mencion' => $this->input->post('mencion')
		 );
		if ($datos != '' && $id_alumno != '') {
			$this->Consultas->EditEstudiante($id_alumno, $datos);
		}
	}

	public function NuevoEstudiante()
	{
		if ($ci_d = $this->input->post('docente_ci')) {
			if ($return_d = $this->Consultas->IdDocente($ci_d)) {
				$datos = array('p_nombre_e' => $this->input->post('p_nombre'),
								's_nombre_e' => $this->input->post('s_nombre'),
								'p_apellido_e' => $this->input->post('p_apellido'),
								's_apellido_e' => $this->input->post('s_apellido'),
								'ci_e' => $this->input->post('ci'),
								'f_nacimiento_e' => $this->input->post('nacimiento'),
								'edad' => $this->input->post('edad'),
								'codigo' => $this->input->post('codigo'),
								'telefono' => $this->input->post('telefono'),
								'sexo' => $this->input->post('sexo'),
								'direccion' => $this->input->post('dir'),
								'docente' => $return_d->id_docente,
								'curso' => $this->input->post('curso'),
								'seccion' => $this->input->post('seccion'),
								'turno' => $this->input->post('turno'),
								'p_nacimiento' => $this->input->post('p_nacimiento'),
								'foto_e' => $this->input->post('foto_e'),
								'foto_r' => $this->input->post('foto_r'),
								'c_vacunacion' => $this->input->post('c_vacunacion'),
								'certificado' => $this->input->post('certificado'),
								'notas' => $this->input->post('notas'),
								'mencion' => $this->input->post('mencion')

				);
				if ($datos != null) {
					$this->Consultas->NewEstudiante($datos);
				}else{
					echo "se necesian datos";
				}
			}
		}
	}

	######## Modulo De docentes ########


	public function Docente()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$view = $this->load->view('admin/busqueda_docente', '', TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function FichaDocente()
	{
		if ($ci = $this->input->post('cedula')) {
			if ($result = $this->Consultas->LeerDocente($ci)) {
				if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
					$codigos = $this->Consultas->ConsultaCodigo();
					$view = $this->load->view('admin/ficha/ficha_docente', array('resultado' => $result, 'codigos' => $codigos), TRUE);
					$this->Template($view);
				}
			}
		}
	}

	public function EliminarDocente()
	{
		$id = $this->input->get('id');
		if ($id != '') {
			$this->Consultas->DeleteDocente($id);
		}
	}

	public function EditarDocente()
	{
		$id_docente = $this->input->post('id');
		$datos = array('p_nombre_d' => $this->input->post('p_nombre'),
						's_nombre_d' => $this->input->post('s_nombre'),
						'p_apellido_d' => $this->input->post('p_apellido_d'),
						's_apellido_d' => $this->input->post('s_apellido_d'),
						'ci_d' => $this->input->post('ci_d'),
						'f_nacimiento_d' => $this->input->post('f_n'),
						'codigo' => $this->input->post('codigo'),
						'telefono_d' => $this->input->post('telefono'),
						'direccion_d' => $this->input->post('direccion_d')

		);
		if ($datos != '' && $id_docente != '') {
			$this->Consultas->EditDocente($id_docente, $datos);
		}
	}

	public function NuevoDocente()
	{
		$datos = array('p_nombre_d' => $this->input->post('p_nombre'),
						's_nombre_d' => $this->input->post('s_nombre'),
						'p_apellido_d' => $this->input->post('p_apellido'),
						's_apellido_d' => $this->input->post('s_apellido'),
						'ci_d' => $this->input->post('ci'),
						'f_nacimiento_d' => $this->input->post('nacimiento'),
						'sexo' => $this->input->post('sexo'),
						'codigo' => $this->input->post('codigo'),
						'telefono_d' => $this->input->post('telefono'),
						'direccion_d' => $this->input->post('dir')

		);

		if ($datos != '') {
			$this->Consultas->NewDocente($datos);
		}
	}

	######## Modulo De login ########


	public function Ingresar()
	{
		$usuario = $this->input->post('usuario');
		$contrasena = $this->input->post('contrasena');

		if ($usuario != FALSE) {
			if ($contrasena != FALSE) {
				$this->Consultas->Login($usuario, $contrasena);
			}else{
				///
			}
		}else{
			///
		}
	}

	######## Modulo De menus ########


	public function Menu()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$view = $this->load->view('admin/menu', '', TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function RegistroDocente()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$codigos = $this->Consultas->ConsultaCodigo();
			$sexos = $this->Consultas->ConsultaSexo();
			$view = $this->load->view('admin/menu/registro_docente', array('codigos' => $codigos, 'sexo' => $sexos), TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function RegistroEstudiante()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$codigos = $this->Consultas->ConsultaCodigo();
			$sexos = $this->Consultas->ConsultaSexo();
			$cursos = $this->Consultas->ConsultaCurso();
			$secciones = $this->Consultas->ConsultaSeccion();
			$turnos = $this->Consultas->ConsultaTurno();
			$p_nacimiento = $this->Consultas->ConsultaNacimiento();
			$notas = $this->Consultas->ConsultaNota();
			$fotos_e = $this->Consultas->ConsultaFotoE();
			$fotos_r = $this->Consultas->ConsultaFotoR();
			$carta_v = $this->Consultas->ConsultaVacunacion();
			$certificados = $this->Consultas->ConsultaCertificado();
			$menciones = $this->Consultas->ConsultaMencion();
			$view = $this->load->view('admin/menu/registro_estudiante', array('codigos' => $codigos, 'sexos' => $sexos, 'cursos' => $cursos, 'secciones' => $secciones, 'turnos' => $turnos, 'nacimiento' => $p_nacimiento, 'notas' => $notas, 'fotos_e' => $fotos_e, 'fotos_r' => $fotos_r, 'carta_v' => $carta_v, 'certificados' => $certificados, 'menciones' => $menciones), TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function Documentos()
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$view = $this->load->view('admin/menu/documentos', '', TRUE);
			$this->Template($view);
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	######## Documentos ########

	public function Constancia()
	{

		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$ci = $this->input->post('cedula');

			if ($ci != null) {
				$datos_e = $this->Consultas->LeerAlumno($ci);
				$html = $this->load->view('admin/documentos/constancia', array('datos_e' => $datos_e ), TRUE);
	        	$this->pdf->createPDF($html, 'Constancia', false);
			}
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function ConstanciaInscripcion()
	{

		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$ci = $this->input->post('cedula');

			if ($ci != null) {
				$datos_e = $this->Consultas->LeerAlumno($ci);
				$html = $this->load->view('admin/documentos/constancia_inscripcion', array('datos_e' => $datos_e ), TRUE);
	        	$this->pdf->createPDF($html, 'Constancia_Inscripcion', false);
			}
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	public function ConstanciaRetiro()
	{

		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$ci = $this->input->post('cedula');

			if ($ci != null) {
				$datos_e = $this->Consultas->LeerAlumno($ci);
				$html = $this->load->view('admin/documentos/constancia_retiro', array('datos_e' => $datos_e ), TRUE);
	        	$this->pdf->createPDF($html, 'Constancia_Inscripcion', false);
			}
		}else{
			redirect('welcome/vistaIngresar?'.'noautorizado','refresh');
		}
	}

	######## Modulo De deslogueo ########


	public function Logout($value='')
	{
		if ($this->session->userdata('rango') == 1 AND $this->session->userdata('is_logged') == TRUE) {
			$array = array('rango' , 'is_logged' );
			$this->session->unset_userdata($array);
			$this->session->sess_destroy();
			redirect('welcome','refresh');
		}
	}
}
