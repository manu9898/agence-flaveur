<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('ApproachHeader')]
final class ApproachHeader
{
    public string $title = '';
    public string $backgroundClass = '';
    public string $text = '';
}
