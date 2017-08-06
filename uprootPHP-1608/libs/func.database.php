<?php
	$dbi = array('host' => 'pdb3.biz.nf','user' => '1854492_rucoy','pass' => 'sw92jgfA39104s01Q','name' => '1854492_rucoy');
	$dbc = mysqli_connect($dbi['host'],$dbi['user'],$dbi['pass'],$dbi['name']); unset($dbi);
	class database{
		static public function select_var($sql){
			global $dbc;
			$arr = explode(' ', $sql);
			$field = $arr[1];
			$result = mysqli_query($dbc, $sql);
			if($result){
				$str = array();
				while($row = mysqli_fetch_assoc($result)){array_push($str,$row[$field]);}
				return $str['0'];
			}else{return '';}
		}
		static public function select_row($sql){
			global $dbc;
			$result = mysqli_query($dbc, $sql);
			if($result){
				$arr = array();
				while($row = mysqli_fetch_assoc($result)){$arr[] = $row;}
				return $arr['0'];
			}else{return false;}
		}
		static public function select($sql){
			global $dbc;
			$result = mysqli_query($dbc, $sql);
			if($result){
				$arr = array();
				while($row = mysqli_fetch_assoc($result)){$arr[] = $row;}
				return $arr;
			}else{return false;}
		}
		static public function insert($sql){
			global $dbc;
			if(mysqli_query($dbc, $sql)){return true;}
			else{return false;}
		}
		static public function delete_id($table, $id){
			global $dbc;
			if(mysqli_query($dbc, "DELETE FROM ".$table." WHERE id='$id' LIMIT 1")){return true;}
			else{return false;}
		}
		static public function delete($sql){
			global $dbc;
			if(mysqli_query($dbc, $sql)){return true;}
			else{return false;}
		}
		static public function update($sql){
			global $dbc;
			if(mysqli_query($dbc, $sql)){return true;}
			else{return false;}
		}
		static public function escape($var){
			global $dbc;
			if($var === null || $var === '' || strlen($var) < 1 || count($var) < 1){return '';}
			else{
				if(is_array($var) === true){for($f = 0; $f < count($var); $f++){$var[$f] = mysqli_real_escape_string($dbc, htmlspecialchars($var[$f], ENT_QUOTES, 'UTF-8'));}}
				else{$var = mysqli_real_escape_string($dbc, htmlspecialchars($var, ENT_QUOTES, 'UTF-8'));}
				return $var;
			}
		}
	}
?>
