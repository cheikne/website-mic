<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_deconnecter;

class UserLogoutController extends Controller
{
    public function UserLogoutRecent(){
        $tablelogut = new user_deconnecter();
         $user  = $tablelogut->join('users','users.id','=','user_deconnecters.id_user')->where('bool',1)->get();
         $pagination =1;
         $j =1;
         $compteNbrli=0;
         $compteNbrPaginat=0;
         echo "<div id='replaceContent'></div>";
         echo " <ul class='sortable-list taskList list-unstyled ui-sortable' id='upcoming'>";
        foreach($user as $response){
            if($pagination==1 and $j>1){
                 echo "<div id='{$j}' style='display:none;'>";
            }
            else if($pagination==1 )
                echo "<div id='{$j}' style='display:block;'>";
            echo "
                 <li class='task-warning ui-sortable-handle' id='task1'>
                    <div class='clearfix'></div>
                    <div class='mt-3'>
                        <p class='float-right mb-0 mt-2'>
                            <button type='button' class='btn btn-success btn-sm waves-effect waves-light'>En ligne 
                            {$response->heure}</button>
                        </p>
                        <p class='mb-0'>
                            <a href=' class='text-muted'><img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='task-user' class='thumb-sm rounded-circle mr-2'> <span class='font-bold font-secondary'>{$response->name}</span></a>
                        </p>
                    </div>
                </li><br>
            ";
            $compteNbrli++;
            $compteNbrPaginat = $pagination;
            if($pagination==3){
                echo "</div>";
                $j++;
            }
            ++$pagination;
            if($pagination==4){
                $compteNbrPaginat=$pagination;
                $pagination=1;
            }
        }
         if($compteNbrPaginat-1 !=3){
            if($compteNbrPaginat==2){
                 echo "<br><br><br><br><br><br>";
            }else if($compteNbrPaginat==1){
                 echo "<br><br><br><br><br><br><br><br><br><br>";
            }
            echo "</div>";
        }else if($compteNbrPaginat-1==3){
            $j--;
            echo "<br><br>";
        }
        echo "</ul>";
        if($j>1){
            echo "<ul class='pagination'>";
            for($i=1;$i<=$j;$i++){
                echo "
                    <li class='page-item'><button class='page-link' id='page{$i}'  onclick='pagination({$i},this.id,{$j})'>{$i}</button></li>";
            }
            echo "</ul>";
        }
        if($compteNbrli ==2)
            echo "<br><br><br><br><br><br>";
        if($compteNbrli==1)
            echo "<br><br><br><br><br><br><br><br><br><br>";

    }
}
