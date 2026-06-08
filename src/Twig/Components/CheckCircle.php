<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CheckCircle
{
    public string $color = 'currentColor';
    public float $strokeWidth = 0.8;
    public int $size = 100;
}
