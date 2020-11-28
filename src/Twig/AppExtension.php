<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppExtension extends AbstractExtension
{
    public function __construct(SluggerInterface $slugger)
    {
        
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('pluralize', [$this, 'pluralize']),
        ];
    }

    public function pluralize(int $count, string $singular, ?string $plural = null) : string
    {
        $plural = $plural ?? $singular.'s';
        $str = $count <= 1 ? $singular : $plural;
        return "$count $str";
    }
}
