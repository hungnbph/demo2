<?php
class Products extends BaseModel
{
    protected $tableName ='products';
    public static function listProductInCate($id)
    {
        $model = new static;
        $sqlBuilder = "SELECT * from $model->tableName WHERE cate_id=$id";
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }
}