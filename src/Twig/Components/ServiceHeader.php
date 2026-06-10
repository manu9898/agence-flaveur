<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class ServiceHeader
{
    public string $backgroundClass = '';

    public string $title = '';

    public string $subtitle = '';

    public string $objectives = '';
}
