<?php

class ValidationTest extends TestCase
{
    use \October\Rain\Database\Traits\Validation;

    public $exists;

    public $id = 20;

    public function testUnique()
    {
        /*
         * Basic usage of unique rule
         */
        $rules = ['mail' => 'unique:users'];

        $this->exists = true;
        $this->assertEquals([
            'mail' => ['unique:users,mail,7,the_id']
        ], $this->processValidationRules($rules));

        $this->exists = false;
        $this->assertEquals([
            'mail' => ['unique:users']
        ], $this->processValidationRules($rules));

        /*
         * Specifying a custom column name
         */
        $rules = ['mail' => 'unique:users,email_address'];

        $this->exists = true;
        $this->assertEquals([
            'mail' => ['unique:users,email_address,7,the_id']
        ], $this->processValidationRules($rules));

        $this->exists = false;
        $this->assertEquals([
            'mail' => ['unique:users,email_address']
        ], $this->processValidationRules($rules));

        /*
         * Forcing a unique rule to ignore a given ID
         */
        $rules = ['mail' => 'unique:users,email_address,10'];

        $this->exists = true;
        $this->assertEquals([
            'mail' => ['unique:users,email_address,7,the_id']
        ], $this->processValidationRules($rules));

        $this->exists = false;
        $this->assertEquals([
            'mail' => ['unique:users,email_address,10']
        ], $this->processValidationRules($rules));

        /*
         * Adding additional where clauses
         */
        $rules = ['mail' => 'unique:users,email_address,NULL,id,account_id,1'];

        $this->exists = true;
        $this->assertEquals([
            'mail' => ['unique:users,email_address,20,id,account_id,1']
        ], $this->processValidationRules($rules));

        $this->exists = false;
        $this->assertEquals([
            'mail' => ['unique:users,email_address,NULL,id,account_id,1']
        ], $this->processValidationRules($rules));
    }

    protected function getTable()
    {
        return 'users';
    }

    protected function getKey()
    {
        return 7;
    }

    protected function getKeyName()
    {
        return 'the_id';
    }

    public function testArrayFieldNames()
    {
        $mock = $this->getMockForTrait('October\Rain\Database\Traits\Validation');

        $rules = [
            'field' => 'required',
            'field.two' => 'required|boolean',
            'field[three]' => 'required|date',
            'field[three][child]' => 'required',
            'field[four][][name]' => 'required',
            'field[five' => 'required|string',
            'field][six' => 'required|string',
            'field]seven' => 'required|string',
        ];
        $rules = self::callProtectedMethod($mock, 'processRuleFieldNames', [$rules]);

        $this->assertEquals([
            'field' => 'required',
            'field.two' => 'required|boolean',
            'field.three' => 'required|date',
            'field.three.child' => 'required',
            'field.four.*.name' => 'required',
            'field[five' => 'required|string',
            'field][six' => 'required|string',
            'field]seven' => 'required|string',
        ], $rules);
    }
}
