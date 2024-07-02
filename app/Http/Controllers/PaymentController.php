<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\VodacomPaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected VodacomPaymentService $paymentService;

    public function __construct(VodacomPaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

    }

    /**
     * Summary of makePayment
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function makePayment(Request $request)
    {
        $result = $this->paymentService->createPayment();
        return response()->json($result);
    }

}