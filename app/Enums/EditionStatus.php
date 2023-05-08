<?php

namespace App\Enums;

enum EditionStatus: string
{
    case ON_HAND = 'on hand';
    case ONLINE = 'online';
    case DOWNLOADED = 'downloaded';
    case LENDED = 'lended';
    case DESTROYED = 'destroyed';
    case SOLD = 'sold';
    case DONATED = 'donated';
}
