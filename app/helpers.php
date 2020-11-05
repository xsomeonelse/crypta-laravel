<?php

function setActive($routeName)
{
return request()->routeIs($routeName) ? 'active menu_item' : '';
}