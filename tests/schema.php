<?php
declare(strict_types=1);

/**
 * Abstract schema for CakePHP tests.
 *
 * This format resembles the existing fixture schema
 * and is converted to SQL via the Schema generation
 * features of the Database package.
 */
return [
    [
        'table' => 'acos',
        'columns' => [
            'id' => ['type' => 'integer'],
            'parent_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'model' => ['type' => 'string', 'null' => true],
            'foreign_key' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'alias' => ['type' => 'string', 'default' => ''],
            'lft' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'rght' => ['type' => 'integer', 'length' => 10, 'null' => true],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ],
    [
        'table' => 'aco_actions',
        'columns' => [
            'id' => ['type' => 'integer'],
            'parent_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'model' => ['type' => 'string', 'default' => ''],
            'foreign_key' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'alias' => ['type' => 'string', 'default' => ''],
            'lft' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'rght' => ['type' => 'integer', 'length' => 10, 'null' => true],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ],
    [
        'table' => 'aco_twos',
        'columns' => [
            'id' => ['type' => 'integer'],
            'parent_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'model' => ['type' => 'string', 'null' => true],
            'foreign_key' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'alias' => ['type' => 'string', 'default' => ''],
            'lft' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'rght' => ['type' => 'integer', 'length' => 10, 'null' => true],
        ],
        'constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ],
    [
        'table' => 'aros_acos',
        'columns' => [
            'id' => ['type' => 'integer'],
            'aro_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
            'aco_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
            '_create' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_read' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_update' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_delete' => ['type' => 'string', 'length' => 2, 'default' => 0],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'aros_aco_twos',
        'columns' => [
            'id' => ['type' => 'integer'],
            'aro_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
            'aco_id' => ['type' => 'integer', 'length' => 10, 'null' => false],
            '_create' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_read' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_update' => ['type' => 'string', 'length' => 2, 'default' => 0],
            '_delete' => ['type' => 'string', 'length' => 2, 'default' => 0],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'aros',
        'columns' => [
            'id' => ['type' => 'integer'],
            'parent_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'model' => ['type' => 'string', 'null' => true],
            'foreign_key' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'alias' => ['type' => 'string', 'default' => ''],
            'lft' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'rght' => ['type' => 'integer', 'length' => 10, 'null' => true],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'aro_twos',
        'columns' => [
            'id' => ['type' => 'integer'],
            'parent_id' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'model' => ['type' => 'string', 'null' => true],
            'foreign_key' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'alias' => ['type' => 'string', 'default' => ''],
            'lft' => ['type' => 'integer', 'length' => 10, 'null' => true],
            'rght' => ['type' => 'integer', 'length' => 10, 'null' => true],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'people',
        'columns' => [
            'id' => ['type' => 'integer', 'null' => false],
            'name' => ['type' => 'string', 'null' => false, 'length' => 32],
            'mother_id' => ['type' => 'integer', 'null' => false],
            'father_id' => ['type' => 'integer', 'null' => false],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'auth_users',
        'columns' => [
            'id' => ['type' => 'integer'],
            'username' => ['type' => 'string', 'null' => false],
            'password' => ['type' => 'string', 'null' => false],
            'created' => 'datetime',
            'updated' => 'datetime',
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'posts',
        'columns' => [
            'id' => ['type' => 'integer'],
            'author_id' => ['type' => 'integer', 'null' => false],
            'title' => ['type' => 'string', 'null' => false],
            'body' => 'text',
            'published' => ['type' => 'string', 'length' => 1, 'default' => 'N'],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
    [
        'table' => 'users',
        'columns' => [
            'id' => ['type' => 'integer'],
            'username' => ['type' => 'string', 'null' => true],
            'password' => ['type' => 'string', 'null' => true],
            'created' => ['type' => 'timestamp', 'null' => true],
            'updated' => ['type' => 'timestamp', 'null' => true],
        ],
        'constraints' => [
            'primary' => [
                'type' => 'primary',
                'columns' => [
                    'id',
                ],
            ],
        ],
    ],
];
