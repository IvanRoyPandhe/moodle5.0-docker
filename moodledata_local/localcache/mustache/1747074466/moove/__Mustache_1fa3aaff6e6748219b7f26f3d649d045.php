<?php

class __Mustache_1fa3aaff6e6748219b7f26f3d649d045 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    data-region="paging-control-container"
';
        $buffer .= $indent . '    class="d-flex"
';
        $buffer .= $indent . '>
';
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->section3ad3e554960559a16a621d8dc234ae78($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <nav
';
        $buffer .= $indent . '        id="';
        $blockFunction = $context->findInBlock('pagingbarid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= 'paging-bar-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '        class="';
        $value = $context->find('showitemsperpageselector');
        $buffer .= $this->sectionC4e57b3481c6a21b9041c8630595e768($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-region="paging-bar"
';
        $buffer .= $indent . '        data-ignore-control-while-loading="';
        $value = $this->resolveValue($context->find('ignorecontrolwhileloading'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        data-hide-control-on-single-page="';
        $value = $this->resolveValue($context->find('hidecontrolonsinglepage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $value = $context->find('activepagenumber');
        $buffer .= $this->section5fd8343e4731c94d1f86be5a7cad6df9($context, $indent, $value);
        $value = $context->find('activepagenumber');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-active-page-number="1"
';
        }
        $value = $context->find('itemsperpage');
        $buffer .= $this->section4358877d9eb684c7eadd3782fbbd3f90($context, $indent, $value);
        $value = $context->findDot('arialabels.paginationnav');
        $buffer .= $this->section7b6254eb0f3ef8dd9bb7b524e40f8948($context, $indent, $value);
        $value = $context->findDot('arialabels.paginationnav');
        if (empty($value)) {
            
            $buffer .= $indent . '            aria-label="';
            $value = $context->find('str');
            $buffer .= $this->sectionB3b9fe4a96cf8bd9421e25e08601e058($context, $indent, $value);
            $buffer .= '"
';
        }
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        $buffer .= $this->sectionC5cecc4dd1a19463f63cfe7350458094($context, $indent, $value);
        $value = $context->findDot('arialabels.paginationnavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-item="pagedcontentnavigationitem, core"
';
        }
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        $buffer .= $this->section6be821101fa7e13a75fd10f4d39cd3a9($context, $indent, $value);
        $value = $context->findDot('arialabels.paginationactivenavitemcomponents');
        if (empty($value)) {
            
            $buffer .= $indent . '            data-aria-label-components-pagination-active-item="pagedcontentnavigationactiveitem, core"
';
        }
        $value = $context->find('barsize');
        $buffer .= $this->section99a5fb4ef1cc25e5a5a7c60a23920926($context, $indent, $value);
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="pagination mb-0">
';
        $value = $context->find('previous');
        $buffer .= $this->section8473dbacc2d94fc09c57202233b766af($context, $indent, $value);
        $value = $context->find('first');
        $buffer .= $this->section50a32b3cf33e2421d934aa9fbad855d6($context, $indent, $value);
        $value = $context->find('barsize');
        $buffer .= $this->sectionDd66affeb6ee238cc31ca8dab53b6fc7($context, $indent, $value);
        $value = $context->find('pages');
        $buffer .= $this->section1b35e6efa167f39dda3c160912c82289($context, $indent, $value);
        $value = $context->find('barsize');
        $buffer .= $this->sectionEf47b5942c72871a02a6a64083befb01($context, $indent, $value);
        $value = $context->find('last');
        $buffer .= $this->section272473272782a67aa5d12cd1dc99542d($context, $indent, $value);
        $value = $context->find('next');
        $buffer .= $this->section488e24ef3caf84a8906e5f297aa7f299($context, $indent, $value);
        $buffer .= '        </ul>
';
        $buffer .= $indent . '    </nav>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCcd25cc1479e8bb63945e84015765508(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section061c21bd6c4c7c5f9d61c256abcc3567(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        aria-label="{{.}}"
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section796b182c855d7b48f08d0295b8450703(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' all, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' all, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section769f2d943ce1a416c9b06bbb544f3649(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $value = $context->find('value');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4372eb33fa5ee8f8402ede243f4fd53b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('active');
                $buffer .= $this->section769f2d943ce1a416c9b06bbb544f3649($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6113b9f16c85e7a79b6accdc9b9fddb7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}{{/itemsperpage}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagedcontentpagingbaritemsperpage, core, ';
                $value = $context->find('itemsperpage');
                $buffer .= $this->section4372eb33fa5ee8f8402ede243f4fd53b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a00fcef008ae202462ede6db8fde452(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('value');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23e41fc6ed60655014e1e939e071ada4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#active}}
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        {{/active}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('active');
                $buffer .= $this->section0a00fcef008ae202462ede6db8fde452($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6cce4e780c7f4deac974e8ffccf5902(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        data-active-item-button-aria-label-components="{{.}}"
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        data-active-item-button-aria-label-components="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
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

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1752b1202091be29c63aa6816b3ec442(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a
                            class="dropdown-item {{#active}}active{{/active}}"
                            href="#"
                            data-limit="{{value}}"
                            role="menuitem"
                            {{#active}}aria-current="true"{{/active}}
                        >
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a
';
                $buffer .= $indent . '                            class="dropdown-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                            href="#"
';
                $buffer .= $indent . '                            data-limit="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                            role="menuitem"
';
                $buffer .= $indent . '                            ';
                $value = $context->find('active');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            ';
                $value = $context->find('value');
                $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('value');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->section796b182c855d7b48f08d0295b8450703($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ad3e554960559a16a621d8dc234ae78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div
            id="paging-control-limit-container-{{uniqid}}"
            data-region="paging-control-limit-container"
            class="d-inline-flex align-items-center"
        >
            <span class="me-1">{{#str}} show {{/str}}</span>
            <div class="btn-group">
                <button
                    type="button"
                    class="btn btn-outline-secondary dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-action="limit-toggle"
                    {{#arialabels.itemsperpage}}
                        aria-label="{{.}}"
                    {{/arialabels.itemsperpage}}
                    {{^arialabels.itemsperpage}}
                        aria-label="{{#str}} pagedcontentpagingbaritemsperpage, core, {{#itemsperpage}}{{#active}}{{#value}}{{.}}{{/value}}{{^value}}{{#str}} all, core {{/str}}{{/value}}{{/active}}{{/itemsperpage}}{{/str}}"
                    {{/arialabels.itemsperpage}}
                >
                    {{#itemsperpage}}
                        {{#active}}
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        {{/active}}
                    {{/itemsperpage}}
                </button>
                <div
                    role="menu"
                    class="dropdown-menu"
                    data-show-active-item
                    data-skip-active-class="true"
                    {{#arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="{{.}}"
                    {{/arialabels.itemsperpagecomponents}}
                    {{^arialabels.itemsperpagecomponents}}
                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
                    {{/arialabels.itemsperpagecomponents}}
                >
                    {{#itemsperpage}}
                        <a
                            class="dropdown-item {{#active}}active{{/active}}"
                            href="#"
                            data-limit="{{value}}"
                            role="menuitem"
                            {{#active}}aria-current="true"{{/active}}
                        >
                            {{#value}}{{.}}{{/value}}
                            {{^value}}{{#str}} all, core {{/str}}{{/value}}
                        </a>
                    {{/itemsperpage}}
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
                
                $buffer .= $indent . '        <div
';
                $buffer .= $indent . '            id="paging-control-limit-container-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '            data-region="paging-control-limit-container"
';
                $buffer .= $indent . '            class="d-inline-flex align-items-center"
';
                $buffer .= $indent . '        >
';
                $buffer .= $indent . '            <span class="me-1">';
                $value = $context->find('str');
                $buffer .= $this->sectionCcd25cc1479e8bb63945e84015765508($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            <div class="btn-group">
';
                $buffer .= $indent . '                <button
';
                $buffer .= $indent . '                    type="button"
';
                $buffer .= $indent . '                    class="btn btn-outline-secondary dropdown-toggle"
';
                $buffer .= $indent . '                    data-bs-toggle="dropdown"
';
                $buffer .= $indent . '                    aria-haspopup="true"
';
                $buffer .= $indent . '                    aria-expanded="false"
';
                $buffer .= $indent . '                    data-action="limit-toggle"
';
                $value = $context->findDot('arialabels.itemsperpage');
                $buffer .= $this->section061c21bd6c4c7c5f9d61c256abcc3567($context, $indent, $value);
                $value = $context->findDot('arialabels.itemsperpage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section6113b9f16c85e7a79b6accdc9b9fddb7($context, $indent, $value);
                    $buffer .= '"
';
                }
                $buffer .= $indent . '                >
';
                $value = $context->find('itemsperpage');
                $buffer .= $this->section23e41fc6ed60655014e1e939e071ada4($context, $indent, $value);
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <div
';
                $buffer .= $indent . '                    role="menu"
';
                $buffer .= $indent . '                    class="dropdown-menu"
';
                $buffer .= $indent . '                    data-show-active-item
';
                $buffer .= $indent . '                    data-skip-active-class="true"
';
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                $buffer .= $this->sectionE6cce4e780c7f4deac974e8ffccf5902($context, $indent, $value);
                $value = $context->findDot('arialabels.itemsperpagecomponents');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        data-active-item-button-aria-label-components="pagedcontentpagingbaritemsperpage, core"
';
                }
                $buffer .= $indent . '                >
';
                $value = $context->find('itemsperpage');
                $buffer .= $this->section1752b1202091be29c63aa6816b3ec442($context, $indent, $value);
                $buffer .= $indent . '                </div>
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

    private function sectionC4e57b3481c6a21b9041c8630595e768(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ms-auto';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ms-auto';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fd8343e4731c94d1f86be5a7cad6df9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-active-page-number="{{.}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-active-page-number="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12b7fe3de9a1560c6403efa1ed5cc6b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                data-items-per-page="{{value}}"
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                data-items-per-page="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4358877d9eb684c7eadd3782fbbd3f90(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#active}}
                data-items-per-page="{{value}}"
            {{/active}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('active');
                $buffer .= $this->section12b7fe3de9a1560c6403efa1ed5cc6b7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b6254eb0f3ef8dd9bb7b524e40f8948(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            aria-label="{{.}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3b9fe4a96cf8bd9421e25e08601e058(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pagedcontentnavigation, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pagedcontentnavigation, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5cecc4dd1a19463f63cfe7350458094(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-item="{{.}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-aria-label-components-pagination-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6be821101fa7e13a75fd10f4d39cd3a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-aria-label-components-pagination-active-item="{{.}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-aria-label-components-pagination-active-item="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99a5fb4ef1cc25e5a5a7c60a23920926(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            data-bar-size="{{.}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            data-bar-size="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfade9c496d43a5145d6862c92c5313f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previouspage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previouspage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e443b3f3fc6a26f93a9c6994805b986(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/previous, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/previous, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa462c4f96b5089cd26ce12c5added68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/next, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/next, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8473dbacc2d94fc09c57202233b766af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}previouspage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">{{#pix}} i/previous, core {{/pix}}</span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">{{#pix}} i/next, core {{/pix}}</span>
                    {{/item-content}}
                    {{$attributes}}data-control="previous"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'blockE74d1b54dda7be2b574b663b7b727a58'),
                        'item-content' => array($this, 'block2130e098d98d72daaa68b30ff0e55b8a'),
                        'attributes' => array($this, 'block12120e4d0151c4806def3156af195371'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa7f34f9d00bf2567ce32dadda211cb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firstpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03d2c990698604a1f6c30efea4dea793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'first';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'first';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50a32b3cf33e2421d934aa9fbad855d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}firstpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        {{#str}}first{{/str}}
                    {{/item-content}}
                    {{$attributes}}data-control="first"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block3b478271592c53349013112fbd417bbf'),
                        'item-content' => array($this, 'block7c523ebf8631cce0ab8fe37a1b8c4cd1'),
                        'attributes' => array($this, 'blockCbc4a7430da26319add789cf520478eb'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd66affeb6ee238cc31ca8dab53b6fc7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-hidden="true"{{/linkattributes}}
                    {{$item-content}}
                        &hellip;
                    {{/item-content}}
                    {{$attributes}}data-dots="beginning"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block2e11d5705ef0636f4ee11e710a02c615'),
                        'item-content' => array($this, 'blockD79fe6c41eaae5531d1e19774571315c'),
                        'attributes' => array($this, 'block84c9c68d0243c1a0fad6a2c4622f8301'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b35e6efa167f39dda3c160912c82289(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$attributes}}data-page="true"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'attributes' => array($this, 'block05f529f34933f2c86559b32975b81c54'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf47b5942c72871a02a6a64083befb01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-hidden="true"{{/linkattributes}}
                    {{$item-content}}
                        &hellip;
                    {{/item-content}}
                    {{$attributes}}data-dots="ending"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block2e11d5705ef0636f4ee11e710a02c615'),
                        'item-content' => array($this, 'blockD79fe6c41eaae5531d1e19774571315c'),
                        'attributes' => array($this, 'block43fbef7eed3d1d713cc79dcab37b14c2'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE26f1921139fcd288aab8f946b2ddbe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastpage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'lastpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section484651457d3987d348fb573f16f6422e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'last';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'last';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section272473272782a67aa5d12cd1dc99542d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}lastpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        {{#str}}last{{/str}}
                    {{/item-content}}
                    {{$attributes}}data-control="last"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'blockF22049d41622ea6ef3b96d9fd241a585'),
                        'item-content' => array($this, 'blockF2b49d33b374b380d9f70d98b88aeeb7'),
                        'attributes' => array($this, 'block76ecf06374cb515b4027dd1680730b5e'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section778db60ffc27f215bfe33103b727aa02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nextpage';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nextpage';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section488e24ef3caf84a8906e5f297aa7f299(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{< core/paged_content_paging_bar_item }}
                    {{$linkattributes}}aria-label="{{#str}}nextpage{{/str}}"{{/linkattributes}}
                    {{$item-content}}
                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">{{#pix}} i/next, core {{/pix}}</span>
                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">{{#pix}} i/previous, core {{/pix}}</span>
                    {{/item-content}}
                    {{$attributes}}data-control="next"{{/attributes}}
                {{/ core/paged_content_paging_bar_item }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                if ($parent = $this->mustache->loadPartial('core/paged_content_paging_bar_item')) {
                    $context->pushBlockContext(array(
                        'linkattributes' => array($this, 'block399d72298f8360a3108acafd248e57e5'),
                        'item-content' => array($this, 'block9d5d25581d103d1521c32454b507b028'),
                        'attributes' => array($this, 'block6b9932538b9a38e61842fc27de1eab11'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockE74d1b54dda7be2b574b663b7b727a58($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionFfade9c496d43a5145d6862c92c5313f($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block2130e098d98d72daaa68b30ff0e55b8a($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">';
        $value = $context->find('pix');
        $buffer .= $this->section5e443b3f3fc6a26f93a9c6994805b986($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">';
        $value = $context->find('pix');
        $buffer .= $this->sectionDa462c4f96b5089cd26ce12c5added68($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block12120e4d0151c4806def3156af195371($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="previous"';
    
        return $buffer;
    }

    public function block3b478271592c53349013112fbd417bbf($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionBa7f34f9d00bf2567ce32dadda211cb6($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block7c523ebf8631cce0ab8fe37a1b8c4cd1($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        ';
        $value = $context->find('str');
        $buffer .= $this->section03d2c990698604a1f6c30efea4dea793($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function blockCbc4a7430da26319add789cf520478eb($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="first"';
    
        return $buffer;
    }

    public function block2e11d5705ef0636f4ee11e710a02c615($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-hidden="true"';
    
        return $buffer;
    }

    public function blockD79fe6c41eaae5531d1e19774571315c($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        &hellip;
';
    
        return $buffer;
    }

    public function block84c9c68d0243c1a0fad6a2c4622f8301($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-dots="beginning"';
    
        return $buffer;
    }

    public function block05f529f34933f2c86559b32975b81c54($context)
    {
        $indent = $buffer = '';
        $buffer .= 'data-page="true"';
    
        return $buffer;
    }

    public function block43fbef7eed3d1d713cc79dcab37b14c2($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-dots="ending"';
    
        return $buffer;
    }

    public function blockF22049d41622ea6ef3b96d9fd241a585($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionE26f1921139fcd288aab8f946b2ddbe9($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockF2b49d33b374b380d9f70d98b88aeeb7($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        ';
        $value = $context->find('str');
        $buffer .= $this->section484651457d3987d348fb573f16f6422e($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block76ecf06374cb515b4027dd1680730b5e($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="last"';
    
        return $buffer;
    }

    public function block399d72298f8360a3108acafd248e57e5($context)
    {
        $indent = $buffer = '';
        $buffer .= 'aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section778db60ffc27f215bfe33103b727aa02($context, $indent, $value);
        $buffer .= '"';
    
        return $buffer;
    }

    public function block9d5d25581d103d1521c32454b507b028($context)
    {
        $indent = $buffer = '';
        $buffer .= '                        <span class="icon-no-margin dir-rtl-hide" aria-hidden="true">';
        $value = $context->find('pix');
        $buffer .= $this->sectionDa462c4f96b5089cd26ce12c5added68($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <span class="icon-no-margin dir-ltr-hide" aria-hidden="true">';
        $value = $context->find('pix');
        $buffer .= $this->section5e443b3f3fc6a26f93a9c6994805b986($context, $indent, $value);
        $buffer .= '</span>
';
    
        return $buffer;
    }

    public function block6b9932538b9a38e61842fc27de1eab11($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'data-control="next"';
    
        return $buffer;
    }
}
