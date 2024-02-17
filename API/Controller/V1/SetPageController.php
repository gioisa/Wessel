<?php
require '../../Model/SetPageModel.php';

class SetPageController {
    public function processRequest() {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
            $this->handleAction($action);
        } else {
            // Handle request tanpa action, misalnya menampilkan halaman default
            echo "Welcome to SetPageController!";
        }
    }

    private function handleAction($action) {
        $setPageModel = new SetPageModel();

        switch ($action) {
            case 'getSetPage':
                echo json_encode($setPageModel->getSetPage());
                break;
            case 'createSetPage':
                // Implementasi logika untuk menangani pembuatan set page
                $requestData = $this->getRequestData();
                echo json_encode($this->createSetPage($requestData));
                break;
            case 'updateSetPage':
                // Implementasi logika untuk menangani pembaruan set page
                $id = isset($_GET['id']) ? $_GET['id'] : null;
                $requestData = $this->getRequestData();
                echo json_encode($this->updateSetPage($id, $requestData));
                break;
            case 'deleteSetPage':
                // Implementasi logika untuk menangani penghapusan set page
                $id = isset($_GET['id']) ? $_GET['id'] : null;
                echo json_encode($this->deleteSetPage($id));
                break;
            default:
                echo "Invalid action specified";
                break;
        }
    }

    private function getRequestData() {
        // Mengambil data permintaan, sesuaikan sesuai kebutuhan
        return $_POST; // sesuaikan dengan metode request yang Anda gunakan (GET, POST, dll.)
    }

    public function createSetPage($requestData)
    {
        $setPageModel = new SetPageModel();
        $result = $setPageModel->createSetPage(
            $requestData['kode_page'],
            $requestData['nama_page'],
            $requestData['id_parent'],
            $requestData['navigation'],
            $requestData['icon'],
            $requestData['sort'],
            $requestData['active'],
            $requestData['create_by'],
            $requestData['create_date'],
            $requestData['update_by'],
            $requestData['update_date']
        );

        return json_encode(['success' => $result]);
    }

    public function getSetPage()
    {
        $setPageModel = new SetPageModel();
        $result = $setPageModel->getSetPage();
        return json_encode(['success' => $result]);
    }

    public function updateSetPage($id, $requestData)
    {
        $setPageModel = new SetPageModel();
        $result = $setPageModel->updateSetPage(
            $id,
            $requestData['kode_page'],
            $requestData['nama_page'],
            $requestData['id_parent'],
            $requestData['navigation'],
            $requestData['icon'],
            $requestData['sort'],
            $requestData['active'],
            $requestData['create_by'],
            $requestData['create_date'],
            $requestData['update_by'],
            $requestData['update_date']
        );

        return json_encode(['success' => $result]);
    }

    public function deleteSetPage($id)
    {
        $setPageModel = new SetPageModel();
        $result = $setPageModel->deleteSetPage($id);
        return json_encode(['success' => $result]);
    }
}

// Membuat instance controller dan memproses permintaan
$setPageController = new SetPageController();
$setPageController->processRequest();
?>