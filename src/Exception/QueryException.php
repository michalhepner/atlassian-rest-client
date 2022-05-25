<?php

declare(strict_types = 1);

namespace MichalHepner\AtlassianRestClient\Exception;

use RuntimeException;

class QueryException extends RuntimeException implements AtlassianRestClientException
{
}
