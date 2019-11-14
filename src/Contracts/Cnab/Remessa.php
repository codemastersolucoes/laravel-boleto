<?php
namespace CMSBillet\LaravelBoleto\Contracts\Cnab;

interface Remessa extends Cnab
{
    public function gerar();
}
