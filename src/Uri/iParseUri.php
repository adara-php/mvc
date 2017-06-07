<?php

namespace Adara\MVC\Uri;


interface iParseUri
{
    public function getController();
    public function getAction();
    public function getParams();
}