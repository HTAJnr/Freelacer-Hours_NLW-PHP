<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class ArrangePositions
{
    public static function run(int $id)
    {
        DB::update("
            update proposals
            set position = (
                select p from (
                    select id, row_number() over(order by hours ASC) as p
                    from proposals
                    where project_id = :project
                ) as RankedProposals
                where proposals.id = RankedProposals.id
            )
            where project_id = :project
        ", ['project' => $id]);
    }
}

