<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Upload');
        $this->addBehavior('DeleteArq');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 220)
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->notEmptyString('email');

        $validator
            ->scalar('username')
            ->maxLength('username', 220)
            ->notEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 220)
            ->notEmptyString('password')
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 6],
                    'message' => 'A senha deve ter no mínimo 6 caracteres!',
                ]
            ]);

        $validator
            ->notEmpty('image')
            ->add('image', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png', 'image/jpg']],
                'message' => 'Tipo de arquivo inválido. Selecione arquivo JPG, JEPG ou PNG!',
            ]);



        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este e-mail já está em uso'));
        $rules->add($rules->isUnique(['username'], 'Este nome de usuário já está em uso'));

        return $rules;
    }

    public function getUserDados($user_id)
    {
        $query = $this->find()
                            ->select(['id', 'name', 'email', 'image'])
                            ->where([
                                'Users.id' => $user_id
                            ]);
        return $query->first();
    }
}
