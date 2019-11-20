<?php
class m_login extends CI_Model
{

    function tampilkan_data()
    {
        return $this->db->get("thesis");
    }
    function insert_table($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function select_table($data, $table)
    {
        $this->db->select($table, $data);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function cek_login($tangkapUsername,$tangkapPassword)
    {
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.user_type_role = "Admin" AND user_details.user_username ="' . $tangkapUsername . '" AND user_details.user_password ="' .$tangkapPassword.  '" AND user_details.user_status = 1');
        
    }
    function cek_staff($tangkapUsername,$tangkapPassword)
    {
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.user_type_role = "Staff" AND user_details.user_username = "' . $tangkapUsername . '" AND user_details.user_password="' .$tangkapPassword.  '"');
        
    }
    function cek_Pic($tangkapUsername,$tangkapPassword)
    {
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.user_type_role = "PIC" AND user_details.user_username = "' . $tangkapUsername . '" AND user_details.user_password="' .$tangkapPassword.  '"');
        
    }
    function getProfile($idprofile)
    {
        $query = $this->db->query("SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.id_user ='" . $idprofile . "' AND user.user_status = 1");
        return $query;
    }
    function getLogin($username)
    {
        $query = $this->db->query("SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user_details.user_username ='" . $username . "' AND user_details.user_status = 1");
        return $query;
    }

    function getIDpassword($tangkapID)
    {
        $query = $this->db->query("SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user.id_user ='" . $tangkapID . "' AND user.user_status = 1");
        return $query;
    }

    function getAdmin()
    {
        return $this->db->query('SELECT * FROM user INNER JOIN user_details ON user.id_user = user_details.id_user WHERE user_details.user_status = 1');
        
    }
    function getID(){
        return $this->db->query('SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1');
    }

    function select($table, $col, $val)
    {
        $this->db->where($col, $val);
        $query = $this->db->get($table);
        return $query;
    }
}
