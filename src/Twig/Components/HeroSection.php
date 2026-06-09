<?php

// src/Twig/Components/HeroSection.php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class HeroSection
{
    public string $title = '';

    public string $backgroundClass = '';
    public string $topDividerClass = '';
    public string $bottomDividerClass = '';
}
