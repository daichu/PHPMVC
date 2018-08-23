<?php

class articleModel extends Database
{

    public $table = 'article';

    public $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = self::$connection;
    }

    public function getInsertLastId()
    {
        return $this->conn->insert_id;
    }

    public function getRow($id)
    {
       // echo "getRows";
        $sql = "SELECT * FROM " . $this->table . " WHERE id=" . (int)$id;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
        }

        return array();
    }

    public function getRows()
    {

        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $data = array();
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }

        return array();
    }

    public function store($data)
    {
//        echo "abc";
        // exit();
        $id = isset($data['id']) ? $data['id'] : 0;

//        echo "<pre>";
//        print_r($id);
//        echo "</pre>";
        //exit();
        if ($id > 0) {
//            $data_default = array('title' => '', 'article_content' => '', 'status' => 0);
            $data_default = array('title' => '', 'article_content' => '');
            $data = array_merge($data_default, $data);
            //            echo "<pre>";
            //            print_r($data);
            //            echo "</pre>";
            $update = '';

            foreach ($data as $field => $value) {
//                if (is_numeric($value)) {
//                    $update .= $field . " = " . (int)$value;
//                    echo "<pre>";
//                    print_r($update);
//                    echo "</pre>";
//                    echo "<pre>";
//                    print_r($value);
//                    echo "</pre>";
//                    echo "hello";
//                exit();
                //  }

                //else {
                $update .= $field . " = '" . mysqli_real_escape_string($this->conn, $value) . "',";
//                   $array_ex= explode(',',$update);
//                   echo "<pre>";
//                   print_r($array_ex);
//                   echo "</pre>";
                //exit();

                // }
            }
//            echo "<pre>";
//            print_r($update);
//            echo "</pre>";
//            echo "<pre>";
//            print_r(rtrim($update, ','));
//            echo "</pre>";
            $update = rtrim($update, ',');
            //  $abc = "chào \'       bạn đné vpowsis'\ ";
            // echo $abc . "<br>";

            // exit();
            //update

            $sql = "UPDATE " . $this->table . " SET " . $update . " WHERE id=" . (int)$id;
//            echo "<pre>";
//            print_r($sql);
//            echo "</pre>";
            // exit();
            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
            // exit();
        }
//        echo "abcd";
//         else {
//            // insert
//            $data_default = array('title' => '', 'article_content' => '', 'status' => 0);
//            $data = array_merge($data_default, $data);
//
//            $fields = array();
//            $fields[] = 'title';
//            $fields[] = 'article_content';
//            //$fields[] = 'status';
//
//            $values = array();
//            $values[] = "'".mysqli_real_escape_string($data['title'])."'";
//            $values[] = "'".mysqli_real_escape_string($data['article_content'])."'";
//            //$values[] = $data['status'];
//
//            $sql = "INSERT INTO ".$this->table." (".implode(',', $fields).")
//VALUES (".implode(',', $values).")";
//
//            if ($this->conn->query($sql) === TRUE) {
//                return true;
//            } else {
//                return false;
//            }
//        }
//
//       return false;
//    }
//
    }
        public function remove($id)
        {

            $sql = "DELETE FROM " . $this->table . " WHERE id = " . (int)$id;

            if ($this->conn->query($sql) === TRUE) {
                return true;
            }

            return false;
        }

}