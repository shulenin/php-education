<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 */
class m220720_181918_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
												'name' => $this->string(255)->notNull(),
												'subname' => $this->string(255)->notNull(),
												'color' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car}}');
    }
}
