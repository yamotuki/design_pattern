<?php

namespace Visitor_pattern;

interface Element
{
    public function accept(Visitor $visitor);
}