<?php

class __Mustache_dd3b3ed5fa8664d2048277b144fb029b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="page-wrapper" class="d-print-block">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="drawers drag-container bg-white">
';
        $value = $context->find('slidercount');
        $buffer .= $this->sectionDf23ce08d9899db70f2081c7fc25ef1b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('displaymarketingbox');
        $buffer .= $this->section04ea8e0cae594e8b46ddaebd2f1541b7($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('numbersfrontpage');
        $buffer .= $this->sectionA61bb1cc5163ac025f2f3a6f934dac93($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="topofscroll">
';
        $buffer .= $indent . '            <div id="page-content" class="d-print-block main-inner">
';
        $buffer .= $indent . '                <div id="region-main-box">
';
        $buffer .= $indent . '                    <section id="region-main" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </section>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('faqenabled');
        $buffer .= $this->sectionE1a1ac32a2263c0097c077b9c0c1a408($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        if ($partial = $this->mustache->loadPartial('theme_moove/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->section0f6af4d7a7ea1d825ac0c4559f747afe($context, $indent, $value);

        return $buffer;
    }

    private function section35ee9216beee57e628ac7420f1961da5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active" aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="active" aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a85b0bf976d925e49c6a2676ed5b24c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <button type="button" data-bs-target="#moove-carousel" data-bs-slide-to="{{{ key }}}" {{#active}}class="active" aria-current="true"{{/active}}  aria-label="{{slidertitle}}"></button>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <button type="button" data-bs-target="#moove-carousel" data-bs-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section35ee9216beee57e628ac7420f1961da5($context, $indent, $value);
                $buffer .= '  aria-label="';
                $value = $this->resolveValue($context->find('slidertitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83314dee017c6a0104c00d223d2648e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <h5 class="title">{{.}}</h5>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <h5 class="title">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h5>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6703597acdb45bc527aac7c88cb35559(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="caption">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe1a42ce2cc2e7a9e49fa6c33912371c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="carousel-caption d-none d-md-block">
';
                $value = $context->find('title');
                $buffer .= $this->section83314dee017c6a0104c00d223d2648e5($context, $indent, $value);
                $value = $context->find('caption');
                $buffer .= $this->section6703597acdb45bc527aac7c88cb35559($context, $indent, $value);
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7484004be5b6809208c84e5a071e8d72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="carousel-item {{#active}}active{{/active}}">
                                <img src="{{image}}" alt="{{slidertitle}}" class="d-block w-100">
                                {{#hascaption}}
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                {{/hascaption}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('slidertitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="d-block w-100">
';
                $value = $context->find('hascaption');
                $buffer .= $this->sectionEe1a42ce2cc2e7a9e49fa6c33912371c($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf23ce08d9899db70f2081c7fc25ef1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="mooveslideshow" class="container-fluid">
                <div id="moove-carousel" class="carousel slide">
                    {{^slidersingleslide}}
                        <div class="carousel-indicators">
                            {{#slides}}
                                <button type="button" data-bs-target="#moove-carousel" data-bs-slide-to="{{{ key }}}" {{#active}}class="active" aria-current="true"{{/active}}  aria-label="{{slidertitle}}"></button>
                            {{/slides}}
                        </div>
                    {{/slidersingleslide}}
                    <div class="carousel-inner">
                        {{#slides}}
                            <div class="carousel-item {{#active}}active{{/active}}">
                                <img src="{{image}}" alt="{{slidertitle}}" class="d-block w-100">
                                {{#hascaption}}
                                    <div class="carousel-caption d-none d-md-block">
                                        {{#title}}
                                            <h5 class="title">{{.}}</h5>
                                        {{/title}}
                                        {{#caption}}
                                            <div class="caption">
                                                {{{.}}}
                                            </div>
                                        {{/caption}}
                                    </div>
                                {{/hascaption}}
                            </div>
                        {{/slides}}
                    </div>
                    {{^slidersingleslide}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#moove-carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{#str}}previous{{/str}}</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#moove-carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{#str}}next{{/str}}</span>
                        </button>
                    {{/slidersingleslide}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="mooveslideshow" class="container-fluid">
';
                $buffer .= $indent . '                <div id="moove-carousel" class="carousel slide">
';
                $value = $context->find('slidersingleslide');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div class="carousel-indicators">
';
                    $value = $context->find('slides');
                    $buffer .= $this->section0a85b0bf976d925e49c6a2676ed5b24c($context, $indent, $value);
                    $buffer .= $indent . '                        </div>
';
                }
                $buffer .= $indent . '                    <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->section7484004be5b6809208c84e5a071e8d72($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('slidersingleslide');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <button class="carousel-control-prev" type="button" data-bs-target="#moove-carousel" data-bs-slide="prev">
';
                    $buffer .= $indent . '                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
                    $buffer .= $indent . '                            <span class="visually-hidden">';
                    $value = $context->find('str');
                    $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                        </button>
';
                    $buffer .= $indent . '                        <button class="carousel-control-next" type="button" data-bs-target="#moove-carousel" data-bs-slide="next">
';
                    $buffer .= $indent . '                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
                    $buffer .= $indent . '                            <span class="visually-hidden">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                        </button>
';
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d31343e80472ed188bb8b765d1d1ca1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="col-sm-6 mt-4">
                                        <div class="card card-body shadow">
                                            <div class="d-flex">
                                                <div class="icon-lg text-white rounded-circle">
                                                    <img src="{{{icon}}}">
                                                </div>
                                                <div class="col ps-3">
                                                    <h5>{{{heading}}}</h5>
                                                    <div class="box-content">{{{content}}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="col-sm-6 mt-4">
';
                $buffer .= $indent . '                                        <div class="card card-body shadow">
';
                $buffer .= $indent . '                                            <div class="d-flex">
';
                $buffer .= $indent . '                                                <div class="icon-lg text-white rounded-circle">
';
                $buffer .= $indent . '                                                    <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                                <div class="col ps-3">
';
                $buffer .= $indent . '                                                    <h5>';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                                                    <div class="box-content">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                                </div>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04ea8e0cae594e8b46ddaebd2f1541b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 my-3">
                            <h3 class="h1 mt-3 mb-3">{{{marketingheading}}}</h3>
                            <div class="marketing-content">{{{marketingcontent}}}</div>
                        </div>
                        <div class="col-lg-8 ps-xl-8">
                            <div class="row">
                                {{#marketingboxes}}
                                    <div class="col-sm-6 mt-4">
                                        <div class="card card-body shadow">
                                            <div class="d-flex">
                                                <div class="icon-lg text-white rounded-circle">
                                                    <img src="{{{icon}}}">
                                                </div>
                                                <div class="col ps-3">
                                                    <h5>{{{heading}}}</h5>
                                                    <div class="box-content">{{{content}}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {{/marketingboxes}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="feature">
';
                $buffer .= $indent . '                <div class="container">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-lg-4 my-3">
';
                $buffer .= $indent . '                            <h3 class="h1 mt-3 mb-3">';
                $value = $this->resolveValue($context->find('marketingheading'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                            <div class="marketing-content">';
                $value = $this->resolveValue($context->find('marketingcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-lg-8 ps-xl-8">
';
                $buffer .= $indent . '                            <div class="row">
';
                $value = $context->find('marketingboxes');
                $buffer .= $this->section6d31343e80472ed188bb8b765d1d1ca1($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEebda8ccf20355c1f145216979119901(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'numbersusers, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'numbersusers, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcdb637207015834c8999dd80fdc9806(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'numberscourses, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'numberscourses, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA61bb1cc5163ac025f2f3a6f934dac93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="numbers">
                <div class="moove-container-fluid">
                    <div class="row customer-area-l1 justify-content-center align-items-center ">
                        <div class="col-xl-5 col-lg-5 col-md-10">
                            <div class="sectionheading">
                                {{{numberscontent}}}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1">
                            <div class="row user-rating-box-area">
                                <div class="col-sm-6 col-xs-8">
                                    <div class="h-100 rate-box bg-primary">
                                        <h3>
                                            {{{numbersusers}}}
                                        </h3>
                                        <p>{{#str}}numbersusers, theme_moove{{/str}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-8">
                                    <div class="h-100 rate-box rate-box-2 bg-cloudburst">
                                        <h3>
                                            {{{numberscourses}}}
                                        </h3>
                                        <p>{{#str}}numberscourses, theme_moove{{/str}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="numbers">
';
                $buffer .= $indent . '                <div class="moove-container-fluid">
';
                $buffer .= $indent . '                    <div class="row customer-area-l1 justify-content-center align-items-center ">
';
                $buffer .= $indent . '                        <div class="col-xl-5 col-lg-5 col-md-10">
';
                $buffer .= $indent . '                            <div class="sectionheading">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('numberscontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-xl-6 col-lg-7 col-md-10 offset-xl-1">
';
                $buffer .= $indent . '                            <div class="row user-rating-box-area">
';
                $buffer .= $indent . '                                <div class="col-sm-6 col-xs-8">
';
                $buffer .= $indent . '                                    <div class="h-100 rate-box bg-primary">
';
                $buffer .= $indent . '                                        <h3>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('numbersusers'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </h3>
';
                $buffer .= $indent . '                                        <p>';
                $value = $context->find('str');
                $buffer .= $this->sectionEebda8ccf20355c1f145216979119901($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col-sm-6 col-xs-8">
';
                $buffer .= $indent . '                                    <div class="h-100 rate-box rate-box-2 bg-cloudburst">
';
                $buffer .= $indent . '                                        <h3>
';
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('numberscourses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </h3>
';
                $buffer .= $indent . '                                        <p>';
                $value = $context->find('str');
                $buffer .= $this->sectionFcdb637207015834c8999dd80fdc9806($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4751be753bef83b9cd391960a73b2d18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'faq, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'faq, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6388b18c4a28a0b36ce7c6b17f41ac1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{^active}}collapsed{{/active}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{{id}}}" aria-expanded="true" aria-controls="collapse-{{{id}}}">
                                        {{{question}}}
                                    </button>
                                </h2>
                                <div id="collapse-{{{id}}}" class="accordion-collapse collapse {{#active}}show{{/active}}" data-bs-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        {{{answer}}}
                                    </div>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="accordion-item mb-1">
';
                $buffer .= $indent . '                                <h2 class="accordion-header">
';
                $buffer .= $indent . '                                    <button class="accordion-button ';
                $value = $context->find('active');
                if (empty($value)) {
                    
                    $buffer .= 'collapsed';
                }
                $buffer .= '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" aria-expanded="true" aria-controls="collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('question'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </button>
';
                $buffer .= $indent . '                                </h2>
';
                $buffer .= $indent . '                                <div id="collapse-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="accordion-collapse collapse ';
                $value = $context->find('active');
                $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
                $buffer .= '" data-bs-parent="#accordion-faq">
';
                $buffer .= $indent . '                                    <div class="accordion-body">
';
                $buffer .= $indent . '                                        ';
                $value = $this->resolveValue($context->find('answer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1a1ac32a2263c0097c077b9c0c1a408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <section id="faq" class="scale-up scale-up-show">
                <div class="moove-container-fluid">
                    <h2>{{#str}}faq, theme_moove{{/str}}</h2>

                    <div class="accordion" id="accordion-faq">
                        {{#faq}}
                            <div class="accordion-item mb-1">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{^active}}collapsed{{/active}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{{id}}}" aria-expanded="true" aria-controls="collapse-{{{id}}}">
                                        {{{question}}}
                                    </button>
                                </h2>
                                <div id="collapse-{{{id}}}" class="accordion-collapse collapse {{#active}}show{{/active}}" data-bs-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        {{{answer}}}
                                    </div>
                                </div>
                            </div>
                        {{/faq}}
                    </div>
                </div>
            </section>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <section id="faq" class="scale-up scale-up-show">
';
                $buffer .= $indent . '                <div class="moove-container-fluid">
';
                $buffer .= $indent . '                    <h2>';
                $value = $context->find('str');
                $buffer .= $this->section4751be753bef83b9cd391960a73b2d18($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="accordion" id="accordion-faq">
';
                $value = $context->find('faq');
                $buffer .= $this->section6388b18c4a28a0b36ce7c6b17f41ac1f($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f6af4d7a7ea1d825ac0c4559f747afe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    M.util.js_pending(\'theme_boost/loader\');
    require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
        Drawer.init();
        M.util.js_complete(\'theme_boost/loader\');
    });
    require([\'jquery\'], function($) {
        $(\'.carousel\').carousel({
            interval: 5000
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '    require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '        Drawer.init();
';
                $buffer .= $indent . '        M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(\'.carousel\').carousel({
';
                $buffer .= $indent . '            interval: 5000
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
