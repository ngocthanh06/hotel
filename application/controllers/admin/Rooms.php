<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends Admin_Controller
{

        public function __construct()
        {
                parent::__construct();
        }

        public function index()
        {

                $this->template['table'] = $this->_render_table_view('Phòng', 'rooms', array(
                    'room_image'         => 'Image',
                    'room_number'        => 'Số phòng',
                    'room_description'   => 'Miêu tả',
                    'room_type'          => 'Kiểu',
                    'room_price'         => 'Giá',
                    'room_bed_count'     => 'Số giường',
                    'room_has_breakfast' => 'Bữa sáng',
                    'room_has_aircon'    => 'Máy bay',
                    'room_has_gym'       => 'Gym',
                    'room_has_tvlcd'     => 'TV LCD',
                    'room_has_wifi'      => 'Wifi',
                    'room_best'          => 'Tốt nhất',
                    'room_active'        => 'Hoạt động',
                    'user'               => 'Admin'
                ));



                $this->_render_admin_page('admin/users', $this->template);
        }

        public function change_status($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_active' => !$obj->room_active), $room_id);
                $this->index();
        }

        public function change_best($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_best' => !$obj->room_best), $room_id);
                $this->index();
        }

        public function change_breakfast($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_has_breakfast' => !$obj->room_has_breakfast), $room_id);
                $this->index();
        }

        public function change_aircon($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_has_aircon' => !$obj->room_has_aircon), $room_id);
                $this->index();
        }

        public function change_gym($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_has_gym' => !$obj->room_has_gym), $room_id);
                $this->index();
        }

        public function change_tvlcd($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_has_tvlcd' => !$obj->room_has_tvlcd), $room_id);
                $this->index();
        }

        public function change_wifi($room_id = NULL)
        {
                check_valid_parameter($room_id);
                $this->load->model('Room_model');
                $obj = $this->Room_model->as_object()->get($room_id);
                $this->Room_model->update(array('room_has_wifi' => !$obj->room_has_wifi), $room_id);
                $this->index();
        }

}
