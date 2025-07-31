<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PackageColours Model
 *
 * @method \App\Model\Entity\PackageColour newEmptyEntity()
 * @method \App\Model\Entity\PackageColour newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageColour> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PackageColour get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PackageColour findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PackageColour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PackageColour> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PackageColour|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PackageColour saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PackageColour>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageColour>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageColour>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageColour> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageColour>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageColour>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PackageColour>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PackageColour> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PackageColoursTable extends Table
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

        $this->setTable('package_colours');
        $this->setDisplayField('colour_types');
        $this->setPrimaryKey('package_colour_id');
        $this->hasMany('Packages', [
    'foreignKey' => 'package_colour_id',
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
            ->scalar('colour_types')
            ->maxLength('colour_types', 50)
            ->requirePresence('colour_types', 'create')
            ->notEmptyString('colour_types');

        return $validator;
    }
}
