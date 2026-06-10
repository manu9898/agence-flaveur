<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class ObjectiveCard
{
    public string $topImage = '';

    public string $bottomImage = '';

    public string $title = '';
}
