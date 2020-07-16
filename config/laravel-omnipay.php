<?php

return [
    // Cấu hình cho các cổng thanh toán tại hệ thống của bạn, các cổng không xài có thể xóa cho gọn hoặc không điền.
    // Các thông số trên có được khi bạn đăng ký tích hợp.

    'gateways' => [
        'VNPay' => [
            'driver' => 'VNPay',
            'options' => [
                'vnpTmnCode' => 'VVULVOU2',
                'vnpHashSecret' => 'SBKILOMMRSKUSLHMVFYFATIDBLYKYDAU',
                'vnpUrl' => 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html',
                'testMode' => false,
            ],
        ],
    ],
];
