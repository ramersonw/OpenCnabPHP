<?php
/*
 * CnabPHP - Geração de arquivos de remessa e retorno em PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2013 Ciatec.net
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace CnabPHP\resources\B033\remessa\cnab400;

use CnabPHP\resources\generico\remessa\cnab400\Generico1;

class Registro1 extends Generico1
{

    protected $meta = array(
        'tipo_registro' => array(
            'tamanho' => 1,
            'default' => '1',
            'tipo' => 'int',
            'required' => true
        ),
        'tipo_inscricao_empresa' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao_empresa' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_transmissao' => array(
            'tamanho' => 20,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'seu_numero' => array(
            'tamanho' => 25,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'nosso_numero' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'data_abatimento' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'filler1' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_multa' => array(
            'tamanho' => 1,
            'default' => '0',
            'tipo' => 'alfa',
            'required' => true
        ),
        'taxa_multa' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'valor_moeda' => array(
            'tamanho' => 2,
            'default' => '00',
            'tipo' => 'int',
            'required' => true
        ),
        'vlr_titulo_outra_unidade' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 5,
            'required' => true
        ),
        'filler2' => array(
            'tamanho' => 4,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_multa' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'cod_carteira' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'codigo_movimento' => array(
            'tamanho' => 2,
            'default' => '02',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_documento' => array(
            'tamanho' => 10,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_vencimento' => array(
            'tamanho' => 6,
            'default' => '',
            'tipo' => 'date',
            'required' => true
        ),
        'valor' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'codigo_banco' => array(
            'tamanho' => 3,
            'default' => '033',
            'tipo' => 'int',
            'required' => true
        ),
        'agencia_cobradora' => array(
            'tamanho' => 5,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'especie_titulo' => array(
            'tamanho' => 2,
            'default' => '2',
            'tipo' => 'int',
            'required' => true
        ),
        'codigo_aceite' => array(
            'tamanho' => 1,
            'default' => 'N',
            'tipo' => 'alfa',
            'required' => true
        ),
        'data_emissao' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'cod_instrucao1' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'cod_instrucao2' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'vlr_juros' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'data_desconto' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'date',
            'required' => true
        ),
        'vlr_desconto' => array(
            'tamanho' => 11,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'vlr_iof' => array(
            'tamanho' => 8,
            'default' => '0',
            'tipo' => 'decimal',
            'precision' => 5,
            'required' => true
        ),
        'vlr_abatimento' => array(
            'tamanho' => 11,
            'default' => '',
            'tipo' => 'decimal',
            'precision' => 2,
            'required' => true
        ),
        'tipo_inscricao' => array(
            'tamanho' => 2,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'numero_inscricao' => array(
            'tamanho' => 14,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'nome_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'endereco_pagador' => array(
            'tamanho' => 40,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'bairro_pagador' => array(
            'tamanho' => 12,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'cep_pagador' => array(
            'tamanho' => 8,
            'default' => '',
            'tipo' => 'int',
            'required' => true
        ),
        'cidade_pagador' => array(
            'tamanho' => 15,
            'default' => '',
            'tipo' => 'alfa',
            'required' => true
        ),
        'uf_pagador' => array(
            'tamanho' => 2,
            'default' => '', // combrança com registro
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler3' => array(
            'tamanho' => 30,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'filler4' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'identificador_complemento' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'complemento' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler5' => array(
            'tamanho' => 6,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'dias_protesto' => array(
            'tamanho' => 2,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
        'filler6' => array(
            'tamanho' => 1,
            'default' => ' ',
            'tipo' => 'alfa',
            'required' => true
        ),
        'numero_registro' => array(
            'tamanho' => 6,
            'default' => '0',
            'tipo' => 'int',
            'required' => true
        ),
    );
}
