<?php

/**
 * @return \TeachMe\Entities\User
 */
function currentUser()
{
    return auth()->user();
}