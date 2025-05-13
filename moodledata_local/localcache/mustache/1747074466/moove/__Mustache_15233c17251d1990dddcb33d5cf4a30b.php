<?php

class __Mustache_15233c17251d1990dddcb33d5cf4a30b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="loginform row ';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section1831ec93a455edb6208a4d5438e8a9c0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section13b44ac94167f3136edfaf1435af46a2($context, $indent, $value);
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $buffer .= 'col';
        }
        $buffer .= '">
';
        $value = $context->find('logourl');
        $buffer .= $this->sectionAdbb0ca67c4a16e0ae998a58432da121($context, $indent, $value);
        $value = $context->find('logourl');
        if (empty($value)) {
            
            $buffer .= $indent . '            <h1 class="login-heading mb-4">';
            $value = $context->find('str');
            $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
            $buffer .= '</h1>
';
        }
        $value = $context->find('maintenance');
        $buffer .= $this->section6d5381d6491689b58f8946091ec0a71e($context, $indent, $value);
        $value = $context->find('error');
        $buffer .= $this->section6ffd9c9ca38d660f73862c85ffa49bc3($context, $indent, $value);
        $value = $context->find('info');
        $buffer .= $this->section02260a22fb6781a715ab076ac96680ff($context, $indent, $value);
        $value = $context->find('cansignup');
        $buffer .= $this->sectionEd9ef67c6fd262930215209792c7176e($context, $indent, $value);
        $value = $context->find('showloginform');
        $buffer .= $this->section188de9776f18a05c1f9d554b90c0ece6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasidentityproviders');
        $buffer .= $this->section02bb1fe8f52931b4c932a3e65674aa85($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hastwocolumns');
        if (empty($value)) {
            
            $value = $context->find('canloginasguest');
            $buffer .= $this->section2312c7c05e555ea9c337ca80322b7b75($context, $indent, $value);
            $buffer .= $indent . '            <div class="login-divider"></div>
';
            $buffer .= $indent . '            <div class="d-flex">
';
            $value = $context->find('languagemenu');
            $buffer .= $this->section31568b13f586f5122acc1e6d91195e8e($context, $indent, $value);
            $buffer .= $indent . '                <button type="button" class="btn btn-secondary" ';
            $buffer .= ' data-modal="alert"';
            $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
            $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
            $buffer .= '>';
            $value = $context->find('str');
            $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
            $buffer .= '</button>
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $value = $context->find('hastwocolumns');
        $buffer .= $this->section1559e0281deae74859622a825d17f402($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionDd70118972f2aa9f3ba2fe4ac8b9b9d1($context, $indent, $value);

        return $buffer;
    }

    private function section1831ec93a455edb6208a4d5438e8a9c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hastwocolumns';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hastwocolumns';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13b44ac94167f3136edfaf1435af46a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'col-lg-6 col-md-12 left-column';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'col-lg-6 col-md-12 left-column';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80a4d1690ff171d23b2097c3acda60e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loginto, core, {{sitename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loginto, core, ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdbb0ca67c4a16e0ae998a58432da121(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="loginlogo" class="login-logo">
                <img id="logoimage" src="{{logourl}}" class="img-fluid" alt="{{sitename}}"/>
                <h1 class="login-heading visually-hidden">{{#str}} loginto, core, {{sitename}} {{/str}}</h1>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="loginlogo" class="login-logo">
';
                $buffer .= $indent . '                <img id="logoimage" src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="img-fluid" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"/>
';
                $buffer .= $indent . '                <h1 class="login-heading visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section80a4d1690ff171d23b2097c3acda60e4($context, $indent, $value);
                $buffer .= '</h1>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d5381d6491689b58f8946091ec0a71e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="alert alert-danger login-maintenance">
                {{{maintenance}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="alert alert-danger login-maintenance">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ffd9c9ca38d660f73862c85ffa49bc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" id="loginerrormessage" class="visually-hidden">{{error}}</a>
            <div class="alert alert-danger" role="alert">{{error}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" id="loginerrormessage" class="visually-hidden">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            <div class="alert alert-danger" role="alert">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02260a22fb6781a715ab076ac96680ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" id="logininfomessage" class="visually-hidden">{{info}}</a>
            <div class="alert alert-info" role="alert">{{info}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" id="logininfomessage" class="visually-hidden">';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            <div class="alert alert-info" role="alert">';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd9ef67c6fd262930215209792c7176e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{signupurl}}" class="visually-hidden">{{#str}} tocreatenewaccount {{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27e9419edc620e0e1872d2a6521f1533(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' username ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' username ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22141a6741c33f407ef6171795337eec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usernameemail ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usernameemail ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e043cbc642d77f2f4cb8aed5b9ceeaa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#str}} usernameemail {{/str}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section22141a6741c33f407ef6171795337eec($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFea69428308e6a733cfeebf7670bdc01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'username';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'username';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section983b6843353faa33a83a9ec3069863a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'usernameemail';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'usernameemail';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section118ece6c412804f669c845b43ecc9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#cleanstr}}usernameemail{{/cleanstr}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cleanstr');
                $buffer .= $this->section983b6843353faa33a83a9ec3069863a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE056be559d6d01a9bd2bf6f760f8e3e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' password ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' password ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e50d9b1632f258e8c10be3e2ed759be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'password';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'password';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f54d777d8601e6a96b47b63c4ed08f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-form-recaptcha mb-3">
                        {{{recaptcha}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-form-recaptcha mb-3">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('recaptcha'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b76de4078bcb4877f73dc3c5f83f3d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col">
                            <div class="login-signup text-center">
                                <a class="btn btn-success btn-block text-white" href="{{signupurl}}">{{#str}}startsignup{{/str}}</a>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="col">
';
                $buffer .= $indent . '                            <div class="login-signup text-center">
';
                $buffer .= $indent . '                                <a class="btn btn-success btn-block text-white" href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3afea308016df7243ba8871f7081e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forgotaccount';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forgotaccount';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section188de9776f18a05c1f9d554b90c0ece6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <form class="login-form" action="{{loginurl}}" method="post" id="login">
                <input id="anchor" type="hidden" name="anchor" value="">
                <script>document.getElementById(\'anchor\').value = location.hash;</script>
                <input type="hidden" name="logintoken" value="{{logintoken}}">
                <div class="login-form-username mb-3">
                    <label for="username" class="visually-hidden">
                        {{^canloginbyemail}}
                            {{#str}} username {{/str}}
                        {{/canloginbyemail}}
                        {{#canloginbyemail}}
                            {{#str}} usernameemail {{/str}}
                        {{/canloginbyemail}}
                    </label>
                    <input type="text" name="username" id="username" {{!
                    !}}class="form-control form-control-lg" {{!
                    !}}value="{{username}}" {{!
                    !}}placeholder="{{^canloginbyemail}}{{#cleanstr}}username{{/cleanstr}}{{/canloginbyemail}}{{!
                    !}}{{#canloginbyemail}}{{#cleanstr}}usernameemail{{/cleanstr}}{{/canloginbyemail}}" {{!
                    !}}autocomplete="username">
                </div>
                <div class="login-form-password mb-3">
                    <label for="password" class="visually-hidden">{{#str}} password {{/str}}</label>
                    <input type="password" name="password" id="password" value="" {{!
                    !}}class="form-control form-control-lg" {{!
                    !}}placeholder="{{#cleanstr}}password{{/cleanstr}}" {{!
                    !}}autocomplete="current-password">
                </div>
                {{#recaptcha}}
                    <div class="login-form-recaptcha mb-3">
                        {{{recaptcha}}}
                    </div>
                {{/recaptcha}}
                <div class="row align-items-center">
                    <div class="login-form-submit col">
                        <button class="btn btn-primary btn-block" type="submit" id="loginbtn">{{#str}}login{{/str}}</button>
                    </div>

                    {{#cansignup}}
                        <div class="col">
                            <div class="login-signup text-center">
                                <a class="btn btn-success btn-block text-white" href="{{signupurl}}">{{#str}}startsignup{{/str}}</a>
                            </div>
                        </div>
                    {{/cansignup}}
                </div>
            </form>

            <div class="login-divider"></div>
            <div class="login-form-forgotpassword col">
                <a href="{{forgotpasswordurl}}">{{#str}}forgotaccount{{/str}}</a>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <form class="login-form" action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="login">
';
                $buffer .= $indent . '                <input id="anchor" type="hidden" name="anchor" value="">
';
                $buffer .= $indent . '                <script>document.getElementById(\'anchor\').value = location.hash;</script>
';
                $buffer .= $indent . '                <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="login-form-username mb-3">
';
                $buffer .= $indent . '                    <label for="username" class="visually-hidden">
';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $context->find('str');
                    $buffer .= $this->section27e9419edc620e0e1872d2a6521f1533($context, $indent, $value);
                    $buffer .= '
';
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section1e043cbc642d77f2f4cb8aed5b9ceeaa($context, $indent, $value);
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                    <input type="text" name="username" id="username" ';
                $buffer .= 'class="form-control form-control-lg" ';
                $buffer .= 'value="';
                $value = $this->resolveValue($context->find('username'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $buffer .= 'placeholder="';
                $value = $context->find('canloginbyemail');
                if (empty($value)) {
                    
                    $value = $context->find('cleanstr');
                    $buffer .= $this->sectionFea69428308e6a733cfeebf7670bdc01($context, $indent, $value);
                }
                $value = $context->find('canloginbyemail');
                $buffer .= $this->section118ece6c412804f669c845b43ecc9a01($context, $indent, $value);
                $buffer .= '" ';
                $buffer .= 'autocomplete="username">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="login-form-password mb-3">
';
                $buffer .= $indent . '                    <label for="password" class="visually-hidden">';
                $value = $context->find('str');
                $buffer .= $this->sectionE056be559d6d01a9bd2bf6f760f8e3e3($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    <input type="password" name="password" id="password" value="" ';
                $buffer .= 'class="form-control form-control-lg" ';
                $buffer .= 'placeholder="';
                $value = $context->find('cleanstr');
                $buffer .= $this->section4e50d9b1632f258e8c10be3e2ed759be($context, $indent, $value);
                $buffer .= '" ';
                $buffer .= 'autocomplete="current-password">
';
                $buffer .= $indent . '                </div>
';
                $value = $context->find('recaptcha');
                $buffer .= $this->section5f54d777d8601e6a96b47b63c4ed08f4($context, $indent, $value);
                $buffer .= $indent . '                <div class="row align-items-center">
';
                $buffer .= $indent . '                    <div class="login-form-submit col">
';
                $buffer .= $indent . '                        <button class="btn btn-primary btn-block" type="submit" id="loginbtn">';
                $value = $context->find('str');
                $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('cansignup');
                $buffer .= $this->section9b76de4078bcb4877f73dc3c5f83f3d6($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </form>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="login-divider"></div>
';
                $buffer .= $indent . '            <div class="login-form-forgotpassword col">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('forgotpasswordurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionE3afea308016df7243ba8871f7081e79($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE384f0e9b1fcc321a1a78dba1d43f63f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' potentialidps, auth ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' potentialidps, auth ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27616e9c5b7b72845decb91e5625f6be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="" width="24" height="24"/>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89b6b9342d45f33147241d5dfb7ac96f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="btn login-identityprovider-btn w-100" href="{{url}}">
                        {{#iconurl}}
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
                        {{/iconurl}}
                        {{name}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="btn login-identityprovider-btn w-100" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('iconurl');
                $buffer .= $this->section27616e9c5b7b72845decb91e5625f6be($context, $indent, $value);
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section02bb1fe8f52931b4c932a3e65674aa85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="login-divider"></div>
            <div class="login-identityproviders">
                <h2 class="login-heading">{{#str}} potentialidps, auth {{/str}}</h2>
                {{#identityproviders}}
                    <a class="btn login-identityprovider-btn w-100" href="{{url}}">
                        {{#iconurl}}
                            <img src="{{iconurl}}" alt="" width="24" height="24"/>
                        {{/iconurl}}
                        {{name}}
                    </a>
                {{/identityproviders}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="login-divider"></div>
';
                $buffer .= $indent . '            <div class="login-identityproviders">
';
                $buffer .= $indent . '                <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->sectionE384f0e9b1fcc321a1a78dba1d43f63f($context, $indent, $value);
                $buffer .= '</h2>
';
                $value = $context->find('identityproviders');
                $buffer .= $this->section89b6b9342d45f33147241d5dfb7ac96f($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93e4b62aaf677bf7878b06c5ac540671(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'someallowguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'someallowguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section017c9686023b74877131737c59ff1162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loginguest';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'loginguest';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2312c7c05e555ea9c337ca80322b7b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-divider"></div>
                <h2 class="login-heading">{{#str}}someallowguest{{/str}}</h2>
                <form action="{{loginurl}}" method="post" id="guestlogin">
                    <input type="hidden" name="logintoken" value="{{logintoken}}">
                    <input type="hidden" name="username" value="guest" />
                    <input type="hidden" name="password" value="guest" />
                    <button class="btn btn-secondary" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
                </form>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-divider"></div>
';
                $buffer .= $indent . '                <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->section93e4b62aaf677bf7878b06c5ac540671($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                <form action="';
                $value = $this->resolveValue($context->find('loginurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" method="post" id="guestlogin">
';
                $buffer .= $indent . '                    <input type="hidden" name="logintoken" value="';
                $value = $this->resolveValue($context->find('logintoken'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <input type="hidden" name="username" value="guest" />
';
                $buffer .= $indent . '                    <input type="hidden" name="password" value="guest" />
';
                $buffer .= $indent . '                    <button class="btn btn-secondary" type="submit" id="loginguestbtn">';
                $value = $context->find('str');
                $buffer .= $this->section017c9686023b74877131737c59ff1162($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                </form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31568b13f586f5122acc1e6d91195e8e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="login-languagemenu">
                        {{>core/action_menu}}
                    </div>
                    <div class="divider border-start align-self-center mx-3"></div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="login-languagemenu">
';
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="divider border-start align-self-center mx-3"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2e3defecc35d84a091ece31c5fc7e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mb-3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'mb-3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB681534bda1faeeb31506c30e72ff16e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firsttime';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firsttime';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0b4b9aed890cd2c38149d2bfecdabfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="login-divider"></div>
                <div class="login-instructions {{#cansignup}}mb-3{{/cansignup}}">
                    <h2 class="login-heading">{{#str}}firsttime{{/str}}</h2>
                    {{{instructions}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="login-divider"></div>
';
                $buffer .= $indent . '                <div class="login-instructions ';
                $value = $context->find('cansignup');
                $buffer .= $this->sectionEf2e3defecc35d84a091ece31c5fc7e0($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <h2 class="login-heading">';
                $value = $context->find('str');
                $buffer .= $this->sectionB681534bda1faeeb31506c30e72ff16e($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('instructions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1559e0281deae74859622a825d17f402(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-lg-6 col-md-12 right-column">
            {{#hasinstructions}}
                <div class="login-divider"></div>
                <div class="login-instructions {{#cansignup}}mb-3{{/cansignup}}">
                    <h2 class="login-heading">{{#str}}firsttime{{/str}}</h2>
                    {{{instructions}}}
                </div>
            {{/hasinstructions}}
            {{#canloginasguest}}
                <div class="login-divider"></div>
                <h2 class="login-heading">{{#str}}someallowguest{{/str}}</h2>
                <form action="{{loginurl}}" method="post" id="guestlogin">
                    <input type="hidden" name="logintoken" value="{{logintoken}}">
                    <input type="hidden" name="username" value="guest" />
                    <input type="hidden" name="password" value="guest" />
                    <button class="btn btn-secondary" type="submit" id="loginguestbtn">{{#str}}loginguest{{/str}}</button>
                </form>
            {{/canloginasguest}}
            <div class="login-divider"></div>
            <div class="d-flex">
                {{#languagemenu}}
                    <div class="login-languagemenu">
                        {{>core/action_menu}}
                    </div>
                    <div class="divider border-start align-self-center mx-3"></div>
                {{/languagemenu}}
                <button type="button" class="btn btn-secondary" {{!
                }} data-modal="alert"{{!
                }} data-modal-title-str=\'["cookiesenabled", "core"]\' {{!
                }} data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'{{!
                }}>{{#str}}cookiesnotice{{/str}}</button>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-lg-6 col-md-12 right-column">
';
                $value = $context->find('hasinstructions');
                $buffer .= $this->sectionC0b4b9aed890cd2c38149d2bfecdabfb($context, $indent, $value);
                $value = $context->find('canloginasguest');
                $buffer .= $this->section2312c7c05e555ea9c337ca80322b7b75($context, $indent, $value);
                $buffer .= $indent . '            <div class="login-divider"></div>
';
                $buffer .= $indent . '            <div class="d-flex">
';
                $value = $context->find('languagemenu');
                $buffer .= $this->section31568b13f586f5122acc1e6d91195e8e($context, $indent, $value);
                $buffer .= $indent . '                <button type="button" class="btn btn-secondary" ';
                $buffer .= ' data-modal="alert"';
                $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
                $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
                $buffer .= '>';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb316c033dbb6434eebf557c64e10bf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            require([\'core_form/events\'], function(FormEvent) {
                function autoFocus() {
                    const userNameField = document.getElementById(\'username\');
                    if (userNameField.value.length == 0) {
                        userNameField.focus();
                    } else {
                        document.getElementById(\'password\').focus();
                    }
                }
                autoFocus();
                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
            });
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            require([\'core_form/events\'], function(FormEvent) {
';
                $buffer .= $indent . '                function autoFocus() {
';
                $buffer .= $indent . '                    const userNameField = document.getElementById(\'username\');
';
                $buffer .= $indent . '                    if (userNameField.value.length == 0) {
';
                $buffer .= $indent . '                        userNameField.focus();
';
                $buffer .= $indent . '                    } else {
';
                $buffer .= $indent . '                        document.getElementById(\'password\').focus();
';
                $buffer .= $indent . '                    }
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                autoFocus();
';
                $buffer .= $indent . '                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
';
                $buffer .= $indent . '            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb31e0a905855a4df03d13e2bbd239e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        document.getElementById(\'loginerrormessage\').focus();
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        document.getElementById(\'loginerrormessage\').focus();
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf8ed2a653223b955509959d51115f73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'core/togglesensitive\'], function(ToggleSensitive) {
            ToggleSensitive.init("password", {{smallscreensonly}});
        });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'core/togglesensitive\'], function(ToggleSensitive) {
';
                $buffer .= $indent . '            ToggleSensitive.init("password", ';
                $value = $this->resolveValue($context->find('smallscreensonly'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF134befbc907907019eac63cfee377f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            Submit.init("loginguestbtn");
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            Submit.init("loginguestbtn");
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd70118972f2aa9f3ba2fe4ac8b9b9d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^error}}
        {{#autofocusform}}
            require([\'core_form/events\'], function(FormEvent) {
                function autoFocus() {
                    const userNameField = document.getElementById(\'username\');
                    if (userNameField.value.length == 0) {
                        userNameField.focus();
                    } else {
                        document.getElementById(\'password\').focus();
                    }
                }
                autoFocus();
                window.addEventListener(FormEvent.eventTypes.fieldStructureChanged, autoFocus);
            });
        {{/autofocusform}}
    {{/error}}
    {{#error}}
        document.getElementById(\'loginerrormessage\').focus();
    {{/error}}
    {{#togglepassword}}
        require([\'core/togglesensitive\'], function(ToggleSensitive) {
            ToggleSensitive.init("password", {{smallscreensonly}});
        });
    {{/togglepassword}}
    require([\'core_form/submit\'], function(Submit) {
        Submit.init("loginbtn");
        {{#canloginasguest}}
            Submit.init("loginguestbtn");
        {{/canloginasguest}}
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('error');
                if (empty($value)) {
                    
                    $value = $context->find('autofocusform');
                    $buffer .= $this->sectionFb316c033dbb6434eebf557c64e10bf5($context, $indent, $value);
                }
                $value = $context->find('error');
                $buffer .= $this->sectionEb31e0a905855a4df03d13e2bbd239e8($context, $indent, $value);
                $value = $context->find('togglepassword');
                $buffer .= $this->sectionAf8ed2a653223b955509959d51115f73($context, $indent, $value);
                $buffer .= $indent . '    require([\'core_form/submit\'], function(Submit) {
';
                $buffer .= $indent . '        Submit.init("loginbtn");
';
                $value = $context->find('canloginasguest');
                $buffer .= $this->sectionF134befbc907907019eac63cfee377f3($context, $indent, $value);
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
