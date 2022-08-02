App\Providers\EventServiceProvider

use App\Events\OrderShipped;
//use App\Listeners\SendShipmentNotification;

/**
 * Карта слушателей событий приложения.
 *
 * @var array
 */
protected $listen = [
    OrderShipped::class => [
        SendShipmentNotification::class,
    ],
];

