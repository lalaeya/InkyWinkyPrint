<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackageTypes Model
 *
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\BelongsToMany $Packages
 *
 * @method \App\Model\Entity\PackageType newEmptyEntity()
 * @method \App\Model\Entity\PackageType newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageType> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackageType get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PackageType findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PackageType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageType> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackageType|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PackageType saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageType>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageType> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageType>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageType>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageType> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PackageTypesTable extends Table
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

        $this->setTable('package_types');
        $this->setDisplayField('package_type');
        $this->setPrimaryKey('package_type_id');

        $this->belongsToMany('Packages', [
            'foreignKey' => 'package_type_id',
            'targetForeignKey' => 'package_id',
            'joinTable' => 'packages_package_types',
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
            ->scalar('package_type')
            ->maxLength('package_type', 50)
            ->requirePresence('package_type', 'create')
            ->notEmptyString('package_type');

        return $validator;
    }
}
