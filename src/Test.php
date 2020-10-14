<?php
namespace KnowThat\Test;

use KnowThat\Facades\Test as TestFacade;

class Test
{
    public function index() {
        return TestFacade::index();
    }
}
