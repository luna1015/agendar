<?php

include_once "../config/database.php";

class Servicio extends Database {
	
	private $tabla = "usuario_sistema";
	private $id = "id_usuario";
	private $alias = "u";
	
	public function registrar($params) {
		
		$query = "INSERT INTO $this->tabla";
		$query .= "($this->id,".implode(",",array_keys($params)).")";
		$query .= " VALUES(null".str_repeat(",?",count($params)).")";
		$formats = "";
		
		foreach ($params as $clave => $valor) {
			
			if ( is_int($valor) ) {
				$formats .= "i";
			} else if ( is_numeric($valor) ) {
				$formats .= "d";
			} else {
				$formats .= "s";
			}
			
		} // End foreach
		
		try {
            $result = $this->execute($query, $formats, $params);
            return '{ "estado": "Ok", "mensaje": "Registro exitoso" }';
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
		
	} // End registrar
	
	public function actualizar($params) {
		
		$query = "UPDATE $this->tabla SET";		
		$formats = "";
		$cont = 0;
		
		foreach ($params as $clave => $valor) {
			
			if ( $cont == 0 ) {
				$query .= " $clave = ?";
			} else {
				$query .= " ,$clave = ?";
			}
			
			if ( is_int($valor) ) {
				$formats .= "i";
			} else if ( is_numeric($valor) ) {
				$formats .= "d";
			} else {
				$formats .= "s";
			}
			
			$cont++;
			
		} // End foreach
		
		if ( in_array($this->id,array_keys($params)) ) {
			$query .= " WHERE $this->id = ".$params[$this->id];
		}
		
		try {
            $result = $this->execute($query, $formats, $params);
            return '{ "estado": "Ok", "mensaje": "Actualizacion exitosa" }';
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
		
	}
	
    public function listar($params) {
		
		$query  = "SELECT $this->alias.*, r.*";
		$query .= " FROM $this->tabla $this->alias, rol_usuario r";
		$query .= " WHERE r.id_rol = u.id_rol_fk";		
		$order = " ORDER BY $this->id";
		$type_order = " ASC";
		$limit = " LIMIT 20";
		$formats = "";
		
		foreach ($params as $clave => $valor) {
			
			if ( is_int($valor) ) {
				$query .= " AND $clave = ?";
				$formats .= "i";
			} else if ( is_numeric($valor) ) {
				$query .= " AND $clave = ?";
				$formats .= "d";
			} else {
				$query .= " AND $clave LIKE ?";
				$params[$clave] = "%$valor%";
				$formats .= "s";
			}
			
			if ( $clave == "ordenar_por"  ) {
				$order = " ORDER BY $this->alias.$clave";
			}
			
			if ( $clave == "tipo_ordenacion" ) {
				$type_order = " $valor";
			}
			
			if ( $clave == "limite"  ) {
				$limit = " LIMIT $valor";
			}
			
		} // End foreach
		
		$result = $this->select($query.$order.$type_order.$limit, $formats, $params);
		
        return json_encode($result);
		
    } // End listar
	
	public function sesion($params) {
		
		$query  = "SELECT concat('".TOKEN_SESSION."') as token FROM $this->tabla";
		$filter = " WHERE 1=1";		
		$order = " ORDER BY $this->id";
		$type_order = " ASC";
		$limit = " LIMIT 20";
		$formats = "";
		
		$cont = 0;
		
		foreach ($params as $clave => $valor) {
			
			if ( $clave == "user_usuario" || $clave == "password_usuario" ) {
				$filter .= " AND $clave = ?";
				$formats .= "s";
				$cont++;
			}
			
			if ( $clave == "ordenar_por"  ) {
				$order = " ORDER BY $this->alias.$clave";
			}
			
			if ( $clave == "tipo_ordenacion" ) {
				$type_order = " $valor";
			}
			
			if ( $clave == "limite"  ) {
				$limit = " LIMIT $valor";
			}
			
		} // End foreach
		
		if ( $cont != 2 ) {
			$filter = " WHERE 1!=1";
		}
		
		$result = $this->select($query.$filter.$order.$type_order.$limit, $formats, $params);
		
        return json_encode($result);
		
    } // End sesion
	
} // End class

?>
