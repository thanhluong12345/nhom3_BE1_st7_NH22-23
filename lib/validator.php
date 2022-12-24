<?php

class Validator {
    public $errors = array();

    public function validate( $input, $rules ) {
        
        foreach( $input as $field => $value ) {
            
            if( !is_array($rules["$field"]) ) {
                $rules["$field"] = array($rules["$field"]);
            }

            foreach( $rules["$field"] as $rule ) {
                switch( $rule ) {
                    case _IS_NULL:
                        if( trim($value) == "" )
                        $this->errors["$field"] = "*Vui lòng nhập $field";
                        break;

                    case _IS_USERNAME:
                        $match = preg_match('~^[a-z]{4,8}[0-9]{0,4}$|^[a-z]{4,12}$~', $value);
                        if( !$match )
                        $this->errors["$field"] = "*Vui lòng nhập username theo định dạng [a-z][0-9]";
                        break;
                    default:
                    break;
                }
            }

        }

    }
}