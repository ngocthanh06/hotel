<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservations extends Admin_Controller
{

        public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {
                $this->template['table'] = $this->_render_table_view('Đặt phòng', 'reservations', array(
                    'payment_id'  => 'ID thanh toán',
                    'payment_'  => 'Thanh toán',
                    'check_in'    => 'Check In',
                    'check_out'   => 'Check Out',
                    'room_number' => 'Số phòng',
                    'room_type'   => 'Kiểu phòng',
                    'lastname'    => 'Họ tên',
                    'firstname'   => 'Tên',
                    'email'       => 'Email',
                    'phone'       => 'Số điện thoại',
                    'adult_count' => 'Người lớn',
                    'child_count' => 'Trẻ em',
                ));

                $this->_render_admin_page('admin/reservations', $this->template);
        }

}
