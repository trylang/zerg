<?php
/**
 * Created by PhpStorm.
 * User: Jane
 * Date: 2017/12/18
 * Time: 17:01
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;

class OrderPlace extends BaseValidate
{
    // 验证项代码示例：
    protected $products = [
        [
            'product_id' => 1,
            'count' => 3
        ], [
            'product_id' => 5,
            'count' => 7
        ], [
            'product_id' => 3,
            'count' => 2
        ]
    ];

    protected $rule = [
      'products' => 'checkProducts'
    ];

    protected $singleRule = [
      'product_id' => 'require|isPositiveInteger',
      'count' => 'require|isPositiveInteger'
    ];

    protected function checkProducts($values) {
        if(!is_array($values)){
            throw new ParameterException([
                'msg' => '商品参数不正确'
            ]);
        }

        if(empty($values)){
            throw new ParameterException([
               'msg' => '商品列表不能为空'
            ]);
        }

        foreach ($values as $value) {
            $this
        }

    }

    // 只有$rule是可以自动触发
    private function checkProduct($value) {
        $validate = new BaseValidate($this->singleRule);

    }

}