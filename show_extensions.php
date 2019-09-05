#!/usr/bin/env php
<?php

$list=get_loaded_extensions();
sort($list, SORT_NATURAL | SORT_FLAG_CASE);
print_r($list);
