<?php

namespace Eduardokum\LaravelBoleto\Contracts\Cnab;

use Illuminate\Database\Eloquent\Collection;

interface RetornoCnab240 extends Cnab
{

    /**
     * @return mixed
     */
    public function getCodigoBanco();

    /**
     * @return mixed
     */
    public function getBancoNome();

    /**
     * @return Collection
     */
    public function getDetalhes();

    /**
     * @return Retorno\Detalhe
     */
    public function getDetalhe($i);

    /**
     * @return Retorno\Header
     */
    public function getHeader();

    /**
     * @return Retorno\HeaderLote
     */
    public function getHeaderLote();

    /**
     *  @return Retorno\TrailerLote
     */
    public function getTrailerLote();

    /**
     *  @return Retorno\TrailerArquivo
     */
    public function getTrailerArquivo();

    /**
     * @return string
     */
    public function processar();

    /**
     * @return array
     */
    public function toArray();

}