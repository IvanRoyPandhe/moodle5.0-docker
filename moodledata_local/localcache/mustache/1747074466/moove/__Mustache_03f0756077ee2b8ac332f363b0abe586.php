<?php

class __Mustache_03f0756077ee2b8ac332f363b0abe586 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="media dashboard-grade-list">
';
        $buffer .= $indent . '    <div class="media-left">
';
        $buffer .= $indent . '        <img title="';
        $value = $this->resolveValue($context->find('user_fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" src="';
        $value = $this->resolveValue($context->find('profileimageurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="media-object">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="media-body">
';
        $buffer .= $indent . '        <h4 class="media-heading">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('users_details'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $this->resolveValue($context->find('user_fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</a>
';
        $buffer .= $indent . '        </h4>
';
        $buffer .= $indent . '        <p>';
        $value = $this->resolveValue($context->find('dashboard_enrol_text'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="status">';
        $value = $this->resolveValue($context->find('matricula_status'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </p>
';
        $buffer .= $indent . '        <div class="date">
';
        $buffer .= $indent . '            <small>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section64de060cd46d8bf0c48f25d8a5ed0192($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <i>';
        $value = $this->resolveValue($context->find('matricula_date'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</i>
';
        $buffer .= $indent . '            </small>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="clear"></div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section64de060cd46d8bf0c48f25d8a5ed0192(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_enrol_lastmodifield,local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_enrol_lastmodifield,local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
