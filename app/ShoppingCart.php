<?php


namespace app;


class ShoppingCart
{
    /**
     * @param int $inputVal
     * @param int $quantity
     * @param int $yearToDate
     * @return int
     */
    public function discount(int $inputVal, int $quantity, int $yearToDate) : int
    {
        $result = $inputVal;

        if ($inputVal > 50) {
            $result  -= 2;
        }

        if ($quantity > 100) {
            $result  -= 1;
        }

        if ($yearToDate > 10000) {
            $result  -= 4;
        }

        return $result ;
    }
}