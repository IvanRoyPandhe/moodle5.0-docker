<?php

class __Mustache_6858c6c75bb93ef92cc37c8ed5222e48 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="box py-3 generalbox alert alert-warning">
';
        $buffer .= $indent . '    <div class="mb-2 mt-1 d-flex alert-heading">
';
        $buffer .= $indent . '        <span><i class="icon fa fa-circle-info fa-fw " aria-hidden="true"></i></span>
';
        $buffer .= $indent . '        <h3 class="h6 mb-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionBd27cf9b378388285dca9eeb47de7402($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->section9382e9bc59c4b409754e999c5b6665bd($context, $indent, $value);
        $buffer .= ' <a href="https://conecti.me">conecti.me</a> ';
        $value = $context->find('str');
        $buffer .= $this->sectionDc94875db2f12d9203be141b93c224ee($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->section71a1ce070d2ebbf7275971931530698c($context, $indent, $value);
        $buffer .= ' <a href="https://conecti.me">';
        $value = $context->find('str');
        $buffer .= $this->sectionC383ddc1425fec8af2979220a8f6608a($context, $indent, $value);
        $buffer .= '.</a> ';
        $value = $context->find('str');
        $buffer .= $this->section5da7a9e0a08602640fa40b824dec72a9($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    <a href="https://conecti.me">
';
        $buffer .= $indent . '        <img style="width: 400px;" class="img-fluid" src="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/theme/moove/pix/conectime-partner.svg" alt="Logo Conecti.me">
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionBd27cf9b378388285dca9eeb47de7402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'supportandservices, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'supportandservices, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9382e9bc59c4b409754e999c5b6665bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'themedevelopedby, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'themedevelopedby, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc94875db2f12d9203be141b93c224ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'themedevelopedbyconectimepartner, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'themedevelopedbyconectimepartner, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71a1ce070d2ebbf7275971931530698c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'needsupport, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'needsupport, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC383ddc1425fec8af2979220a8f6608a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'contactus, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'contactus, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5da7a9e0a08602640fa40b824dec72a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pleasuretohelp, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pleasuretohelp, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
