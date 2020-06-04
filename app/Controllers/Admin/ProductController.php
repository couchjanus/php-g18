<?php

require_once CORE.'/Controller.php';
require_once CORE.'/Request.php';
require_once MODELS.'/Category.php';
require_once MODELS.'/Product.php';
require_once MODELS.'/Brand.php';
require_once MODELS.'/Picture.php';
require_once CORE.'/Uploader.php';

class ProductController extends Controller
{
    use Uploader;
    /**
     * Просмотр всех товаров
     * @return bool
    */
    public function index()
    {
        $products = Product::all();
        $title = 'Products List Page';
        $this->view->render('admin/products/index', compact('title', 'products'), 'admin');
    }

    /**
     * Добавление товара
     *
     * @return bool
    */
    public function create()
    {
        $title = 'Add New Product ';
        $categories = Category::all();
        $brands = Brand::all();
        $this->view->render('admin/products/create', compact('title', 'categories', 'brands'), 'admin');
    }
    
    public function store()
    {
        $request = new Request();
        (new Product())::insert(["name"=>$request->name, "status"=>$request->status ? 1:0,
        'price'=>$request->price, 'brand_id'=>$request->brand_id, 'category_id'=>$request->category_id, 'description'=>$request->description, 'is_new'=>$request->is_new ? 1:0]);

        if (!empty($_FILES['images'])) {
            $files = $_FILES['images'];
            foreach ($this->transform($files) as $file){
                (new Picture())::insert(["filename"=>$this->upload($file), 'resource_id'=>(int)Product::lastId(), 'resource'=>Product::getResource()]);
            }
        }
        header('Location: /admin/products');
    }
}