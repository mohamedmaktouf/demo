<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220820_083524_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'details'=>$this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
