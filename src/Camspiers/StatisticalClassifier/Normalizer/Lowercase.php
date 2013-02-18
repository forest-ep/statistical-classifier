<?php

namespace Camspiers\StatisticalClassifier\Normalizer;

class Lowercase implements NormalizerInterface
{
    public function normalize(array $tokens)
    {
        return array_map(
            array($this, 'normalizeToken'),
            $tokens
        );
    }

    protected function normalizeToken($token)
    {
        return strtolower($token);
    }
}
