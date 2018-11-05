<?php
function JoinPath(string $path1, string $path2)
{
    return trim($path1, '/') . '/' . trim($path2, '/');
}