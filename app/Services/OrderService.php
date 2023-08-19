<?php

namespace App\Services;

use App\DTO\AddressChangeDTO;
use App\Models\Order;
use App\Respository\OrderRepository;
use Exception;

class OrderService
{

    private $orderRepository;
    private $addressChangeService;
    public function __construct(OrderRepository $orderRepository, AddressChangeNotifService $addressChangeService)
    {
        $this->orderRepository = $orderRepository;
        $this->addressChangeService = $addressChangeService;
    }
    public function updateAddressForOrder($id, AddressChangeDTO $data)
    {
        try {
            //should be
            //$order = Order::find($id);
            //just for demo
            $order = new Order();
            //Do actual update using repo
            //---
            $this->addressChangeService->sendNotification($order);
            return ['message' => "Record Updated", 'status' => 'SUCCESS'];
        } catch (Exception $ee) {
            return ['message' => $ee->getMessage(), 'status' => 'FAULIRE'];
        }
    }
}
