<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%country}}`.
 */
class m220720_160820_create_country_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey(),
            'code' => $this->string(2)->notNull()->unique(),
            'name' => $this->string(52)->notNull(),
            'population' => $this->integer()
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country}}');
    }
}
