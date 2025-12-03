<?php
namespace App\Repositories;

use App\Models\service_transactions as ServiceTransaction;
use App\Repositories\Contracts\OrderRepositoryInterface;
use Illuminate\Support\Facades\Session;

class OrderRepository implements OrderRepositoryInterface
{
    public function createTransaction(array $data)
    {
        return ServiceTransaction::create($data);
    }

    public function findTrxIdAndPhoneNumber($bookingTrxId, $phoneNumber)
    {
        return ServiceTransaction::where('booking_code', $bookingTrxId)
            ->where('phone', $phoneNumber)
            ->first();
    }

    public function saveToSession(array $data)
    {
        Session::put('order_data', $data);
    }

    public function updateSessionData(array $data)
    {
        Session::put('order_data', array_merge(Session::get('order_data', []), $data));
    }
    public function getOrderDataFromSession()
    {
        return Session::get('order_data', []);
    }
    
}
