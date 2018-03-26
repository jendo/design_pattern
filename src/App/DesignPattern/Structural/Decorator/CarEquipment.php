<?php
namespace App\DesignPattern\Structural\Decorator;

final class CarEquipment
{
    const COLOR_BASIC_WHITE = 'basic white';
    const COLOR_METALLIC_RACE_BLUE = 'metallic race blue';

    const ENGINE_DIESEL_BASIC = 'engine diesel basic';
    const ENGINE_DIESEL_TURBO = 'engine diesel turbo';

    const ALUMINIUM_WHEEL_DISCS = 'aluminium discs';
    const CARBON_WHEEL_DISCS = 'carbon discs';

    const BASIC = [
        self::COLOR_BASIC_WHITE,
        self::ENGINE_DIESEL_BASIC,
        self::ALUMINIUM_WHEEL_DISCS,
    ];
}
