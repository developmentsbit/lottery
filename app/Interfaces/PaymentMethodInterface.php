<?php
namespace App\Interfaces;

use App\Interfaces\BaseInterface;

interface PaymentMethodInterface extends BaseInterface {
    public function status($id);
}
