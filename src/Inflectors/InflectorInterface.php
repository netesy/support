<?php

namespace Netesy\Support\Inflectors;


interface InflectorInterface
{

    public function plural($word);

    public function singular($word);
}
