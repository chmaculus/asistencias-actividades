<?php

	#---------------------------------------------------
	function rows_getclientes_mysql($dni = 0){
		log_this("logs/rows.log",date("H:i:s")."rows: 11\n");
		if($dni==0){
			return 0;
		}
		$q='select * from clientes_dalvian where numero_documento="'.$dni.'"';
		$rows=mysql_num_rows(mysql_query($q));
		return $rows;
	}
	#---------------------------------------------------


	#---------------------------------------------------
	function getclientes_mysql_dni($dni = 0){
		if($dni==0){
			//return 0;
		}
		$q='select * from clientes_dalvian where numero_documento="'.$dni.'"';
		$query = mysql_fetch_array(mysql_query($q));
		if(mysql_error()){echo mysql_error();}
		//log_this("logs/get_clientes.log","dni:".$q."\n");
		//log_this("logs/get_clientes.log","\n".print_r($query,true));
		return $query;
	}
	#---------------------------------------------------



	#---------------------------------------------------
	function getclientes_mssql($dni = 0)
	{
/*
		$this->db2->select('*');
		$this->db2->from('clientes');
		$this->db2->where("DNI like '%".$dni."%'");
		$this->db2->limit(1);
		$query = $this->db2->get();
		return $query->result_array();
		*/
	}


	#---------------------------------------------------
function getclientesByMznaCasa($mzna, $casa)
	{
		/*
		consultar manzana y casa en tabla mysql en caso de no encontrar nada consultar tabla mssql
		*/
		$q='select COD, NOM, DOM, CALLE, NUMERO, MZNA, CASA, PISO, DEPTO from clientes where mzna=\''.$mzna.'\' and casa=\''.$casa.'\' or ( dom like \'%M '.$mzna.' %\' and dom like \'%C '.$casa.'%\') limit 1';

		log_this("logs/mzacasa.log",print_r(date("H:i:s")." ".$q,true)."\n");
		//log_this("logs/mzacasa.log",print_r($query,true)."\n");
		return $query->result_array();
	}
	#---------------------------------------------------


	#---------------------------------------------------
	function trae_cliente_by_id($id){
		if($id==0){
			return 0;
		}
		/*
		$this->db1->select('*');
		$this->db1->from('clientes_dalvian');
		$this->db1->where('id ="'.$id.'"');
		//$this->db1->limit(1);
		$query = $this->db1->get();
		return $query->result_array();
		*/
	}
	#---------------------------------------------------


?>

