<?php

namespace Lwd\RestFramework\Exceptions;

/**
 * The client does not have access rights to the content; that is, it is unauthorized, so the server is refusing to give the requested resource. Unlike 401 Unauthorized, the client's identity is known to the server.
 */
class Unauthorized extends BaseHttpException
{
    const STATUS_CODE = 403;
}
