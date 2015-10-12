<?php

namespace spec\Lingua;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LanguageSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Lingua\Language');
    }

    function it_returns_a_language_array_by_code() {

        $language = $this->getLanguageByCode('za');
        $this->checkLanguageArray($language);
    }

    function it_returns_a_language_array_by_name() {

        $language = $this->getLanguageByName('Zhuang');
        $this->checkLanguageArray($language);
    }

    function it_returns_a_language_array_by_native_name() {

        $language = $this->getLanguageByNativeName('Vaƅcueŋƅ');
        $this->checkLanguageArray($language);
    }

    protected function checkLanguageArray($language) {

        $language->shouldHaveKeyWithValue('code', 'za');
        $language->shouldHaveKeyWithValue('name', 'Zhuang');
        $language->shouldHaveKeyWithValue('nativeName', 'Vaƅcueŋƅ');
    }
}
