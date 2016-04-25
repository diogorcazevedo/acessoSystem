<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use acessoSystem\Entities\Entry;
use acessoSystem\Entities\User;
use acessoSystem\Repositories\ContactRepository;



class EntryService
{


    /**
     * @var Entry
     */
    private $entry;

    public function __construct(Entry $entry)
    {


        $this->entry = $entry;
    }


    public function searchIndex($id)
    {

        if (!empty($id)) {
            $entries = $this->entry->where('project_id', $id);
            if ($entries->count() > 0) {
                return $entries->paginate(5);
            }
        }
    }


    public function search($search,$id)
    {

        if (!empty($search)) {
            $entries = $this->entry->join('users', 'users.id', '=', 'entries.user_id')
                                        ->where('users.name', 'LIKE', '%' . $search . '%')
                                        ->where('project_id', '=', $id);
                if ($entries->count() > 0) {

                    return $entries->paginate(5);
                } else {

                    $entries = $this->entry->join('users', 'users.id', '=', 'entries.user_id')
                                            ->where('users.email', 'LIKE', '%' . $search . '%')
                                            ->where('project_id', '=', $id);
                    if ($entries->count() > 0) {
                        return $entries->paginate(5);
                    }
                }
            }
    }

}