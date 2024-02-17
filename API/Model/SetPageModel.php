<?php
include '../../Connection/Connection.php';
class SetPageModel
{
    private $mysqli;

    public function __construct()
    {
        $dbConnection = Connection::getInstance();
        $this->mysqli = $dbConnection->getConnection();
    }
    public function createSetPage($kode_page,$nama_page,$id_parent,$navigation,$icon,$sort,$active,$create_by,$create_date,$update_by,$update_date) {
        $stmt = $this->mysqli->prepare("INSERT INTO set_page (kode_page,nama_page,id_parent,navigation,icon,sort,active,create_by,create_date,update_by,update_date) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssissss",$kode_page,$nama_page,$id_parent,$navigation,$icon,$sort,$active,$create_by,$create_date,$update_by,$update_date);

        return $stmt->execute();
    }

    public function getSetPage()
    {
        $result = $this->mysqli->query("SELECT * FROM set_page");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateSetPage($id,$kode_page,$nama_page,$id_parent,$navigation,$icon,$sort,$active,$create_by,$create_date,$update_by,$update_date) {
        $stmt = $this->mysqli->prepare("UPDATE set_page SET kode_page = ?,nama_page = ?,id_parent = ?,navigation = ?,icon = ?,sort = ?,active = ?,create_by = ?,create_date = ?,update_by = ?,update_date = ? WHERE id = ?");
        $stmt->bind_param("ssssssissssi",$kode_page,$nama_page,$id_parent,$navigation,$icon,$sort,$active,$create_by,$create_date,$update_by,$update_date,$id);

        return $stmt->execute();
    }

    public function deleteSetPage($id)
    {
        $stmt = $this->mysqli->prepare("DELETE FROM set_page WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
?>