<?php

class __Mustache_7d255a9b095e9cdfab3b91c2d7f55508 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="dashboard-moodleinfo"></div>
';
        $buffer .= $indent . '<div class="row">
';
        $buffer .= $indent . '    <div class="col-sm-6">
';
        $buffer .= $indent . '        <div class="element-box">
';
        $buffer .= $indent . '            <h3>';
        $value = $context->find('str');
        $buffer .= $this->section298d1e5f6a1809b3510fd863130acecc($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <div id="dashboard-last_grades"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-sm-6 ">
';
        $buffer .= $indent . '        <div class="element-box">
';
        $buffer .= $indent . '            <h3>';
        $value = $context->find('str');
        $buffer .= $this->section418de55e04c10ab8462ef7dfda00dd67($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <div id="dashboard-last_enroll"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section298d1e5f6a1809b3510fd863130acecc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_grade_title, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_grade_title, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section418de55e04c10ab8462ef7dfda00dd67(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_enrol_title, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_enrol_title, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
