<?php

namespace App\Http\Controllers;

use App\DTO\AddressChangeDTO;
use App\Http\Requests\AddressChangeRequest;
use App\Services\OrderService;

class AddressController extends Controller
{
    private $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function updateAddress($id, AddressChangeRequest $request)
    {
        $data = $request->validated();
        $valueObject = new AddressChangeDTO($data['line1'], $data['line2'], $data['city'], $data['pincode']);
        $result = $this->orderService->updateAddressForOrder($id, $valueObject);
        return response()->json($result['message'], $result['status'] == 'SUCCESS' ? 200 : 400);
    }
}
