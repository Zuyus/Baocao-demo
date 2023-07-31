<?php
namespace App\Traits;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

trait TransactionTrait
{
    public function createTransaction($amount, $comment = null)
    {
        if(session()->get('paymentPlatformId') == 1) {
            $txn = session()->get('approvalId');
        }
        elseif(session()->get('paymentPlatformId') == 2) {
            $txn = session()->get('paymentIntentId');
        }
        $amount = $amount * 100;
        Transaction::create([
            'txn' => $txn,
            'payment_platform_id' => session()->get('paymentPlatformId'),
            'amount' => $amount,
            'comment' => $comment,
            'user_id' => Auth::id(),
        ]);
    }
}
