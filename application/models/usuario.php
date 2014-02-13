<?php
class Usuario extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_usuarios()
    {
        $query = $this->db->get('entries', 10);
	//$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
    function datos_medico(){
        $data=array();
        $query=$this->db->query('select especialidad,direccion,telefono,titulo,url from datos_medico  join cat_especialidad on cat_especialidad.idcat_especialidad=datos_medico.idcat_especialidad;');
      if($query){
      $total=$query->num_rows();
      $data[0]=$total;
      if($total>0){
     
      $data[1]=$query->result();
      return $data;
      }else{
      echo false;
      }
      
      }else{
      echo false;
      }
    }
    
    function cat_especialidad(){
       $query=$this->db->query("select * from cat_especialidad");
        
          if($query){
          $total=$query->num_rows();
          
          if($total>0){
              return $query->result();
          }else{
              return false;
          }
        }else{
        return false;
        }
    }
}
