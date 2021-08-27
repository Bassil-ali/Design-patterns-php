<?php


namespace Structural\FluentBuilder;


class QueryBuilder implements QueryBuilderInterface
{
    private  $fields;
    private  $table;
    private  $alias;
    private   $conditions;

    public function select(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table, string $alias): self
    {
        $this->table = $table;
        $this->alias = $alias;
        return $this;
    }

    public function where(array $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getSQL()
    {
       return  sprintf('SELECT %s FROM %s AS %s WHERE %s',
        implode(',',$this->fields),
        $this->table,
        $this->alias,
        implode('AND',$this->conditions)
        );
    }
}