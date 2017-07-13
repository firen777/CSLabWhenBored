<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    public function set_news() {
        $this->load->helper('url');
        $this->load->helper('security');

        $slug = url_title(xss_clean($this->input->post('title')), 'dash', TRUE);

//        $data = array(
//            'title' => $this->input->post('title', TRUE), //2nd bool para is for xss filtering.
//            'slug' => $slug,
//            'text' => $this->input->post('text', TRUE) //ditto for 2nd bool para.
//        );
        $data = array(
            'title' => xss_clean($this->input->post('title')), //2nd bool para is for xss filtering.
            'slug' => $slug,
            'text' => xss_clean($this->input->post('text')) //ditto for 2nd bool para.
        );

        return $this->db->insert('news', $data);
    }

}
