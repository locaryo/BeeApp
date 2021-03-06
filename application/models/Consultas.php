 <?php 

/**
 * 
 */
class Consultas extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}

	#public function Registro($user, $pass)
	#{
		#if ($pass) {
			#$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
			#if ($pass_hash) {
				#$datos = array(
					#'user' => $user,
					#'pass' => $pass_hash,
					#'rango' => 1
				 #);
				#if ($this->db->insert('REGISTRO', $datos)) {
					#redirect('welcome/vistaIngresar','refresh');
				#}
			#}
		#}
	#}

	public function Login($user, $pass)
	{	
		$dato = date('Y-m-d');
		if ($pass != FALSE) {
			$query_pass = $this->db->get('REGISTRO');
			$result_pass = $query_pass->row();
			if (password_verify($pass, $result_pass->pass)) {
				if ($user == TRUE) {
					$query_user = $this->db->get_where('REGISTRO', array('user' => $user ));
					if ($result_datos = $query_user->row()) {
						if ($dato == $result_datos->tiempo || $dato > $result_datos->tiempo) {
							redirect('welcome/vistaIngresar?'.'tiempovencido','refresh');
							
						}else{
							$array = array(
						        'rango' => $result_datos->rango,
						        'is_logged'  => TRUE
							);
							$this->session->set_userdata( $array );
							redirect('admin','refresh');
						}					
					}
				}
			}
		}
	}

	/////////////////// Inicio Consulta para Generar Estadisticas ///////////////////
	
	//////Consulta Estadisticas Total "Alumnos"

	public function ConsultaAlumnos()
	{
		$query = $this->db->count_all('ALUMNO');
		return $query;
	}

	//////Consultas Estadisticas por "Sexo"

	public function ConsultaAlumnosM()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('sexo', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoF()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('sexo', '1');
		return $this->db->count_all_results();
	}

	//////Consultas Estadisticas por "Año" y "Mencion"

	public function ConsultaAlumnoPrimeroMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '1');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoPrimeroElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '1');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoPrimeroPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '1');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSgMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '2');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSgElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '2');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSgPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '2');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoTerceroMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '3');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoTerceroElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '3');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoTerceroPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '3');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoCuartoMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '4');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoCuartoElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '4');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoCuartoPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '4');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoQuintoMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '5');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoQuintoElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '5');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoQuintoPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '5');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSextoMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '6');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSextoElectricicdad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '6');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnoSextoPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('curso', '6');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	//////Consultas Estadisticas por "Mencion"

	public function ConsultaAlumnosMecanica()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('mencion', '1');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnosElectricidad()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('mencion', '2');
		return $this->db->count_all_results();
	}

	public function ConsultaAlumnosPetro()
	{
		$this->db->select('*');
		$this->db->from('ALUMNO');
		$this->db->where('mencion', '3');
		return $this->db->count_all_results();
	}

	//////Consulta Estadisticas Total "Docentes"

	public function ConsultaDocentes()
	{
		$query = $this->db->count_all('DOCENTE');
		return $query;
	}

	/////////////////// Fin Consulta para Generar Estadisticas ///////////////////

	public function ConsultaTurno()
	{
		$query = $this->db->get('TURNO');
		$result = $query->result();
		return $result;
	}

	public function ConsultaMencion()
	{
		$query = $this->db->get('MENCIONES');
		$result = $query->result();
		return $result;
	}

	public function ConsultaCurso()
	{
		$query = $this->db->get('CURSO');
		$result = $query->result();
		return $result;
	}

	public function ConsultaSeccion()
	{
		$query = $this->db->get('SECCION');
		$result = $query->result();
		return $result;
	}

	public function ConsultaCodigo()
	{
		$query = $this->db->get('CODIGO');
		$result = $query->result();
		return $result;
	}

	public function ConsultaNacimiento()
	{
		$query = $this->db->get('PARTIDA_N');
		$result = $query->result();
		return $result;
	}

	public function ConsultaFotoE()
	{
		$query = $this->db->get('FOTO_E');
		$result = $query->result();
		return $result;
	}

	public function ConsultaFotoR()
	{
		$query = $this->db->get('FOTO_R');
		$result = $query->result();
		return $result;
	}

	public function ConsultaVacunacion()
	{
		$query = $this->db->get('CARTA_VACUNACION');
		$result = $query->result();
		return $result;
	}

	public function ConsultaCertificado()
	{
		$query = $this->db->get('CERTIFICADO');
		$result = $query->result();
		return $result;
	}

	public function ConsultaNota()
	{
		$query = $this->db->get('NOTAS_CERTIFICADAS');
		$result = $query->result();
		return $result;
	}

	public function ConsultaSexo()
	{
		$query = $this->db->get('SEXO');
		$result = $query->result();
		return $result;
	}

	public function LeerEstudiante($ci)
	{
		if ($ci) {
			$this->db->select('*');
			$this->db->from('ALUMNO a');
			$this->db->where('ci_e', $ci);
			$this->db->join('DOCENTE do', 'a.docente = do.id_docente');
			$this->db->join('CODIGO co', 'a.codigo = co.id_codigo');
			$this->db->join('CURSO cu', 'a.curso = cu.id_curso');
			$this->db->join('SECCION se', 'a.seccion = se.id_seccion');
			$this->db->join('TURNO tu', 'a.turno = tu.id_turno');
			$this->db->join('PARTIDA_N pn', 'a.p_nacimiento = pn.id_partida');
			$this->db->join('FOTO_E fe', 'a.foto_e = fe.id_foto_e');
			$this->db->join('FOTO_R fr', 'a.foto_r = fr.id_foto_r');
			$this->db->join('CARTA_VACUNACION ca', 'a.c_vacunacion = ca.id_carta');
			$this->db->join('CERTIFICADO ce', 'a.certificado = ce.id_certificado');
			$this->db->join('NOTAS_CERTIFICADAS nc', 'a.notas = nc.id_notas');
			$this->db->join('MENCIONES m', 'a.mencion = m.id_mencion');
			$query = $this->db->get();
			if ($result = $query->result()) {
				return $result;
			}else{
				redirect('admin/Estudiante?'.'error','refresh');
			}
		}else{
			echo "string";
		}
	}

	public function DeleteEstudiante($value)
	{
		if ($value) {
			if($this->db->delete('ALUMNO', array('id_alumno' => $value))){
				redirect('admin/Estudiante?'.'eliminado', 'refresh');
			}
		}
	}

	public function EditEstudiante($id, $value)
	{
		if ($id) {
			if ($this->db->update('ALUMNO', $value, array('id_alumno' => $id))) {
				redirect('admin/Estudiante?'.'editado','refresh');
			}else{
				echo "Error";
			}
		}
	}

	public function NewEstudiante($value)
	{
		if ($value != '') {
			$this->db->insert('ALUMNO', $value);
			redirect('admin/Menu?'.'e_registrado','refresh');
		}
	}

	public function LeerDocente($ci)
	{
		if ($ci) {
			$this->db->select('*');
			$this->db->from('DOCENTE do');
			$this->db->where('ci_d', $ci);
			$this->db->join('CODIGO co', 'do.codigo = co.id_codigo');
			$query = $this->db->get();
			if ($result = $query->result()) {
				return $result;
			}else{
				redirect('admin/Docente?'.'error','refresh');
			}
		}
	}

	public function IdDocente($ci_d)
	{
		if ($ci_d) {
			$this->db->select('id_docente');
			$this->db->from('DOCENTE');
			$this->db->where('ci_d', $ci_d);
			$query = $this->db->get();
			if ($result = $query->row()) {
				return $result;
			}else{
				echo "Cedula Invalida";
			}
		}
	}

	public function DeleteDocente($value)
	{
		if ($value) {
			if($this->db->delete('DOCENTE', array('id_docente' => $value))){
				redirect('admin/Docente?'.'eliminado', 'refresh');
			}
		}
	}

	public function EditDocente($id, $value)
	{
		if ($id) {
			if ($this->db->update('DOCENTE', $value, array('id_docente' => $id))) {
				redirect('admin/Docente?'.'editado','refresh');
			}else{
				echo "Error";
			}
		}
	}

	public function NewDocente($value)
	{
		if ($value != '') {
			$this->db->insert('DOCENTE', $value);
			redirect('admin/Menu?'.'d_registrado','refresh');
		}
	}

		public function LeerAlumno($ci)
	{
		if ($ci) {
			$this->db->select('*');
			$this->db->from('ALUMNO a');
			$this->db->where('ci_e', $ci);
			$this->db->join('CURSO cu', 'a.curso = cu.id_curso');
			$this->db->join('SECCION se', 'a.seccion = se.id_seccion');
			$this->db->join('TURNO tu', 'a.turno = tu.id_turno');
			$this->db->join('MENCIONES m', 'a.mencion = m.id_mencion');
			$query = $this->db->get();
			if ($result = $query->result()) {
				return $result;
			}else{
				redirect('admin/Documentos?'.'error','refresh');
			}
		}else{
			echo "string";
		}
	}
}

?>