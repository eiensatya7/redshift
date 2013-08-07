<?php
interface UserRepoInterface{
/**
 * expects validated User object
 */
public function save(User $user);
}

?>