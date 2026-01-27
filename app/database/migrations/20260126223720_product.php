<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Product extends AbstractMigration
{
   
    public function change(): void
    {
            $table = $this->table('product', ['id' => false, 'primary_key' => ['id']]);
            $table->addColumn('id', 'biginteger', ['identity' => true, 'null' => false])
      
            ->addColumn('nome', 'text')
            ->addColumn('descricao', 'text', ['null' => true])
            ->addColumn('preco_custo', 'decimal', ['precision' => 18, 'scale' => 4, 'default' => 0])
            ->addColumn('preco_venda', 'decimal', ['precision' => 18, 'scale' => 4, 'default' => 0])
            ->addColumn('estoque', 'integer', ['default' => 0])
            ->addColumn('ativo', 'boolean', ['default' => true])
            ->addColumn('data_cadastro', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])
            ->addColumn('data_alteracao', 'datetime', ['default' => 'CURRENT_TIMESTAMP'])

            
            ->create();
    }
}
    
