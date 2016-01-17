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
        if ($inputVal > 50) {
            $inputVal -= 2;
        }

        if ($quantity > 100) {
            $inputVal -= 1;
        }

        if ($yearToDate > 10000) {
            $inputVal -= 4;
        }

        return $inputVal;
    }

}