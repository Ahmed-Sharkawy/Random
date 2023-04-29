<?php

namespace Sharkawy;

interface RandomInterface  {
    public static function generateRandomString(int $length): string;
}