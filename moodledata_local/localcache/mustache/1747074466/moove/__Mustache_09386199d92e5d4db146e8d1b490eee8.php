<?php

class __Mustache_09386199d92e5d4db146e8d1b490eee8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="question-version-number">
';
        $buffer .= $indent . '    <span> ';
        $value = $this->resolveValue($context->find('versionnumber'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '. </span> <a href="';
        $value = $this->resolveValue($context->find('historyurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"> ';
        $value = $context->find('pix');
        $buffer .= $this->section02c1a12e72ea66ec1cae9f9b3f688c98($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('str');
        $buffer .= $this->section867620835c15616e825c790d1798ab3d($context, $indent, $value);
        $buffer .= ' </a>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('createdby');
        $buffer .= $this->section7942487c6390c384e4d503163cbbe59b($context, $indent, $value);

        return $buffer;
    }

    private function section02c1a12e72ea66ec1cae9f9b3f688c98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/log, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/log, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section867620835c15616e825c790d1798ab3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'history, qbank_viewcreator';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'history, qbank_viewcreator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7942487c6390c384e4d503163cbbe59b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="question-creator-info">
        <span>{{{createdby}}}</span>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="question-creator-info">
';
                $buffer .= $indent . '        <span>';
                $value = $this->resolveValue($context->find('createdby'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
