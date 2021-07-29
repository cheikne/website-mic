<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_deconnecter;
use App\Models\nombreUserLogout;
use App\Models\User;
use \Carbon\Carbon;
class UserLogoutController extends Controller
{   
    // public $compteur=0;
    public function UserLogoutRecent(Request $req){
        $index1=0;$index2=0;
        $compteur = $req->input('compteur');
        $is_recharge = $req->input('is_recharge');
        $tablelogut = new user_deconnecter();
        // $heure = 90;
         $user  = $tablelogut->where('bool',1)->get();
         // $nbreEnregist = nombreUserLogout::where('id',1)->first();
         $str = $req->input('nbreEnregist');
         // echo "L'heure courante est :". Carbon::now()."<br>";
                // echo "3 nmbre gggggg".$req->input('nbreEnregist')."<br>";
                // echo "3 nmbre gggggg".$is_recharge."<br>";
         $ephemere = $user;
          $bool = 'oui';
          $heureCurrent = Carbon::now();
          $getheureCur = explode(" ",$heureCurrent);
          $getOnlyheure = explode(":",$getheureCur[1]);
          $time = $getOnlyheure[0]+1 .":". $getOnlyheure[1] .":"."00";
          // echo "Heure courante est :".$time."<br>";
         foreach($ephemere as $response){
            if($time ==$response->delai and $response->is_finish=="non"){
                user_deconnecter::where('id_user',$response->id_user)->update(['is_finish' => $bool]);
                $is_recharge ="oui";
            }
         }
          $compte =count($user);
           // nombreUserLogout::where('id',1)->update(['nombreUser' => $compte]);
                // echo "egal nmbre gggggg".$str."<br>";
                // echo "egal nmbre gggggg".$compte."<br>";
         if($is_recharge =="non"){
                // echo "1 nmbre gggggg".$nbreEnregist;
                if($str == count($user)){
                    return "egaux";
                }
                else if($str < count($user)){
                // echo "sup nmbre gggggg".$str."<br>";
                    return "sup";
                }
                else
                    return "inf";
         }
          // nombreUserLogout::where('id',1)->update(['nombreUser' => $compte]);
        // foreach($ephemere as $value){
        //     $index1++;
        // }



        // if($index1 ==  $str and $compteur !=0){
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
        //             $ephemere = $user;
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
        // $this->ancienData = clone($user);
         // echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh".$this->ancienData;
    // }
    // else{
             $pagination =1;
             $j =1;
             $compteNbrli=0;
             $compteNbrPaginat=0;
             // echo "Le nombre d;element est :".count($user);s
             echo "<div id='replaceContent'></div>";
             echo " <ul class='sortable-list taskList list-unstyled ui-sortable' id='upcoming'>";
                $ephemere =$user;
                 // echo "Heure courante est :".$time."<br>";
            foreach($ephemere as $response){
                    // echo "delai terminer ".$time;
                    // echo "delai terminer ".$response->delai;
                $user_name = User::where('id',$response->id_user)->first();
                // $getheurebd = explode(":",$response->heure);
                if($response->is_finish =='non'){
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
                                    <a href=' class='text-muted'><img src='https://bootdey.com/img/Content/avatar/avatar1.png' alt='task-user' class='thumb-sm rounded-circle mr-2'> <span class='font-bold font-secondary'>{$user_name->name}</span></a>
                                </p>
                            </div>
                        </li><br>
                    ";
                    $compteNbrli++;
                    $compteNbrPaginat = $pagination;
                    if($pagination==6){
                        echo "</div>";
                        $j++;
                        $compteNbrli=0;
                    }
                    ++$pagination;
                    if($pagination==7){
                        $compteNbrPaginat=$pagination;
                        $pagination=1;
                    }
                }
                $index2++;
            }
             if($compteNbrPaginat-1 !=6){
                // if($compteNbrPaginat==2){
                //      echo "<br><br><br><br><br><br>";
                // }else if($compteNbrPaginat==1){
                //      echo "<br><br><br>";
                // }
                 if($compteNbrli ==5)
                     echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
                 else if($compteNbrli ==4)
                     echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                 else if($compteNbrli ==3)
                        echo "<br><br><br><br><br><br><br><br><br><br><br><br>><br><br><br><br><br><br><br><br><br><br><br>";
                else if($compteNbrli ==2)
                    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                else if($compteNbrli==1)
                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                echo "</div>";
            }else if($compteNbrPaginat-1==6){
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
            // $compte =count($user);
            echo "<div id='nbrEnr' onclick='getNombreEnregistrem({$compte})'></div>";
            // echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh".$index1."djdjddjd".$index2;
    // }

    }
}