<?php

require_once MODELS.'/User.php';
require_once MODELS.'/Order.php';
require_once MODELS.'/Product.php';
require_once CORE.'/Session.php';
require_once CORE.'/Controller.php';
require_once CORE.'/Helper.php';
require_once CORE.'/Request.php';
/**
 * ProfileController.php
 * Контроллер для authetication users
 */
class ProfileController extends Controller
{
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        Session::init();
        $userId = Session::get('userId');
        if ($userId) {
            $this->user = User::getByPrimaryKey($userId);
        } else {
            $this->user = null;
        }
    }
     
    /**
     * страница index
     *
     * @return bool
     */
    public function index()
    {
        if (!$this->user) {
            Helper::redirect('/sign');
        }
        $title = 'Личный кабинет ';
        $user = $this->user;
        $this->view->render('profile/index', compact('title', 'user'));
    }

    /**
     * Просмотр истории заказов пользователя
     *
     * @return bool
    */
    public function ordersList()
    {
        if (!$this->user) {
            Helper::redirect('/sign');
        }
        $orders = Order::getOrdersListByUserId($this->user->id);
        $title = 'Личный кабинет ';
        $subtitle = 'Ваши заказы ';
        $user = $this->user;
        $this->view->render('profile/orders', compact('user', 'orders', 'title', 'subtitle'));
    }

    public function orderView($vars)
    {
        if (!$this->user) {
            Helper::redirect('/sign');
        }
        extract($vars);
        list($orders, $order) = $this->getOrder($id);
        $products = [];

        foreach ($orders as $ord){
            $item = Product::getProduct($ord['id']);
            array_push($products, [
                "id"=>$ord['id'],
                "amount"=>$ord['amount'],
                'name' => $item->name,
                'price' => $item->price,
                'picture' => $item->picture
            ]);
        }
        $title = 'Ваш заказ #'.$id;
        $user = $this->user;
        $this->view->render('profile/order', compact('user', 'order', 'title',  'products'));
    }
    
    private function getOrder($id)
    {
        $order = Order::getUserOrderById($id);
        return [json_decode($order->products, true), $order];
    }

    public function checkOrder($vars)
    {
        if (!$this->user) {
            Helper::redirect('/sign');
        }
        extract($vars);
        list($orders, $order) = $this->getOrder($id);
        $products = [];
        $total = 0;
        foreach ($orders as $ord){
            $item = Product::getProduct($ord['id']);
            $total += $ord['amount']*$item->price;
        }
        $title = 'Product Order Form';
        $user = $this->user;
        $this->view->render('profile/checkout', compact('title', 'user', 'total', 'order'), 'check');
    }

    public function changeOrder()
    {
        $request = new Request();
        $user = $this->user;

        (new User())::update($user->id, ["first_name"=>$request->first_name, "last_name"=>$request->last_name, "phone_number"=>$request->phone_number, "email"=>$request->email]);
        (new Order())::update($request->order_id, ["status"=>2]);

        header('Location: /profile/orders');
    }
}