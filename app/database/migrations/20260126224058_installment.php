<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Installment extends AbstractMigration
{
  
    public function change(): void
    {
         $table = $this->table('installment', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'biginteger', ['identity' => true, 'null' => false]);
            ->addColumn('id', 'biginteger', ['identity' => true])
            ->addColumn('id_condicao_pagamento', 'biginteger')
            ->addColumn('numero_parcela', 'integer')
            ->addColumn('dias', 'integer')
            ->addColumn('percentual', 'decimal', ['precision' => 12, 'scale' => 2])
            ->create();
    }
}
