<?php

namespace OliverKlee\Coffee\Domain\Model;

interface Priced
{
    public function getPrice(): Price;
}
