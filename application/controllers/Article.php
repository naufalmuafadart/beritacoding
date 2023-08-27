<?php

class Article extends CI_Controller {
    public function index() {
        $data['articles'] = [
            [
                'title' => 'Foo',
                'content' => 'Ini artikel tentang Foo',
            ],
            [
                'title' => 'Bar',
                'content' => 'Ini artikel tentang Bar',
            ],
        ];

        if (count($data['articles']) > 0) {
            $this->load->view('articles/list_article.php', $data);
        } else {
            $this->load->view('articles/empty_article.php');
        }
    }

    public function show() {
        $this->load->view('articles/show_article.php');
    }
}
