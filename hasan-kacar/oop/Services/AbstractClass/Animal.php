<?php


abstract class Animal{
    abstract public function move();

    public function publicAttribute()
    {
        echo "Hayvanların düşünme becerisi insanlar kadar gelişmemiştir.";
    }
}