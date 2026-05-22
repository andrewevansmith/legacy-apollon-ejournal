<?php

class Article_model extends Model {

    function get_article($id)
    {
        $query = $this->db->query("SELECT * FROM article WHERE id = '$id'");
        $row = $query->result_array();
        return $row[0];
    }

    function get_title($id)
    {
        $query = $this->db->query("SELECT title, author FROM article WHERE id = '$id'");
        $row = $query->result_array();
        $row = $row[0];
        $title = $row['title'] . ' - ' . $row['author'] . ' | Apollon';
        return $title;
    }


}