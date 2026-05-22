<?php

class Navigation_model extends Model {

    function get_contributors()
    {
        $categories = array('content', 'design', 'faculty');
        $array = array();
        foreach ($categories as $category)
        {
            $count = 0;
            $query = $this->db->query("SELECT title, id FROM contributor WHERE category='$category' ORDER BY id");
            $row = $query->result_array();
            foreach ($row as $result)
            {
                $array[$category][$count] = $result;
                $count++;
            }
        }
        return $array;
    }

    function get_articles()
    {
        $query = $this->db->query('SELECT title,id FROM article ORDER BY id');
        $row = $query->result_array();
        return $row;
    }
    
    function get_about_pages($category)
    {
        $query = $this->db->query("SELECT title,id FROM about_pages WHERE category='$category' ORDER BY id");
        $row = $query->result_array();
        return $row;
    }
    

}