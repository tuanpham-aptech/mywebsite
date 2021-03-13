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
        $table_order ="tbl_order";
        $data['order'] = $ordermodel->list_order($table_order);
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/order/order',$data);
        $this->load->view('admin/footer');

    }

    public function order_details($order_code){
        $ordermodel = $this->load->model('ordermodel');
        $table_order_details = "order_details";
        $table_product = "products";
        $cond = "$table_product.id_product=$table_order_details.product_id AND $table_order_details.order_code = '$order_code'";

        $cond_info = "$table_order_details.order_code = '$order_code'";

        $data['order_details'] = $ordermodel->list_order_details($table_product,$table_order_details,$cond);
        $data['order_info'] = $ordermodel->list_info($table_order_details,$cond_info);
        $this->load->view('admin/header');
        $this->load->view('admin/menu');

        $this->load->view('admin/order/order_details',$data);
        $this->load->view('admin/footer');
    }
    public function order_confirm($order_code){
        $ordermodel = $this->load->model('ordermodel');
        $table_order = "tbl_order";
        $cond = "$table_order.order_code='$order_code'";
        $data = array(
            'order_status' => 1
        );
        $result = $ordermodel->order_confirm($table_order,$data,$cond);

        if($result==1){
            $message['msg'] = "Đã xử lý đơn hàng thành công";
            header('Location:'.BASE_URL."/order?msg=".urlencode(serialize($message)));
        }else{
            $message['msg'] = "Đã xử lý đơn hàng thất bại";
            header('Location:'.BASE_URL."/order?msg=".urlencode(serialize($message)));
        }
    }
}