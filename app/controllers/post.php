<?php 

Class post extends DController{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->add_category();
        }
        // Danh mục bài viết 
        public function add_category(){
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/post/add_category');
            $this->load->view('admin/footer');
        }
        public function insert_category(){
            $table = 'category_post';
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );
            $categorymodel =  $this->load->model('categorymodel');
    
            $result = $categorymodel->insertcategory_post($table,$data);
            if($result == 1 ){  
                $message['msg'] = "Thêm danh mục sản phẩm thành công  ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm danh mục sản phẩm thất bại ";
                header('Location:'.BASE_URL."/post?msg=".urlencode(serialize($message)));
            }
        }
    
        public function list_category(){
            $table = 'category_post';
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->post_category($table);
            $this->load->view('admin/post/list_category',$data);
            $this->load->view('admin/footer');
        }
        public function delete_category($id){
            $table = 'category_post';
            $cond = "category_post.id_category_post = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->deletecategory_post($table,$cond);
            if($result == 1 ){
                $message['msg'] = "Xóa danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }
    
        }
        public function edit_category($id){ 
            $table = 'category_post';
            $cond = "id_category_post = '$id'";
            $categorymodel = $this->load->model('categorymodel');
            $data['categorybyid'] = $categorymodel->categorybyid_post($table,$cond); 
            $this->load->view('admin/header');
            $this->load->view('admin/menu');
            $this->load->view('admin/post/edit_category',$data);
            $this->load->view('admin/footer');
        }
        public function update_category_post($id){
            $title_category_post = $_POST['title_category_post'];
            $desc_category_post = $_POST['desc_category_post'];
            $table = 'category_post';
            $cond = "id_category_post = '$id'";
            $data = array(
                'title_category_post'=>$title_category_post,
                'desc_category_post' =>$desc_category_post
            );

            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->updatecategory_post($table,$data,$cond); 
            if($result == 1 ){
                $message['msg'] = "Cập nhật danh mục thành công  ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật danh mục thất bại ";
                header("Location:".BASE_URL."/post/list_category?msg=".urlencode(serialize($message)));
            }
        }
        //Bài viết 
        public function add_post(){
            $table_post = "tbl_post";
            $table = 'category_post';
           
			$this->load->view('admin/header');
			$this->load->view('admin/menu');
            $categorymodel = $this->load->model('categorymodel');
            $postmodel = $this->load->model('postmodel');
            $data['category'] = $categorymodel->post_category($table);
			$data['post'] = $postmodel->post($table_post);
			$this->load->view('admin/post/add_post',$data);
			$this->load->view('admin/footer');	
		}
		public function insert_post(){
			$title = $_POST['title_post'];
			$content = $_POST['content_post'];
			$image = $_FILES['image_post']['name'];
			$tmp_image = $_FILES['image_post']['tmp_name'];
		
			$div = explode('.', $image);

			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/post/".$unique_image;

			$category = $_POST['category_post'];
			$table_post = "tbl_post";

			$data = array(
				'title_post' => $title,
				'content_post' => $content,
				'image_post' => $unique_image,
				'id_category_post' => $category
			);

			$postmodel = $this->load->model('postmodel');
			$result = $postmodel->insertpost($table_post,$data);

			if($result==1){
				move_uploaded_file($tmp_image, $path_uploads);
				$message['msg'] = "Thêm bài viết thành công";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Thêm bài viết thất bại";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}
		}
		public function list_post(){
			$this->load->view('admin/header');
			$this->load->view('admin/menu');

			$table_post = "tbl_post";
			$table_category = "category_post";

			$postmodel = $this->load->model('postmodel');
			$data['post'] = $postmodel->post($table_post,$table_category);

			$this->load->view('admin/post/list_post',$data);
			$this->load->view('admin/footer');	
		}
		public function delete_post($id){
			$table_post = "tbl_post";
			$cond = "id_post='$id'";
			$postmodel = $this->load->model('postmodel');
			$result = $postmodel->deletepost($table_post,$cond);
			if($result==1){
				$message['msg'] = "Xóa bài viết thành công";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Xóa bài viết thất bại";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}

		}
		public function edit_post($id){
			$this->load->view('admin/header');
			$this->load->view('admin/menu');
			$cond = "id_post='$id'";
			$postmodel = $this->load->model('postmodel');
			$categorymodel =  $this->load->model('categorymodel');
			$table = "category_post";
			$table_post = "tbl_post";

			$data['category'] = $categorymodel->post_category($table);
			$data['postbyid'] = $postmodel->postbyid($table_post,$cond);

			$this->load->view('admin/post/edit_post',$data);
			$this->load->view('admin/footer');	
		}
		public function update_post($id){
			$table = "tbl_post";
			$cond = "id_post='$id'";
			$postmodel = $this->load->model('postmodel');


			$title = $_POST['title_post'];
			$content = $_POST['content_post'];
			$category = $_POST['category_post'];
			$image = $_FILES['image_post']['name'];

			$tmp_image = $_FILES['image_post']['tmp_name'];
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;
			$path_uploads = "public/uploads/post/".$unique_image;
			
			if($image){
				$data['postbyid'] = $postmodel->postbyid($table,$cond);
				foreach ($data['postbyid'] as $key => $value) {
					$path_unlink = "public/uploads/post/";
					unlink($path_unlink.$value['image_post']);
				}
				$data = array(
					'title_post' => $title,
					'content_post' => $content,
					'image_post' => $unique_image,
					'id_category_post' => $category
				);
				move_uploaded_file($tmp_image, $path_uploads);
			}else{
				$data = array(
					'title_post' => $title,
					'content_post' => $content,
					//'image_post' => $unique_image,
					'id_category_post' => $category
				);	
			}

			$result = $postmodel->updatepost($table,$data,$cond);

			if($result==1){
				$message['msg'] = "Cập nhật bài viết thành công";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}else{
				$message['msg'] = "Cập nhật bài viết thất bại";
				header('Location:'.BASE_URL."/post/list_post?msg=".urlencode(serialize($message)));
			}
		}


}
?>