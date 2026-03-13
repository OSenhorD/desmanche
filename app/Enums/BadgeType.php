<?php

declare(strict_types=1);

namespace App\Enums;

enum BadgeType: string
{
    case SUCCESS = 'success';
    case ERROR = 'error';
    case WARNING = 'warning';
    case INFO = 'info';

    public function color(): string
    {
        return match ($this) {
            self::SUCCESS => 'bg-green-500/10 text-green-400',
            self::ERROR => 'bg-red-500/10 text-red-400',
            self::WARNING => 'bg-yellow-500/10 text-yellow-400',
            self::INFO => 'bg-blue-500/10 text-blue-400',
        };
    }
}
