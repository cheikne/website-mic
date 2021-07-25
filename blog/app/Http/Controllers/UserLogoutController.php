<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_deconnecter;
use \Carbon\Carbon;
class UserLogoutController extends Controller
{   
    public $ancienData='val_initial';
    public $user;
    // public $compteur=0;
    public function UserLogoutRecent(Request $req){
        $index1=0;$index2=0;
        $compteur = $req->input('compteur');
        $is_recharge = $req->input('is_recharge');
        $tablelogut = new user_deconnecter();
         $this->user  = $tablelogut->join('users','users.id','=','user_deconnecters.id_user')->where('bool',1)->get();
                // echo "3 nmbre gggggg".$req->input('nbreEnregist')."<br>";
                // echo "3 nmbre gggggg".$is_recharge."<br>";
         $ephemere = $this->user;
         if($is_recharge =="non"){
             if($req->input('nbreEnregist') !=-1){
                // echo "1 nmbre gggggg".$req->input('nbreEnregist');
                if($req->input('nbreEnregist') == count($this->user)){
                // echo "egal nmbre gggggg".$req->input('nbreEnregist')."<br>";
                    return "egaux";
                }
                else if($req->input('nbreEnregist') < count($this->user)){
                // echo "sup nmbre gggggg".$req->input('nbreEnregist')."<br>";
                    return "sup";
                }
                else
                    return "inf";
             }
         }
          $compte =count($this->user);
        // foreach($ephemere as $value){
        //     $index1++;
        // }



        // if($index1 ==  $req->input('nbreEnregist') and $compteur !=0){
        //     return "rien_a_charger";
        // }
        // else if($index1 != $req->input('nbreEnregist') and $compteur !=0){
        //     if($is_recharge=='non'){
        //      return 'estConfirme';
        //     }
        //     else{
        //          $pagination =1;
        //          $j =1;
        //          $compteNbrli=0;
        //          $compteNbrPaginat=0;
        //          echo "<div id='replaceContent'></div>";
        //          echo " <   ul class='sortable-list taskList list-unstyled ui-sortable' id='upcoming'>";
        //             $heureCurrent = Carbon::now();
        //             $getheureCur = explode(" ",$heureCurrent);
        //             $getOnlyheure = explode(":",$getheureCur[1]);
        //             $ephemere = $this->user;
        //         foreach($ephemere as $response){
        //             $getheurebd = explode(":",$response->heure);
        //             if($getOnlyheure[0] - $getheurebd[0] ==-1){
        //                 if($pagination==1 and $j>1){
        //                      echo "<div id='{$j}' style='display:none;'>";
        //                 }
        //                 else if($pagination==1 )
        //                     echo "<div id='{$j}' style='display:block;'>";
        //                 echo "
        //                      <li class='task-warning ui-sortable-handle' id='task1'>
        //                         <div class='clearfix'></div>
        //                         <div class='mt-3'>
        //                             <p class='float-right mb-0 mt-2'>
        //                                 <button type='button' class='btn btn-success btn-sm waves-effect waves-light'>En ligne 
        //                                 {$response->heure}</button>
        //                             </p>
        //                             <p class='mb-0'>
        //                                 <a href=' class='text-muted'><img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='task-user' class='thumb-sm rounded-circle mr-2'> <span class='font-bold font-secondary'>{$response->name}</span></a>
        //                             </p>
        //                         </div>
        //                     </li><br>
        //                 ";
        //                 $compteNbrli++;
        //                 $compteNbrPaginat = $pagination;
        //                 if($pagination==3){
        //                     echo "</div>";
        //                     $j++;
        //                     $compteNbrli=0;
        //                 }
        //                 ++$pagination;
        //                 if($pagination==4){
        //                     $compteNbrPaginat=$pagination;
        //                     $pagination=1;
        //                 }
        //             $index2++;
        //             }
        //         }
        //          if($compteNbrPaginat-1 !=3){
        //             if($compteNbrPaginat==2){
        //                  echo "<br><br><br><br><br><br>";
        //             }else if($compteNbrPaginat==1){
        //                  echo "<br><br><br>";
        //             }
        //             echo "</div>";
        //         }else if($compteNbrPaginat-1==3){
        //             $j--;
        //             echo "<br><br>";
        //         }
        //         echo "</ul>";
        //         if($j>1){
        //             echo "<ul class='pagination'>";
        //             for($i=1;$i<=$j;$i++){
        //                 echo "
        //                     <li class='page-item'><button class='page-link' id='page{$i}'  onclick='pagination({$i},this.id,{$j})'>{$i}</button></li>";
        //             }
        //             echo "</ul>";
        //         }
        //         if($compteNbrli ==2)
        //             echo "<br><br><br><br><br><br>";
        //         if($compteNbrli==1)
        //             echo "<br><br><br><br><br><br><br><br><br>";
        //          echo "<div id='nbrEnr' onclick='getNombreEnregistrem({$index2})'></div>";
        // }
        // $this->ancienData = clone($this->user);
         // echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh".$this->ancienData;
    // }
    // else{
             $pagination =1;
             $j =1;
             $compteNbrli=0;
             $compteNbrPaginat=0;
             // echo "Le nombre d;element est :".count($this->user);s
             echo "<div id='replaceContent'></div>";
             echo " <ul class='sortable-list taskList list-unstyled ui-sortable' id='upcoming'>";
                $heureCurrent = Carbon::now();
                $getheureCur = explode(" ",$heureCurrent);
                $getOnlyheure = explode(":",$getheureCur[1]);
                $ephemere =$this->user;
            foreach($ephemere as $response){
                $getheurebd = explode(":",$response->heure);
                if($getOnlyheure[0] - $getheurebd[0] ==-1){
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
                        $compteNbrli=0;
                    }
                    ++$pagination;
                    if($pagination==4){
                        $compteNbrPaginat=$pagination;
                        $pagination=1;
                    }
                }
                $index2++;
            }
             if($compteNbrPaginat-1 !=3){
                // if($compteNbrPaginat==2){
                //      echo "<br><br><br><br><br><br>";
                // }else if($compteNbrPaginat==1){
                //      echo "<br><br><br>";
                // }
                 if($compteNbrli ==2)
                echo "<br><br><br><br><br><br>";
                if($compteNbrli==1)
                echo "<br><br><br><br><br><br><br><br><br><br><br>";
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
            $compte =count($this->user);
            echo "<div id='nbrEnr' onclick='getNombreEnregistrem({$compte})'></div>";
            // echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh".$index1."djdjddjd".$index2;
    // }

    }
}