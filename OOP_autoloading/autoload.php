<?php

spl_autoload_register(function ($className) {
include  dirname(FILE ) . '/' .str_replace('\\',"\/". $className). '.php';

});