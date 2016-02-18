<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use acessoSystem\Entities\User;

class UserService
{

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }

    public function search($search)
    {

        if (!empty($search)) {
            $users = $this->user->where('name', 'LIKE', '%' . $search . '%')
                ->whereIn('role', array('coach','admin'));

            if ($users->count() > 0) {
                return $users->paginate(5);
            } else {
                $users = $this->user->where('email', 'LIKE', '%' . $search . '%')
                    ->whereIn('role', array('coach','admin'));
                return $users->paginate(5);
            }
        }

    }
}
