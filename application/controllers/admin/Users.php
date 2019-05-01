<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller
{

        public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {

                $this->template['table'] = $this->_render_table_view('Người dùng', 'users', array(
                    'first_name' => 'Tên',
                    'last_name'  => 'Họ và tên',
                    'username'   => 'Username',
                    'email'      => 'Email',
                    'created_on' => 'Tạo ra',
                    'active'     => 'Hoạt động',
                    'company'    => 'Công ty',
                    'phone'      => 'Số điện thoại',
                    'user_type'  => 'Kiểu người dùng'
                ));

                $this->_render_admin_page('admin/users', $this->template);
        }

}
