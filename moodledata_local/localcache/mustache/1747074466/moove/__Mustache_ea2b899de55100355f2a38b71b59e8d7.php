<?php

class __Mustache_ea2b899de55100355f2a38b71b59e8d7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="recentlyaccessedcourses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-region="recentlyaccessedcourses-view">
';
        $buffer .= $indent . '    <div data-region="loading-placeholder">
';
        $buffer .= $indent . '        <div class="card-grid mx-0 mt-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 flex-nowrap overflow-hidden" style="height: 13.05rem">
';
        $buffer .= $indent . '            <div class="col p-0">';
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div class="col p-0">';
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '            <div class="col p-0">';
        if ($partial = $this->mustache->loadPartial('core_course/placeholder-course')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden" data-region="view-content">
';
        $value = $context->find('pagingbar');
        $buffer .= $this->section14075e01070871c84377e3414c122388($context, $indent, $value);
        $buffer .= $indent . '        <div class="card-carousel mx-0 justify-content-center flex-nowrap overflow-hidden" data-region="card-deck" role="list">
';
        $value = $context->find('courses');
        $buffer .= $this->section4926d9c15bbacee8291de1466b712992($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden text-xs-center text-center mt-3" data-region="empty-message">
';
        $buffer .= $indent . '        <img class="empty-placeholder-image-lg mt-1"
';
        $buffer .= $indent . '            src="';
        $value = $this->resolveValue($context->find('nocoursesimgurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '            alt="">
';
        $buffer .= $indent . '        <p class="text-muted mt-3">';
        $value = $context->find('str');
        $buffer .= $this->sectionF6add2e2e6b5799b6d4352012a0ac861($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section14075e01070871c84377e3414c122388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex paging-bar-container mb-3" data-region="paging-bar-container">
                {{> core/paged_content_paging_bar }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex paging-bar-container mb-3" data-region="paging-bar-container">
';
                if ($partial = $this->mustache->loadPartial('core/paged_content_paging_bar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4926d9c15bbacee8291de1466b712992(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_course/coursecard }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/coursecard')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6add2e2e6b5799b6d4352012a0ac861(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocourses, block_recentlyaccessedcourses ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nocourses, block_recentlyaccessedcourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
