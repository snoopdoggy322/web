<?php

class Validation
{

    protected $_rules = [];
    protected $_errors = [];
    protected $_form = [];
    protected $_messages = [];
    protected $_aliases = [
        'required' => 'notEmpty',
        'integer' => 'int',
        'gt' => 'greater',
        'lt' => 'less',
        'tel' => 'phone',
    ];
    protected $_result = '';

    public function __construct(array $form, array $rules = [], array $messages = [])
    {
        $this->_form = $form;
        $this->_rules = $this->parseRules($rules);
        $this->_messages = $messages;
    }

    protected function parseRules($rules)
    {
        $parsed = [];
        foreach ($rules as $field => $field_rules) {
            if (!is_array($field_rules)) {
                $field_rules = explode(',', $field_rules);
            }
            $parsed[$field] = $field_rules;
        }

        return $parsed;
    }

    public static function run(array $rules, array $messages = [])
    {
        $validator = new static($_REQUEST, $rules, $messages);
        $validator->validate();

        return $validator;
    }

    public function validate()
    {
        foreach ($this->_rules as $field => $field_rules) {
            foreach ($field_rules as $rule) {
                if (!$this->validateRule($field, $rule)) {
                    if (empty($this->_errors[$field])) {
                        $this->_errors[$field] = [];
                    }
                    $this->_errors[$field][] = $this->errorMessage($field, $rule);
                }
            }
        }
        if (empty($this->_errors)) {
            $this->verify();
        }

        return $this;
    }

    protected function validateRule($field, $rule)
    {
        $tmp = explode(':', $rule);
        $value = null;
        if (count($tmp) > 1) {
            $rule = $tmp[0];
            $value = array_slice($tmp, 1, count($tmp) - 1);
        }
        $method = 'is' . ucfirst($rule);
        if (!method_exists($this, $method) && !empty($this->_aliases[$rule])) {
            $method = 'is' . ucfirst($this->_aliases[$rule]);
        }
        if (method_exists($this, $method)) {
            return call_user_func([$this, $method], $field, $value);
        }

        return true;
    }

    public function isValid()
    {
        return count($this->_errors) === 0;
    }
    public function getErrorByField($name)
    {
        if(isset($this->_errors[$name]))
            return implode(', ', $this->_errors[$name]);
        return null;
    }

    protected function errorMessage($field, $rule)
    {
        $tmp = explode(':', $rule);
        $rule = $tmp[0];
        $value = count($tmp) > 1 ? $tmp[1] : null;
        $message = 'Field ' . $field . ' not valid ' . $rule;
        if (!empty($this->_messages[$field])) {
            if (!is_array($this->_messages[$field])) {
                $message = $this->_messages[$field];
            } elseif (!empty($this->_messages[$field][$rule])) {
                if (!is_array($this->_messages[$field][$rule])) {
                    $message = $this->_messages[$field][$rule];
                } elseif (!empty($this->_messages[$field][$rule][$value])) {
                    $message = $this->_messages[$field][$rule][$value];
                }
            }
        }

        return $message;
    }

    public function verify()
    {

    }

    public function errors()
    {
        return $this->_errors;
    }

    public function result()
    {
        return $this->_result;
    }

    public function isNotEmpty($field)
    {
        return !empty($this->_form[$field]);
    }

    public function isChecked($field)
    {
        return !empty($this->_form[$field]) && $this->_form[$field] == true;
    }

    public function isEmail($field)
    {
        return preg_match('/.+@.+\..+/', $this->_form[$field]);
    }

    public function isLess($field, $value)
    {
        return $this->isInt($field) && $this->_form[$field] < $value;
    }

    public function isInt($field)
    {
        return !empty($this->_form[$field]) && (is_int($this->_form[$field]) || is_numeric($this->_form[$field]));
    }

    public function isGreater($field, $value)
    {
        return $this->isInt($field) && $this->_form[$field] < $value;
    }

    public function isWords($field, $value)
    {
        if (!empty($this->_form[$field])) {
            $count = [1, 1];
            if (!empty($value)) {
                $tmp = array_map(function ($v) {
                    return (int)$v;
                }, explode('-', $value[0]));
                if (count($tmp) === 2) {
                    $count = $tmp[0] === $tmp[1] ?
                        $tmp[0] :
                        ($tmp[0] <= $tmp[1] ?
                            [$tmp[0], $tmp[1]] :
                            [$tmp[1], $tmp[0]]);
                } elseif (is_int($tmp[0])) {
                    $count = [(int)$tmp[0], (int)$tmp[0]];
                }
            }
            if ($count[0] < 1) {
                return false;
            }
            $regex = sprintf('/([a-z0-9а-яё]+\s+){%d,%d}[a-z0-9а-яё]+/i', $count[0] - 1, $count[1] - 1);

            return preg_match($regex, $this->_form[$field]);
        }

        return false;
    }

    public function isDate($field, $value)
    {
        return date_create_from_format(empty($value) ? 'd.m.Y' : $value[0], $this->_form[$field]) !== false;
    }

    public function isPhone($field)
    {
        return preg_match('/^\+?(?:380(\d){9}|7\s*\(?\d{3}\)?\s*(?:-?\d){7})$/i', $this->_form[$field]);
    }

    public function setRule($field, $rule)
    {
        if (empty($this->_rules[$field])) {
            $this->_rules[$field] = [];
        }
        $this->_rules[$field][] = $rule;

        return $this;
    }

}
