<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\activite_recentes;
use App\Models\User;

class activiteController extends Controller
{
    public function getActiviteRecente(){
        $i=1;$j=1;$compteNbrli=1;$pagination=1;$k=1;$compteNbrPaginat=0;$check=true;
        $user = User::get();
        echo "<ul class='sortable-list taskList list-unstyled ui-sortable' id='upcoming'>";
        foreach($user as $response){
            $data = activite_recentes::where('id_user',$response->id)->get();
              if($pagination==1 and $k>1 and $check){
                     echo "<div id='pag{$k}' style='display:none;'>";
                     $check = false;
                }
                else if($pagination==1 and $check)
                    echo "<div id='pag{$k}' style='display:block;'>";
         foreach($data as $textEditer){
            if($i==1 and ($textEditer->bool==1 or $textEditer->bool==0)){
             echo "
                <li class='task-warning ui-sortable-handle' id='task1'>
                    <div class='clearfix'></div>
                    <div class='mt-3'>
                        <p class='float-right mb-0 mt-2'>
                            <button type='button' class='btn btn-success btn-sm waves-effect waves-light'>A Modifé {$textEditer->heure}</button>
                    </p>
                <p class='mb-0'>
                    <a href='#'
                     class='text-muted'><img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='task-user' class='thumb-sm rounded-circle mr-2'> <span class='font-bold font-secondary'>{$response->name}</span></a>
                </p><br>";
                echo "<div class='d-flex flex-wrap align-content-start bg-light'>";
                $j=0;

            }
            if($j ==0) {
                echo "
                <div class='p-2 border'><a href='{$textEditer->url}'>{$textEditer->titre}</a></div><br>";
                $i=0;

            }
        }
            if($i !=1){
                echo   "</div>
                    </div>
                    </li>";
                $i=1;
                $j=1;
            $check=true;
            $compteNbrli++;
            $compteNbrPaginat = $pagination;
            if($pagination==2){
                echo "</div>";
                $k++;
            }
            ++$pagination;
            if($pagination==3){
                $compteNbrPaginat=$pagination;
                $pagination=1;
            }
        }
    }

         if($compteNbrPaginat-1 !=2){
            if($compteNbrPaginat==1){
                 echo "<br><br><br><br><br><br>";
            }
            echo "</div>";
        }else if($compteNbrPaginat-1==2){
            $k--;
            echo "<br><br><br>";
        }
        echo "</ul><br>";
        if($k>1){
            echo "<ul class='pagination'>";
            for($index=1;$index<=$k;$index++){
                echo "
                    <li class='page-item'><button class='page-link' id='page{$index}'  onclick='paginationActivite({$index},this.id,{$k})'>{$index}</button></li>";
            }
            echo "</ul><br>";
        }
        if($compteNbrli ==1)
            echo "<br><br><br><br><br><br>";
    }
}
