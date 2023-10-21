<?php

declare(strict_types=1);

namespace FrontEnd\UseCase\Contact;

use yii\base\Event;

final class ContactEvent extends Event
{
    public const EVENT_AFTER_SEND = 'contact.afterSend';
}
