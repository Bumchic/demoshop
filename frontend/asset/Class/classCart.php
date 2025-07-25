<?php
class Cart
{
    public $id;
    public $prodname;
    public $price;
    public $image;
    public $category;
    public $quantity;
    public function setfromjson($data)
    {
        foreach($data as $key => $value)
        {
            $this -> {$key} = $value;
        }
    }
}
?>