<?php

defined ('BASEPATH') OR exit ('No direct script access allowed');

/**Modelo para alumnos
 *Aqui tendremos informacion e insertaremos informacion de los alumnos
 * @author Equipo1
 * */


class Musuario extends CI_Model
{

	public function guardar_datos($data)
	{
		return $this->db->insert('usuarios', $data);
	}


}
