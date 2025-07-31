<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Packages Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Cuses
 * @property \App\Model\Table\PackageCoversTable&\Cake\ORM\Association\BelongsTo $PackageCovers
 * @property \App\Model\Table\PackageColoursTable&\Cake\ORM\Association\BelongsTo $PackageColours
 *
 * @method \App\Model\Entity\Package newEmptyEntity()
 * @method \App\Model\Entity\Package newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Package> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Package get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Package findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Package patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Package> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Package|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Package saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Package>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Package>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Package>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Package> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Package>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Package>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Package>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Package> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PackagesTable extends Table
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

        $this->setTable('packages');
        $this->setDisplayField('package_desc');
        $this->setPrimaryKey('package_id');

        $this->belongsTo('Cuses', [
    'foreignKey' => 'cus_id',
    'className' => 'Customers',
    'joinType' => 'INNER',
]);

$this->belongsTo('PackageColours', [
    'foreignKey' => 'package_colour_id',
]);

$this->belongsTo('PackageCovers', [
    'foreignKey' => 'package_cover_id',
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
            ->integer('cus_id')
            ->notEmptyString('cus_id');

        $validator
            ->scalar('package_file')
            ->maxLength('package_file', 255)
            ->requirePresence('package_file', 'create')
            ->notEmptyFile('package_file');

        $validator
            ->integer('package_cover_id')
            ->notEmptyString('package_cover_id');

        $validator
            ->integer('package_colour_id')
            ->notEmptyString('package_colour_id');

        $validator
            ->scalar('package_desc')
            ->maxLength('package_desc', 255)
            ->requirePresence('package_desc', 'create')
            ->notEmptyString('package_desc');

        $validator
            ->date('pickup_date')
            ->requirePresence('pickup_date', 'create')
            ->notEmptyDate('pickup_date');

        $validator
            ->time('pickup_time')
            ->requirePresence('pickup_time', 'create')
            ->notEmptyTime('pickup_time');

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
        $rules->add($rules->existsIn(['cus_id'], 'Cuses'), ['errorField' => 'cus_id']);
        $rules->add($rules->existsIn(['package_cover_id'], 'PackageCovers'), ['errorField' => 'package_cover_id']);
        $rules->add($rules->existsIn(['package_colour_id'], 'PackageColours'), ['errorField' => 'package_colour_id']);

        return $rules;
    }
}
