<?php

class Admin_model extends Model {

  function get_tables()
  {
    return $this->db->list_tables();
  }
  
  function get_fields($table)
  {
    return $this->db->list_fields($table);
  }
  
  function insert($table, $content)
  {
    return $this->db->insert($table, $content);
  }


  function get_data()
  {
    $categories = $this->get_tables();
    foreach ($categories as $category)
    {
      if ($category != 'admin_user')
      {
        //$fields = $this->db->list_fields($category);
        //$unaccepted = array('body','references', 'author_bio');
        //$fields = array_diff($fields, $unaccepted);
        //$fields = implode(',', $fields);
        $count = 0;
        $query = $this->db->query("SELECT id, title FROM $category ORDER BY id");
        $row = $query->result_array();
        foreach ($row as $result)
        {
            $array[$category][$count] = $result;
            $count++;
        }
      }
    }
    return $array;
  }
  
  function get_all($table, $id)
  {
    $query = $this->db->query("SELECT * FROM $table WHERE id = $id");
    $query =  $query->result_array();
    return $query[0];
  }
  

  function change($table, $content)
  {
    $this->db->where('id', $content['id']);    
    return $this->db->update($table, $content); 
  }
  
  function delete($table, $id)
  {
    return $this->db->query("DELETE FROM $table WHERE id = $id");
  }
  
  function valid_credentials($username, $password)
  {
    $query = $this->db->query("SELECT * FROM admin_user WHERE 
    username = '$username' AND password = '$password'");
    if ($query->num_rows() == 0)
      return false;
    return true;
  }


}