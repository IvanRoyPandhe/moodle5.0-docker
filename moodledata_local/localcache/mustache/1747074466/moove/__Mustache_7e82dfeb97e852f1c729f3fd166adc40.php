<?php

class __Mustache_7e82dfeb97e852f1c729f3fd166adc40 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<button
';
        $buffer .= $indent . '    id="bulk-enable-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="bulkEnable btn text-primary text-nowrap"
';
        $buffer .= $indent . '    data-for="enableBulk" data-coursename="';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        $value = $context->find('sectiontitle');
        $buffer .= $this->section969941ac98749580ee5b36f812af40cc($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        $value = $context->find('sectionname');
        $buffer .= $this->section50a93f089bf9ff39c846fc5a30c36329($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section33fdc21207a168d9cb2c066c8f28dbad($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('pix');
        $buffer .= $this->sectionB4d69086fb42bb97fe80eaa22387fb2b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</button>
';
        $value = $context->find('js');
        $buffer .= $this->section01ac47c367b9f0ff37f1f261a95359d7($context, $indent, $value);

        return $buffer;
    }

    private function section969941ac98749580ee5b36f812af40cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-sectiontitle="{{.}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-sectiontitle="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50a93f089bf9ff39c846fc5a30c36329(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-sectionname="{{.}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-sectionname="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33fdc21207a168d9cb2c066c8f28dbad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bulkedit, core_courseformat ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bulkedit, core_courseformat ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d69086fb42bb97fe80eaa22387fb2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/bulk_edit, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/bulk_edit, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01ac47c367b9f0ff37f1f261a95359d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/content/bulkedittoggler\'], function(component) {
    component.init(\'#bulk-enable-{{uniqid}}\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/content/bulkedittoggler\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'#bulk-enable-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
