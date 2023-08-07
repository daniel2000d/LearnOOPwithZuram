<?php

namespace ns1;
class User
{
    public function __construct()
    {
        echo "Global NS";
    }
}
//function hello (){}
//const MY_CONST=10;
function strlen($str)
{
    echo "ns1";
}
echo  \strlen("abcd");