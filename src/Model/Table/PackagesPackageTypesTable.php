<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackagesPackageTypes Model
 *
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\BelongsTo $Packages
 * @property \App\Model\Table\PackageTypesTable&\Cake\ORM\Association\BelongsTo $PackageTypes
 *
 * @method \App\Model\Entity\PackagesPackageType newEmptyEntity()
 * @method \App\Model\Entity\PackagesPackageType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PackagesPackageType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackagesPackageType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PackagesPackageType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PackagesPackageType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PackagesPackageType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackagesPackageType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PackagesPackageType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PackagesPackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackagesPackageType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackagesPackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackagesPackageType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackagesPackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackagesPackageType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackagesPackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackagesPackageType> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PackagesPackageTypesTable extends Table
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

        $this->setTable('packages_package_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Packages', [
            'foreignKey' => 'package_id',
        ]);
        $this->belongsTo('PackageTypes', [
            'foreignKey' => 'package_type_id',
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
            ->integer('package_id')
            ->allowEmptyString('package_id');

        $validator
            ->integer('package_type_id')
            ->allowEmptyString('package_type_id');

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
        $rules->add($rules->existsIn(['package_id'], 'Packages'), ['errorField' => 'package_id']);
        $rules->add($rules->existsIn(['package_type_id'], 'PackageTypes'), ['errorField' => 'package_type_id']);

        return $rules;
    }
}
