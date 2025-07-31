<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dashboard Model
 *
 * @property \App\Model\Table\PackageColoursTable&\Cake\ORM\Association\BelongsTo $PackageColours
 * @property \App\Model\Table\PackageCoversTable&\Cake\ORM\Association\BelongsTo $PackageCovers
 * @property \App\Model\Table\OrdersTable&\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\Dashboard newEmptyEntity()
 * @method \App\Model\Entity\Dashboard newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Dashboard> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dashboard get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Dashboard findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Dashboard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Dashboard> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dashboard|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Dashboard saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Dashboard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dashboard>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dashboard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dashboard> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dashboard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dashboard>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Dashboard>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Dashboard> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DashboardTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('dashboard');
        $this->setDisplayField('dashboard_id');
        $this->setPrimaryKey('dashboard_id');

        $this->belongsTo('PackageColours', [
            'foreignKey' => 'package_colour_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('PackageCovers', [
            'foreignKey' => 'package_cover_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('package_colour_id')
            ->notEmptyString('package_colour_id');

        $validator
            ->integer('package_cover_id')
            ->notEmptyString('package_cover_id');

        $validator
            ->integer('order_id')
            ->notEmptyString('order_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['package_colour_id'], 'PackageColours'), ['errorField' => 'package_colour_id']);
        $rules->add($rules->existsIn(['package_cover_id'], 'PackageCovers'), ['errorField' => 'package_cover_id']);
        $rules->add($rules->existsIn(['order_id'], 'Orders'), ['errorField' => 'order_id']);

        return $rules;
    }
}
