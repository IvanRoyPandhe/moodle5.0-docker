<?php

class __Mustache_2046a2a70c5c42bfd8d65eede90ad6cf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'block34801a762e12ded8867d2b7d4c9d3996'),
                'element' => array($this, 'block6dc22ef08551c8c4589592e81831ac06'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->find('js');
        $buffer .= $this->section17a54355a44501747d30545aaca34fa2($context, $indent, $value);

        return $buffer;
    }

    private function section17a54355a44501747d30545aaca34fa2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
(function() {
    var label = document.getElementById(\'{{element.id}}_label\');
    if (label) {
        label.style.cursor = \'default\';
        label.addEventListener(\'click\', function() {
            document.querySelectorAll(\'#{{element.id}}_fieldset .fp-btn-choose\')[0].focus();
        });
    }
})();
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '(function() {
';
                $buffer .= $indent . '    var label = document.getElementById(\'';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_label\');
';
                $buffer .= $indent . '    if (label) {
';
                $buffer .= $indent . '        label.style.cursor = \'default\';
';
                $buffer .= $indent . '        label.addEventListener(\'click\', function() {
';
                $buffer .= $indent . '            document.querySelectorAll(\'#';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '_fieldset .fp-btn-choose\')[0].focus();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '})();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block34801a762e12ded8867d2b7d4c9d3996($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('element.hiddenlabel');
        if (empty($value)) {
            
            $buffer .= $indent . '            <p id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '_label" class="mb-0 d-inline" aria-hidden="true">
';
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('label'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '            </p>
';
        }
    
        return $buffer;
    }

    public function block6dc22ef08551c8c4589592e81831ac06($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <fieldset class="w-100 m-0 p-0 border-0" id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_fieldset">
';
        $buffer .= $indent . '            <legend class="visually-hidden">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</legend>
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </fieldset>
';
    
        return $buffer;
    }
}
