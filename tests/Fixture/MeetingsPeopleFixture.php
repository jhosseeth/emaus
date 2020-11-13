<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MeetingsPeopleFixture
 *
 */
class MeetingsPeopleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'meetings_people';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'assistance' => ['type' => 'binary', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reason' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'meeting_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_meetings_people_meetings1_idx' => ['type' => 'index', 'columns' => ['meeting_id'], 'length' => []],
            'fk_meetings_people_people1_idx' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'meeting_id', 'person_id'], 'length' => []],
            'fk_meetings_people_meetings1' => ['type' => 'foreign', 'columns' => ['meeting_id'], 'references' => ['meetings', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_meetings_people_people1' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['people', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'assistance' => 'Lorem ipsum dolor sit amet',
                'reason' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'meeting_id' => 1,
                'person_id' => 1
            ],
        ];
        parent::init();
    }
}
