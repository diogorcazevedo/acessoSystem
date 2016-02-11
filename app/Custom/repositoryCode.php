<?php

/* $source = $request->input('source');

if (!empty($source)) {
$contacts = $this->contact->where('name', '=', $source)
                     ->orWhere(function ($query) {
                         $query->where('name', 'LIKE', '%' . $source . '%')
                               ->where('status', '=', 0);
                     })
                     ->orWhere(function ($query) {
                         $query->where('email', 'LIKE', '%' . $source . '%')
                               ->where('status', '=', 0);
                     })
                     ->orWhere(function ($query) {
                         $query->where('cel', 'LIKE', '%' . $source . '%')
                               ->where('status', '=', 0);
                     })
                     ->orWhere(function ($query) {
                         $query->where('about', 'LIKE', '%' . $source . '%')
                               ->where('status', '=', 0);
                     })
                     ->paginate(5);

}




$contacts = $this->contact->where('name', 'LIKE', '%' . $search . '%')
    ->where('status', '=', 0)
    ->paginate(5);

if (!empty($contacts)) {
    return $contacts;
} else {

    $contacts = $this->contact->where('email', 'LIKE', '%' . $search . '%')
        ->where('status', '=', 0)
        ->paginate(5);

    if (!empty($contacts)) {
        return $contacts;
    } else {
        $contacts = $this->contact->where('about', 'LIKE', '%' . $search . '%')
            ->where('status', '=', 0)
            ->paginate(5);

        return $contacts;

    }

}

*/