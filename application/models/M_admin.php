<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin extends CI_Model{
    
    public function login($data){
		$this->db->from('tbl_admin');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$result = $this->db->get();
		$result =  $result->result();
		if(isset($result[0])){
			return $result[0];
		}else{
			return FALSE;
		}
	}

	public function get_all_data_file() {  
        $sql = "SELECT
					a.*
				FROM
					tbl_users a
				WHERE
					a.status=1
				ORDER BY
				a.modified ASC";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function get_datareport1($datefrom,$dateto) {  
        $sql = "SELECT
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%Y-%m-%d'
					) AS 'Tgl',
					CASE db_wahana.tbl_users. STATUS
				WHEN 0 THEN
					'Reg'
				WHEN 1 THEN
					'Playing'
				WHEN 2 THEN
					'Done'
				ELSE
					NULL
				END AS 'Status',
				 count(1) AS reg,
				 count(DISTINCT email) AS email
				FROM
					db_wahana.tbl_users
				WHERE
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%y-%m-%d'
					) between '$datefrom' AND '$dateto'
				AND nama_anak <> 'Test'
				GROUP BY
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%y-%m-%d'
					),
					db_wahana.tbl_users. STATUS";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function get_datareport2($datefrom,$dateto) {  
        $sql = "SELECT
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%Y-%m-%d'
					) AS tgl,
					count(1) AS jml,
					sum(
						CASE
						WHEN db_wahana.tbl_users. STATUS = 2 THEN
							1
						ELSE
							0
						END
					) AS play,
					count(DISTINCT email) AS email
				FROM
					db_wahana.tbl_users
				WHERE
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%y-%m-%d'
					) between '$datefrom' AND '$dateto'
				AND nama_anak <> 'Test'
				GROUP BY
					DATE_FORMAT(
						db_wahana.tbl_users.created,
						'%y-%m-%d'
					)";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }

    public function update_filedata($hasilscan, $data){
      $this->db->where('unix_code', $hasilscan);
      $this->db->where('status', '0');

      $this->db->update('tbl_users', $data);
    }

    public function delete_filedata($id, $data){
      $this->db->where('id', $id);
      $this->db->where('status', '1');

      $this->db->update('tbl_users', $data);
    }
}

?>