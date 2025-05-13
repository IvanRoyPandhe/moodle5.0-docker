<?php

class __Mustache_42653376a8eaba958a91f320a490d264 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="element-content">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="element-box color_user">
';
        $buffer .= $indent . '                <div class="label">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section2a37f1d3d81893a2d597fb2dd05dc303($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="value"><a href="';
        $value = $this->resolveValue($context->find('users_link'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('users_count'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="element-box color_online">
';
        $buffer .= $indent . '                <div class="label">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section7ba4dc054acfd8bb790544bc2d459950($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="value"><a href="';
        $value = $this->resolveValue($context->find('useronline_link'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <span id="user-count-online">';
        $value = $this->resolveValue($context->find('useronline_count_5'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    / ';
        $value = $this->resolveValue($context->find('useronline_count_60'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="element-box color_course">
';
        $buffer .= $indent . '                <div class="label">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionC9ec9192eb3427db875ad06a3ad869db($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="value"><a href="';
        $value = $this->resolveValue($context->find('courses_link'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('courses_count_all'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' / ';
        $value = $this->resolveValue($context->find('courses_count_all_visibles'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-sm-3">
';
        $buffer .= $indent . '            <div class="element-box color_disk">
';
        $buffer .= $indent . '                <div class="label">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section145071d75462ca952761e96fb6c968c3($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                <div class="value"><a href="';
        $value = $this->resolveValue($context->find('disk_link'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('disk_size'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section2a37f1d3d81893a2d597fb2dd05dc303(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_title_user, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_title_user, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ba4dc054acfd8bb790544bc2d459950(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_title_online, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_title_online, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9ec9192eb3427db875ad06a3ad869db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_title_course, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_title_course, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section145071d75462ca952761e96fb6c968c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dashboard_title_disk, local_kopere_dashboard';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dashboard_title_disk, local_kopere_dashboard';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
