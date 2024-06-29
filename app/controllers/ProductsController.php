<?php
class productsController extends Controller
{

    public function getProduct(){
        
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $productsModel = $this->model('productsModel');
        $searchColumns = array(
            0 => 'productId',
            1 => 'productName',
            2 => 'productDesc',
            3 => 'productPrice',
            4 => 'productImage',
            5 => 'productTags',
            6 => 'productUpdated',
            7 => 'productIdentify',
        );
        $totalRecords = $productsModel->countAll($search, $searchColumns);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = new Pagination($totalRecords, $page, 10);
        $data = $productsModel->displayAllSearch($search, $searchColumns, $pagination->getOffset(), $pagination->getLimit());
        return $data;
    }
    public function productsPage()
    {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $productsModel = $this->model('productsModel');
        $searchColumns = array(
            0 => 'productId',
            1 => 'productName',
            2 => 'productDesc',
            3 => 'productPrice',
            4 => 'productImage',
            5 => 'productTags',
            6 => 'productUpdated',
            7 => 'productIdentify',
        );
        $totalRecords = $productsModel->countAll($search, $searchColumns);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = new Pagination($totalRecords, $page, 10);
        $data = $productsModel->displayAllSearch($search, $searchColumns, $pagination->getOffset(), $pagination->getLimit());
        $params['products'] = $data;
        if ($totalRecords > $pagination->getLimit()) {
            $params['pagination'] =  $pagination->render();
        } else {
            $params['pagination'] = '';
        }
        $this->view('products', $params);
    }
    public function productSingle(Request $request, $productsIdentify){
        $productsModel = $this->model('productsModel');
        $params['products'] =  $productsModel->displaySingle($productsIdentify);
        $this->view('product-single', $params);
    }
    public function productsIndex()
    {
        checkAdmin(); 
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $productsModel = $this->model('productsModel');
        $searchColumns = array(
            0 => 'productId',
            1 => 'productName',
            2 => 'productDesc',
            3 => 'productPrice',
            4 => 'productImage',
            5 => 'productTags',
            6 => 'productUpdated',
            7 => 'productIdentify',
        );
        $totalRecords = $productsModel->countAll($search, $searchColumns);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = new Pagination($totalRecords, $page, 10);
        $data = $productsModel->displayAllSearch($search, $searchColumns, $pagination->getOffset(), $pagination->getLimit());
        $params['products'] = $data;
        if ($totalRecords > $pagination->getLimit()) {
            $params['pagination'] =  $pagination->render();
        } else {
            $params['pagination'] = '';
        }
        $this->adminView('products/productsAll', $params);
    }

    public function productsDisplay(Request $request, $productsIdentify)
    {
        checkAdmin(); 
        $productsModel = $this->model('productsModel');
        $params['products'] =  $productsModel->displaySingle($productsIdentify);
        $this->adminView('products/productsSingle', $params);
    }

    public function productsDestroy(Request $request, $productsIdentify)
    {
        checkAdmin(); 
        $productsModel = $this->model('productsModel');
        $productsModel->erase($productsIdentify);
        // success delete and redirect
        header("Location: /admin/products/");
        $_SESSION['success_message'] = "Delete successful!";
        exit;
    }

    public function productsbuild()
    {
        checkAdmin(); 
        $this->adminView('products/productsNew');
    }

    public function productsRecord(Request $request)
    {
        checkAdmin(); 
        $productsModel = $this->model('productsModel');
        $data = $request->getBody();
        $data['productUpdated'] = date('Y-m-d H:i:s');
        $data['productIdentify'] = generateUniqueId(16);
        $rules = array(
            'productName' => 'required|max:255',
            'productDesc' => 'required|max:5000',
            'productPrice' => 'required|max:255',
            'productImage' => 'required|max:255',
            'productTags' => 'required|max:255',
            'productUpdated' => '',
            'productIdentify' => 'required',
        );
        $validator = new Validator();
        $validator->validate($rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors as $error) {
                echo $error . "</br>";
            }
        } else {

            /* #### File upload #####*/
            if (isset($_FILES['productImage']) && $_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
                $uploadedFileName = uploadFile('productImage', '../public/assets/alpha-theme/img/uploads/', ['jpg', 'jpeg', 'png', 'gif'], 5242880 /* 5 MB */);
                if ($uploadedFileName === false) {
                    echo "File upload failed or file format or size not allowed.";
                    return;
                }
                $data['productImage'] = $uploadedFileName;
            }
            /* #### File upload #####*/
            $productsModel->record($data);
            // success adding and redirect
            header("Location: /admin/products/");
            $_SESSION['success_message'] = "Added successful!";
            exit;
        }
    }

    public function productsModify(Request $request, $productsIdentify)
    {
        checkAdmin(); 
        $productsModel = $this->model('productsModel');
        $params['productIdentify'] = $productsIdentify;
        $params['products'] =  $productsModel->displaySingle($productsIdentify);
        $this->adminView('products/productsEdit', $params);
    }

    public function productsEdit(Request $request, $productsIdentify)
    {
        checkAdmin(); 
        $productsModel = $this->model('productsModel');
        $data = $request->getBody();
        $rules = array(
            'productName' => 'required|max:255',
            'productDesc' => 'required|max:5000',
            'productPrice' => 'required|max:255',
            'productImage' => 'required|max:255',
            'productTags' => 'required|max:255',
            'productUpdated' => '',
            'productIdentify' => 'required',
        );
        $validator = new Validator();

        if ($validator->fails($rules)) {
            $errors = $validator->errors();
            foreach ($errors as $error) {
                echo $error . "</br>";
            }
        } else {

                        /* Upload file edit */
                        if ($_FILES['productImage']['error'] === UPLOAD_ERR_OK) {
                        $uploadedFileName = uploadFile('productImage', '../public/assets/alpha-theme/img/uploads/', ['jpg', 'jpeg', 'png', 'gif'], 5242880 /* 5 MB */);
                        if ($uploadedFileName === false) {
                            echo "File upload failed or file format or size not allowed.";
                            return;
                        }
                        $data['productImage'] = $uploadedFileName;
                        } else {
                            $productsData = $productsModel->displaySingle($productsIdentify);
                            $data['productImage'] = $productsData[0]['productImage'];
                        }
                        /* Upload file edit  */


            $productsModel->update($data, $productsIdentify);
            // success updated and redirect
            header("Location: /admin/products/");
            $_SESSION['success_message'] = "Update successful!";
            exit;
        }
    }
}
