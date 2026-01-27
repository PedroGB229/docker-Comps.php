<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ItemSale extends AbstractMigration
{
    
    public function change(): void
    {
         $table = $this->table('item_sale', ['id' => false, 'primary_key' => ['id']]);
         $table->addColumn('id', 'biginteger', ['identity' => true, 'null' => false])
            
            ->addColumn('quantidade', 'integer', ['default' => 1])
            ->addColumn('valor_unitario', 'decimal', ['precision' => 18, 'scale' => 4])
            ->addColumn('valor_total', 'decimal', ['precision' => 18, 'scale' => 4])
            ->addColumn('data_cadastro', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])

            ->create();
    }
}