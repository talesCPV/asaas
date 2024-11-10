<?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    Route::post('/payments-webhook', function (Request $request) {
        $body = $request->all();
echo $body['event'];
        switch ($body['event']) {
            case 'PAYMENT_CREATED':
                $payment = $body['payment'];
                createPayment($payment);
                break;
            case 'PAYMENT_RECEIVED':
                $payment = $body['payment'];
                receivePayment($payment);
                break;
            // ... trate outros eventos
            default:
                Log::info('Este evento não é aceito ' . $body['event']);
        }

        return response()->json(['received' => true]);
    });

    function createPayment($payment) {
        // Implementação do createPayment
    }

    function receivePayment($payment) {
        // Implementação do receivePayment
    }

?>