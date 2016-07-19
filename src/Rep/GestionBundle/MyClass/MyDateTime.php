<?php

/**
 * Description of MyDateTime
 *
 * @author atbr
 */
class MyDateTime extends \DateTime
{
    public function __toString()
    {
        return $this->format('d-m-Y');
    }
}
