<?php

class Profile_model extends Model {

    function get_contributor($id)
    {
        $query = $this->db->query("SELECT * FROM contributor WHERE id = '$id'");
        $row = $query->result_array();
        return $row[0];
    }

    function get_title($id)
    {
        $query = $this->db->query("SELECT title, job FROM contributor WHERE id = '$id'");
        $row = $query->result_array();
        $row = $row[0];
        $title = $row['title'] . ' - ' . $row['job'] . ' | Apollon';
        return $title;
    }

    function get_list_others()
    {
        $names = array();
        $new_list = array();
        $count = 0;
        $temp_array = array();
        
        $query = $this->db->query("SELECT title FROM faculty");
        $row = $query->result_array();
        
        // -- sorting by last name  
        for ($i=0; $i<count($row); $i++)
          $names[$i] = $row[$i]['title'];
                  
        foreach ($names as &$name)
        {
          $temp_array = explode(' ', $name);
          $temp_array = array_reverse($temp_array);
          $name = implode(' ', $temp_array);
        }  
        
        sort($names);

        
        
        
        foreach ($names as &$name)
        {
          $temp_array = explode(' ', $name);
          $temp_array = array_reverse($temp_array);
          $name = implode(' ', $temp_array);
        }  
        
        $test = $names[count($names)-1];

        $count = 0;
        foreach ($names as $name)
        {
            if ($count == count($names) -1) 
            {
              $name = $test;
            }
            $query = $this->db->query("SELECT * FROM faculty WHERE title ='$name'");
            //print_r($query->result_array());
            $temp = $query->result_array();
            $new_list[$count] = $temp[0];
            $count++;
        }        

        //$row = $new_list->result_array();
        
        
        return $new_list;
    }
}
