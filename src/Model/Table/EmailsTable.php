<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emails Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\PackagesTable&\Cake\ORM\Association\BelongsTo $Packages
 *
 * @method \App\Model\Entity\Email newEmptyEntity()
 * @method \App\Model\Entity\Email newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Email> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Email get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Email findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Email patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Email> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Email|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Email saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Email>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Email>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Email>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Email> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Email>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Email>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Email>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Email> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EmailsTable extends Table
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

        $this->setTable('emails');
        $this->setDisplayField('email_id');
        $this->setPrimaryKey('email_id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Packages', [
            'foreignKey' => 'package_id',
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
            ->integer('customer_id')
            ->notEmptyString('customer_id');

        $validator
            ->integer('package_id')
            ->allowEmptyString('package_id');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 255)
            ->allowEmptyString('subject');

        $validator
            ->scalar('message')
            ->allowEmptyString('message');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->dateTime('sent_at')
            ->allowEmptyDateTime('sent_at');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn(['package_id'], 'Packages'), ['errorField' => 'package_id']);

        return $rules;
    }
}
