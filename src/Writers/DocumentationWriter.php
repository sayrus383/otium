<?php

namespace Sayrus\Otium\Writers;

use Sayrus\Otium\FetchRoute;

interface DocumentationWriter
{
    public function save(FetchRoute $fetchRoute);
}
