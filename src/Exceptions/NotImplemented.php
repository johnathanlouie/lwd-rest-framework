<?php

namespace Lwd\RestFramework\Exceptions;

/**
 * The request method is not supported by the server and cannot be handled. The only methods that servers are required to support (and therefore that must not return this code) are GET and HEAD.
 */
class NotImplemented extends BaseHttpException
{
    const STATUS_CODE = 501;
}
