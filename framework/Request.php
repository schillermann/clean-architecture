<?php
namespace Framework;

class Request
{
    public function get(string $key): string
    {
        if($key === 'limit') {
            return '3';
        }
        return '';
    }
}