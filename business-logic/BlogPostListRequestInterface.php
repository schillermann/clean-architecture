<?php
namespace BusinessLogic;

interface BlogPostListRequestInterface
{
    public function pageLimit(): int;
}