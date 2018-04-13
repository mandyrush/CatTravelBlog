<?php

if (!function_exists('ctb_paginate_page_totals')) {
    function ctb_paginate_page_totals($paginator)
    {
        return 'Showing ' . (((int) $paginator->currentpage() - 1) * (int) $paginator->perpage() + 1)
                .' to ' . $paginator->currentpage() * $paginator->perpage()
                .' of ' . $paginator->total().' entries';
    }
}