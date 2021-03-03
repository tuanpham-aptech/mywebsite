<?php
Class order extends DController{
    public function __construct(){
        Session::checkSession();
        parent::__construct();
    }
    public function index(){
        $this->order();
    }
    public function order(){
        $ordermodel = $this->load->model("ordermodel");
        $table_order ="order";
        $data['order'] = $ordermodel->list_order($table_order);
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
       
        $this->load->view('admin/order/order',$data);
        $this->load->view('admin/footer');

    }
    public function order_detail($order_code){
        echo $order_code;
    }
}