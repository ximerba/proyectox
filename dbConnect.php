<?php
class dbConnection{
    protected $db_conn, $_query, $_numRows, $_fetchAll;
    public $db_name = 'proyectox';
    public $db_user = '';
    public $db_pass = '';
    public $db_host = 'localhost';

    function connect(){ 
        $this->db_conn = mysql_connect($db_host, $db_user, $db_pass);
        mysql_select_db($db_name, $this->db_conn);
        if(mysql_errno($this->db_conn)){
            return mysql_error($this->db_conn);
        }
        else{
            return $this->db_conn;
        }
    }

    public function query($sql){
        $this->_query = mysql_query($sql, $this->db_conn);
        $this->_numRows = mysql_num_rows($this->_query);
        $this->_fetchAll = mysql_fetch_array($this->_query);
    }
}
?>
