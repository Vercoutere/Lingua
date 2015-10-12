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

    /**
     * Find a language by it's code.
     * @param   String    $code    ISO 639-1 code, for availlable codes check https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     * @returns Array    An array containing the language code, name and native name
     */
    function it_returns_a_language_array_by_code() {

        $language = $this->getLanguageByCode('za');
        $this->checkLanguageArray($language);
    }

    /**
     * Find a language by it's name.
     * @param   String   $name   The language name in English
     * @returns Array    An array containing the language code, name and native name
     */
    function it_returns_a_language_array_by_name() {

        $language = $this->getLanguageByName('Zhuang');
        $this->checkLanguageArray($language);
    }

    /**
     * Find a language by it's native name.
     * @param   String    $name    The language name in the corresponding language
     * @returns Array    An array containing the language code, name and native name
     */
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
