<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackageCovers Model
 *
 * @method \App\Model\Entity\PackageCover newEmptyEntity()
 * @method \App\Model\Entity\PackageCover newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageCover> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackageCover get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PackageCover findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PackageCover patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageCover> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackageCover|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PackageCover saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PackageCover>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageCover>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageCover>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageCover> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageCover>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageCover>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageCover>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageCover> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PackageCoversTable extends Table
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

        $this->setTable('package_covers');
        $this->setDisplayField('cover_types');
        $this->setPrimaryKey('package_cover_id');
        $this->hasMany('Packages', [
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
            ->scalar('cover_types')
            ->maxLength('cover_types', 50)
            ->requirePresence('cover_types', 'create')
            ->notEmptyString('cover_types');

        return $validator;
    }
}
