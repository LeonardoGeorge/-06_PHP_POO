<?php
trait Logger
{
    public function log($messsage)
    {
        echo "Log: " . $messsage . "<br>";
        echo "Data: " . date('Y-m-d H:i:s') . "<br>";
    }
}