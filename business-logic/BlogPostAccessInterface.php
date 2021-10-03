<?php
namespace BusinessLogic;

interface BlogPostAccessInterface
{
    public function findAll(int $limit): array;
}