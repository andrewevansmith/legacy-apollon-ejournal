<?php

class About_model extends Model {

    function get_page($id)
    {
        $query = $this->db->query("SELECT * FROM about_pages WHERE id = '$id'");
        $row = $query->result_array();
        return $row[0];
    }

    function get_title($id)
    {
        $query = $this->db->query("SELECT title FROM about_pages WHERE id = '$id'");
        $row = $query->result_array();
        $row = $row[0];
        $title = $row['title'] . ' | Apollon';
        return $title;
    }


}