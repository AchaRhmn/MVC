<?php
class Blog extends Controller {
    public function index() {
        $data['title'] = "Blog";
        $data['blog'] = 
        $this->model("Blog_model")->getAllBlog();
        $this->view("Templates/header", $data);
        $this->view("blog/index", $data);
        $this->view("Templates/footer", $data);
    }
}