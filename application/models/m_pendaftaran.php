<?php

class M_pendaftaran extends CI_Model{
	function tampil_pnd(){
        $data=$this->db->query("SELECT pendaftaran.ID_PND, perusahaan.NAMA_PR, dosbing.NAMA_DS, mahasiswa.NAMA_M 
                                FROM pendaftaran, perusahaan, dosbing, mahasiswa, pendaftaran_klp
                                WHERE pendaftaran.ID_PR = perusahaan.ID_PR AND pendaftaran.ID_DS = dosbing.ID_DS
                                AND pendaftaran.ID_PND = pendaftaran_klp.ID_PND AND pendaftaran_klp.ID_M = mahasiswa.ID_M
                                AND mahasiswa.ST_KETUA = 0
                                ORDER BY pendaftaran.ID_PND ASC");
		return $data;
        }

        function tampil_dt_pnd($ID_PND){
                $data=$this->db->query("SELECT pendaftaran.ID_PND, pendaftaran.ID_PR, perusahaan.NAMA_PR, perusahaan.ALAMAT_PR, dosbing.NAMA_DS  
                                        FROM pendaftaran, perusahaan, dosbing
                                        WHERE pendaftaran.ID_PR = perusahaan.ID_PR 
                                        AND pendaftaran.ID_DS = dosbing.ID_DS
                                        AND pendaftaran.ID_PND =  '$ID_PND'");
                        return $data;
                }

        function tampil_dt_klp($ID_PND){
                $data = $this->db->query("SELECT pendaftaran_klp.ID_PND, pendaftaran_klp.ID_M, mahasiswa.NIM, mahasiswa.NAMA_M
                                        FROM pendaftaran_klp, mahasiswa
                                        WHERE pendaftaran_klp.ID_M = mahasiswa.ID_M
                                        AND pendaftaran_klp.ID_PND = '$ID_PND'");
                        return $data;
        }

        function selectMaxID(){
                $query = $this->db->query("SELECT MAX(ID_PND) as ID_PND from pendaftaran");
                $hasil = $query->row();
                return $hasil->ID_PND;       
        }

        function comboDS(){
                $data = $this->db->query("SELECT ID_DS, NAMA_DS FROM dosbing");
                return $data;
        }

        function comboPR(){
                $data = $this->db->query("SELECT ID_PR, NAMA_PR FROM perusahaan");
                return $data;
        }

        function bulan(){
                $data = $this->db->query("SELECT BL FROM bulan");
                return $data;
        }

        function jmlh_pr(){
                $data = $this->db->query("SELECT perusahaan.ID_PR, perusahaan.NAMA_PR, perusahaan.ALAMAT_PR, COUNT(perusahaan.ID_PR) AS JMLH_PR FROM perusahaan, pendaftaran 
                WHERE perusahaan.ID_PR = pendaftaran.ID_PR
                GROUP BY pendaftaran.ID_PR");
                return $data;
        }

        // tambah data pendaftaran
        function tmbh_pnd($data, $table){
                $this->db->insert($table, $data);
        }
        
        // tampil data Pendaftaran
        function data_kel(){
                $data = $this->db->query("SELECT perusahaan.NAMA_PR, perusahaan.ALAMAT_PR, dosbing.NAMA_DS, pendaftaran.WAKTU, pendaftaran.PROPOSAL
                FROM pendaftaran, perusahaan, dosbing, pendaftaran_klp, mahasiswa
                WHERE pendaftaran.ID_PR = perusahaan.ID_PR AND pendaftaran.ID_DS = dosbing.ID_DS
                AND pendaftaran.ID_PND = pendaftaran_klp.ID_PND AND pendaftaran_klp.ID_M = mahasiswa.ID_M
                AND mahasiswa.NIM = '".$user['identity']."'");
        return $data;
        }

        function get_mhs()
        {
                $this->db->select('*, mahasiswa.NAMA_M AS nama, 
                mahasiswa.ID_M AS id_mhs,pendaftaran.*');
                $this->db->from('pendaftaran_klp');
                $this->db->join('mahasiswa','pendaftaran_klp.ID_M = id_mhs');
                $query = $this->db->get();

                $afftectedRows = $this->db->affected_rows();
                if ($afftectedRows == 1) {
                        return $query;
                }else{
                        return FALSE;
                }
        }
}
