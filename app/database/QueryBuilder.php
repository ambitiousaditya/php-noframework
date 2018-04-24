<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertAll($table, $parameter)
    {
        $sql = sprintf(
            'insert into %s (%s) value (%s)',
            $table,
            implode(', ', array_keys($parameter)),
            ':'.implode(', :', array_keys($parameter))
        );

        $statement = $this->pdo->prepare($sql);
        $statement->execute($parameter);
    }
}
